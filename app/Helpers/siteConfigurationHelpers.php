<?php

function __getSiteConfigration($key, $return_key = 'value')
{

    $siteConfigration = config('siteconfigrations')[$key] ?? [];
    $siteConfigrationAttributes = $siteConfigration['attributes'] ?? [];
    if ($return_key == 'value') {
        if (\Illuminate\Support\Facades\App::currentLocale() == 'ta' && optional($siteConfigrationAttributes)?->language_tamil_value ?? null) {
            return optional($siteConfigrationAttributes)?->language_tamil_value;
        }

        return optional($siteConfigrationAttributes)?->value;
    } elseif ($return_key == 'label') {
        if (\Illuminate\Support\Facades\App::currentLocale() == 'ta' && optional($siteConfigrationAttributes)?->language_tamil_label ?? null) {

            return optional($siteConfigrationAttributes)?->language_tamil_label;
        }

        return $siteConfigration['label'] ?? null;
    }

    return optional($siteConfigrationAttributes)?->$return_key ?? '';
}

function __setDateFormat($date)
{
    $formattedDate = date('d-m-Y', strtotime($date));

    return $formattedDate;
}

function __setTimeFormat($time)
{
    $formattedTime = date('h:i:s A', strtotime($time));

    return $formattedTime;
}

function __isProfiledUser()
{
    return auth()->check() && auth()->user()->profile;
}

function __setDateTimeFormat($dateTime)
{
    $formattedTime = date('d-m-Y h:i:s A', strtotime($dateTime));

    return $formattedTime;
}
