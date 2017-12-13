@extends('base1')
@section('content')
    <section class="main-section">

        <div class="container">
            @foreach($data as $datas)
                <form role = "form" action="{{ route('viewabout.update', $datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class = "form-group">
                        <label for = "about">Input About</label>
                        <input type = "text" class = "form-control" id = "about" placeholder = "Enter About" name = "about" value="{{ $datas->about }}">
                    </div>
                    <div class = "form-group">
                        <label for = "misi">Input Misi</label>
                        <input type = "text" class = "form-control" id = "misi" placeholder = "Enter Misi" name = "misi" value="{{ $datas->misi }}">
                    </div>
                    <div class = "form-group">
                        <label  for = "visi">Input Visi</label>
                        <input type = "text" class = "form-control" id = "visi" placeholder = "Enter Visi" name="visi" value="{{ $datas->visi }}">
                    </div>
                    <!--
                    <div class = "form-group">
                       <label for = "inputfile">File input</label>
                       <input type = "file" id = "inputfile">
                    </div>
                    -->
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </form>
            @endforeach
        </div>

    </section>
@endsection