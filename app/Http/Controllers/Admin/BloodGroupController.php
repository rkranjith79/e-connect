<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\BloodGroup;

class BloodGroupController extends MasterController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Blood Groups';
        $this->pageData['name'] = 'Blood Group';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'blood_groups';
        $this->pageData['prefix_url'] = 'blood_group';
        $this->modal = new BloodGroup;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
