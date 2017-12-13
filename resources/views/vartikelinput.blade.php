@extends('base1')
@section('content')
    <section class="main-section">
        <div class="container">
            <form role = "form" action="{{ route('viewartikel.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "judul">Input Name</label>
                    <input type = "text" class = "form-control" id = "judul" placeholder = "Enter Name" name = "judul">
                </div>
                <div class = "form-group">
                    <label for = "desc">Input Description</label>
                    <input type = "text" class = "form-control" id = "desc" placeholder = "Enter Description" name = "desc">
                </div>
                <div class = "form-group input-datepicker">
                    <label  for = "date">Input Date</label>
                    <input type="text" class="form-control" data-format="YYYY/MM/DD" placeholder="YYYY/MM/DD" id="date" name="date">
                </div>
                <div class = "form-group">
                   <label for = "pict">File input</label>
                   <input type = "file" id = "pict" name="pict">
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </form>
        </div>
    </section>

@endsection