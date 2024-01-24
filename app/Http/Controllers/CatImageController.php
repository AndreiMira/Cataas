<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatImageRequest;
use App\Http\Requests\UpdateCatImageRequest;
use Illuminate\Http\Request;
use App\Models\CatImage;
use Illuminate\Support\Arr;

class CatImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // CatImageController.php

    public function index(Request $request)
    {
        // Obtiene todos los tags únicos de la base de datos
        $allTags = CatImage::pluck('tags')->flatMap(function ($tags) {
            return Arr::wrap(json_decode($tags));
        })->unique();

        // Filtra por tag si se proporciona en el formulario
        $selectedTag = $request->input('tag');
        $catImages = CatImage::when($selectedTag, function ($query, $tag) {
            return $query->where('tags', 'LIKE', "%$tag%");
        })->paginate(30);

        return view('gatos.index', compact('catImages', 'allTags', 'selectedTag'));
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
    public function store(StoreCatImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CatImage $catImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatImage $catImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatImageRequest $request, CatImage $catImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatImage $catImage)
    {
        //
    }
}
