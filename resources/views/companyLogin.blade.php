@extends("layouts.navbar")

@section("content")
<section class="bg-gray-50 dark:bg-gray-900 image">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{url("/")}}" class="flex items-center">
            <img src="{{ asset('/logos/recruit.png') }}" class="h-8 mr-3" alt="CRMS Logo"/>
            <span class="self-center font-bold whitespace-nowrap dark:text-gray">Campus Recruitment Management System</span>
        </a>
        <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Sign in to your Company account
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{url("/login-company")}}">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Your Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name..." required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="{{url("/register")}}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection