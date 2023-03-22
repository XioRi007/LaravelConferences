@extends('layout')
@section('title')Conferences @endsection

@section('main_content')
<div class="container mb-5 my-container">
    <h1 class="title">Create Conference</h1>
    <form method="POST" class="bordered form" action="{{route('conferences.store')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" required minlength="2" maxlength="255">
        </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required value="{{(new DateTime())->format('Y-m-d')}}">
            </div>
            <div class="mb-3 col">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time" required value="{{(new DateTime())->format('H:i')}}">
            </div>                    
        </div>
        <label for="country" class="form-label">Country</label>
        <select class="form-select" aria-label="Default select example" id="country" name="country" required>
            <?php 
                use App\Utils\Utils;
                $countries = Utils::getCountries();
                foreach($countries as $country): ?>
                    <option value="<?=$country?>"><?=$country?></option>
                <?php endforeach; 
            ?>
        </select>    
        <div class="row ">
            <div class="mb-3 col">
                <label for="longtitude" class="form-label">Longtitude</label>
                <input type="number" class="form-control" id="longtitude" name="longtitude" required value="34.5" >
            </div>
            <div class="mb-3 col">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="number" class="form-control" id="latitude" name="latitude" required value="5.1" >
            </div>                    
        </div>
        <div id="map"></div>  
        <div class="btn-col mt-5">
            <a href="{{route('conferences.index')}}" class="col-2 btn btn-primary mb-3">Back</a>
            <button type="submit" class="col-2 btn btn-success mb-3">Save</button>
        </div>            
    </form>
    
</div>    

@endsection