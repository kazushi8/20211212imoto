@extends('layouts.default')
<style>
  body{
    background-color: gray;
  }
  tr{
  
  }
  td{
    background-color: white;
    color: black;
    padding: 50px 60px;
  }




@section('title','打刻ページ')
<h1>さんお疲れ様です！</h1>

@section('content')
<table>
  <tr>
    <td>勤務開始</td>
    <td>勤務終了</td>
  </tr>
  <tr>
    <td>休憩開始</td>
    <td>休憩終了</td>
  </tr>
</table>
@endsection

