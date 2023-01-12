<?php

namespace App\Models;

class Listing {

    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget odio mauris. Quisque consectetur velit sit amet nisl accumsan rutrum. Cras non felis non neque egestas auctor. Nam magna libero, porttitor quis arcu id, scelerisque varius velit. Suspendisse sed urna in leo euismod venenatis. Vivamus ex justo, tempor vitae venenatis et, consequat sit amet lorem. Vivamus eget erat laoreet, elementum arcu a, vestibulum eros. Nullam fringilla enim est, sit amet ultrices leo dapibus vel. Cras non magna nisi.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget odio mauris. Quisque consectetur velit sit amet nisl accumsan rutrum. Cras non felis non neque egestas auctor. Nam magna libero, porttitor quis arcu id, scelerisque varius velit. Suspendisse sed urna in leo euismod venenatis. Vivamus ex justo, tempor vitae venenatis et, consequat sit amet lorem. Vivamus eget erat laoreet, elementum arcu a, vestibulum eros. Nullam fringilla enim est, sit amet ultrices leo dapibus vel. Cras non magna nisi.'
            ]
        ];
    }


    // Metoda koja vraća samo jedan Listing po id
    public static function find($id){
        // pozovi static metodu all() i dohvati sve u var
        $listings = self::all();    

        // nađi po id i vrati
        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }






}