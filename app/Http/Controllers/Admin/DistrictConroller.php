<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\District;

class DistrictConroller extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Districts";
        $this->pageData['name'] = "District";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "districts";
        $this->pageData['prefix_url'] = "district";
        $this->modal = new District();
    }
}
