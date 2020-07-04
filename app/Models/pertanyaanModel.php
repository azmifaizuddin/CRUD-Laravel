<?php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class pertanyaanModel{
        public static function get_all(){
            $question = DB::table('pertanyaan')->get();
            return $question;
        }
    

        public static function save($data){
            $new_question = DB::table('pertanyaan')->insert($data);
            return $new_question;
        }
    }