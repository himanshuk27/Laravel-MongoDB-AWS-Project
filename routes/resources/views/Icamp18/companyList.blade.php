@extends('Icamp18.layouts.dashboard') 
@section('title', 'Dashboard - Internshipcamp \'18') 
@section('css')

<style type="text/css">
    .imgwrapper {
        width: 100%;
    }
</style>

@end section
@section('content')
<style type="text/css">
    .card {
        transition: all 0.2s linear;

    }

    .card:hover {
        -webkit-box-shadow: 10px 10px 10px -2px rgba(107, 106, 107, 1);
        -moz-box-shadow: 10px 10px 10px -2px rgba(107, 106, 107, 1);
        box-shadow: 10px 10px 10px -2px rgba(107, 106, 107, 1);

    }
    ul{
        list-style: none;
    }

</style>

<div class="container">
    <div class="row">
        @foreach ($data2 as $value)
    <div class="col-md-3 col-sm-12" id="card_startup">
            <div class="card" style="width: 100%;" name="{{$value->ic_id or ''}}">
                <img class="imgwrapper" src="{{$value->logo or '/Icamp18/assets_dash/img/office.png'}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" style="font-size: 20px;font-weight: bold;text-align: center;">{{$value->CompanyName}}</p>
                       <ul>
                            <li><span  style="font-weight: bold;">Stipend :</span> {{$value->IntStipend or 'Unpaid'}}</li>
                            <li><span  style="font-weight: bold;">Duration :</span> {{$value->IntDuration or 'null'}}</li>
                            <li><span style="font-weight: bold;">Location : </span> {{$value->IntLocation or 'null'}}</li>
                            <li><span style="font-weight: bold;">Special Notes : </span>{{$value->Intnotes or 'null'}}</li>
                        </ul>
                </div>

            </div><br>

        </div>
@endforeach
        
       
      
    </div><br><br><hr><br><br>
</div>
<!--
<div class="container">
    <div class="row">
          <div class="col-md-3 col-sm-12">
           <a href="https://interncamp.ecell.org.in/aiesec">
            <div class="card" style="width: 100%;">
                <img class="imgwrapper" src="{{$value->logo or '/Icamp18/assets_dash/img/office.png'}}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text" style="font-size: 20px;font-weight: bold;text-align: center;">International Internship(Powered By AIESEC)</p>
                 <ul>
                            
                            <li><span  style="font-weight: bold;">Duration :</span>Avg. 8 Weeks</li>
                            <li><span style="font-weight: bold;">Location : </span> 134 Countries</li>
                        </ul>
                </div>
    </div>
       </a>
        </div>
</div>
</div>
-->


<!-- Modal -->
<div class="modal fade" id="modal_startup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="loader">
        <center>
            <img src="/Icamp18/assets/images/spinner.gif">
            <br>

        Loading...
        </center>

      </div>
      <div class="modal-body" id="modal-body" style="display:none;">
        <div id="modal_desc">
        </div> 
        <br>
        <h6 id="stipend"></h6>  
        <br>
        <h6 id="location"></h6> 
        <br>
        <h6 id="profile"></h6> 
        <br>
        <h6 id="duration"></h6>  
        <br>
        <h6 id="ppo"></h6>     
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="but_bookmark" name="">Bookmark</button>
        <button type="button" class="btn btn-success" id="but_apply" name="">Apply Now</button>
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')

<script type="text/javascript" src="/Icamp18/assets_dash/js/companyList.js">
    
</script>
@endsection