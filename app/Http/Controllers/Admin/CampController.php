<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\CampInquiries;
use App\Model\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampController extends Controller
{
    public function index()
    {
        $campInquiries = CampInquiries::orderByDesc('created_at')->get();
        return view('admin-views.camp.index', compact('campInquiries'));
    }
}
