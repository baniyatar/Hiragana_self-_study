<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SequenceKatakana
{
    static public function issue()
    {
        DB::update('UPDATE sequence_k SET id=LAST_INSERT_ID(id+1)');
        $ret = DB::getPdo()->lastInsertId();
        return "K".$ret;
    }
 
    static public function reset()
    {
        DB::update('UPDATE sequence_k SET id=?', [date('ymd').'000']);
    }
}