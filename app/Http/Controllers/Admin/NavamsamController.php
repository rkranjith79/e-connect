<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegisteredBy;;
use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Navamsam;

class NavamsamController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Navamsam";
        $this->pageData['name'] = "Navamsam";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "navamsams";
        $this->pageData['prefix_url'] = "navamsam";
        $this->modal = new Navamsam();
        $this->lookup = [
            ["id" => "language_tamil", "title" => trans('fields.' . $this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
