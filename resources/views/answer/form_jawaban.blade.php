@extends('adminlte.master')

 


@section('content')
    @foreach($questions as $key => $question)  
         @if($question->id == $pertanyaan_id)
                @break 
         @endif
    @endforeach 
    <form action = '/jawaban/' method = 'POST'>
        @csrf
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row"><h1>{{$question->pertanyaan}}</h1></th>
                </tr>
            </thead>
        </table>
        <div class="form-group">
            <label for="pertanyaan">Input Pertanyaan</label>
            <input type="text" class="form-control" id="pertanyaan" placeholder="Pertanyaan" name="pertanyaan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection