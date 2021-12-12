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

@component('layouts.default')
<ul>
  <li>ホーム</li>
  <li>日付一覧</li>
  <li>ログアウト</li>
  </ul>
@endcomponent

@section('title')
<h1>さんお疲れ様です！</h1>
@endsection

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

