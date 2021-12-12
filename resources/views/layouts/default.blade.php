<html >
  <head>
    <title>@yield('title')</title>
    <style>
    div{
      font-size:16pt;
      color:#999;
      margin:5px;
      background-color: black;
    }
    h1{
      font-size:16px;
      text-align:center;
      color:black;
      margin:50px 0px 50px 0px;
    }

      .content{
        text-align: center;
        background-color: gray;
      }
      

    </style>
  </head>
  <body>
    <div class="header">
      @yield('header')
    </div>
    <h1>@yield('title')</h1>
    <div class="content">
      @yield('content')
    </div>
  </body>
</html>