<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteConfigurations;
use Illuminate\Http\Request;

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
        $this->modal = new SiteConfigurations();
    }
    public function index()
    {
        $siteConfigurations = $this->modal->paginate(5);
        return view('admin.site_configuration.index', compact(['siteConfigurations']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteConfigurations  $siteConfigurations
     * @return \Illuminate\Http\Response
     */
    public function show(SiteConfigurations $siteConfigurations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteConfigurations  $siteConfigurations
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteConfigurations $siteConfigurations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteConfigurations  $siteConfigurations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteConfigurations $siteConfigurations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteConfigurations  $siteConfigurations
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteConfigurations $siteConfigurations)
    {
        //
    }
}
