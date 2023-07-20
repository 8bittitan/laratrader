<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListingRequest;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        return view('listings.index', [
            'listings' => $request->user()->listings()->get(),
        ]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(CreateListingRequest $request)
    {
        $input = $request->validated();

        $request->user()->listings()->create($input);

        return redirect(route('dashboard'));
    }
}
