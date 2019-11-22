<?php

namespace App\Http\Controllers\Api\PC;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activation;

class ActivationsController extends Controller
{
    /**
     * Check if the given key is activated or not
     *
     * @param  \Request $request
     * @return \Response
     */
    public function check(Request $request)
    {
        $key = Activation::where('key', $request->key)
                        ->where('client_name', $request->client_name)
                        ->where('pc_id', $request->pc_id)
                        ->first();

        if ($key) {
            return response()->json([
                "message" => $key->status
            ], 200);
        }

        return response()->json([
            "message" => "not_found"
        ], 400);

    }
}
