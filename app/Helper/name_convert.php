<?php

namespace App\Helper;


class name_convert
{
    public static function getName($request)
    {
        $explode = explode(' ', $request);
        foreach ($explode as $key => $item) {
            $result = str_split($item)[0] . str_split($item)[1];
//            dd(count(str_split($item)));
            for ($i = 2; $i < count(str_split($item)); $i++) {
                $result = $result . '*';
            }
            $explode[$key] = $result;
        }
        $implode = implode(' ', $explode);
        return $implode;
    }
}
