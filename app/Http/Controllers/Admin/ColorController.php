<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Http\Controllers\Admin\Common\MasterController;

class ColorController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Colors";
        $this->pageData['name'] = "Color";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "colors";
        $this->pageData['prefix_url'] = "color";
        $this->modal = new Color;
    }
}
