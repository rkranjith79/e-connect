<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Http\Controllers\Admin\Common\MasterController;

class WorkController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Works";
        $this->pageData['name'] = "Work";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "works";
        $this->pageData['prefix_url'] = "work";
        $this->modal = new Work;
    }
}
