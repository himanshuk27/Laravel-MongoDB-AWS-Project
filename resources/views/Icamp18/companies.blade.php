@extends('Icamp18.layouts.dashboard1') 
@section('title', 'Dashboard - Internshipcamp \'18')

 
@section('css')
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<style>

</style>

@endsection

@section('content')

<div class="container">

    <div class="row">
	
       <div class="col-xs-12">
    <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr style="background-color:#3498DB ; color:white;">
      <th scope="col" width="100px" >Sl no.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Internship Location</th>
      <th scope="col">Duration</th>
      <th scope="col">Profile</th>
    </tr>
  </thead>
  
  
  
  <tbody>
  @if(count($data)>0)
    @foreach($data as $value)
    <tr>
      <th scope="row">{{$count++}}</th>
      <td>{{$value->CompanyName}}</td>
      <td>{{$value->IntLocation}}</td>
      <td>{{$value->IntDuration}}</td>
      <td>{{$value->IntProfile}}</td>
    </tr>
    <tr>
      
	@endforeach
  </tbody>
</table>
	
@endif

</div></div></div>

@endsection
