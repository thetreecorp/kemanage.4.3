<?php

namespace App\Http\Controllers\Saas\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\OwnerPackage;
use App\Services\GatewayService;
use App\Services\OwnerService;
use App\Services\PackageService;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    use ResponseTrait;
    public $packageService;

    public function __construct()
    {
        $this->packageService = new PackageService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->packageService->getAllData($request);
        } else {
            $data['pageTitle'] = __('All Packages');
            return view('admin.packages.index', $data);
        }
    }

    public function store(PackageRequest $request)
    {
        return $this->packageService->store($request);
    }

    public function getInfo(Request $request)
    {
        $data = $this->packageService->getInfo($request->id);
        return $this->success($data);
    }

    public function destroy($id)
    {
        return $this->packageService->destroy($id);
    }

    public function ownerPackage(Request $request)
    {
        if ($request->ajax()) {
            return $this->packageService->getUserPackagesData($request);
        } else {
            $data['pageTitle'] = __('Owner Packages');
            $ownerService = new OwnerService;
            $data['owners'] = $ownerService->getAll();
            $data['packages'] = $this->packageService->getAll();
            $gatewayService = new GatewayService;
            $data['gateways'] = $gatewayService->getAll();
            return view('admin.packages.owner', $data);
        }
    }

    public function getInfoPackage(Request $request){
        $userPackages = OwnerPackage::findOrfail($request->id);
        return$userPackages;
    }

    public function ownerPackagesStatusUpdate(Request $request)
    {
        try {
            $ownerPackage = OwnerPackage::findOrFail($request->id);
            $ownerPackage->status = $request->status;
            $ownerPackage->save();
            return $this->success([], __(UPDATED_SUCCESSFULLY));
        } catch (Exception $e) {
            $message = getErrorMessage($e, $e->getMessage());
            return $this->error([], $message);
        }
    }
    public function assignPackage(Request $request)
    {
        return $this->packageService->assignPackage($request);
    }
}
