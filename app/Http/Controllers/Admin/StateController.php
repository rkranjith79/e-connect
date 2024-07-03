<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Country;
use App\Models\State;

class StateController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'States';
        $this->pageData['name'] = 'State';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'states';
        $this->pageData['prefix_url'] = 'state';
        $this->modal = new State;
        $this->lookup = [
            ['id' => 'country_id', 'title' => 'Country', 'model' => new Country(), 'table' => 'countries', 'relationship' => 'country'],
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
