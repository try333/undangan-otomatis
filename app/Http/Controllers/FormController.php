<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Image;
use App\Models\ImageOrder;
use App\Models\Tema;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all(); // Retrieve all forms
        return view('welcome', compact('forms'));
    }
    
    public function show($slug)
    {
        // Fetch the form ID based on the slug
        $data = Form::where('slug', $slug)
                ->first(['id', 'idTema']);

        // If no form with the given slug is found, return a 404 error
        if (!$data->id) {
            return response()->json(['error' => 'Form not found'], 404);
        }

        // Fetch the form along with related images and image orders
        $form = Form::with('images.imageOrder')->find($data->id);
        $tema = Tema::where('id', $data->idTema)->first();

        try {
            // Fetch related image orders for the form
            $imageOrders = ImageOrder::with(['image' => function ($query) use ($data) {
                $query->where('idForm', $data->id)->select('idForm', 'fileImage', 'id');
            }])
                ->whereHas('image', function ($query) use ($data) {
                    $query->where('idForm',$data->id);
                })
                ->orderBy('id', 'asc')
                ->get();

            // If no image orders are found, return a 404 response
            if ($imageOrders->isEmpty()) {
                return response()->json(['error' => 'No images found for this form.'], 404);
            }

            // Pass the form and image orders data to the Blade view
            return view($tema->slug.'.index', compact('form', 'imageOrders'));
        } catch (\Exception $e) {
            // Handle unexpected errors with a 500 response
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
