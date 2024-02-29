<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\BirthDasa;
use App\Http\Controllers\Admin\Common\MasterController;

class BirthDasaController extends MasterController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Birth Dasas";
        $this->pageData['name'] = "Birth Dasa";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "birth_dasas";
        $this->pageData['prefix_url'] = "birth_dasa";
        $this->modal = new BirthDasa;
        $this->lookup = [
            ["id" => "language_tamil", "title" => trans('fields.' . $this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
