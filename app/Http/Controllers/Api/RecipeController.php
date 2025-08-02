<?php

namespace App\Http\Controllers\Api;

use App\Models\Recipe;
// use Mews\Purifier\Purifier;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = Recipe::with('category');
        $category_id = Purifier::clean($request->input('category_id'));
   

        if ($request->has('category_id')) {
            $query->where('category_id', $category_id);
        }

        return response()->json($query->paginate(6));
    }

    public function show($id)
    {
        return Recipe::with('category')->findOrFail($id);
    }

    public function store()
    {

    }

}
