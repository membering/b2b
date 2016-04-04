<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function getIdByName($name)
    {
        $query = self::where('name', 'like', '%'.$name.'%')->first();
        return $query->id;
    }
}
