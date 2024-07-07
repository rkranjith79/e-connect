<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Profiles';
        $this->pageData['rules']['not_unique'] = true;
        $this->pageData['name'] = 'Profile';
        $this->pageData['view'] = 'admin.profile.index';
        $this->pageData['tables'] = 'profiles';
        $this->pageData['prefix_url'] = 'profile';
        $this->modal = new Profile();
    }

    public function index(Request $request)
    {
        // dd($request->user_id);
        $modal_data = $this->modal->when(!empty($request->user_id), function ($q) use ($request) {
            $q->where('user_id', '=', $request->user_id);
        })->orderBy('id', 'desc')->paginate(15);
        $page_data = $this->pageData;

        return view('admin.profile.index', compact(['modal_data', 'page_data']));
    }

    public function deactivate(Request $request)
    {
        $modal_data = $this->modal->where('id', $request->modal_data_id)->where('uuid', $request->modal_data_uuid);
        if (isset($modal_data)) {
            $modal_data->update([
                'active' => false,
            ]);

            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'] . ' Deactivated',
            ]);
        } else {

            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'] . ' Not Found',
            ]);
        }
    }

    public function activate(Request $request)
    {
        $modal_data = $this->modal->where('id', $request->modal_data_id)->where('uuid', $request->modal_data_uuid);
        if (isset($modal_data)) {
            $modal_data->update([
                'active' => true,
            ]);

            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'] . ' Activated',
            ]);
        } else {

            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'] . ' Not Found',
            ]);
        }
    }

    public function deleteProfile(Request $request)
    {
        try {
            $modal_data = $this->modal->find($request->modal_data_id);

            if ($modal_data) {
                $modal_data->delete();

                return response()->json([
                    'status' => 200,
                    'message' => $this->pageData['title'] . ' Deleted',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => $this->pageData['title'] . ' Not Found',
                ]);
            }
        } catch (\Exception $e) {
            // Log the exception
            // Log::error('Exception occurred: ' . $e->getMessage());

            return response()->json([
                'status' => 500,
                'message' => 'Failed to delete ' . $this->pageData['title'],
            ]);
        }
    }
}
