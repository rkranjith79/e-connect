<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Country;

class CountryController extends MasterController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Countries';
        $this->pageData['name'] = 'Country';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'countries';
        $this->pageData['prefix_url'] = 'country';
        $this->modal = new Country;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
