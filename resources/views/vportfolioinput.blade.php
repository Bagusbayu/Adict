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
            <form role = "form" action="{{ route('vportfolio.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "judul">Input Name</label>
                    <input type = "text" class = "form-control" id = "judul" placeholder = "Enter Name" name = "judul">
                </div>
                <div class = "form-group">
                    <label for = "desc">Input Description</label>
                    <input type = "text" class = "form-control" id = "desc" placeholder = "Enter Description" name = "desc">
                </div>
                <div class = "form-group">
                    <label  for = "webdev">Input Web Developer</label>
                    <input type="text" class="form-control" placeholder="Enter Web Developer" id="webdev" name="webdev">
                </div>
                <div class = "form-group input-datepicker">
                    <label  for = "launched">Input Launched</label>
                    <input type="text" class="form-control" data-format="YYYY/MM/DD" placeholder="YYYY/MM/DD" id="launched" name="launched">
                </div>
                <div class = "form-group">
                    <label for = "category">Input Category</label>
                    <input type = "text" class = "form-control" id = "category" placeholder = "Enter Category" name = "category">
                </div>
                <div class = "form-group">
                    <label for = "website">Input Website URL</label>
                    <input type = "text" class = "form-control" id = "website" placeholder = "Enter Website URL" name = "website">
                </div>
                <div class = "form-group">
                   <label for = "pict">File input</label>
                   <input type = "file" id = "pict" name="pict">
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{url('viewartikel')}}">Cancel</a>
            </form>
        </div>
    </section>

@endsection