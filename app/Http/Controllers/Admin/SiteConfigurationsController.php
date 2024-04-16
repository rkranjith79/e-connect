<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteConfigurationsController extends Controller
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Site Configurations";
        $this->pageData['name'] = "Site Configuration";
        $this->pageData['view'] = "admin.site_configuration.index";
        $this->pageData['tables'] = "site_configurations";
        $this->pageData['prefix_url'] = "site_configuration";
        $this->modal = new SiteConfiguration();
    }
    public function index()
    {
        $modal_data = $this->modal->get();
        $page_data = $this->pageData;
        return view('admin.site_configuration.index', compact(['page_data', 'modal_data']));
    }

    public function create()
    {
        return view('admin.site_configuration.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        foreach ($input['label'] as $key => $value) {
            $label = $input['label'][$key];
            $code = $input['code'][$key];
            $attributes['value'] = $input['value'][$key];
            $this->modal->updateOrCreate(
                ['code' => $code],
                ['label' => $label, 'attributes' => $attributes]
            );
        }
        return redirect()->route('admin.site_configuration.index');
    }

    public function storeCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => ['required', 'max:255', 'unique:' . $this->pageData['tables']],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'errors' => $validator->messages(),
            ]);
        } else {
            SiteConfiguration::create([
                'label' => $request->code,
                'code' => $request->code,
                'attributes' => []
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Code Added Successfully',
            ]);
        }
    }

    public function show(SiteConfiguration $SiteConfigurations)
    {
        //
    }

    public function edit(SiteConfiguration $siteConfigurations)
    {
        //
    }

    public function update(Request $request, SiteConfiguration $siteConfigurations)
    {
        //
    }

    public function destroy(SiteConfiguration $siteConfigurations)
    {
        //
    }
}
