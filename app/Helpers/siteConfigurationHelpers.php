<?php

function __getSiteConfigration($key, $return_key = "value") {

   $siteConfigration = config('siteconfigrations')[$key] ?? [];
   $siteConfigrationAttributes = $siteConfigration['attributes'] ?? [];
    if($return_key == "value") {
        if(\Illuminate\Support\Facades\App::currentLocale() == 'ta' && optional($siteConfigrationAttributes)?->language_tamil_value ?? null) {
            return optional($siteConfigrationAttributes)?->language_tamil_value;
        }
        return optional($siteConfigrationAttributes)?->value;
    } else if($return_key == "label") {
        if(\Illuminate\Support\Facades\App::currentLocale() == 'ta' && optional($siteConfigrationAttributes)?->language_tamil_label ?? null) {
          
            return optional($siteConfigrationAttributes)?->language_tamil_label;
        }
        return $siteConfigration['label'] ?? null;
    }
    
    return optional($siteConfigrationAttributes)?->$return_key ?? '';
}
