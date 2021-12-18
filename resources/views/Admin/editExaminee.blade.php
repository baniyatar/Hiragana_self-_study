@inject('controller', 'App\Http\Controllers\admin\ExamineeEditController')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>受験者情報編集</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script type = "text/javascript">
    function paymentNotYetChecker(paymentDone){
        if(paymentDone == "0"){
            return "checked"
        }else{
            return "";
        }
    }
    function paymentDoneChecker(paymentDone){
        if(paymentDone == "1"){
            return "checked"
        }else{
            return "";
        }
    }
    function pic(id){
        window.document.myForm2.id.value = id;
        window.document.myForm2.action="{{ url('/admin/pictureExaminee') }}";
        window.document.myForm2.method="post";
	    window.document.myForm2.target="_blank";
        window.document.myForm2.submit();
    }
    function submitFunction(){
          document.getElementById("submitButton").disabled = true;
          document.getElementById("cancelButton").disabled = true;
          document.forms['myForm'].submit();
    }
  </script>
  <style>
    table.example,
    table.example th,
    table.example td {
        border: 0px #999999 solid;
    }
  </style>
</head>
<body>
  <h3 align="center">受験者情報編集</h3>
  <br>
  <form method="post" enctype="multipart/form-data" name="myForm" action="{{ url('/admin/registExaminee') }}">
    {{ csrf_field() }}
    <h3>
    <table class="example" style="margin-left: 300px;" >
        <tbody>
        <tr>
            <td>受験番号</td><td><input type="text" name="examineeId" value='{{$data->getExamineeId()}}' readonly />
            <td></td>
            <td>名前</td><td><input type="text" name="name" style="width: 600px;" value='{{$data->getName()}}' maxlength="255" required/></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>暗証番号</td>
            <td><input type="text" name="pin" value='{{$data->getPin()}}' readonly /></td>
            <td></td>
            <td>入金</td>
            <td>&nbsp;<input type="radio" name="payment" id="payment0" value="0" {{$data->getPaymentNotYet()}}/><label for="payment0">未</lavel>
                &nbsp;<input type="radio" name="payment" id="payment1" value="1" {{$data->getPaymentDone()}}/><label for="payment1">済</lavel>
            </td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>試験国</td>
            <td><input type="text" name="country" value='{{$data->getCountry()}}' readonly /></td>
            <td></td>
            <td>誕生日</td>
            <td><input type="date" name="birthDay" value='{{$data->getBirthDay()}}' required></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>会場</td>
            <td><input type="text" name="city" value='{{$data->getCity()}}' readonly /></td>
            <td></td>
            <td>性別</td>
            <td>&nbsp;<input type="radio" name="gender" id="male" value="male" {{$data->getMale()}}/><label for="male">男</lavel>
                &nbsp;<input type="radio" name="gender" id="female" value="female" {{$data->getFemale()}}/><label for="female">女</lavel>
            </td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>試験日</td>
            <td><input type="text" name="testDay" value='{{$data->getTestDay()}}' readonly /></td>
            <td></td>
            <td>国</td>
            <td><input type="text" name="countryAd" style="width: 600px;" value='{{$data->getCountryAd()}}' maxlength="30" required /></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>級</td>
            <td><input type="text" name="level" value='{{$data->getLevel()}}' readonly /></td>
            <td></td>
            <td>住所</td>
            <td><input type="text" name="address" style="width: 600px;" value='{{$data->getAddress()}}' maxlength="255" required /></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>写真</td>
            <td><label>{{$data->getPhoto()}}</label>&nbsp;&nbsp;<button type="button" onClick="pic('{{$data->getExamineeId()}}');" {{$data->getPhotoDisabled()}}>表示</button>
            </td>
            <td></td>
            <td>郵便番号</td>
            <td><input type="text" name="zipcode" style="width: 600px;" value='{{$data->getZipcode()}}' maxlength="20" required /></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td></td>
            <!-- <td><input id="fileButton" name="fileName"type="file"/></td> -->
            <td><?php
         echo Form::open(array('url' => '/admin/registExaminee','files'=>'true'));
         echo Form::file('image');
         echo Form::close();
      ?></td>

            <td></td>
            <td>email</td>
            <td><input type="text" name="email" style="width: 600px;" value='{{$data->getEmail()}}' maxlength="100" required /></td>
        </tr>
        </tbody>
    </table>
    <br><br><br>
    <input type="button" value="キャンセル" id="cancelButton" onclick="history.back();" style="width :200px; margin-left: 300px;">
    <input type="button" value="登録" id="submitButton" onclick="submitFunction();" style="width :200px; margin-left: 80px;">
    </h3>
  </form>
  <form method="post" name="myForm2">
    {{ csrf_field() }}
    <input type="hidden" name="id" value=""/>
  </form>
</body>
</html>