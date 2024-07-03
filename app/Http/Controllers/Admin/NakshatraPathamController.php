<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\NakshatraPatham;

class NakshatraPathamController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Nakshatra Pathams';
        $this->pageData['name'] = 'Nakshatra Patham';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'nakshatra_pathams';
        $this->pageData['prefix_url'] = 'nakshatra_patham';
        $this->modal = new NakshatraPatham();
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
