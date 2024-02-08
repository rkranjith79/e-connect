<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caste;
use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Religion;

class CasteController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Castes";
        $this->pageData['name'] = "Caste";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "castes";
        $this->pageData['prefix_url'] = "caste";
        $this->pageData['lookup'][] = ["id" => "religion_id", "title" => "Religion", "model" => new Religion(), "table" => "religions"];
        $this->modal = new Caste;
    }
}
