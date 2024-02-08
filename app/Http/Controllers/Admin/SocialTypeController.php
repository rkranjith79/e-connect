<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialType;
use App\Http\Controllers\Admin\Common\MasterController;

class SocialTypeController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Social Types";
        $this->pageData['name'] = "Social Type";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "social_types";
        $this->pageData['prefix_url'] = "social_type";
        $this->modal = new SocialType;
    }
}
