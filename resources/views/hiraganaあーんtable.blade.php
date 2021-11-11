<!DOCTYPE html>
<html>
@extends('layout')
  
@section('content')
<head>
    <style TYPE="text/css">
    
      
        .home_btn {

position: fixed;

bottom: 30px;

left: 20px;

padding: 15px 30px;

font-size: 30;

}

.prev_btn {

position: fixed;

bottom: 30px;

right: 200px;

padding: 15px 30px;

font-size: 30;

}

.next_btn {

position: fixed;

bottom: 30px;

right: 20px;

padding: 15px 30px;

font-size: 30;


}
</style>


</head>
<body >

    <div class ="container" center>

    <table style ="font-size: 9vw; font-family: BIZ UDゴシック; border: 1px" >



  <tbody>
    <tr >
      <td >わ</td>
      <td >ら</td>
      <td >や</td>
      <td >ま</td>
      <td >は</td>
      <td >な</td>
      <td >た</td>
      <td >さ</td>
      <td >か</td>
      <td > <a href="http://192.168.10.14:8000/aorder"><div style="height:100%;width:100%">   あ</div> </a></td>
    </tr>
    <tr >
      <td ></td>
      <td >り</td>
      <td ></td>
      <td >み</td>
      <td >ひ</td>
      <td >に</td>
      <td >ち</td>
      <td >し</td>
      <td >き</td>
      <td >い</td>
    </tr>

    <tr >
      <td ></td>
      <td >る</td>
      <td >ゆ</td>
      <td >む</td>
      <td >ふ</td>
      <td >ぬ </td>
      <td >つ </td>
      <td >す</td>
      <td >く</td>
      <td >う</td>
    </tr>
    <tr >
      <td ></td>
      <td >れ</td>
      <td ></td>
      <td >め</td>
      <td >へ</td>
      <td >ね </td>
      <td >て</td>
      <td >せ</td>
      <td >け</td>
      <td >え</td>
     
    </tr>

    <tr >
        <td >を</td>
        <td >ろ</td>
        <td >よ</td>
        <td >も</td>
        <td >ほ</td>
        <td >の </td>
        <td >と</td>
        <td >そ</td>
        <td >こ</td>
        <td >お</td>
       
      </tr>
      <tr >
        <td >ん</td>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
        <td > </td>
        <td ></td>
        <td ></td>
        <td ></td>
        <td ></td>
       
      </tr>
  </tbody>
</table>
</div>
</body>
<button class="home_btn">HOME</button>

    <button class="prev_btn">&lt;PREV</button>

    <button class="next_btn">NEXT&gt;</button>


@endsection
</html>
