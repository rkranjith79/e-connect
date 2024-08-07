<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\RasiNavamsam;

class RasiNavamsamController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Rasi Navamsams';
        $this->pageData['name'] = 'Rasi Navamsam';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'rasi_navamsams';
        $this->pageData['prefix_url'] = 'rasi_navamsam';
        $this->modal = new RasiNavamsam;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
