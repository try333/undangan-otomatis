<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Image;
use App\Models\ImageOrder;

class FormController extends Controller
{
    public function index()
    {
        // Get all data from the 'forms' table (or your custom table)
        $forms = Form::all(); // You can also use Form::paginate() for paginated data

        // Pass the data to the Blade view
        return view('welcome', compact('forms'));
    }
    public function show($id)
    {
        // Get a single form record by ID
        $form = Form::with('images.imageOrder')->find($id);
    
        try {
            // Fetch image orders related to this form via the images
            $imageOrders = ImageOrder::with(['image' => function ($query) use ($id) {
                $query->where('idForm', $id)->select('idForm', 'fileImage', 'id');
            }])
                ->whereHas('image', function ($query) use ($id) {
                    $query->where('idForm', $id);
                })
                ->orderBy('id', 'asc')
                ->get();
    
            // If no image orders found, fetch from images directly
            if ($imageOrders->isEmpty()) {
                $images = Image::where('idForm', $id)->get();
    
                // Transform each image object
                $formattedImages = $images->map(function ($image) {
                    return [
                        'id' => $image->id,
                        'fileImage' => $image->fileImage,
                        'idForm' => $image->idForm,
                    ];
                });
    
                // Pass the form data and formatted images to the Blade view
                return view('welcome', compact('form', 'formattedImages'));
            }
    
            // Pass the form data and image orders to the Blade view
            return view('welcome', compact('form', 'imageOrders'));
        } catch (\Exception $e) {
            // Handle any errors
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
}
