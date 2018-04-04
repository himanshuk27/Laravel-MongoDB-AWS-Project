@extends('Icamp18.layouts.dashboard') @section('title', 'Dashboard - Internshipcamp \'18') @section('css')
    <table class="table table-hover" style="margin-top: 20%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Nmae</th>
      <th scope="col">Company Email</th>
      <th scope="col">No. of registrations</th>
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
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

@endsection
