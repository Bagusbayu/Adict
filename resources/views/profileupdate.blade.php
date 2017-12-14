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
            @foreach($data as $datas)
            <form role = "form" action="{{ route('profilecompany.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class = "form-group">
                    <label for = "address">Input Address</label>
                    <input type = "text" class = "form-control" id = "address" placeholder = "Enter Address" name = "address" value="{{ $datas->address }}">
                </div>
                <div class = "form-group">
                    <label for = "nophone">Input Number Phone</label>
                    <input type = "text" class = "form-control" id = "nophone" placeholder = "Enter Number Phone" name = "nophone" value="{{ $datas->nophone }}">
                </div>
                <div class = "form-group">
                    <label  for = "email">Input Email</label>
                    <input type = "email" class = "form-control" id = "email" placeholder = "Enter Email" name="email" value="{{ $datas->email }}">
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
            @endforeach
        </div>

    </section>
@endsection