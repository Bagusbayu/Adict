@extends('base1')
@section('content')

    <section class="main-section">
        <div class="container">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>

            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->email}}</td>
                        <td>{{$datas->comment}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $data->links(); !!}
            </div>
        </div>
    </section>

@endsection