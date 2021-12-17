<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SequenceKanji2
{
    static public function issue()
    {
        DB::update('UPDATE sequence_j2 SET id=LAST_INSERT_ID(id+1)');
        $ret = DB::getPdo()->lastInsertId();
        return "J2".$ret;
    }
 
    static public function reset()
    {
        DB::update('UPDATE sequence_j2 SET id=?', [date('ymd').'000']);
    }
}