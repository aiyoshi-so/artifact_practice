<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function index(Practice $practice)//インポートしたPostをインスタンス化して$postとして使用。
    {
        // return $practice->get();//$postの中身を戻り値にする。
         return view('practices.index')->with(['practices' => $practice->getPaginateByLimit()]);
         
    }
}
