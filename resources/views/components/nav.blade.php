
   <style>
        .bg-custom {
            background-color: rgb(255, 255, 255); /* Light gray background color or adjust as needed */
        }

        .hsl-shadow {
            box-shadow: 
                0 4px 8px hsl(100, 90%, 47%), /* Yellow shadow */
                0 6px 20px hsl(60, 100%, 40%); /* Darker yellow shadow */
        }
    </style>
</head>
<body>
    <style>
    .white-shadow {
        box-shadow: 0 4px 8px rgba(255, 255, 255, 0.5);
    }
</style>
    <nav x-data="{ open: false }" class="bg-white font-sans fixed w-full z-20 top-0 white-shadow left-0 border-blue-gray-600 px-2 sm:px-4 py-2.5 bg-gradient-to-r from-red-500 to-gray-300">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/">
                <!-- You can include a logo or home link here if needed -->
            </a>

            <!-- Centered Content -->
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
                            CLUSTER SCORING / STANDING
                        </h1>

                                
                <!-- Second Image -->
                <img src="{{url('/build/Civil_Service_Com.png')}}" alt="Civil Service Commission" class="max-w-50 rounded h-10 w-10">
            </div>

            <!-- Navigation Items (e.g., mobile menu) -->
            <div x-show="open" class="w-full md:block md:w-auto" id="nav-main">
                <x-items />                   
            </div>

            <div class="hidden w-full md:block md:w-auto" id="nav-main">
                <x-items />                       
                   </div>
                 </div>
             </nav>
        </body>
    </html>
