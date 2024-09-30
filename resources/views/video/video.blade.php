<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Playlist with Looping</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .video-container {
            position: relative;
            width: 100%;
            max-width: 800px; /* Adjust max-width as needed */
            margin: auto;
        }
        video {
            width: 100%; /* Full width of the container */
            height: auto; /* Maintains aspect ratio */
        }
        .playlist {
            margin-top: 1rem;
        }
        .playlist-item {
            padding: 0.5rem;
            border: 1px solid #ddd;
            margin-bottom: 0.5rem;
            border-radius: 0.25rem;
        }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="p-1 relative flex flex-col min-w-0 lg:mb-0 break-words bg-white dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Video Playlist</h3>
                    </div>
                </div>
                
                <div class="video-container">
                    <video id="videoPlayer" controls>
                        <source src="{{ asset('build/neon.mp4') }}" type="video/mp4">
                        <source src="{{ asset('build/d.mp4') }}" type="video/mp4">
                        <!-- <source src="{{ asset('build/GUINOYURAN.mp4') }}" type="video/mp4">
                        <source src="{{ asset('build/LALIGAN.mp4') }}" type="video/mp4"> -->
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="playlist">
                    <div class="playlist-item">neon.mp4</div>
                    <div class="playlist-item">Concepcion.mp4</div>
                    <div class="playlist-item">Guinoyuran.mp4</div>
                    <div class="playlist-item">Laligan.mp4</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const videoElement = document.getElementById('videoPlayer');
            const sources = [
                '{{ asset('build/neon.mp4') }}',
                '{{ asset('build/CONCEPCION.mp4') }}',
                '{{ asset('build/GUINOYURAN.mp4') }}',
                '{{ asset('build/LALIGAN.mp4') }}'
            ];
            let currentSourceIndex = 0;

            // Function to change video source
            function changeVideoSource(index) {
                videoElement.src = sources[index];
                videoElement.play(); // Start playing the video immediately
                currentSourceIndex = index;
            }

            // Event listener for when the video ends
            videoElement.addEventListener('ended', () => {
                currentSourceIndex = (currentSourceIndex + 1) % sources.length;
                changeVideoSource(currentSourceIndex);
            });

            // Initialize the first video automatically
            changeVideoSource(currentSourceIndex);
        });
    </script>
</body>
</html>
