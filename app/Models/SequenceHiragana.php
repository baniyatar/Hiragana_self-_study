<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SequenceHiragana
{
    static public function issue()
    {
        DB::update('UPDATE sequence_h SET id=LAST_INSERT_ID(id+1)');
        $ret = DB::getPdo()->lastInsertId();
        return "H".$ret;
    }
 
    static public function reset()
    {
        date_default_timezone_set('Asia/Tokyo');
        DB::update('UPDATE sequence_h SET id=?', [date('ymd').'000']);
    }
}