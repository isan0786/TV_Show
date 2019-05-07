@include('inc.header')

<div class="container">
	<div class="row">
    <legend> Add New Show</legend>
		<div class="col-md-6">
			
			<form class="form-horizontal" method="post" action="{{url('/insertShow')}}">
        {{csrf_field()}}
  <fieldset>
    <legend>TV Show</legend>
     @if(count($errors) > 0)
      @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}

    </div>
    @endforeach
    @endif
    <div class="form-group">
      <label >Season</label>
      <input type="text" name = "season" class="form-control" id="seasonId"    placeholder="Enter Season">
    </div>
    <div class="form-group">
      <label >Episode</label>
      <input type="text" name = "episode" class="form-control" id="episodeId"   placeholder="Enter Episode">
      
    </div>

    <div class="form-group">
      <label >Quote</label>
      
        <textarea class="form-control" name = "quote" id="quoteId"  placeholder="Enter Quote"></textarea> 
      
      
    </div>
    <div>
      <input type="text" hidden= "true" name = "image" class="form-control" id="imageId" value="https://picsum.photos/id/<?php echo mt_rand(1,1000); ?>/100/100" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ url('/')}}" class="btn btn-info"> Back</a>

  </fieldset>
</form>
		</div>
	</div>
</div>
@include('inc.footer')