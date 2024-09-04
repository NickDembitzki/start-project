@extends('templates.main')
@section('content')
<form action="{{route('eixo.update', $eixo->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label class="mt-3">Nome</label>
    <input type="text" name="name" class="from-control" value="{{$eixo->name}}"/>
    <label class="mt-3">Descrição</label>
    <textarea name="description" rows="5" class="form-control m-1">
        {{$eixo->description}}
    </textarea>
    <input type="submit" value="salvar" class="btn btn-success m-1">
</form>


@endsection