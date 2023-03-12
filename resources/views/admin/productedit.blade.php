@extends('template.dashboard')
@section('product')

<div class="card">
    <div class="card-body">
        
        <form action="{{url('/admin/'.$product->id)}}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
          <label>Type</label></br>
          <input type="text" name="type" id="name" value="{{$product->type}}" class="form-control"></br>
          <label>Description</label></br>
          <input type="text" name="desc" id="name" value="{{$product->desc}}" class="form-control"></br>
          <label>Image</label></br>
          <input type="text" name="img" id="image" value="{{$product->img}}" class="form-control"></br>
          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
     
    </div>
  </div>
  
@endsection  