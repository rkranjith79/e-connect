<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Gender;

class GenderController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Genders';
        $this->pageData['name'] = 'Gender';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'genders';
        $this->pageData['prefix_url'] = 'gender';
        $this->modal = new Gender;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
