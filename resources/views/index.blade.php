@extends('layout')
@section('title')Conferences @endsection

@section('main_content')
<div class="container mb-5 my-container">
            <h1 class="title">Conferences</h1>
            <div class="bordered">
                @foreach($conferences as $conference)
                <div class="card conference-card">
                        <div class="card-body d-flex row">
                            <div class="col-6">
                                <p class="card-title card-link">{{$conference->title}}</p>
                                <p class="card-text">{{$conference->date." ".date('H:m', strtotime($conference->time))}}</p>
                            </div> 

                            
                            <div class="col-6 btn-col">  
                                @if(Auth::check() && Auth::user()->role === 'admin')
                                <form method="post" action="{{route('conferences.destroy', $conference->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger col-2">Delete</button>
                                </form>                                    
                                @else
                                        <a href="{{route('conferences.show', $conference->id)}}" class="btn btn-primary  col-2">Details</a> 
                                        @if(Auth::check() && Auth::user()->isJoinedConference($conference->id))
                                            <form method="post" action="{{route('conferences.cancel', $conference->id)}}" class="col-2">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Cancel</button>
                                            </form>
                                            {!! $shareButtons !!}                                       

                                        @else
                                            <form method="post" action="{{route('conferences.join', $conference->id)}}" class="col-2">
                                                @csrf
                                                @method('post')
                                                <button type="submit" class="btn btn-success ">Join</button>
                                            </form>
                                    
                                    @endif 
                                @endif       
                                                   
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row d-flex">
                {{$conferences->links()}}
            </div>
            
        </div>   
@endsection