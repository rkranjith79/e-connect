<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\RegisteredBy;

class RegisteredByController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Registered By';
        $this->pageData['name'] = 'Registered By';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'registered_bies';
        $this->pageData['prefix_url'] = 'registered_by';
        $this->modal = new RegisteredBy;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
