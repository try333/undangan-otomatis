<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Rsvp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RsvpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'form_fields.name' => 'required',
            'form_fields.email' => 'required',
            'form_fields.message' => 'required',
        ]);

        $id = Form::where('slug', $slug)->value('id');

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validated = $validator->validated();

        $rsvp = new Rsvp();
        $rsvp->name = $validated['form_fields']['name'];
        $rsvp->totalGuest = (int) $validated['form_fields']['email'];
        // Convert the message to an integer
        $rsvp->status = (int) $validated['form_fields']['message'];
        $rsvp->formId = $id;
        $rsvp->save();

        return response()->json(['success' => true, 'message' => 'RSVP saved successfully'], 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
