<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\SlideTranslation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('components.slides', [
            'slides' => $slides
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = config('translatable.languages');
        return view('components.addSlide', [
            'languages' => $language
        ]);
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

            'name' => 'required',
            'inn' => 'required',
            'period_start' => 'required',
            'period_end' => 'required',
            'end_date' => 'required',
            'type' => 'required',

        ]);




        $languages = config('translatable.languages');


        $slide = new Slide;
        // dd($data);

        $slide->name = $data['name'];
        $slide->inn = $data['inn'];
        $slide->period_start = $data['period_start'];
        $slide->period_end = $data['period_end'];
        $slide->end_date = $data['end_date'];
        $slide->type = $data['type'];
        
        $slide->save();
        Alert::success('Успешно', 'Новый отчет успешно создан');

        return redirect('slides');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {

        return view('components.editSlide', [
            'slide' => $slide
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {

       
        $languages = config('translatable.languages');

        $data = $request->validate([

            'name' => 'required',
            'inn' => 'required',
            'period_start' => 'required',
            'period_end' => 'required',
            'end_date' => 'required',
            'type' => 'required',

        ]);
       
        $slide = Slide::findOrFail($slide->id);
        
        $slide->name = $data['name'];
        $slide->inn = $data['inn'];
        $slide->period_start = $data['period_start'];
        $slide->period_end = $data['period_end'];
        $slide->end_date = $data['end_date'];
        $slide->type = $data['type'];

            
        $slide->save();
        Alert::success('Успешно', 'Слайд отчет изменен');

        return redirect('slides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        Alert::info('Успешно', 'Слайдер удален');

        return redirect('slides');
    }
}
