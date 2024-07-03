<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\AssetsValue;

class AssetsValueController extends MasterController
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
        $this->pageData['title'] = 'Assets Values';
        $this->pageData['name'] = 'Assets Value';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'assets_values';
        $this->pageData['prefix_url'] = 'assets_value';
        $this->modal = new AssetsValue;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
