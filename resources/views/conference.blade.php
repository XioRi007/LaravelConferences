@extends('layout')
@section('title')Conferences @endsection

@section('main_content')
<div class="container mb-5 my-container">
    <h1 class="title">{{$conference->title}}</h1>    
    <form method="POST" class="bordered form">
        <div class="row">
            <div class="mb-3 col">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required value="{{$conference->date}}" readonly>
            </div>
            <div class="mb-3 col">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time" required value="{{$conference->time}}" readonly>
            </div>                    
        </div>
        <div>
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" value="{{$conference->country}}" readonly>
        </div>    
        <div class="row d-none">
            <div class="mb-3 col">
                <label for="longtitude" class="form-label">Longtitude</label>
                <input type="number" class="form-control" id="longtitude" name="longtitude" required value="{{$conference->longtitude}}" readonly>
            </div>
            <div class="mb-3 col">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="number" class="form-control" id="latitude" name="latitude" required value="{{$conference->latitude}}" readonly>
            </div>                    
        </div>
        <div id="map"></div>  
        <div class="btn-col mt-5">
            <a href="{{route('conferences.edit', $conference->id)}}" class="col-2 btn btn-warning mb-3">Edit</a>
            <a href="{{route('conferences.destroy', $conference->id)}}" class="col-2 btn btn-danger mb-3">Delete</a>
        </div>                       
    </form>
    
</div>    

@endsection