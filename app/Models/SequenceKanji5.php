<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SequenceKanji5
{
    static public function issue()
    {
        DB::update('UPDATE sequence_j5 SET id=LAST_INSERT_ID(id+1)');
        $ret = DB::getPdo()->lastInsertId();
        return "J5".$ret;
    }
 
    static public function reset()
    {
        DB::update('UPDATE sequence_j5 SET id=?', [date('ymd').'000']);
    }
}