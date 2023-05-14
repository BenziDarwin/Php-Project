@extends("layouts.navbar")

@section("content")
<div class="border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="mr-2">
            <a href="{{url("/profile")}}"  class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg aria-hidden="true" class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>Profile
            </a>
        </li>
        <li class="mr-2">
            <a href="{{url("/jobs")}}" class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" aria-current="page">
                <svg aria-hidden="true" class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>Jobs
            </a>
        </li>
        <li class="mr-2">
            <a href="{{url("/user-applications")}}" class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group" aria-current="page">
                <svg aria-hidden="true" class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>Applications
            </a>
        </li>
    </ul>
</div>

<div class="border-b border-gray-200 dark:border-gray-700">
    <!-- Navbar code -->
</div>

<div class="flex items-center">
    <div class="w-1/3">
        <form method="POST" action="{{ route('updateProfile', ['id' => $user->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <h2 class="text-xl font-bold mb-2">Profile Image</h2>
                </div>
                <label for="image" class="relative cursor-pointer">
                    <span class="rounded-full w-48 h-48 bg-gray-200 flex items-center justify-center">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <!-- Display the profile image -->
                        <img id="profile_image" src="{{ asset($user->profile_image) }}" alt="User Profile Image" class="rounded-full w-full h-full object-cover">

                            <!-- <img id="profile_image" src="@if(isset($userProfileImage) && $userProfileImage){{ Storage::url($userProfileImage) }}@else{{ 'https://via.placeholder.com/150' }}@endif" alt="User Profile Image" class="rounded-full w-full h-full object-cover @if(isset($userProfileImage) && $userProfileImage){{ '' }}@else{{ 'hidden' }}@endif"> -->

                    </span>
                    <input type="file" name="profile_image" id="image" class="hidden" onchange="previewImage(this)">
                </label>
            </div>
            <div class="flex justify-end">
                <button type="submit" id="upload-button" class="hidden block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Upload</button>
            </div>
        </form>

    </div>
</div>

<!-- Other profile details code -->

<script>
    function previewImage(input) {
    var reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('profile_image').src = e.target.result;
        document.getElementById('profile_image').classList.remove('hidden');
        document.getElementById('upload-button').style.display = 'block';
    }
    reader.readAsDataURL(input.files[0]);
}

</script>


<!-- component -->
        <div class="flex flex-col justify-center items-center h-[60vh]">
            <div class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                <div class="grid grid-cols-2 gap-4 px-2 w-full">
                    <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Name</p>
                    <p class="text-base font-medium text-navy-700 dark:text-black">
                        {{$user->name}}
                    </p>
                    </div>

                    <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Student Number</p>
                    <p class="text-base font-medium text-navy-700 dark:text-black">
                        {{$user->stdNo}}
                    </p>
                    </div>

                    <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Course</p>
                    <p class="text-base font-medium text-navy-700 dark:text-black">
                        {{$user->course}}
                    </p>
                    </div>
                </div>
                <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Profile</button>
            </div>  
        </div>
@endsection