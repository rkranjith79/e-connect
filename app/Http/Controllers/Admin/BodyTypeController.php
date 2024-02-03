<?php

namespace App\Http\Controllers\Admin;

use App\Models\BodyType;
use App\Http\Controllers\Admin\Common\MasterController;

class BodyTypeController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Body Types";
        $this->pageData['name'] = "Body Type";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "body_types";
        $this->pageData['prefix_url'] = "body_type";
        $this->modal = new BodyType;
    }
}
