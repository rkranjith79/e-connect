<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Education;
use App\Http\Controllers\Admin\Common\MasterController;

class EducationController extends MasterController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Educations";
        $this->pageData['name'] = "Education";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "educations";
        $this->pageData['prefix_url'] = "education";
        $this->modal = new Education;
    }
}
