<?php

namespace App\Http\Controllers\admin;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
        $settings = Setting::pluck('value', 'key');
        return view('admin.settings.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
        $siteSettings = Setting::pluck('value', 'key');

        $siteSetting = $request->all();

        $settingmedias = ['site_main_logo', 'site_fav_icon', 'site_footer_logo', 'site_contact_image', "counter_happycustomers_image", "counter_packages_image", "counter_bookings_image", "counter_treakings_image"];

        foreach ($settingmedias as $media) {
            ${$media} = updatesettingmedia($request, $media, $media);

            $siteSetting[$media] = deletesettingmedia(${$media}, $siteSettings[$media], $media, $siteSetting, $siteSettings);
        }

        foreach ($siteSetting as $key => $value) {

            if (!is_array($value)) {
                $value = [$value];
            }

            $value = implode(',', $value);

            $setting->updateOrCreate(['key' => $key,], [
                'key' => $key,
                'value' => $value,
            ]);
        }

        return redirect()->back()->with('success', 'Setting updated successfully');
    }
}
/**
 * Remove the specified resource from storage.
 */
