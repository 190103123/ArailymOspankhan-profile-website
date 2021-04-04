<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consumer;


class ConsumerController extends Controller
{
    public function index()
    {
        return view('consumer');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email'
        ]);


        $consumer = new Consumer();

        $consumer->name = $request->input('name');
        $consumer->surname = $request->input('surname');
        $consumer->email = $request->input('email');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $consumer->image = $filename;
        } else {
            return $request;
            $consumer->image = '';
        }




        $consumer->save();


        return back();
    }
}
