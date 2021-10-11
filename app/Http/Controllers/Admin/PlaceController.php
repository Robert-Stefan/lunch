<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Placelist;
use Illuminate\Support\Str;
use App\Day;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewMail;


class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Placelist::all();

        return view('admin.places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mail
       

        $days = Day::all();
        return view('admin.places.create', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required',
            'day_id' => 'exists:days,id'
        ],  [
            'required' => 'This field is required!'
        ]);


        $data = $request->all();

        // Gen Slug
        $data['slug'] = Str::slug($data['title'], '-');

        // create and save record on db
        $new_place = new Placelist();
        $new_place->fill($data);
        //Mail
        Mail::to('test@test.it')->send(new SendNewMail());
        $new_place->save();

        return redirect()->route('admin.place.show', $new_place->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place = Placelist::find($id);

        if(! $place) {
            abort(404);
        }

        return view('admin.places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Placelist::find($id);
        $place->delete();

        return redirect()->route('admin.place.index')->with('deleted', $place->title);
    }
}
