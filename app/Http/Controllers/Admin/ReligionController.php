<?php

namespace App\Http\Controllers\Admin;

use App\Models\Religion;
use App\Http\Controllers\Admin\Common\MasterController;

class ReligionController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Religions";
        $this->pageData['name'] = "Religion";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "religions";
        $this->pageData['prefix_url'] = "religion";
        $this->modal = new Religion;
        $this->lookup = [
            ["id" => "language_tamil", "title" => trans('fields.' . $this->pageData['prefix_url'], [], 'ta')],
        ];
    }

}
