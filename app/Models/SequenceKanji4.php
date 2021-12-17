<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SequenceKanji4
{
    static public function issue()
    {
        DB::update('UPDATE sequence_j4 SET id=LAST_INSERT_ID(id+1)');
        $ret = DB::getPdo()->lastInsertId();
        return "J4".$ret;
    }
 
    static public function reset()
    {
        DB::update('UPDATE sequence_j4 SET id=?', [date('ymd').'000']);
    }
}