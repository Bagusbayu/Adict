@extends('base1')
@section('content')
    <section class="main-section">
        <div class="container">
            <form role = "form" action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
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