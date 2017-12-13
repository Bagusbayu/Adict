@extends('base2')
@section('contents')
<section class="main-section">

        <div class="container">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <img src="{{ url('uploads/file/'.$data->pict) }}" style="width: 100%; height: 500px;">
                    <h4>{{ $data->launched }}</h4>
                    <h4>{{ $data->category }}</h4>
                    <h1>{{ $data->judul }}</h1>
                    <h2>{{ $data->webdev }}</h2>
                    <p>{{ $data->desc }}</p>
                    
        </div>

    </section>
@endsection