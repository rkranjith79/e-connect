<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParentStatus;
use App\Http\Controllers\Admin\Common\MasterController;

class ParentStatusController extends MasterController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Parent Statuses";
        $this->pageData['name'] = "Parent Status";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "parent_statuses";
        $this->pageData['prefix_url'] = "parent_status";
        $this->modal = new ParentStatus;
    }
}
