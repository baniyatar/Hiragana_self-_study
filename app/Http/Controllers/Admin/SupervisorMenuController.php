<?php

namespace App\Http\Controllers\admin;

use Auth;
use Session;
use Validator;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ExamCondition;
use App\TestSiteInformation;
use Illuminate\Support\Facades\Config;

class SupervisorMenuController extends Controller
{
    function menuPush(Request $request)
    {
        $testSite = $request->session()->get('testSite');

        $info = TestSiteInformation::where('test_site', $testSite)->first();

        switch($request->get('mode')){
        case 'progress':
            $list = [];
            return view('admin/examProgress', ['list' => $list, 'condition' => new ExamCondition($info['country'], $info['city'], date("Y-m-d"))]);
        case 'password':
            return view('admin/supervisorPasswordChange');
        }
    }
}
?>
