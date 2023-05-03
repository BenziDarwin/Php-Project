@extends("layouts.navbar")

@section("content")
<?php
  $_SESSION["LoggedIn"] = false;
  ?>
<div class="m-3">
  <div class="flex mb-4">
    <div class="justify-center">
      <img src="{{ asset('/images/recruit.jpg') }}" alt="CRMS Logo"/>
    </div>
    <div class="w-1/2 justify-center">
      <center>
        <h2 style="font-size: 30px; margin-top: 100px" class="text-2xl">Campus Recruitment Management System</h2>
      <h5 class="text-sm mt-3">
          This system recruits students for jobs that have been set up by company, simply meaning one qualifies to apply for a job if he is a student at the campus.This system partners with companies to offer job opportunities exclusively to enrolled students.
           Students meeting the eligibility requirements can apply for the opportunities through various channels. After a thorough screening process, the qualified students are connected with the partnering companies. 
          This mutually beneficial system provides companies access to a pool of talented candidates and students with valuable job opportunities
      </h5>
      <button onClick="window.location ='{{url("/login")}}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-3">
        Login
      </button>
      </center>
    </div>
  </div>
</div>
@endsection