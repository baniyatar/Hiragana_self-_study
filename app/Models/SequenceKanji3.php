<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SequenceKanji3
{
    static public function issue()
    {
        DB::update('UPDATE sequence_j3 SET id=LAST_INSERT_ID(id+1)');
        $ret = DB::getPdo()->lastInsertId();
        return "J3".$ret;
    }
 
    static public function reset()
    {
        DB::update('UPDATE sequence_j3 SET id=?', [date('ymd').'000']);
    }
}