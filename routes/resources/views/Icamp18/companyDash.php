@extends('Icamp18.layouts.dashboardComp')
 @section('title', 'Dashboard - Internshipcamp \'18') 
 @section('content')

<div class="container">

    <div class="row">
       <div class="col-md-12">
    <table class="table table-striped table-bordered table-hover" style="margin-top: 20%;">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Location</th>
      <th scope="col">Duration</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div></div></div>

@endsection
