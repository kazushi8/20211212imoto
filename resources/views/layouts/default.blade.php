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
    header{
      height:70px;
    display: flex;
    position: fixed;
    width:100%;
    padding: 0 30px;
    }
      .content{
        text-align: center;
        background-color: gray;
      }
    </style>
  </head>
  <body>
    <header>
      @include('includes.header')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @include('includes.footer')
    </footer>
  </body>
</html>