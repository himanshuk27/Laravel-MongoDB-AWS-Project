@extends('Esummit18.layouts.dashboard')

@section('title', 'KIIT E-Summit \'18 | Dashboard')    

@section('content')


 <!--Begin::Section--> 
<div class="m-portlet">
      <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                  <div class="col-xl-4">
                        <!--begin:: Widgets/Daily Sales-->
<div class="m-widget14">
      <center><h3>Your Track: {{$data['track'] or 'None'}}</h3></center>
      <br>
      <!--center>
           <img style="width: 50%;" src="/Esummit18/assets_dash/img/paymentStartup.png"> 
      </center-->
      @if($data['track'] == 'business')
      <p>
            IMPORTANT NOTICE FOR CASE STUDY COMPETITION:

For those interested in the Case Study Competition, please note the dates and mark the following information:

8th March: Mails will be sent to the delegates containing resources and links to assist them in the Case Study Competition. A sample case study will be attached to the mail.

9th March: An interactive session on “How to Build a Case Study” will be held for the Business Track delegates. Professor Sujit Patra would be taking the session.

Delegates will receive the competitive case study in the evening via e-mail.

Delegates will be grouped into teams of 4 members for the Case Study Competition. 

10th March: Case Study Competition begins. Winners will receive prizes worth Rs 15,000. 

RULES AND GUIDELINES

Delegates are to bring their own laptops, chargers and stationaries.

The teams will use PowerPoint slides to give its oral presentation on the day of the competition. The presentation may not be longer than 3 minutes. A panel of judges then will ask questions they deem appropriate and judge the presentation. Teams will compete by delivering an oral presentation to a panel of judges.

Teams will upload the final presentations on the Google drive link provided in the case study document.

Use of any digital means(mobile phones,IPads,etc) during the competition will result in immediate termination from the competition.


For any queries, WhatsApp: 8018302922(Avirup)
                             8249139355(Shreya)

      </p>

      @endif
     
     
</div>
<!--end:: Widgets/Daily Sales-->                </div>
                 

      @endsection

