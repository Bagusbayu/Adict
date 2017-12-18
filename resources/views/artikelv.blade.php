@extends('base2')
@section('contents')
    <section class="main-section">

        <div class="container">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <img src="{{ url('uploads/file/'.$user->pict) }}" style="width: 100%; height: 500px;">
                    <br/><br>
                    Tanggal Liris : <h4>{{ $user->date }}</h4>
                    <h1><strong><b>{{ $user->judul }}</b></strong></h1>
                    <p><center>{{ $user->desc }}</center></p>
                    
        </div>

    </section>
@endsection