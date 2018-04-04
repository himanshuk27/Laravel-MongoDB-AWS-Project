@extends('Esummit18.layouts.dashboard')

@section('title', 'ICAMP\'18 | CompanyList')

@section('css')

<link href="/Esummit18/assets_dash/css/custom.css" rel="stylesheet" type="text/css" />

@end section

@section('content')


<div class="caption">
    <strong>ICamp'18 Companies</strong> 
</div>

<div class="portlet-body flip-scroll">
                                        <table class="table table-bordered table-striped table-condensed flip-content">
                                            <thead class="flip-content">
                                                <tr>
                                                    <th width="50%"> Name</th>
                                                    <th> Email</th>
                                                    <th> POC</th>
                                                    <th class="numeric"> Contact </th>
                                                    <th> Profile </th>
                                                    <th> Duration </th>
                                                    <th> Location</th>
                                                    <th class="numeric"> No. of interns</th>
                                                    <th class="numeric"> PPO</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                         


                                               
                                                    
                                               
                                                <!-- <tr>
                                                    
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                 
                                                    <td class="numeric"> 9,395 </td>
                                                </tr>
                                                <tr>
                                                  
                                                    <td> ARDENT LEISURE GROUP </td>
                                                   
                                                    <td class="numeric"> $1.13 </td>
                                                    
                                                </tr>
                                                -->
                                                
                                            </tbody>
                                        </table>
                                    </div>
                               






@endsection

@section('scripts')