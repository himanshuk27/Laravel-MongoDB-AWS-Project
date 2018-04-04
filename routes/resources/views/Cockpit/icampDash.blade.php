
@extends('Cockpit.layouts.dashboard')
 @section('title', 'Cockpit - KIIT Ecell') 
 @section('content')



<div class="container">

  <h3>Icamp '18 Companies</h3>
  <br>

    <div class="row">
       <div class="col-md-12">
       
    <table id="compTable" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">Sl No</th>
      <th scope="col">Company Name</th>
      <th scope="col">Count</th>
      <th scope="col">List</th>
    </tr>
  </thead>
  <tbody>
   
   @foreach ($data as $value)
<?php $count++;
$array =  explode(',', $value->applied_id);
$count2 = count($array);
?>
   
    <tr>
      <th scope="row">&nbsp;</th>
     <td>{{$count or ''}}</td>
      <td>{{$value->CompanyName or ''}}</td>
      <td>{{$count2 or ''}} </td>
      <td>       
        <?php
        foreach ($array as $value) {?>
          
    <a href="/icampProf?ic_id=<?php echo $value;?>" target="_blank" ><?php echo $value; ?></a>
          <br> <?php
         
       }
        ?>
      </td>
    </tr>
     @endforeach
    
  </tbody>
</table>

</div></div></div>

@endsection


