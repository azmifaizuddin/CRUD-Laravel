@extends('adminlte.master');

@section('content')
    <div    >
        <form action="/items" method = "POST">
            @csrf
            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" placeholder="Enter Description" name="description" id="description">
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" placeholder="Enter stock" name="stock" id="stock">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" placeholder="Enter price" name = "price" id="price">
            </div>
            
            <button type="submit" class="btn btn-default">Submit</button> 
        </form>
    
    </div>

    
@endsection()