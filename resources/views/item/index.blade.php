@extends('adminlte.master');

@section('content')
    <table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $key => $item)  
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->stock}}</td>
                    <td>{{$item->price}}</td>        
                </tr>
            @endforeach 
        </tbody>
    </table>
@endsection