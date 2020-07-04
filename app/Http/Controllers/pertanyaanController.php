<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class pertanyaanController extends Controller
{
    public function index(){
        $questions = pertanyaanModel::get_all();
        //dd($questions);
        return view('question.view_pertanyaan', compact('questions'));      
    }

    public function create(){
        return view('question.form_pertanyaan');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        $questions = pertanyaanModel::save($data);
        if($questions){
            return view('question.view_pertanyaan');
        }
    }

}
