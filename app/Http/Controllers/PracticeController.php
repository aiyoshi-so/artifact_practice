<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use App\Http\Requests\PracticeRequest;

class PracticeController extends Controller
{
    public function index(Practice $practice)
    {
        return view('practices.index')->with(['practices' => $practice->getPaginateByLimit()]);
    }

    public function show(Practice $practice)
    {
        return view('practices.show')->with(['practice' => $practice]);
    }

    public function create()
    {
        return view('practices.create');
    }

    public function store(Practice $practice, PracticeRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['practice'];
        $practice->fill($input)->save();
        return redirect('/practices/' . $practice->id);
        
    }
    
    public function edit(Practice $practice)
    {
    return view('practices.edit')->with(['practice' => $practice]);
    }
    
    public function update(PracticeRequest $request, Practice $practice)
    {
    $input_practice = $request['practice'];
    $practice->fill($input_practice)->save();

    return redirect('/practices/' . $practice->id);
    }
    
    public function delete(Practice $practice)
    {
    $practice->delete();
    return redirect('/');
    }
}
