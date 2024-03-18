<?php

namespace App\Http\Controllers;

use App\Models\Treatments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatments::all();
        return view('components.treatments', [
            'slides' => $treatments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $treatment = Treatments::all();
        return view('components.addTreat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([

            'title' => 'required',
            'body' => 'required',

        ]);

        $slide = new Treatments;
        $slide->title = $data['title'];
        $slide->body = $data['body'];

        $slide->save();
        Alert::success('Успешно', 'Новост успешно создан');

        return redirect('treatments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatments  $treatments
     * @return \Illuminate\Http\Response
     */
    public function show(Treatments $treatments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatments $treatment)
    {

        return view('components.editTreat', [
            'slide' => $treatment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatments $treatment)
    {
        $data = $request->validate([

            'title' => 'required',
            'body' => 'required',

        ]);

        $slide = Treatments::findOrFail($treatment->id);
        $slide->title = $data['title'];
        $slide->body = $data['body'];      

        $slide->save();
        Alert::success('Успешно', 'Новост успешно изменен');

        return redirect('treatments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatments $treatment)
    {

        $treatment->delete();
        Alert::info('Успешно', 'Слайдер удален');

        return redirect('treatments');
    }
}
