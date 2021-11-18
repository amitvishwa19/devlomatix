<?php

namespace App\Services\Setting;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;



class Settings
{
    //public $role;

    protected $settings = [];

    public function __construct()
    {
        $this->loadSettings();

    }


    public function get($key)
    {
        if( is_array($key) ) {
            $keys = [];

            foreach($key as $k) {
                $keys[$k] = $this->settings[$k];
            }

            return $keys;
        }

        return $this->settings[$key];
    }

    public function set($type,$key,$value)
    {
        //dd($key);
        $flight = Setting::updateOrCreate(
            ['type' => $type,'key' => $key],
            ['value' => $value],
        );
    }

    protected function loadSettings()
    {
        // $settings = Cache::remember('settings', 24*60, function() {
        //     return \App\Models\Setting::all()->toArray();
        // });

        $settings = Setting::all()->toArray();
        $this->settings = array_pluck($settings, 'value', 'key');
    }


    public function all()
    {
        return $this->settings;
    }
}
