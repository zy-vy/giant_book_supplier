@extends('template/app')

@section('body')

<div class="d-flex justify-content-center">
    @foreach ($publishers as $publisher)
    <div class="d-flex p-2">

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("storage/images/$publisher->image")}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$publisher->name}} <br/></h5>
                <p class="card-text">

                    {{$publisher->address}} <br/>
                    {{$publisher->email}}
                </p>
                <a href="/publisher/{{$publisher->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
