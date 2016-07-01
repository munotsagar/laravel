<?php

namespace App;

use Jenssegers\Mongodb\Model as Eloquent;
use App\User;

class Homemodel extends Eloquent
{


    protected $connection   =   'mongodb';

    protected $collection   =   'user';



    public static function getData() {
        echo "in all function";
        $user = [
            '_id_' => '1',
            'email_1'   =>  'munot.sagar@gmail.com'
        ];
        //return User::all();
    }


}