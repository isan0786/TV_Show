@include('inc.header')

<div class="container">
  <div class="row">
    <legend> TV Shows List</legend>
    @if(session('success'))
    <span class="alert alert-dismissible alert-success"> {{session('success')}} </span> 
    @endif
     
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Season</th>
      <th scope="col">Episode</th>
      <th scope="col">Quote</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($tvShowsList) > 0)
      @foreach($tvShowsList->all() as $tvShow)
    
   
    <tr class="table-info">
      <th scope="row">{{ $tvShow->id }}</th>
      <td>{{ $tvShow->season }}</td>
      <td>{{ $tvShow->episode }}</td>
      <td>{{ $tvShow->quote }}</td>
      <td><img style="height: 200px; width: 100%; display: block;" src= {{$tvShow->image }} alt="Card image"/></td>
      <td>

        <a href='{{url("/readParticularShow/{$tvShow->id}" ) }}' class="badge badge-success"> Read</a>
        <a href='{{url("/updateShow/{$tvShow->id}" ) }}' class="badge badge-warning"> Update</a>
        <a href='{{url("/deleteShow/{$tvShow->id}" ) }}' class="badge badge-danger"> Delete</a>
      </td>
    </tr>
    @endforeach
    @endif
   
  </tbody>
</table>
  </div>
</div>
@include('inc.footer')