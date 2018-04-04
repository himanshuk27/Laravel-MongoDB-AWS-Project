
@extends('Icamp18.layouts.dashboardComp')
 @section('title', 'Company Dashboard - Internshipcamp \'18') 
 @section('content')



<div class="container">

  <h3>Your Candidates </h3>
  <br>

    <div class="row">
       <div class="col-md-12">
    <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">Sl No</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Resume</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data2 as $value)
<?php $count++; 
?>
   
    <tr>
      <th scope="row">&nbsp;</th>
      <td>{{$count or ''}}</td>
      <td>{{$value->name or ''}}</td>
      <td><a href="{{$value->resume or ''}}">Resume</a></td>
      <td>{{$value->email or ''}}</td>
      <td>{{$value->mobile_no or ''}}</td>
    </tr>

    @endforeach
    
  </tbody>
</table>

</div></div></div>

@endsection
