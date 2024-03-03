<?php

function __getSiteConfigration($key, $return_key = "value") {
    
   $siteConfigration = config('siteconfigrations')[$key] ?? [];

    if($return_key == "value") {
        if(\Illuminate\Support\Facades\App::currentLocale() == 'ta' && optional($siteConfigration['attributes'])?->language_tamil_value ?? null) {
            return optional($siteConfigration['attributes'])?->language_tamil_value;
        }
        return optional($siteConfigration['attributes'])?->value;
    } else if($return_key == "label") {
        if(\Illuminate\Support\Facades\App::currentLocale() == 'ta' && optional($siteConfigration['attributes'])?->language_tamil_label ?? null) {
          
            return optional($siteConfigration['attributes'])?->language_tamil_label;
        }
        return $siteConfigration['label'];
    }
    
    return optional($siteConfigration['attributes'])?->$return_key ?? '';
}