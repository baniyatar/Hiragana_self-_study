

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
            <td>ID</td><td><input type="text" name="examineeId" value='' readonly />
            <td></td>
            <td>Firstname</td><td><input type="text" name="name"  value='' maxlength="255" required/></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="pin" value='' readonly /></td>
            <td></td>
            
            <td>Surname </td>
            <td><input type="text" name="surname " value='' maxlength="255" required /></td>
            
        </tr>
            {{-- <td>入金</td>
            <td>&nbsp;<input type="radio" name="payment" id="payment0" value="0" /><label for="payment0">未</lavel>
                &nbsp;<input type="radio" name="payment" id="payment1" value="1" /><label for="payment1">済</lavel>
            </td> --}}
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email"  value='' maxlength="100" required /></td>
            <td></td>
            <td>入金</td>
            <td>&nbsp;<input type="radio" name="payment" id="payment0" value="0" /><label for="payment0">未</lavel>
                &nbsp;<input type="radio" name="payment" id="payment1" value="1" /><label for="payment1">済</lavel>
            </td>
            
            <tr><td>&nbsp;</td></tr>
      
        </tr>
    
      
       
       
      
        <tr><td>&nbsp;</td></tr>
        

            {{-- <td></td>
            <td>email</td>
            <td><input type="text" name="email"  value='' maxlength="100" required /></td> --}}
        </tr>
        </tbody>
    </table>
    <br><br><br>
    <input type="button" value="キャンセル" onclick="history.back();" style="width :200px; margin-left: 300px;">
    <input type="submit" value="登録" style="width :200px; margin-left: 80px;">
    </h3>
  </form>
  <form method="post" name="myForm2">
    {{ csrf_field() }}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    <input type="hidden" name="id" value=""/>
  </form>
</body>
</html>