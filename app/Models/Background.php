<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Background extends Model
{

    protected $fillable = [
        'name'
    ];


    public static function getRandomBackgroundUrl () {

        $result = self::orderByRaw("RAND()")->first();

        return '/images/bgs/' . $result->name;

    }

}