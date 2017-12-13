@extends('base2')
@section('contents')

<div class="jumbotron text-center">
  <h1>ADICT BUSINESS CENTER</h1> 
  <p></p> 
  <!--<form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form> -->
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> 

    
	
    <div class="carousel-inner" role="listbox">
      @foreach($iya as $key => $iyas)
      <div class="item {{ $key == 0 ? ' active' : '' }}">
      <img src="{{ url('uploads/file/'.$iyas->pict) }}" style="width: 100%; height: 500px;">
      </div>
	  @endforeach
	  </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
    @foreach($data as $datas)
      <h2>About Company Page</h2><br>
      <h4>{{$datas->about}}</h4><br>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> {{$datas->misi}}</h4><br>
      <p><strong>VISION:</strong> {{$datas->visi}}</p>
      @endforeach
    </div>
  </div>
</div>

<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2><a href="{{ url('portfolio') }}">Portfolio</a></h2><br>
  <h4>What we have created</h4>
  <div class="row text-center">
  @foreach($oke as $okes)
    <div class="col-sm-4">
        <div class="thumbnail" style="width:200px;height:200px">
        <img src="{{ url('uploads/file/'.$okes->pict) }}" style="width: 200px; height: 200px;">
        <p></p>
        <a href="portfolio.html">{{$okes->judul}}</a>
      </div>
    </div>
    @endforeach
  </div><br>
</div>

<!-- Container (Pricing Section) -->
<div id="artikel" class="container-fluid">
  <div class="text-center">
    <h2><a href="{{ url('artikel') }}">ARTIKEL</a></h2>
    <h4></h4>
  </div>
  <div class="row slideanim">
  @foreach($user as $users)
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>{{$users->judul}}</h1>
        </div>
        <div class="panel-body">
          <p>{{$users->tanggal}}</p>
          <p>{{ substr($users->desc, 0, 25) }}{{ strlen($users->desc) > 25 ? "..." : "" }}</p>
        </div>
        <div class="panel-footer">
          <a type="button" class="btn btn-lg" href="http://localhost:8000/mypage/{{$users->slug}}">Read More</a>
        </div>
      </div>      
    </div>
    @endforeach	    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
	@if(Session::has('alert-success'))
            <div class="alert alert-success">
                <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
            </div>
    @endif
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
    @foreach($post as $posts)
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> {{$posts->address}}</p>
      <p><span class="glyphicon glyphicon-phone"></span> {{$posts->nophone}}</p>
      <p><span class="glyphicon glyphicon-envelope"></span> {{$posts->email}}</p>
    @endforeach
    </div>
    
    <div class="container">
    <form role = "form" action="{{ route('feed.store') }}" method="post">
    {{ csrf_field() }}
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="form-group">
      	  <input class="form-control" id="comment" name="comment" placeholder="Comment" rows="5" type="text"></input><br>
      	</div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
      </div>
      </form>
      </div>
      </div>
      </div>

@endsection