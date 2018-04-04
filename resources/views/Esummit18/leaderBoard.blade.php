@extends('Esummit18.layouts.landing_main')


@section('title', 'Campuspreneur LeaderBoard - KIIT E-Summit\'18')

@section('content')

<section class="section-padding ">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <br>
    <center>
        <h2 class="section-title text-uppercase">Campuspreneur LeaderBoard</h2>
    </center>
<div class="mt-30"></div>
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Points</th>
</tr>
</thead>
<tbody>
  @foreach ($countArray as $key=>$count)
                                                    <tr>
                                                        <td>{{ $key}}</td>
                                                        <td>{{$count}}</td>
                                                        </tr>
                                                 @endforeach
</tbody>
</table>

</div>
</div>
</div>
</div>
<br><br><br><br>
</section>

@endsection

@section('scripts')
<script type="text/javascript">
   $("#up").css("display","none");
</script>
@endsection