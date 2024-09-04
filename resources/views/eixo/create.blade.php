@extends('templates.main')
@section('content')
<form action="{{route('eixo.store')}}" method="POST">
    @csrf
    <input type="text" name="name" class="form-control mt-3">
    <textarea name="description" rows="5" class="form-control m-1"></textarea>
    <input type="submit" value="salvar" class="btn btn-success m-1">
</form>


@endsection