@extends('adminlte.master');

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Pertanyaan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($questions as $key => $question)  
         <tr>
            <th scope="row">{{$key + 1}}</th>   
            <td>{{$question->nama}}</td>
            <td>{{$question->pertanyaan}}</td>       
        </tr>
    @endforeach 
  </tbody>
</table>

@endsection