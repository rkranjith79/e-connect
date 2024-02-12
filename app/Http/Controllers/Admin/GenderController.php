<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenderController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Genders";
        $this->pageData['name'] = "Gender";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "genders";
        $this->pageData['prefix_url'] = "gender";
        $this->modal = new Gender;
    }
}
