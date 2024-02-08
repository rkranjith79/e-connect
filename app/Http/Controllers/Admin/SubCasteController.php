<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caste;
use App\Models\SubCaste;
use App\Http\Controllers\Admin\Common\MasterController;

class SubCasteController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Sub Castes";
        $this->pageData['name'] = "Sub Caste";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "sub_castes";
        $this->pageData['prefix_url'] = "sub_caste";
        $this->modal = new SubCaste;
    }
}
