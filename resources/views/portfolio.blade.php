@extends('base2')
@section('contents')

    <section class="main-section">
        <div class="container">
        <hr>
        <br><br>
        <h1>Last Portfolio</h1>
                @foreach($datas as $data)
                    <h2>{{$data->judul}}</h2> <p>{{substr($data->desc, 0, 25)}}{{ strlen($data->desc) > 25 ? "..." : "" }}</p>
                    <a type="button" class="btn btn-lg" href="{{ route('mypage.edit',$data->slug) }}">Read More</a>
                @endforeach
            <div class="text-center">
                {!! $datas->links(); !!}
            </div>
        </div>
    </section>

@endsection