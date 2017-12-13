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
            <a type="button" class="btn btn-primary" href="{{url('vportfolioinput')}}">Input</a>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Desc</th>
                    <th>Web Developer</th>
                    <th>Launched</th>
                    <th>Category</th>
                    <th>Web Site</th>
                    <th>Pict</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->judul}}</td><td><a href=" {{ url($datas->slug) }} ">{{url($datas->slug)}}</a></td>
                        <td>{{$datas->desc}}</td>
                        <td>{{$datas->webdev}}</td>
                        <td>{{$datas->launched}}</td>
                        <td>{{$datas->category}}</td>
                        <td>{{$datas->website}}</td>
                        <td><img src="{{ url('uploads/file/'.$datas->pict) }}" style="width: 150px; height: 150px;"></td>
                        <td>
                            <form action="{{ route('vportfolio.destroy', $datas->id) }}" method="post">
                                <a href="{{ route('vportfolio.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a> |
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-link" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
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