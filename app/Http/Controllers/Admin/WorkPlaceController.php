<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkPlace;
use App\Http\Controllers\Admin\Common\MasterController;

class WorkPlaceController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Work Places";
        $this->pageData['name'] = "Work Place";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "work_places";
        $this->pageData['prefix_url'] = "work_place";
        $this->modal = new WorkPlace;
    }
}
