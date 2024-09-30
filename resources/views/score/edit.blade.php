<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Custom gradient text and shadow styles */
        .gradient-text {
            background: linear-gradient(90deg, #1c09e3, #2d07c4); /* Gradient colors */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text; /* For non-webkit browsers */
        }

        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Customize the shadow */
        }
    </style>
</head>
<body>
    <div class="w-full min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full h-full flex items-center justify-center">
            <div class="w-full sm:w-5/6 md:w-2/3 lg:w-1/2 xl:w-1/3 2xl:w-1/4 bg-white p-8 rounded shadow-md">

                <form method="POST" action="{{ route('score.update', $score->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <!-- First Section: Cluster and Logo Upload -->
                    <div class="space-y-4">
                        <!-- Cluster Name Dropdown -->
                        <div class="flex flex-col my-4">
                            <label for="cluster" class="text-gray-700 text-xl font-bold">Edit Cluster Name</label>
                            <select name="cluster" id="cluster" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-xl text-gray-900">
                                <option value="">Select a Cluster</option>
                                <option value="Cluster 1" {{ $score->cluster === 'Cluster 1' ? 'selected' : '' }}>Cluster 1</option>
                                <option value="Cluster 2" {{ $score->cluster === 'Cluster 2' ? 'selected' : '' }}>Cluster 2</option>
                                <option value="Cluster 3" {{ $score->cluster === 'Cluster 3' ? 'selected' : '' }}>Cluster 3</option>
                                <option value="Cluster 4" {{ $score->cluster === 'Cluster 4' ? 'selected' : '' }}>Cluster 4</option>
                                <option value="Cluster 5" {{ $score->cluster === 'Cluster 5' ? 'selected' : '' }}>Cluster 5</option>
                                <option value="Cluster 6" {{ $score->cluster === 'Cluster 6' ? 'selected' : '' }}>Cluster 6</option>
                                <option value="Cluster 7" {{ $score->cluster === 'Cluster 7' ? 'selected' : '' }}>Cluster 7</option>
                                <option value="Cluster 8" {{ $score->cluster === 'Cluster 8' ? 'selected' : '' }}>Cluster 8</option>
                                <option value="Cluster 9" {{ $score->cluster === 'Cluster 9' ? 'selected' : '' }}>Cluster 9</option>
                                <option value="Cluster 10" {{ $score->cluster === 'Cluster 10' ? 'selected' : '' }}>Cluster 10</option>
                            </select>
                        </div>
                        
                        <!-- Photo Upload -->
                        <div class="flex flex-col my-4">
                            <label for="logo" class="text-gray-700 text-xl font-bold">Upload Logo</label>
                            <input type="file" name="logo" id="logo" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900">
                            @if($score->logo)
                                <img src="{{ asset('storage/' . $score->logo) }}" alt="Current Logo" class="mt-2 h-32 w-auto">
                            @endif
                        </div>
                    </div>
                    
                    <!-- Second Section: Scores Inputs -->
                    <div class="space-y-4 my-4">
                        <!-- First Sub-Section: Group 1 -->
                        <div class="space-y-4 mb-4">
                            @foreach([
                                'best_in_parade' => 'Best in Parade',
                                'banner_pulling' => 'Banner Pulling',
                                'cheerdance' => 'Cheerdance',
                                'larong_lahi' => 'Larong Lahi',
                                'tag_of_war_men' => 'Tag of War Men',
                                'tag_of_war_women' => 'Tag of War Women',
                                'sack_race_men' => 'Sack Race Men',
                                'sack_race_women' => 'Sack Race Women',
                                'bakya_men' => 'Bakya Men',
                                'bakya_women' => 'Bakya Women',                          
                                'basketball_men' => 'Basketball Men',
                                'basketball_women' => 'Basketball Women',
                                'badminton_men' => 'Badminton Men',
                                'badminton_women' => 'Badminton Women'
                            ] as $key => $label)
                                <div class="flex flex-col my-4">
                                    <label for="{{ $key }}" class="text-gray-700 text-xl font-bold">{{ $label }}</label>
                                    <input type="number" name="{{ $key }}" id="{{ $key }}" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-xl text-gray-900" placeholder="Enter {{ $label }} Score" value="{{ old($key, $score->$key) }}">
                                </div>
                            @endforeach
                        </div>

                        <!-- Second Sub-Section: Group 2 -->
                        <div class="space-y-4">
                            @foreach([
                                'badminton_mixed' => 'Badminton Mixed',
                                'chess_men' => 'Chess Men',
                                'chess_women' => 'Chess Women',
                                'dart_men' => 'Dart Men',
                                'dart_women' => 'Dart Women',
                                'dart_mixed' => 'Dart Mixed',
                                'mr_civil_service' => 'Mr. Civil Service',
                                'miss_civil_service' => 'Miss Civil Service',
                                'table_tennis_men' => 'Table Tennis Men',
                                'table_tennis_women' => 'Table Tennis Women',
                                'table_tennis_mixed' => 'Table Tennis Mixed',
                                'volleyball_men' => 'Volleyball Men',
                                'volleyball_women' => 'Volleyball Women',
                                'additional_points' => 'Additional Points' // Added field
                            ] as $key => $label)
                                <div class="flex flex-col my-4">
                                    <label for="{{ $key }}" class="text-gray-700 text-xl font-bold">{{ $label }}</label>
                                    <input type="number" name="{{ $key }}" id="{{ $key }}" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-xl text-gray-900" placeholder="Enter {{ $label }} Score" value="{{ old($key, $score->$key) }}">
                                </div>
                            @endforeach
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="my-4 flex items-center justify-center">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Update Scores</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
