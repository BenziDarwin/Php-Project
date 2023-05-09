<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('favicon.ico')}}">
        @vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
        <title>CRMS</title>
    </head>
    <body class="antialiased" style = "height:120vh">  
    <div id="navbar">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 z-10 shadow-lg ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          @if(Session::get("name") != null) 
      <a href="#" class="flex items-center">
          <img src="{{ asset('/logos/recruit.png') }}" class="h-8 mr-3" alt="CRMS Logo"/>
          <span class="self-center font-bold whitespace-nowrap dark:text-white">Campus Recruitment MS</span>
      </a>
      @else
      <a href="{{url("/")}}" class="flex items-center">
        <img src="{{ asset('/logos/recruit.png') }}" class="h-8 mr-3" alt="CRMS Logo"/>
        <span class="self-center font-bold whitespace-nowrap dark:text-white">Campus Recruitment MS</span>
    </a>
    @endif
      <div class="w-full md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <?php
          use Illuminate\Support\Facades\Session;
          ?>

          @if(Session::get("name") != null) 
          <li>
            <a href="{{url("/logout")}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Logout</a>
          </li>
          @else
          <li>
            <a href="{{url("/")}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{url("/login")}}"  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"> Student Login</a>
          </li>
          <li>
            <a href="{{url("/register")}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"> Student Register</a>
          </li>
          <li>
            <a href="{{url("/company-login")}}"  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Company Login</a>
          </li>
          <li>
            <a href="{{url("/company-register")}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Company Register</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    </body>
</html>
