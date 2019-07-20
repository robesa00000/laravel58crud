<!-- create.blade.php --> 
 
@extends('layout') 
 
@section('content') 
<style> 
  .uper { 
    margin-top: 40px; 
  } 
</style> 
<div class="card uper"> 
  <div class="card-header"> 
    Add Book 
  </div> 
  <div class="card-body"> 
    @if ($errors->any()) 
      <div class="alert alert-danger"> 
        <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{$error}}</li> 
            @endforeach 
        </ul> 
      </div><br /> 
    @endif 
      <form method="post" action="{{route('books.store')}}"> 
          <div class="form-group"> 
              @csrf 
              <label for="name">Book Name:</label> 
              <input type="text" class="form-control" value="{{ old('book_name') }}" name="book_name"/> 
          </div> 
          <div class="form-group"> 
              <label for="price">Book ISBN Number :</label> 
              <input type="text" class="form-control" value="{{ old('isbn_no') }}" name="isbn_no"/> 
          </div> 
          <div class="form-group"> 
              <label for="quantity">Book Price :</label> 
              <input type="text" class="form-control" value ="{{ old ('book_price') }}" name="book_price"/> 
          </div> 
          <button type="submit" class="btn btn-primary">Create Book</button> 
          <a href="{{ route('index') }}" class="btn btn-danger">Back</a> 
      </form> 
  </div> 
</div> 
@endsection