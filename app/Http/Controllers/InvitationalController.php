<?php

namespace App\Http\Controllers;

use App\Models\Invitational;
use Illuminate\Http\Request;

class InvitationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all invitational records and calculate total for each
        $invitations = Invitational::all()->map(function ($invitation) {
            $invitation->total = (
                ($invitation->best_in_parade ?: 0) +
                ($invitation->banner_pulling ?: 0) +
                ($invitation->cheerdance ?: 0) +
                ($invitation->tag_of_war_men ?: 0) +
                ($invitation->tag_of_war_women ?: 0) +
                ($invitation->sack_race_men ?: 0) +
                ($invitation->sack_race_women ?: 0) +
                ($invitation->bakya_men ?: 0) +
                ($invitation->bakya_women ?: 0) +
                ($invitation->basketball_men ?: 0) +
                ($invitation->basketball_women ?: 0) +
                ($invitation->dance_sports ?: 0) +
                ($invitation->badminton_men ?: 0) +
                ($invitation->badminton_women ?: 0) +
                ($invitation->badminton_mixed ?: 0) +
                ($invitation->chess_men ?: 0) +
                ($invitation->chess_women ?: 0) +
                ($invitation->dart_men ?: 0) +
                ($invitation->dart_women ?: 0) +
                ($invitation->dart_mixed ?: 0) +
                ($invitation->mr_civil_service ?: 0) +
                ($invitation->miss_civil_service ?: 0) +
                ($invitation->table_tennis_men ?: 0) +
                ($invitation->table_tennis_women ?: 0) +
                ($invitation->table_tennis_mixed ?: 0) +
                ($invitation->volleyball_men ?: 0) +
                ($invitation->volleyball_women ?: 0) +
                ($invitation->additional_points ?: 0) // Include additional_points in the total
            );
            return $invitation;
        })->sortByDesc('total'); // Sort by total in descending order

        return view('invitational.index', ['invitations' => $invitations]);
    }

   

    public function create()
    {
        return view('invitational.create');
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
            'dance_sports' => 'nullable|integer',
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
        Invitational::create($validated);
        return redirect()->route('invitational.index')->with('success', 'Invitation created successfully.');
    }





    public function edit(Invitational $invitational)
    {
        return view('invitational.edit', compact('invitational'));
    }





    public function update(Request $request, Invitational $invitational)
    {
        $request->validate([
            'cluster' => 'required|string|max:255',
            'logo' => 'nullable|string',
            'best_in_parade' => 'nullable|integer',
            'banner_pulling' => 'nullable|integer',
            'cheerdance' => 'nullable|integer',
            'tag_of_war_men' => 'nullable|integer',
            'tag_of_war_women' => 'nullable|integer',
            'sack_race_men' => 'nullable|integer',
            'sack_race_women' => 'nullable|integer',
            'bakya_men' => 'nullable|integer',
            'bakya_women' => 'nullable|integer',
            'basketball_men' => 'nullable|integer',
            'basketball_women' => 'nullable|integer',
            'dance_sports' => 'nullable|integer',
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
            'additional_points' => 'nullable|integer',
        ]);

        $invitational->update($request->all());

        return redirect()->route('invitational.index')->with('success', 'Invitation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitational  $invitational
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitational $invitational)
    {
        $invitational->delete();

        return redirect()->route('invitational.index')->with('success', 'Invitation deleted successfully.');
    }
}
