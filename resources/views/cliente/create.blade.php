@extends('layouts.dising')


@section('content')
hola mundo
<div class="container w-25 border p-4 mt-4">
<form method="POST"  action="{{ route("cliente.store")  }}" >
@csrf
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nombre</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">edad</label>
    <input type="text" class="form-control" name="edad" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection

