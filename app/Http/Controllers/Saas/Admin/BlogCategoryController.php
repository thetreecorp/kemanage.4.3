<?php

namespace App\Http\Controllers\Saas\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCategoryRequest;
use App\Models\BlogCategory;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogCategoryController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $data['pageTitle'] = __("Blog Category");
        $data['subBlogCategoryActiveClass'] = 'active';
        $data['blogCategory'] = BlogCategory::all();
        return view('admin.frontend.blog.categories.index', $data);
    }

    public function store(BlogCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $id = $request->get('id', '');
            if ($id != '') {
                $blogCategory = BlogCategory::findOrFail($request->id);
            } else {
                $blogCategory = new BlogCategory();
            }
            if (BlogCategory::where('slug', getSlug($request->name))->where('id', '!=', $id)->withTrashed()->count() > 0) {
                $slug = getSlug($request->name) . '-' . rand(100000, 999999);
            } else {
                $slug = getSlug($request->name);
            }

            $blogCategory->name = $request->name;
            $blogCategory->slug = $slug;
            $blogCategory->status = $request->status;
            $blogCategory->save();

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
        return BlogCategory::findOrFail($request->id);
    }

    public function destroy($id)
    {
        try {
            $blogCategory = BlogCategory::findOrFail($id);
            $blogCategory->delete();
            return redirect()->back()->with('success', __(DELETED_SUCCESSFULLY));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __($e->getMessage()));
        }
    }
}
