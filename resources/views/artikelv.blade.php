@extends('base2')
@section('contents')
    <section class="main-section">

        <div class="container">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <img src="{{ url('uploads/file/'.$user->pict) }}" style="width: 100%; height: 500px;">
                    <h4>{{ $user->date }}</h4>
                    <h1>{{ $user->judul }}</h1>
                    <p>{{ $user->desc }}</p>
                    
        </div>

    </section>
@endsection