<?php

namespace App\Http\Controllers\Admin;

use App\Models\Weight;
use App\Http\Controllers\Admin\Common\MasterController;

class WeightController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Weights";
        $this->pageData['name'] = "Weight";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "weights";
        $this->pageData['prefix_url'] = "weight";
        $this->modal = new Weight;
    }
}
