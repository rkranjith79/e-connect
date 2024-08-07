<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\ParentStatus;

class ParentStatusController extends MasterController
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
        $this->pageData['title'] = 'Parent Statuses';
        $this->pageData['name'] = 'Parent Status';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'parent_statuses';
        $this->pageData['prefix_url'] = 'parent_status';
        $this->modal = new ParentStatus;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
