<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SequenceHiragana;
// use App\Models\SequenceKatakana;
// use App\Models\SequenceKanji1;
// use App\Models\SequenceKanji2;
// use App\Models\SequenceKanji3;
// use App\Models\SequenceKanji4;
// use App\Models\SequenceKanji5;

class SequenceReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SequenceReset:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hiragana Sequence reset';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SequenceHiragana::reset();
        // SequenceKatakana::reset();
        // SequenceKanji1::reset();
        // SequenceKanji2::reset();
        // SequenceKanji3::reset();
        // SequenceKanji4::reset();
        // SequenceKanji5::reset();
        return 0;
    }
}
