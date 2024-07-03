<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Weight;

class WeightController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Weights';
        $this->pageData['name'] = 'Weight';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'weights';
        $this->pageData['prefix_url'] = 'weight';
        $this->modal = new Weight;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
