@extends('base1')
@section('content')
    <div class="container">
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
           <p>Hallo, {{Session::get('name')}}. Apakabar?</p>

            <h2>* Email kamu : {{Session::get('user')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <a href="/logout" class="btn btn-primary">Logout</a>
        </div>
        <!-- /.content -->
    </section>
    </div>

@endsection