<?php

namespace App\Http\Controllers\Admin;

use App\Models\MaritalStatus;
use App\Http\Controllers\Admin\Common\MasterController;

class MaritalStatusController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Marital Statuses";
        $this->pageData['name'] = "Marital Status";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "marital_statuses";
        $this->pageData['prefix_url'] = "marital_status";
        $this->modal = new MaritalStatus;
        $this->lookup = [
            ["id" => "language_tamil", "title" => trans('fields.' . $this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
