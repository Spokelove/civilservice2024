
{{-- @include('partials.header')
<?php  $array = array('title' => 'V-ABLE   SYSTEM') ;?>
  <x-nav :data="$array"/> --}}


<body class = "body bg-lime-500 rounded-lg shadow-2xl dark:bg-[#0F172A]">
    <div class = " mt-2 fixed w-full z-30 flex bg-white-100 dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-8">
        <div class = "logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center ">
            {{-- ADMIN --}}
        </div>
       
      
        <div class = "grow h-full flex items-center justify-center "></div>
        <div class = "grow h-full flex items-center justify-center "></div>
     
{{-- 
================================================slider div===================================================================================================== --}}

  <!-- CONTENT -->
<div class=" border-b border-white min-h-screen bg-gradient-to-r from-blue-900 to-blue-400">
  <aside class=" box shadow border border-white bg-gradient-to-br from-blue- to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
          
              <div class="flex justify-between items-center mb-4 mt-5 p-4">
          <div class="flex-1 text-center font-sans text-xl font-semibold text-white">
              ACTIVITIES SCHEDULES
          </div>
          <div class="dropdown">
              <!-- Dropdown content goes here -->
          </div>
      </div>

  
      <div class="overflow-x-auto">
          <table class="w-full text-center border border-gray-300 border-collapse text-white ">
              <thead>
                  <tr>
                      <th class="border border-gray-300 py-1 bg-blue-900 text-xs">Date</th>
                      <th class="border border-gray-300 py-1 bg-blue-900 text-xs ">Time</th>
                      <th class="border border-gray-300 py-1 bg-blue-900 text-xs">Events</th>
                      <th class="border border-gray-300 py-1 bg-blue-900 text-xs">Venue</th>
                    
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/04</td>
                      <td class="border border-gray-300 py-1 text-xs">6:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Parade</td>
                      <td class="border border-gray-300 py-1 text-xs"> Gym</td>
                  </tr>
                  <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/04</td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Presentation of Miss. &  Mr. Civil Service,CheerDance, Health Fair Season Kickoff & Larong Lahi</td>
                      <td class="border border-gray-300 py-1 text-xs">Covered Court</td>
                  </tr>

                    <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/05</td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Start of the Team & Individual Games</td>
                      <td class="border border-gray-300 py-1 text-xs">Various Location</td>
                  </tr>
                    <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/12-13</td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Training on Safety & 1st Aide</td>
                      <td class="border border-gray-300 py-1 text-xs">Gym</td>
                  </tr>
                    <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/17</td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Mr.& Miss Civil Talent Comp.</td>
                      <td class="border border-gray-300 py-1 text-xs">Robs</td>
                  </tr>
                    <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/18</18td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Civil Servants of the Day</td>
                      <td class="border border-gray-300 py-1 text-xs">LGU Offices</td>
                  </tr>
                    <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/19-20</td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Health Fair, Healthy Servants & Exceptional Service</td>
                      <td class="border border-gray-300 py-1 text-xs">Gym</td>
                  </tr>
                    <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/25</td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs"> Mr. & Miss Civil Service Coronation Night</td>
                      <td class="border border-gray-300 py-1 text-xs">Gym</td>
                  </tr>
                      <tr>
                      <td class="border border-gray-300 py-1 text-xs">9/27</td>
                      <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                      <td class="border border-gray-300 py-1 text-xs">Awarding of all Events & Culmination Night</td>
                      <td class="border border-gray-300 py-1 text-xs">Covered Court</p>
                  </tr>
                    </tbody>
                 </table>
                </div>



                  <div class="border border-gray-300 rounded-5xl mt-3 mb-3  bg-blue-900">
                      <div class="font-medium text-center flex-1 text-white"> GAME SCHEDULES </div>
                      <div class="dropdown">
                          <!-- Dropdown content goes here -->
                      </div>
                  </div>
              
                <div class="overflow-x-auto">
                    <table class="w-full text-center border border-gray-300 border-collapse text-white  ">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 py-1 bg-blue-800 text-xs">Cluster</th>
                                <th class="border border-gray-300 py-1 bg-blue-800 text-xs ">Time</th>
                                <th class="border border-gray-300 py-1 bg-blue-800 text-xs">Events</th>
                                <th class="border border-gray-300 py-1 bg-blue-800 text-xs">Venue</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">1</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">BASKETBALL MEN</td>
                                <td class="border border-gray-300 py-1 text-xs"> Gym</td>
                            </tr>

                              <tr>
                                <td class="border border-gray-300 py-1 text-xs">2</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">TABLE TENNIS</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                              <tr>
                                <td class="border border-gray-300 py-1 text-xs">3</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">DARTS</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                              <tr>
                                <td class="border border-gray-300 py-1 text-xs">4</td>
                                <td class="border border-gray-300 py-1 text-xs">9:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">CHESS</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                              <tr>
                                <td class="border border-gray-300 py-1 text-xs">5</18td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">BADMINTON</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                              
                            
                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">6</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">VOLLEYBALL</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">7</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">VOLLEYBALL</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">8</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">VOLLEYBALL</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">9</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">VOLLEYBALL</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                           </tr>

                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">10</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">VOLLEYBALL</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">11</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">VOLLEYBALL</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>

                            <tr>
                                <td class="border border-gray-300 py-1 text-xs">12</td>
                                <td class="border border-gray-300 py-1 text-xs">8:00 AM</td>
                                <td class="border border-gray-300 py-1 text-xs">VOLLEYBALL</td>
                                <td class="border border-gray-300 py-1 text-xs">Gym</td>
                            </tr>


                          </tbody>
                    </table>
                </div>

                    

                <div class="p-4">
                    <!-- Announcement Box -->
                    <div class="border border-gray-300 shadow-sm rounded-md p-4 mb-4 mt-5 bg-blue-400">
                      <div class="flex justify-between items-center">
                        <div class="font-medium text-white text-center flex-1">ANNOUNCEMENT</div>
                        <div class="dropdown">
                          <!-- Dropdown content goes here -->
                        </div>
                      </div>
                    </div>


                    <!-- Overflow Container -->
                    <div class="overflow-x-auto border border-gray-300 shadow-sm bg-white p-4">
                      <p class="mb-2">* CIVIL SERVICE MONTH 2024 IS COMING</p>
                      {{-- <p class="mb-2">*</p>
                      <p>*</p> --}}
                    </div>
                  </div>
    
             <hr style="border: 1px solid #ccc; margin: 20px 0;">
            <div class="p-4 text-center flex justify-center">
                <div class="flex flex-col items-center">
                    <p class="mb-2">Powered by:</p>
                  <td class="border table-small-padding text-center">
                    <a href="{{ route('invitational.create') }}">
                        <img src="{{ asset('build/its.png') }}" alt="Love" class="w-20 h-20">
                    </a>
                </td>

                </div>
            </div>


           </div>
         </div>
      </div>
   </div>
  </aside> 

{{-- 
======================================clsuter=============================================================================================================== --}}

            <div class="p-4 xl:ml-80">
              <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                  <div class="capitalize">
                    <nav aria-label="breadcrumb" class="w-max">
                      <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                          <style>
                                .list-item {
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-between;
                                }
                                .list-item img {
                                    width: 24px; /* Adjust size as needed */
                                    height: auto;
                                    margin-left: 10px; /* Space between text and image */
                                }
                            </style>


                                    <ul>
                                        <li class="  list-item flex items-center text-white antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                            {{-- <p class="block antialiased font-sans text-white text-bold text-black text-2xl ">RANKS</p>    --}}
                                        </li>
                                        <li class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                            <!-- Another list item content here -->
                                        </li>
                                    </ul>
                                  </ol>
                                </nav>     
                              </div>

                              <div class="flex items-center ">
                                <div class="mr-auto md:mr-4 md:w-56">
                                  <div class="relative w-full min-w-[200px] h- ">          
                                  </div>
                                </div>  

                              </div>
                          </div>
                      </nav>


{{-- 
===================================================rranks=============================================================================== --}}
               
                  <div class="mt-8">

                    <div class="flex flex-grow justify-center items-center space-x-4 bg-custom box-shadow bg-gradient-to-r from-red-500 to-gray-300 ">
                                  <!-- First Image -->
                                  <img src="{{url('/build/Official_Seal_of_Valencia_Bukidnon.png')}}" alt="Official Seal of Valencia Bukidnon" class="max-w-50 rounded h-10 w-10">
                                  
                                  <!-- Heading -->
                                      <style>
                                          /* Custom CSS for gradient text */
                                      .bg-gradient-text {
                                          background: linear-gradient(to right, #ececf7, #e9ecdf); /* Gradient from red to gray */
                                          -webkit-background-clip: text; /* Clips the gradient to the text */
                                          -webkit-text-fill-color: transparent; /* Makes the text color transparent so the gradient is visible */
                                          background-clip: text; /* For non-webkit browsers */
                                          color: transparent; /* Ensures the text color is transparent */
                                      }

                                      </style>
                                  
                                          <h1 class="text-3xl font-bold font-sans shadow-md p-2 rounded-lg text-center bg-gradient-text">
                                            CIVIL SERVICE MONTH CELEBRATION 2024
                                          </h1>

                                                  
                                  <!-- Second Image -->
                                  <img src="{{url('/build/Civil_Service_Com.png')}}" alt="Civil Service Commission" class="max-w-50 rounded h-10 w-10">
                              </div>

                              <div class="mb-12 text-center">
                            <a href="/score" class="text-decoration-none">
                                <h2 class="text-3xl font-bold font-sans p-4 text-center bg-white custom-border-shadow inline-block rounded-lg">
                                    Cluster Scoring / Standing
                                </h2>
                            </a>
                        </div>

              
{{-- ========================end of ranks=========================================================================================================================== --}}




{{-- ===================slider=========================================================================== --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Playlist and Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .video-container {
            position: relative;
            width: 100%;
            max-width: 500px; /* Adjust max-width as needed */
            margin: auto;
        }

        video {
            width: 100%; /* Full width of the container */
            height: 100%; /* Full height of the container */
            object-fit: cover; /* Ensures the video covers the container without distortion */
        }

        /* Slider styles */
        .slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 50px; /* Adjust height as needed */
        }

        .slider-wrapper {
            display: flex;
            width: calc(100px * 2 + 10px * 10); /* Adjust based on number of items and spacing */
            height: 50%;
            transition: transform 0.5s ease-in-out;
        }

        .slider-item {
            flex: 0 0 auto;
            width: 100px; /* Adjust width as needed */
            height: 100%; /* Full height of the container */
            margin-right: 16px; /* Space between items */
            border-radius: 8px; /* Optional, for rounded corners */
            position: relative;
            overflow: hidden; /* Ensures content does not overflow */
        }

        .slider-item img {
            width: 100%; /* Ensures the image fills the button width */
            height: 50%; /* Ensures the image fills the button height */
            object-fit: cover; /* Ensures the image covers the button area without distortion */
            border-radius: 8px; /* Match border radius if needed */
        }

        .slider-item span {
            position: absolute;
            bottom: 16px; /* Adjust position as needed */
            left: 16px; /* Adjust position as needed */
            color: white; /* Ensure text is visible on the image */
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8); /* Optional: add shadow for better text visibility */
        }
    </style>
</head>
<body class="bg-gray-100 p-1">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-10">
        <!-- Video Player Section -->
        <div class="p-1 relative flex flex-col min-w-0 lg:mb-0 break-words bg-white dark:bg-gray-800 shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center ">
                    <div class="relative w-full max-w-full flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50 flex items-center">
                        </h3>
                    </div>
                </div>
                <div class="video-container p-0">
                    <video id="videoPlayer" controls autoplay class="w-full h-auto">
                        <source src="{{ asset('build/neon.mp4') }}" type="video/mp4">
                        {{-- <source src="{{ asset('build/CONCEPCION.mp4') }}" type="video/mp4">
                        <source src="{{ asset('build/GUINOYURAN.mp4') }}" type="video/mp4">
                        <source src="{{ asset('build/LALIGAN.mp4') }}" type="video/mp4"> --}}
                    </video>
                </div>
            </div>
        </div>



    <!-- Slider Section -->
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        {{-- <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Standing As for Today:</div>
        </div> --}}

        <!-- Grid Layout for Rankings -->
        <div class="mb-12 grid grid-cols-6 gap-6">
            <!-- Header for Ranks -->
            <div class="col-span-1 text-center font-bold text-black text-xl">1ST</div>
            <div class="col-span-1 text-center font-bold text-black text-xl">2ND</div>
            <div class="col-span-1 text-center font-bold text-black text-xl">3RD</div>
            <div class="col-span-1 text-center font-bold text-black text-xl">4TH</div>
            <div class="col-span-1 text-center font-bold text-black text-xl ">5TH</div>
            <div class="col-span-1 text-center font-bold text-black text-xl">6TH</div>
            
            <!-- Grid for Top 6 Scores -->
           @foreach($invitations->sortByDesc('total')->take(6) as $index => $invitation)
                <div class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    @php
                        $rankColors = [
                            'from-pink-600 to-pink-400',
                            'from-blue-600 to-blue-400',
                            'from-yellow-900 to-brown-400',
                            'from-yellow-100 to-yellow-400',
                            'from-gray-600 to-gray-400',
                            'from-purple-600 to-purple-400'
                        ];
                        $rankColor = $rankColors[$index] ?? 'from-gray-600 to-gray-400';
                    @endphp
                    <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr {{ $rankColor }} text-white shadow-{{ str_replace(' ', '-', $rankColor) }}/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                     @if($invitation->logo)
                            <a href="{{ route('invitational.edit', ['invitational' => $invitation->id]) }}">
                                <img src="{{ asset('storage/logos/' . $invitation->logo) }}" alt="Logo" class="w-12 h-12 object-cover rounded-full cursor-pointer" title="Edit">
                            </a>
                        @else
                            No Logo
                        @endif

                        </div>
                    
                    <div class="p-2 text-right">
                        <h4 class="block antialiased tracking-normal font-sans text-sm font-semibold leading-snug text-blue-gray-900">{{ $invitation->cluster }}</h4>
                    </div>
                    <div class="border-t border-blue-gray-50 p-4">
                        <td>{{ $invitation->total }}</td>
                    </div>
                </div>
            @endforeach
        </div>
  

{{-- -===========================second slider================================================================================ --}}

    <style>
        .sliderAx {
            position: relative;
            overflow: hidden;
        }
        .slides-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slide {
            background-size: cover;
            background-position: center;
            height: 300px; /* Adjust height as needed */
            width: 100%;
            flex-shrink: 0;
        }
        .bg-top {
            background: white; /* Example background color for non-image sections */
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            padding-bottom: 1rem;
        }
        .button {
            background-color:white;
            border-radius: 9999px; /* Fully rounded */

            width: 1rem;
            height: 1rem;
            cursor: pointer;
        }

        .button:hover {
            background-color:white; /* Darker shade on hover */
        }
    </style>
</head>
<body class="bg-gray-100 p-6">

    <div class="sliderAx h-auto">
        <div class="slides-container">
            <div class="slide" style="background-image: url('/build/1242.jpg');">
                <!-- Slide content can be placed here if needed -->
            </div>          
             <div class="slide" style="background-image: url('/build/1242.jpg');">
                <!-- Slide content can be placed here if needed -->
            </div>
           
        </div>
    </div>

    <div class="button-container">
        <button id="sButton1" onclick="prevSlide()" class="button"></button>
        <button id="sButton2" onclick="nextSlide()" class="button"></button>
     
    </div>

    <script>
        const slidesContainer = document.querySelector('.slides-container');
        const slides = document.querySelectorAll('.slide');
        let currentIndex = 0;

        function showSlide(index) {
            const totalSlides = slides.length;
            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }
            slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        // Optionally, auto-slide
        setInterval(nextSlide, 3000); // Change slide every 3 seconds
    </script>



  </div>
</div>




    </div>

    <script>
        // JavaScript for video playlist functionality without visible playlist
        const videoElement = document.getElementById('videoPlayer');
        const sources = [
            '{{ asset('build/neon.mp4') }}',
            // '{{ asset('build/CONCEPCION.mp4') }}',
            // '{{ asset('build/GUINOYURAN.mp4') }}',
            // '{{ asset('build/LALIGAN.mp4') }}'
        ];
        let currentSourceIndex = 0;

        function changeVideoSource(index) {
            videoElement.src = sources[index];
            videoElement.play();
            currentSourceIndex = index;
        }

        videoElement.addEventListener('ended', () => {
            currentSourceIndex = (currentSourceIndex + 1) % sources.length;
            changeVideoSource(currentSourceIndex);
        });

        // Initialize with the first video
        changeVideoSource(currentSourceIndex);

        // JavaScript for automatic sliding with carousel effect
        const sliderWrapper = document.querySelector('.slider-wrapper');
        const sliderItems = document.querySelectorAll('.slider-item');
        const totalItems = sliderItems.length;
        const itemWidth = sliderItems[0].offsetWidth + parseInt(window.getComputedStyle(sliderItems[0]).marginRight);
        const slideInterval = 3000; // 3 seconds for each slide

        let index = 0;

        function cloneItems() {
            sliderWrapper.innerHTML += sliderWrapper.innerHTML; // Duplicate items to create an infinite effect
        }

        function moveToNextSlide() {
            if (index >= totalItems) {
                index = 0;
                sliderWrapper.style.transition = 'none'; // Disable transition to jump instantly
                sliderWrapper.style.transform = `translateX(0)`;
                setTimeout(() => {
                    sliderWrapper.style.transition = 'transform 0.5s ease-in-out'; // Re-enable transition
                    index++;
                    sliderWrapper.style.transform = `translateX(-${index * itemWidth}px)`;
                }, 50); // Small delay to ensure jump happens before transitioning
            } else {
                index++;
                sliderWrapper.style.transform = `translateX(-${index * itemWidth}px)`;
            }
        }

        cloneItems(); // Clone items initially
        setInterval(moveToNextSlide, slideInterval);
    </script>

             
{{-- =========================end of slider======================================================================= --}}

   
  

          
{{--------------------------------------------------- start of table ------------------------------------}}

                @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded">
        {{ session('success') }}
    </div>
@endif



<div class="p-6 px-0 pt-0 pb-2">
    <p class="font-sans font-bold text-blue-900 mt-2 text-xl mb-1">INVITATIONAL CATEGORY</p>
    <table class="w-full min-w-[640px] table-auto">
        <thead>
            <tr class="bg-blue-400 text-center text-white">
                <th class="border table-small-padding text-sm">Cluster</th>
                <th class="border table-small-padding text-sm">Logo</th>
                <th class="border table-small-padding text-sm">Best in Parade</th>
                <th class="border table-small-padding text-sm">Banner Pulling</th>
                <th class="border table-small-padding text-sm">CDance</th>
              
                 <th class="border table-small-padding text-sm">TWar Men</th>
                 <th class="border table-small-padding text-sm">TWar women</th>
                 <th class="border table-small-padding text-sm">SRace Men</th>
                 <th class="border table-small-padding text-sm">SRace Women</th>
                 <th class="border table-small-padding text-sm">Bakya Men</th>
                 <th class="border table-small-padding text-sm">Bakya Women</th>

                <th class="border table-small-padding text-sm">BBall Men</th>
                <th class="border table-small-padding text-sm">BBall Women</th>
                <th class="border table-small-padding text-sm">Dance Sports</th>


                <th class="border table-small-padding text-sm">Bad Men</th>
                <th class="border table-small-padding text-sm">Bad Women</th>
                <th class="border table-small-padding text-sm">Bad Mixed</th>
                <th class="border table-small-padding text-sm">Chess Men</th>
                <th class="border table-small-padding text-sm">Chess Women</th>
                <th class="border table-small-padding text-sm">Dart Men</th>
                <th class="border table-small-padding text-sm">Dart Women</th>
                <th class="border table-small-padding text-sm">Dart Mixed</th>
                <th class="border table-small-padding text-sm">Mr. C S</th>
                <th class="border table-small-padding text-sm">Mis. C S</th>
                <th class="border table-small-padding text-sm">T-T Men</th>
                <th class="border table-small-padding text-sm">T-T Women</th>
                <th class="border table-small-padding text-sm">T-T Mixed</th>
                <th class="border table-small-padding text-sm">V Men</th>
                <th class="border table-small-padding text-sm">V Women</th>
                 <th class="border table-small-padding text-sm">Add Points</th>
                <th class="border table-small-padding text-xl bg-red-500 text-white">TOTAL</th>
            </tr>
        </thead>
        <tbody>
             @foreach($invitations as $index => $invitation)
                <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-blue-100' }} border-b text-center">
                    <td>{{ $invitation->cluster }}</td>
                    <td class="border table-small-padding text-center">
                        <div class="flex items-center justify-center">
                          @if($invitation->logo)
                                <a href="{{ route('invitational.edit', ['invitational' => $invitation->id]) }}">
                                    <img src="{{ asset('storage/logos/' . $invitation->logo) }}" alt="Logo" class="w-12 h-12 object-cover rounded-full cursor-pointer" title="Edit">
                                </a>
                            @else
                                No Logo
                            @endif
                        </div>
                    </td>
                     <td>{{ $invitation->best_in_parade }}</td>
                        <td>{{ $invitation->banner_pulling }}</td>
                        <td>{{ $invitation->cheerdance }}</td>
                        <td>{{ $invitation->tag_of_war_men }}</td>
                        <td>{{ $invitation->tag_of_war_women }}</td>
                        <td>{{ $invitation->sack_race_men }}</td>
                        <td>{{ $invitation->sack_race_women }}</td>
                        <td>{{ $invitation->bakya_men }}</td>
                        <td>{{ $invitation->bakya_women }}</td>
                        <td>{{ $invitation->basketball_men }}</td>
                        <td>{{ $invitation->basketball_women }}</td>
                        <td>{{ $invitation->dance_sports }}</td>
                        <td>{{ $invitation->badminton_men }}</td>
                        <td>{{ $invitation->badminton_women }}</td>
                        <td>{{ $invitation->badminton_mixed }}</td>
                        <td>{{ $invitation->chess_men }}</td>
                        <td>{{ $invitation->chess_women }}</td>
                        <td>{{ $invitation->dart_men }}</td>
                        <td>{{ $invitation->dart_women }}</td>
                        <td>{{ $invitation->dart_mixed }}</td>
                        <td>{{ $invitation->mr_civil_service }}</td>
                        <td>{{ $invitation->miss_civil_service }}</td>
                        <td>{{ $invitation->table_tennis_men }}</td>
                        <td>{{ $invitation->table_tennis_women }}</td>
                        <td>{{ $invitation->table_tennis_mixed }}</td>
                        <td>{{ $invitation->volleyball_men }}</td>
                        <td>{{ $invitation->volleyball_women }}</td>
                        <td>{{ $invitation->additional_points }}</td>
                        <td>{{ $invitation->total }}</td>


                </tr>
            @endforeach
        </tbody>
    </table>
</div>


  

 {{-- --------------------------------------------end of the table------------------------------- --}

{{-- ====================MARQUEE FOOTER================================================================================================== --}}
  <style>
    .marquee {
      width: 100%;
      overflow: hidden;
      position: relative;
       background: linear-gradient(to right, #3b82f6, #d1d5db); /* blue-500 to gray-400 */
    }

    .marquee-content {
      display: flex;
      align-items: center;
      white-space: nowrap;
      animation: marquee 40s linear infinite;
    }

    @keyframes marquee {
      from {
        transform: translateX(100%);
      }
      to {
        transform: translateX(-100%);
      }
    }
  </style>

</head>
<body>
  <div class="p-1">
    <!-- Container for the marquee effect -->
    <div class="marquee ">
      <div class="marquee-content ">

        <h6 class=" text-sm rounded-lg text-white block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-200 bg-gradient-to-r from-red-500 to-red-500 p-1 px-10">
          CIVIL SERVICE MONTH CELEBRATION 2024 !!!!  READY FOR THE BATTLE.. WHO'S THE BEST AMONG THE CLUSTERS
        </h6>
        <img src="/build/source.gif" alt="Basketball GIF" class="w-10 h-10 ml-4">
      </div>
    </div>

    <!-- Paragraph styling -->
   
  </div>
</body>
</html>
