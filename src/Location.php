<?php

namespace Damage;

class Location {

    public static function Geo($address_1 = null, $city = null, $postcode = null) {
        $prep_address = str_replace(' ', '+', $address_1 . '+' . $city . '+' . $postcode);
        $geo = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $prep_address . '&sensor=false');
        $output= json_decode($geo);

        if ($output->status == 'OK') {
            return [
                'lat' => $output->results[0]->geometry->location->lat,
                'lng' => $output->results[0]->geometry->location->lng
            ];
        }

        return false;
    }

}
