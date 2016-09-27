@extends('layout')

@section('title')
Edit
@stop

@section('content')
<div class="container">
<h1 class="text-center">Editing Company:</h1>

<div class="form-group">
<form action="" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="usr">Name:</label>
    <input type="text" class="form-control" name="name" id="usr" value="{{$company->name}}">

	<label for="comment">Definition:</label>
    <textarea class="form-control" rows="5" id="comment" name="definition">{{$company->definition}}</textarea>

    <label for="comment">Logo Change:</label>
    <input type="file" name="logo" id="usr">

    <label for="usr1">Address:</label>
    <input type="text" class="form-control" name="adress" id="usr1" value="{{$company->address}}">

    <label for="usr2">Phone:</label>
    <input type="text" class="form-control" name="phone" id="usr2"
    value="{{$company->phone}}">

    <label for="usr3">Phone 2:</label>
    <input type="text" class="form-control" name="phone1" id="usr3"
    value="{{$company->phone1}}">

    <label for="usr4">Fax:</label>
    <input type="text" class="form-control" name="fax" id="usr4"
    value="{{$company->fax}}">

    <label for="usr5">Facebook:</label>
    <input type="text" class="form-control" name="facebook" id="usr5"
    value="{{$company->facebook}}">


    <label for="usr6">Instagram:</label>
    <input type="text" class="form-control" name="instagram" id="usr6" value="{{$company->instagram}}">


    <label for="usr7">LinkedIn:</label>
    <input type="text" class="form-control" name="linkedin" id="usr7"
    value="{{$company->linkedin}}">


    <label for="usr8">Website:</label>
    <input type="text" class="form-control" name="website" id="usr8"
    value="{{$company->website}}">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <input style="width:100%; margin-top:10px;" type="submit" name="submit" class="btn btn-success bt">
    </form>

</div>
</div>
    @stop
