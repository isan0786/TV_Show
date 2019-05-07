@include('inc.header')

<div class="container">
	<div class="row">
    <legend> Update Show</legend>
		<div class="col-md-6">
			
			<form class="form-horizontal" method="get" action="{{url('/editShow',array($updatedShow->id))}}">
        {{csrf_field()}}
  <fieldset>
     @if(count($errors) > 0)
      @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}

    </div>
    @endforeach
    @endif
    <div class="form-group">
      <label >Season</label>
      <input type="text" name = "season" value=" <?php echo $updatedShow->season ?>" class="form-control" id="seasonId"    placeholder="Update Season">
    </div>
    <div class="form-group">
      <label >Episode</label>
      <input type="text" name = "episode" value=" <?php echo $updatedShow->episode ?>" class="form-control" id="episodeId"   placeholder="Update Episode">
    </div>

    <div class="form-group">
      <label >Quote</label>
      
        <textarea name = "quote" class="form-control" id="quoteId"  placeholder="Update Quote"><?php echo $updatedShow->quote ?></textarea> 
      
      
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ url('/')}}" class="btn btn-info"> Back</a>

  </fieldset>
</form>
		</div>
	</div>
</div>
@include('inc.footer')