<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Alias extends Model
{
    public function getAlias($alias){

        $result = DB::select('select name from alias where name = ?', [$alias]);
        if($result){
            return $result[0]->name;
        }
        else{
            abort(404);
        }
    }
}
