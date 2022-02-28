@extends('layouts.dising')
@section('content')

<div class="container w-60 p-4 mt-4">
<form action="{{ route('contact.index')}}" method="post">
    @csrf
@method('GET')
    <div class="col-5  mb-4">
        <div class="card p-4">
            <div class="mb-3 d-flex justify-content-between">
        <input type="text" class="form-control me-3" name="busqueda" id="" value="{{$text}}">

                {{--  <input type="text"  name="busqueda" id="">  --}}
                {{--  <input type="text" name="busqueda" id="">  --}}
    <input type="submit" class="btn btn-primary" value="search">

            </div>
        </div>
    </div>
</form>

    <table class="table table-bordered text-center table-hover">
        <thead class="table-primary">
    <th>id</th>
            <th>nombre</th>
    <th>edad</th>
    <th>action</th>
</thead>
<tbody>
    {{--  {{$text}}  --}}
    @if (count($cliente)<=0)
    <tr>
        {{--  NOHAD  --}}
        <td>no hay datos encontrados </td>
        {{--  <td>{{ $keycliente->nombre }}</td>  --}}
    {{--  <td>{{ $keycliente->edad }}</td>  --}}
    </tr>

    @else

@foreach ($cliente as $keycliente )
    <tr>
        <td>{{ $keycliente->id }}</td>
        <td>{{ $keycliente->nombre }}</td>
    <td>{{ $keycliente->edad }}</td>
    <td>
        {{--  <a   onclick="eliminarProducto('<?php echo $itemSearch['db_id']; ?>','<?php echo $itemSearch['db_imagen']; ?>','<?php echo $itemSearch['db_nombre'] ;?>')" class="btn btn-danger"> <i class="bi bi-trash"></i></a>  --}}
        {{--  <a  href="{{ route('delete.index',[$keyCliente->id]) }}" class="btn btn-danger"> <i class="bi bi-trash">delete</i></a>  --}}
<form method="POST" action="{{ route('cliente.delete',$keycliente->id)}}">
@csrf
@method('DELETE')
    <button type="submit" class="btn btn-danger">d <i class="bi bi-trash">delete</i></button>

</form>
        <a href="{{route("cliente.edit",$keycliente->id)}}" class="btn btn-warning"> <i class="bi bi-trash">edit</i></a>


    </td>

</tr>
@endforeach
@endif

</tbody>

    </table>
</div>

@endsection
