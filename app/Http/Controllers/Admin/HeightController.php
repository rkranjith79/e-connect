<?php

namespace App\Http\Controllers\Admin;

use App\Models\Height;
use App\Http\Controllers\Admin\Common\MasterController;

class HeightController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Heights";
        $this->pageData['name'] = "Height";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "heights";
        $this->pageData['prefix_url'] = "height";
        $this->modal = new Height;
    }
}
