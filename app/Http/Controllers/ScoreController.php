<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Invitational;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class ScoreController extends Controller
{
    public function index()
    {
        try {
            // Fetch scoring records from the database
            $scores = Score::all(); // Replace with your actual model and query

            // Calculate total for each scoring record
            foreach ($scores as $score) {
                $score->total = (
                    $score->best_in_parade +
                    $score->banner_pulling +
                    $score->cheerdance +
                    $score->tag_of_war_men +
                    $score->tag_of_war_women +
                    $score->sack_race_men +
                    $score->sack_race_women +
                    $score->bakya_men +
                    $score->bakya_women +
                    $score->basketball_men +
                    $score->basketball_women +
                    $score->badminton_men +
                    $score->badminton_women +
                    $score->badminton_mixed +
                    $score->chess_men +
                    $score->chess_women +
                    $score->dart_men +
                    $score->dart_women +
                    $score->dart_mixed +
                    $score->mr_civil_service +
                    $score->miss_civil_service +
                    $score->table_tennis_men +
                    $score->table_tennis_women +
                    $score->table_tennis_mixed +
                    $score->volleyball_men +
                    $score->volleyball_women +
                    $score->additional_points
                ) ?: 0; // Ensure total is set to 0 if null
            }

            // Sort scores by total in descending order
            $scores = $scores->sortByDesc('total');


 // Fetch invitational data
 $invitationalData = Invitational::all();

 // Calculate total for each invitational record
 foreach ($invitationalData as $invitational) {
     $invitational->total = (
         $invitational->best_in_parade +
         $invitational->banner_pulling +
         $invitational->cheerdance +
         $invitational->tag_of_war_men +
         $invitational->tag_of_war_women +
         $invitational->sack_race_men +
         $invitational->sack_race_women +
         $invitational->bakya_men +
         $invitational->bakya_women +
         $invitational->basketball_men +
         $invitational->basketball_women +
         $invitational->dance_sports +

         $invitational->badminton_men +
         $invitational->badminton_women +
         $invitational->badminton_mixed +
         $invitational->chess_men +
         $invitational->chess_women +
         $invitational->dart_men +
         $invitational->dart_women +
         $invitational->dart_mixed +
         $invitational->mr_civil_service +
         $invitational->miss_civil_service +
         $invitational->table_tennis_men +
         $invitational->table_tennis_women +
         $invitational->table_tennis_mixed +
         $invitational->volleyball_men +
         $invitational->volleyball_women +
         $invitational->additional_points
     ) ?: 0; // Ensure total is set to 0 if null
 }

 // Sort invitational data by total in descending order
 $invitationalData = $invitationalData->sortByDesc('total');

            return view('score.index', [
                'scores' => $scores,
                'invitationalData' => $invitationalData
            ]);
        } catch (\Exception $e) {
            // Log the exception message
            Log::error('Error fetching data: ' . $e->getMessage());

            // Return a view with an error message
            return response()->view('errors.general', ['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        return view('score.create');
    }

    public function store(Request $request)
    {
        // Validate the request data including additional_points
        $validated = $request->validate([
            'cluster' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'best_in_parade' => 'nullable|integer',
            'banner_pulling' => 'nullable|integer',
            'cheerdance' => 'nullable|integer',
            'larong_lahi' => 'nullable|integer',
            'tag_of_war_men' => 'nullable|integer',
            'tag_of_war_women' => 'nullable|integer',
            'sack_race_men' => 'nullable|integer',
            'sack_race_women' => 'nullable|integer',
            'bakya_men' => 'nullable|integer',
            'bakya_women' => 'nullable|integer',
            'basketball_men' => 'nullable|integer',
            'basketball_women' => 'nullable|integer',
            'badminton_men' => 'nullable|integer',
            'badminton_women' => 'nullable|integer',
            'badminton_mixed' => 'nullable|integer',
            'chess_men' => 'nullable|integer',
            'chess_women' => 'nullable|integer',
            'dart_men' => 'nullable|integer',
            'dart_women' => 'nullable|integer',
            'dart_mixed' => 'nullable|integer',
            'mr_civil_service' => 'nullable|integer',
            'miss_civil_service' => 'nullable|integer',
            'table_tennis_men' => 'nullable|integer',
            'table_tennis_women' => 'nullable|integer',
            'table_tennis_mixed' => 'nullable|integer',
            'volleyball_men' => 'nullable|integer',
            'volleyball_women' => 'nullable|integer',
            'additional_points' => 'nullable|integer', // Validate additional_points
        ]);

        // Handle file upload for logo
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Store the file and save the path
            $path = $file->storeAs('logos', $filename, 'public');
            $validated['logo'] = $filename;
        } else {
            $validated['logo'] = null;
        }

        // Create a new Scoring record
        Score::create($validated);

        return redirect()->route('score.index')->with('success', 'Score added successfully!');
    }

    public function edit($id)
    {
        $score = Score::findOrFail($id); // Fetch score by id
        return view('score.edit', compact('score')); // Pass the score to the edit view
    }

    public function update(Request $request, $id)
    {
        $score = Score::findOrFail($id); // Fetch the existing score record

        // Validate the request data including additional_points
        $validated = $request->validate([
            'cluster' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'best_in_parade' => 'nullable|integer',
            'banner_pulling' => 'nullable|integer',
            'cheerdance' => 'nullable|integer',
            'larong_lahi' => 'nullable|integer',
            'tag_of_war_men' => 'nullable|integer',
            'tag_of_war_women' => 'nullable|integer',
            'sack_race_men' => 'nullable|integer',
            'sack_race_women' => 'nullable|integer',
            'bakya_men' => 'nullable|integer',
            'bakya_women' => 'nullable|integer',
            'basketball_men' => 'nullable|integer',
            'basketball_women' => 'nullable|integer',
            'badminton_men' => 'nullable|integer',
            'badminton_women' => 'nullable|integer',
            'badminton_mixed' => 'nullable|integer',
            'chess_men' => 'nullable|integer',
            'chess_women' => 'nullable|integer',
            'dart_men' => 'nullable|integer',
            'dart_women' => 'nullable|integer',
            'dart_mixed' => 'nullable|integer',
            'mr_civil_service' => 'nullable|integer',
            'miss_civil_service' => 'nullable|integer',
            'table_tennis_men' => 'nullable|integer',
            'table_tennis_women' => 'nullable|integer',
            'table_tennis_mixed' => 'nullable|integer',
            'volleyball_men' => 'nullable|integer',
            'volleyball_women' => 'nullable|integer',
            'additional_points' => 'nullable|integer', // Validate additional_points
        ]);

        if ($request->hasFile('logo')) {
            // Store the new logo and update path
            $path = $request->file('logo')->store('logos', 'public');
            $validated['logo'] = $path;

            // Optionally delete the old logo if it exists
            if ($score->logo) {
                Storage::disk('public')->delete($score->logo);
            }
        }

        // Update the score record
        $score->update($validated);

        // Redirect back to the index with a success message
        return redirect()->route('score.index')->with('success', 'Score updated successfully!');
    }
}
