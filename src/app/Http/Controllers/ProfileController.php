<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->postcode = $request->postcode;
        $user->address = $request->address;
        $user->building = $request->building;

        if ($request->hasFile('profile_image')) {

            $path = $request->file('profile_image')
                ->store('profile_images', 'public');

            $user->profile_image = $path;
        }

        $user->save();

        return redirect('/mypage');
    }

 public function addressEdit($id)
{
    return view('purchase.address', compact('id'));
}

public function addressUpdate(Request $request, $id)
{
    $user = Auth::user();

    $user->postcode = $request->postcode;
    $user->address = $request->address;
    $user->building = $request->building;

    $user->save();

    return redirect('/purchase/' . $id);
} 
}
