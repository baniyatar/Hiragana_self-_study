@inject('controller', 'App\Http\Controllers\admin\UserListController')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>入金、ユーザー情報検索</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script type = "text/javascript">
    function loadFinished()
    {
        window.document.myForm.examineeId.value = '{{$condition->getExamineeId()}}';
        window.document.myForm.userName.value = '{{$condition->getUserName()}}';
        window.document.myForm.email.value = '{{$condition->getEmail()}}';
        window.document.myForm.firstName.value = '{{$condition->getFirstName()}}';
        window.document.myForm.surName.value = '{{$condition->getSurName()}}';

        if('{{$condition->getPaymentNotYet()}}' == '1'){
            window.document.myForm.paymentNotYet.checked = true;
        }
        if('{{$condition->getPaymentDone()}}' == '1'){
            window.document.myForm.paymentDone.checked = true;
        }

        if('{{$condition->getAutoSearch()}}' == 1)
        {
@php
            $condition->setAutoSearch(0);
@endphp
            window.document.myForm.submit();
        }
    }

    function edit(examineeId){
        window.document.myForm2.editExamineeId.value = examineeId;
	      window.document.myForm2.submit();
    }

  </script>
</head>
<body onload="loadFinished()">
  <h3 align="center">入金、ユーザー情報検索</h3>

  <form method="post" name="myForm" action="{{ url('/admin/searchUserList') }}">
    {{ csrf_field() }}
        <br>
<h3>
        <table style="margin-left: 200px;" border="1">
          <tbody>
            <tr>
              <td style="width: 20%;">ID</td><td><input type="text" name="examineeId" maxlength="10"/></td>
              <td style="width: 20%;">登録名</td><td><input type="text" name="userName" maxlength="100"/></td>
            </tr>
            <tr>
              <td>　</td><td></td>
              <td></td><td></td>
            </tr>
            <tr>
              <td>Email</td><td><input type="text" name="email" maxlength="255"/></td>
              <td></td><td></td>
            </tr>
            <tr>
              <td>　</td><td></td>
              <td></td><td></td>
            </tr>
            <tr>
              <td>名</td><td><input type="text" name="firstName" maxlength="100"/></td>
              <td>姓</td><td><input type="text" name="surName" maxlength="100"/></td>
            </tr>
            <tr>
              <td>　</td><td></td>
              <td></td><td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>入金</td>
              <td>
                <input type="checkbox" name="paymentNotYet" id="paymentNotYet" value="1"><label for="paymentNotYet">未</label>
                <input type="checkbox" name="paymentDone" id="paymentDone" value="1"><label for="paymentDone">済</label>
              </td>
            </tr>
            <tr>
              <td></td><td></td>
              <td></td><td></td>
            </tr>
          </tbody>
        </table>
</h3>
        <h3>
            <input type="button" style="width: 13%; margin-left: 200px" value="メニュー" onclick="window.location='{{ url('/admin/adminMenu') }}'" />
            <input type="reset" style="width: 10%; margin-left: 385px" value="クリア" />　　
            <input type="submit" style="width: 10%" value="検索" />
        </h3>
  </form>

  <form method="post" name="myForm2" action="{{ url('/admin/editUser') }}">
    {{ csrf_field() }}
    <input type="hidden" name="editExamineeId" value="" />
   
    <label style="margin-left: 200px;">{{count($data)}}件</label>

    <table style="margin-left: 200px;" border="1">
        <thead>
            <tr>
                <th></th>
                <th style="text-align: center; width: 150px;">ID</th>
                <th style="text-align: center; width: 150px;">登録名</th>
                <th style="text-align: center; width: 150px;">パスワード</th>
                <th style="text-align: center; width: 300px;">EMail</th>
                <th style="text-align: center; width: 150px;">名</th>
                <th style="text-align: center; width: 150px;">姓</th>
                <th style="text-align: center; width: 50px;">入金</th>
                <th style="text-align: center; width: 150px;">都市</th>
                <th style="text-align: center; width: 150px;">国</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $rec)
            <tr>
<!--
                <td><input type="button" value="編集" onclick="edit('{{$rec->getExamineeId()}}');" style="width :120px;"></td>
-->
                <td>　</td>
                <td style="text-align: center;">{{$rec->getExamineeId()}}</td>
                <td>&nbsp;{{$rec->getUserName()}}</td>
                <td>&nbsp;{{$rec->getPassWord()}}</td>
                <td>&nbsp;{{$rec->getEmail()}}</td>
                <td>&nbsp;{{$rec->getFirstName()}}</td>
                <td>&nbsp;{{$rec->getSurName()}}</td>
                <td style="text-align: center;">{{$rec->getPayment()}}</td>
                <td>&nbsp;{{$rec->getCity()}}</td>
                <td>&nbsp;{{$rec->getCountry()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </form>
</body>
</html>