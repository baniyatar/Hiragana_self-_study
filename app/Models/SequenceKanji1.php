<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SequenceKanji1
{
    static public function issue()
    {
        DB::update('UPDATE sequence_j1 SET id=LAST_INSERT_ID(id+1)');
        $ret = DB::getPdo()->lastInsertId();
        return "J1".$ret;
    }
 
    static public function reset()
    {
        DB::update('UPDATE sequence_j1 SET id=?', [date('ymd').'000']);
    }
}