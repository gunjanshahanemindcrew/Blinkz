<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Model\Chatting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function chat_with_seller(Request $request)
    {
        try {
            $unique_shops = $chattings = [];
            $last_chat = (object)[];
            $last_chat = Chatting::with(['seller_info', 'customer', 'shop'])->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'DESC')
            ->first();
           
            if (isset($last_chat) && !empty($last_chat)) {
                // echo json_encode($last_chat); die; 
                if (isset($last_chat->shop) && !empty($last_chat->shop)){
                    if (isset($last_chat->shop->image) && is_string($last_chat->shop->image) && !empty($last_chat->shop->image)){
                        $last_chat->shop->image = json_decode($last_chat->shop->image)[0];
                    }
                    $chattings = Chatting::with(['seller_info', 'customer', 'shop'])
                        ->join('shops', 'shops.id', '=', 'chattings.shop_id')
                        ->select('chattings.*', 'shops.name', 'shops.image')
                        ->where('chattings.user_id', $request->user()->id)
                        ->where('shop_id', $last_chat->shop_id)
                        ->get();
                    if (isset($chattings) && is_array($chattings) && sizeof($chattings)){
                        foreach ($chattings as $key => $value) {
                            $value->image = json_decode($value->image, true)[0];
                            if (isset($value->seller_info) && !empty($value->seller_info)){
                                $value->seller_info->image =  json_decode($value->seller_info->image, true)[0];
                            }
                            
                            if (isset($value->shop) && !empty($value->shop)){
                                $array_shop = $value->shop->toArray();
                                $array_shop['image'] =  json_decode($array_shop['image'])[0];
                                unset($chattings[$key]->shop);
                                $chattings[$key]->shop = $array_shop;
                            }
                        }
                    }     
                }

                $unique_shops = Chatting::with(['seller_info', 'shop'])
                    ->where('user_id', $request->user()->id)
                    ->orderBy('created_at', 'DESC')
                    ->get()
                    ->unique('shop_id');
                
                if (isset($unique_shops) && is_array($chattings) && sizeof($unique_shops)){
                    foreach ($unique_shops as $key1 => $value1) {
                        if (isset($value1->shop) && !empty($value1->shop)){
                            $value1->shop->image =  json_decode($value1->shop->image, true)[0];
                        }
                    }
                }
                
                // $unique_shops = Chatting::with(['seller_info', 'shop'])->groupBy('shop_id')->get();

                return response()->json([
                    'token_provided' => $request->bearerToken(),
                    'last_chat'    => $last_chat,
                    'chat_list'    => $chattings,
                    'unique_shops' => $unique_shops
                ], 200);
            } else {
                return response()->json($last_chat, 200);
            }

        } catch (\Exception $e) {
            die(var_dump($e));
            return response()->json(['errors' => $e], 403);
        }
    }

    public function messages(Request $request)
    {
        try {
            $messages = Chatting::with(['seller_info', 'customer', 'shop'])->where('user_id', $request->user()->id)
                ->where('shop_id', $request->shop_id)
                ->get();
            if(count($messages)){
                $messages[0]->seller_info->image = json_decode($messages[0]->seller_info->image)[0];
                $messages[0]->shop->image = json_decode($messages[0]->shop->image)[0];
            }
            return response()->json($messages, 200);
        } catch (\Exception $e) {
            return response()->json(['errors' => $e], 403);
        }
    }

    public function messages_store(Request $request)
    {
        try {
            if ($request->message == '') {
                return response()->json('type something!');
            } else {
                DB::table('chattings')->insert([
                    'user_id'          => $request->user()->id,
                    'shop_id'          => $request->shop_id,
                    'seller_id'        => $request->seller_id,
                    'message'          => $request->message,
                    'sent_by_customer' => 1,
                    'seen_by_customer' => 0,
                    'created_at'       => now(),
                ]);

                return response()->json(['message' => 'sent.'], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['errors' => $e], 403);
        }
    }
}
