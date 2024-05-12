<?php

namespace App\Http\Controllers;

use App\Models\PurchasedPlan;
use Illuminate\Http\Request;

class PurchasedPlanController extends Controller
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Purchased Plans";
        $this->pageData['rules']['not_unique'] = true;
        $this->pageData['name'] = "Plan";
        $this->pageData['view'] = "admin.purchased_plan.index";
        $this->pageData['tables'] = "purchased_plans";
        $this->pageData['prefix_url'] = "purchased_plan";
        $this->modal = new PurchasedPlan();
    }

    public function index()
    {
        $modal_data =  $this->modal::paginate(20);
        $page_data = $this->pageData;
        return view('admin.purchased_plan.index', compact(['modal_data', 'page_data']));
    }
}
