@extends('adminlte.master')



@section('content')
    <form action = '/pertanyaan' method = 'POST'>
        @csrf
        <div class="form-group">
            <label for="nama">Nama Anda</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama anda" name="nama">
        </div>
        <div class="form-group">
            <label for="pertanyaan">Input Pertanyaan</label>
            <input type="text" class="form-control" id="pertanyaan" placeholder="Pertanyaan" name="pertanyaan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection