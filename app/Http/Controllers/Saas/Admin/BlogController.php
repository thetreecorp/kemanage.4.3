<?php

namespace App\Http\Controllers\Saas\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\FileManager;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $data['pageTitle'] = __("Blog ");
        $data['subBlogActiveClass'] = 'active';
        $data['blog'] = Blog::with('blogCategory')->get();
        $data['blogCategory'] = BlogCategory::where('status',ACTIVE)->get();
        return view('admin.frontend.blog.index', $data);
    }

    public function store(BlogRequest $request)
    {
        DB::beginTransaction();
        try {
            $id = $request->get('id', '');
            if ($id != '') {
                $blog = Blog::findOrFail($request->id);
            } else {
                $blog = new Blog();
            }
            if (Blog::where('slug', getSlug($request->title))->where('id', '!=', $id)->withTrashed()->count() > 0) {
                $slug = getSlug($request->title) . '-' . rand(100000, 999999);
            } else {
                $slug = getSlug($request->title);
            }

            $blog->title = $request->title;
            $blog->slug = $slug;
            $blog->details = $request->details;
            $blog->publish_date = $request->publish_date;
            $blog->blog_category_id = $request->blog_category_id;
            $blog->status = $request->status;
            $blog->save();

            /*File Manager Call upload*/
            if ($request->hasFile('image')) {
                $new_file = FileManager::where('origin_type', 'App\Models\Blog')->where('origin_id', $blog->id)->first();

                if ($new_file) {
                    $new_file->removeFile();
                    $upload = $new_file->updateUpload($new_file->id, 'Blog', $request->image);
                } else {
                    $new_file = new FileManager();
                    $upload = $new_file->upload('Blog', $request->image);
                }

                if ($upload['status']) {
                    $upload['file']->origin_id = $blog->id;
                    $upload['file']->origin_type = "App\Models\Blog";
                    $upload['file']->save();
                } else {
                    throw new Exception($upload['message']);
                }
            }
            /*End*/

            DB::commit();
            $message = $request->id ? __(UPDATED_SUCCESSFULLY) : __(CREATED_SUCCESSFULLY);
            return $this->success([], $message);
        } catch (Exception $e) {
            DB::rollBack();
            $message = getErrorMessage($e, $e->getMessage());
            return $this->error([],  $message);
        }
    }

    public function getInfo(Request $request)
    {
        return Blog::findOrFail($request->id);
    }

    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();
            return redirect()->back()->with('success', __(DELETED_SUCCESSFULLY));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __($e->getMessage()));
        }
    }
}
