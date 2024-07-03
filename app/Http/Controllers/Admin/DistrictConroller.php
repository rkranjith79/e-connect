<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\District;
use App\Models\State;

class DistrictConroller extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Districts';
        $this->pageData['name'] = 'District';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'districts';
        $this->pageData['prefix_url'] = 'district';
        $this->modal = new District();
        $this->lookup = [
            ['id' => 'state_id', 'title' => 'State', 'model' => new State(), 'table' => 'states', 'relationship' => 'state'],
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
