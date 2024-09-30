@include('partials.header')
<?php $array = array('title' => 'V-ABLE   SYSTEM'); ?>
<x-nav :data="$array"/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Service Celebration 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom linear gradient background */
        .linear-gradient-bg {
            background: linear-gradient(to bottom right, #1e3a8a, #60a5fa); /* Adjust colors as needed */
        }
        /* Custom style for the title text */
        .title-text {
            text-align: center;
            font-size: 5rem; /* Adjust size as needed */
            color: rgb(255, 255, 255);
            text-transform: uppercase; /* Capitalize the text */
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Box shadow for text */
        }
        /* Uniform size and circular style for images */
        .circular-image {
            width: 400px; /* Set a uniform size */
            height: 400px;
          
        }
    </style>
</head>
<body>

    <div class="min-h-screen linear-gradient-bg flex flex-col justify-center items-center w-full">
        <form>
            <div class="flex justify-center mb-6 gap-4"> <!-- Added gap for spacing between images -->
                <img src="/build/Official_Seal_of_Valencia_Bukidnon.png" alt="Official Seal" class="circular-image" />
               {{-- <img src="/build/LOVE KO.JPG" alt="LOVE KO" class="circular-image" /> --}}
                <img src="/build/Civil_Service_Com.png" alt="Civil Service Com" class="circular-image" />
                <img src="/build/its_full.png" alt="Its Full" class="" />
            </div>
        </form>
        <a href="/score" class="title-text">Civil Service Celebration 2024</a>

          
    </div>
</body>
</html>
