<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Http\Controllers\Admin\Common\MasterController;

class StateController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "States";
        $this->pageData['name'] = "State";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "states";
        $this->pageData['prefix_url'] = "state";
        $this->modal = new State;
    }
}
