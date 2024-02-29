<?php

namespace App\Http\Controllers\Admin;

use App\Models\PhysicalStatus;
use App\Http\Controllers\Admin\Common\MasterController;

class PhysicalStatusController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Physical Statuses";
        $this->pageData['name'] = "Physical Status";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "physical_statuses";
        $this->pageData['prefix_url'] = "physical_status";
        $this->modal = new PhysicalStatus;
        $this->lookup = [
            ["id" => "language_tamil", "title" => trans('fields.' . $this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
