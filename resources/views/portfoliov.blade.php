@extends('base2')
@section('contents')
<section class="main-section">

        <div class="container">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <img src="{{ url('uploads/file/'.$data->pict) }}" style="width: 100%; height: 500px;">
                    <br/><br/>
                    Tanggal Peluncuran <h4>{{ $data->launched }}</h4>
                    <h4>{{ $data->category }}</h4>
                    <h1><strong><b>{{ $data->judul }}</b></strong></h1>
                    <h2>{{ $data->webdev }}</h2>
                    <p><center>{{ $data->desc }}</center></p>
                    
        </div>

    </section>
@endsection