<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    /**
     * Update the settings table with the request data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function makeUpdate(Request $request)
    {
        $settings = Setting::all()->count();

        if ($settings > 0) {
            
            $settings = Setting::orderBy('id', 'desc')->first();

            $settings->update($request->all());

        } else {

            Setting::create($request->all());

        }
    }
}
