@extends('template/app')

@section('body')

<div class="d-flex justify-content-center">
    @foreach ($books as $book)

    <div class="d-flex p-2">

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("/storage/images/$book->image")}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">
                    by <br/>
                    {{$book->author}}
                </p>
                <a href="/book/{{$book->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
