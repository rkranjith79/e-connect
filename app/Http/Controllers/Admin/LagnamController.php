<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lagnam;
use App\Http\Controllers\Admin\Common\MasterController;

class LagnamController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Lagnams";
        $this->pageData['name'] = "Lagnam";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "lagnams";
        $this->pageData['prefix_url'] = "lagnam";
        $this->modal = new Lagnam;
        $this->lookup = [
            ["id" => "language_tamil", "title" => trans('fields.' . $this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
