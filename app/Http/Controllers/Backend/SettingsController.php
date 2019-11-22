<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\BackendController;
use App\Http\Requests\Backend\AboutRequest;
use App\Http\Requests\Backend\InfoRequest;
use App\Http\Requests\Backend\SocialRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();

        return view('backend.settings.index', compact('settings'));
    }

    /**
     * update the website info form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function info(InfoRequest $request)
    {
        $this->updateOrCreate($request->all());

        session()->flash('success', __('settings.updated_success'));

        return redirect()->route('settings.index');
    }

    /**
     * Edit the website about form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function about(AboutRequest $request)
    {
        $this->updateOrCreate($request->all());

        session()->flash('success', __('settings.updated_success'));

        return redirect()->route('settings.index');
    }

    /**
     * Edit the website social form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function social(SocialRequest $request)
    {
        $this->updateOrCreate($request->all());

        session()->flash('success', __('settings.updated_success'));

        return redirect()->route('settings.index');
    }

    private function updateOrCreate($data)
    {
        foreach($data as $key => $value) {
            if ($key == '_token' || $key == '_method') {
                continue;
            }

            if (is_array($value)) {
                foreach ($value as $k => $v) {
                    if ($setting = Setting::where('key', $k.'_'.$key)->first()) {
                        $setting->value = $v;
                        $setting->update();
                    } else {
                        Setting::updateOrCreate([
                            'key' => $k.'_'.$key,
                            'value' => $v
                        ]);
                    }
                }
            } else {
                if ($setting = Setting::where('key', $key)->first()) {
                    $setting->value = $value;
                    $setting->update();
                } else {
                    Setting::updateOrCreate([
                        'key' => $key,
                        'value' => $value
                    ]);
                }
            }
        }
    }
}
