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
    </ul>
</div>
<div class="flex flex-wrap justify-center mt-10">

    <!-- card 1 -->
    <div class="p-4 max-w-sm">
        <div class="flex rounded-lg h-full  bg-gray-300 p-8 flex-col">
            <div class="flex items-center mb-3">
                <h2 class="text-black text-lg font-medium">Feature 1</h2>
            </div>
            <div class="flex flex-col justify-between flex-grow">
                <p class="leading-relaxed text-base text-gray-600">Blue bottle crucifix vinyl post-ironic four dollar
                    toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a href="{{url('/job-description')}}" class="mt-3 text-black hover:text-blue-600 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- card 2 -->
    <div class="p-4 max-w-sm">
        <div class="flex rounded-lg h-full  bg-gray-300 p-8 flex-col">
            <div class="flex items-center mb-3">
                <h2 class="text-black text-lg font-medium">Feature 2</h2>
            </div>
            <div class="flex flex-col justify-between flex-grow">
                <p class="leading-relaxed text-base text-gray-600">Lorem ipsum dolor sit amet. In quos laboriosam non
                    neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.</p>
                <a href="#" class="mt-3 text-black hover:text-blue-600 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- card 3 -->
    <div class="p-4 max-w-sm">
        <div class="flex rounded-lg h-full  bg-gray-300 p-8 flex-col">
            <div class="flex items-center mb-3">
                <h2 class="text-black text-lg font-medium">Feature 3</h2>
            </div>
            <div class="flex flex-col justify-between flex-grow">
                <p class="leading-relaxed text-base text-gray-600">Lorem ipsum dolor sit amet. In quos laboriosam non
                    neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.</p>
                <a href="#" class="mt-3 text-black hover:text-blue-600 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
  <!-- card 1 -->
  <div class="p-4 max-w-sm">
    <div class="flex rounded-lg h-full  bg-gray-300 p-8 flex-col">
        <div class="flex items-center mb-3">
            <h2 class="text-black text-lg font-medium">Feature 1</h2>
        </div>
        <div class="flex flex-col justify-between flex-grow">
            <p class="leading-relaxed text-base text-gray-600">Blue bottle crucifix vinyl post-ironic four dollar
                toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a href="#" class="mt-3 text-black hover:text-blue-600 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- card 2 -->
<div class="p-4 max-w-sm">
    <div class="flex rounded-lg h-full  bg-gray-300 p-8 flex-col">
        <div class="flex items-center mb-3">
            <h2 class="text-black text-lg font-medium">Feature 2</h2>
        </div>
        <div class="flex flex-col justify-between flex-grow">
            <p class="leading-relaxed text-base text-gray-600">Lorem ipsum dolor sit amet. In quos laboriosam non
                neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.</p>
            <a href="#" class="mt-3 text-black hover:text-blue-600 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- card 3 -->
<div class="p-4 max-w-sm">
    <div class="flex rounded-lg h-full bg-gray-300 p-8 flex-col">
        <div class="flex items-center mb-3">
            <h2 class="text-black text-lg font-medium">Feature 3</h2>
        </div>
        <div class="flex flex-col justify-between flex-grow">
            <p class="leading-relaxed text-base text-gray-600">Lorem ipsum dolor sit amet. In quos laboriosam non
                neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.</p>
            <a href="#" class="mt-3 text-black hover:text-blue-600 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
</div>


 
@endsection