@extends("layouts.navbar")

@section("content")
<div class="m-3">
  <div class="flex mb-4">
    <div class="justify-center">
      <img src="{{ asset('/images/recruit.jpg') }}" alt="CRMS Logo"/>
    </div>
    <div class="w-1/2 justify-center">
      <center>
        <h2 style="font-size: 30px; margin-top: 100px" class="text-2xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad ipsum omnis architecto.</h2>
      <h5 class="text-sm mt-3">
        Eum et praesentium officiis voluptatibus obcaecati voluptatum, 
        quo dolorem nulla non totam nisi culpa animi magnam modi deserunt!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, quidem quis. Eos eveniet, natus soluta, 
        labore veritatis enim repellat tempore ducimus laudantium quibusdam tenetur officiis reiciendis provident eaque magni corporis!
      </h5>
      <button onClick="window.location ='{{url("/login")}}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-3">
        Login
      </button>
      </center>
    </div>
  </div>
</div>
@endsection