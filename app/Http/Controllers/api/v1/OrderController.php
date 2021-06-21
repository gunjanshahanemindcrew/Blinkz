<?php

namespace App\Http\Controllers\api\v1;

use App\CPU\Helpers;
use App\CPU\OrderManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function track_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        return response()->json(OrderManager::track_order($request['order_id']), 200);
    }

    public function place_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_info' => 'required',
            'discount' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        $data = OrderManager::place_order(
            $request->user()->id,
            $request->user()->email,
            $request['customer_info'],
            $request['cart'],
            null,
            $request['discount']);

        return response()->json([
            'message' => 'Order placed successfully!',
            'order_id' => $data
        ], 200);
    }
}
