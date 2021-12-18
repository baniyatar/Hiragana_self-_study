<?php

namespace App\Http\Controllers\admin;

use Auth;
use Session;
use Validator;
use DB;
use App\Models\User;
//use App\ExamineeList;
use App\UserRecord;
use App\SearchCondition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class UserListController extends Controller
{
    function search(Request $request)
    {
        $examineeId = $request->get('examineeId');
        $userName = $request->get('userName');
        $email = $request->get('email');
        $firstName = $request->get('firstName');
        $surName = $request->get('surName');
        $paymentNotYet = $request->get('paymentNotYet');
        $paymentDone = $request->get('paymentDone');

        $condition = new SearchCondition($examineeId, $userName, $email, $firstName, $surName, $paymentDone, $paymentNotYet, '0');
        Session::put('UserListCondition', $condition);

        if($paymentNotYet != null && $paymentDone == null){
            $query = User::where('payment', '0');
        }else if($paymentNotYet == null && $paymentDone != null){
            $query = User::where('payment', '1');
        }else{
            $query = User::where(function($query) {
                $query->orwhere('payment', '=', '0')
                    ->orWhere('payment', '=', '1');
            });
        }

        if($examineeId != null){
            $query->where('userid', 'like', "{$examineeId}%");
        }

        if($userName != null){
            $query->where('username', 'like', "%{$userName}%");
        }

        if($email != null){
            $query->where('email', 'like', "%{$email}%");
        }

        if($firstName != null){
            $query->where('firstname', 'like', "%{$firstName}%");
        }

        if($surName != null){
            $query->where('surname', 'like', "%{$surName}%");
        }

        $query->orderBy('userid');
        $list = $query->get();

        $ret = [];
        foreach($list as $ele){
            $rec = new UserRecord($ele['userid'], $ele['username'], $ele['password'], $ele['email'], $ele['firstname'], $ele['surname'], $ele['city'], $ele['country'], $ele['payment']);
            array_push($ret, $rec);
        }

        return view('admin/userList', ['data' => $ret, 'condition' => $condition]);
    }
}

?>