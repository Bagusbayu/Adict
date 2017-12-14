@extends('base1')
@section('content')
    <section class="main-section">
        <div class="container">
         @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
            <form role = "form" action="{{ route('viewabout.store') }}" method="post">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "about">Input About</label>
                    <input type = "text" class = "form-control" id = "about" placeholder = "Enter About" name = "about">
                </div>
                <div class = "form-group">
                    <label for = "misi">Input Misi</label>
                    <input type = "text" class = "form-control" id = "misi" placeholder = "Enter Misi" name = "misi">
                </div>
                <div class = "form-group">
                    <label  for = "visi">Input Visi</label>
                    <input type = "text" class = "form-control" id = "visi" placeholder = "Enter Visi" name="visi">
                </div>
                <!--
                <div class = "form-group">
                   <label for = "inputfile">File input</label>
                   <input type = "file" id = "inputfile">
                </div>
                -->
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{url('viewartikel')}}">Cancel</a>
            </form>
        </div>
    </section>

@endsection