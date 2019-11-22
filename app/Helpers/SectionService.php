<?php

use App\Models\Section;
use App\Models\Setting;

class SectionService
{
    /**
     * Get the section info 
     *
     * @param string $section_name
     * @param string $column
     * @return string
     */
    public static function get_section($section_name, $column): string
    {
        // if($column=='heading'){dd($section_name);}
        $data = Section::where($column, 'like', '%' . $section_name . '%')->first($column);
        return $data[$column] ?? "";
    }

    public static function settings($key, $default = '')
    {
        return Setting::where('key', '=', $key)->first()->value ?? $default;
    }
}