<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Jathagam;
use App\Http\Controllers\Admin\Common\MasterController;

class JathagamController extends MasterController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Jathagams";
        $this->pageData['name'] = "Jathagam";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "jathagams";
        $this->pageData['prefix_url'] = "jathagam";
        $this->modal = new Jathagam;
    }
}
