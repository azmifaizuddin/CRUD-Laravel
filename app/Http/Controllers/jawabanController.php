<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class jawabanController extends Controller
{
    public function store($id){
        $questions = pertanyaanModel::get_all();
        $pertanyaan_id = $id;
        return view('answer.form_jawaban', compact('questions'), compact('pertanyaan_id'));      
    }
}
