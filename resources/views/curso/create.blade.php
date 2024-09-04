@extends('templates.main')
@section('content')
<form action="{{route('curso.store')}}" method="POST">
    @csrf
    <label class= "mt-3">Nome</label>
    <input type="text" name="name" class="form-control mt-3">
    <label class= "mt-3">Abreviatura</label>
    <input type="text" name="nickname" class="form-control mt-3">
    <label class= "mt-3">Duração(anos)</label>
    <input type="number" value="time" class="form-control"/>
    <label class="mt-3" >Eixo</label>
    <select name ="eixo" class="form-control">
    @foreach ($eixos as $item )
    <option value="{{$item->id}}"> {{$item->name}}</option>
    @endforeach
    </select>
    <input type="submit" value="salvar" class="btn btn-success m-1">
     


</form>


@endsection