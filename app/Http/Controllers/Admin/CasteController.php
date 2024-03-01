<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caste;
use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Religion;
use App\Models\SubCaste;

class CasteController extends MasterController
{
    public $pageData = [], $lookup = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Castes";
        $this->pageData['name'] = "Caste";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "castes";
        $this->pageData['prefix_url'] = "caste";
        //If Table and Model exists consider as select or else consider as textbox
        $this->lookup = [
            ["id" => "religion_id", "title" => "Religion", "model" => new Religion(), "table" => "religions", "relationship" => "religion"],
            ["id" => "language_tamil", "title" => trans('fields.' . $this->pageData['prefix_url'], [], 'ta')],
        ];
        $this->modal = new Caste;
    }
}
