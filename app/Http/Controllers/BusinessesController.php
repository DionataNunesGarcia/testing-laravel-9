<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $businesses = Business::paginate(5);
        return view('Businesses/index', compact('businesses'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'string',
            'cover' => 'file',
        ]);
        $file = $values['cover'];
        $values['cover'] = $file->store('covers', 'public');
        Business::create($values);
        return Redirect::route('businesses.index');
    }
}
