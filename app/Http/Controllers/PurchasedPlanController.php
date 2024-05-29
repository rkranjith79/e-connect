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

    public function index(Request $request)
    {
        $page_data = $this->pageData;

        $modal_data = $this->modal->when(!empty($request->year), function ($q) use ($request) {
            $q->whereYear('created_at', '=', $request->year);
        })->when(!empty($request->from_date), function ($q) use ($request) {
            $q->where('created_at', '>=', $request->from_date);
        })->when(!empty($request->to_date), function ($q) use ($request) {
            $q->where('created_at', '<=', $request->to_date);
        })->withSum('plan', 'price')
            ->paginate(20);

        return view('admin.purchased_plan.index', compact(['modal_data', 'page_data']));
    }
}
