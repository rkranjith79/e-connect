<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Jathagam;

class JathagamController extends MasterController
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
        $this->pageData['title'] = 'Jathagams';
        $this->pageData['name'] = 'Jathagam';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'jathagams';
        $this->pageData['prefix_url'] = 'jathagam';
        $this->modal = new Jathagam;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
