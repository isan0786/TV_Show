@include('inc.header')
<div class="container">
  <div class="row">
    <legend> TV Show </legend>

<div class="card mb-3">
  <h3 class="card-header">Season : {{$singleShowView->season }}</h3>
  <div class="card-body">
    <h5 class="card-title">Episode : {{$singleShowView->episode }}</h5>
    <h6 class="card-subtitle text-muted">Quote : {{$singleShowView->quote }}</h6>
  </div>
  <img style="height: 200px; width: 100%; display: block;" src= {{$singleShowView->image }} alt="Card image">
</div>
</div>
 <a href="{{ url('/')}}" class="btn btn-info"> Back</a>
</div>

@include('inc.footer')