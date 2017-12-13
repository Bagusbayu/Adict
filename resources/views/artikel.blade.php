@extends('base2')
@section('contents')

    <section class="main-section">
        <div class="container">
        <hr>
        <br><br>
        <h1>Last Portfolio</h1>
                @foreach($user as $users)
                    <h2>{{$users->judul}}</h2> <p>{{substr($users->desc, 0, 25)}}{{ strlen($users->desc) > 25 ? "..." : "" }}</p>
                    <a type="button" class="btn btn-lg" href="http://localhost:8000/mypage/{{$users->slug}}">Read More</a>
                @endforeach
            <div class="text-center">
                {!! $user->links(); !!}
            </div>
        </div>
    </section>

@endsection