<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Expectation;

class ExpectationController extends MasterController
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
        $this->pageData['title'] = 'Expections';
        $this->pageData['name'] = 'Expection';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'expections';
        $this->pageData['prefix_url'] = 'expection';
        $this->modal = new Expectation;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
