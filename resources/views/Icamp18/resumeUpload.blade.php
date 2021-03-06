@extends('Icamp18.layouts.dashboard')

@section('title', 'Dashboard - Internshipcamp \'18')

@section('css')
<style type="text/css">
  .container
      {
        width: 100%;
        max-width: 680px; /* 800 */
        text-align: center;
        margin: 0 auto;
      }

        .container h1
        {
          font-size: 42px;
          font-weight: 300;
          color: #0f3c4b;
          margin-bottom: 40px;
        }
        .container h1 a:hover,
        .container h1 a:focus
        {
          color: #39bfd3;
        }

        .container nav
        {
          margin-bottom: 40px;
        }
          .container nav a
          {
            border-bottom: 2px solid #c8dadf;
            display: inline-block;
            padding: 4px 8px;
            margin: 0 5px;
          }
          .container nav a.is-selected
          {
            font-weight: 700;
            color: #39bfd3;
            border-bottom-color: currentColor;
          }
          .container nav a:not( .is-selected ):hover,
          .container nav a:not( .is-selected ):focus
          {
            border-bottom-color: #0f3c4b;
          }

        .container footer
        {
          color: #92b0b3;
          margin-top: 40px;
        }
          .container footer p + p
          {
            margin-top: 1em;
          }
          .container footer a:hover,
          .container footer a:focus
          {
            color: #39bfd3;
          }
      .box
        {
          font-size: 1.25rem; /* 20 */
          background-color: #c8dadf;
          position: relative;
          padding: 100px 20px;
        }
        .box.has-advanced-upload
        {
          outline: 2px dashed #92b0b3;
          outline-offset: -10px;

          -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
          transition: outline-offset .15s ease-in-out, background-color .15s linear;
        }
        .box.is-dragover
        {
          outline-offset: -20px;
          outline-color: #c8dadf;
          background-color: #fff;
        }
          .box__dragndrop,
          .box__icon
          {
            display: none;
          }
          .box.has-advanced-upload .box__dragndrop
          {
            display: inline;
          }
          .box.has-advanced-upload .box__icon
          {
            width: 100%;
            height: 80px;
            fill: #92b0b3;
            display: block;
            margin-bottom: 40px;
          }

          .box.is-uploading .box__input,
          .box.is-success .box__input,
          .box.is-error .box__input
          {
            visibility: hidden;
          }

          .box__uploading,
          .box__success,
          .box__error
          {
            display: none;
          }
          .box.is-uploading .box__uploading,
          .box.is-success .box__success,
          .box.is-error .box__error
          {
            display: block;
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;

            -webkit-transform: translateY( -50% );
            transform: translateY( -50% );
          }
          .box__uploading
          {
            font-style: italic;
          }
          .box__success
          {
            -webkit-animation: appear-from-inside .25s ease-in-out;
            animation: appear-from-inside .25s ease-in-out;
          }
            @-webkit-keyframes appear-from-inside
            {
              from  { -webkit-transform: translateY( -50% ) scale( 0 ); }
              75%   { -webkit-transform: translateY( -50% ) scale( 1.1 ); }
              to    { -webkit-transform: translateY( -50% ) scale( 1 ); }
            }
            @keyframes appear-from-inside
            {
              from  { transform: translateY( -50% ) scale( 0 ); }
              75%   { transform: translateY( -50% ) scale( 1.1 ); }
              to    { transform: translateY( -50% ) scale( 1 ); }
            }

          .box__restart
          {
            font-weight: 700;
          }
          .box__restart:focus,
          .box__restart:hover
          {
            color: #39bfd3;
          }

          .box__file
          {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
          }
          .js .box__file + label
          {
            max-width: 80%;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
          }
          .js .box__file + label:hover strong,
          .box__file:focus + label strong,
          .box__file.has-focus + label strong
          {
            color: #39bfd3;
          }
          .js .box__file:focus + label,
          .js .box__file.has-focus + label
          {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
          }
            .js .box__file + label *
            {
              /* pointer-events: none; */ /* in case of FastClick lib use */
            }

          .no-js .box__file + label
          {
            display: none;
          }

          .box__button
          {
            display: block;
          }
          .box__button
          {
            font-weight: 700;
            color: #e5edf1;
            background-color: #39bfd3;
            padding: 8px 16px;
            margin: 40px auto 0;
          }
            .box__button:hover,
            .box__button:focus
            {
              background-color: #0f3c4b;
            }   


</style>

@endsection

@section('content')
<div class="container">
<div class="row">
  <div class="col-lg-12">
    <div id="m_chart_profit_share" class="m-widget14__chart">           
        <img style="width: 15%;" src="/Icamp18/assets_dash/img/resume_icon.png">   
        <span style="font-size: 2em;">&nbsp;Upload Resume</span">        
      </div>
      
    <br>
    <form method="post" id="upload resume" action="/profile/resume/upload" enctype="multipart/form-data" novalidate="" class="box has-advanced-upload">

    
    <div class="box__input">
      <svg class="box__icon" xmlns="https://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43"><path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z"></path></svg>
      <input type="file" name="file_resume" id="file_resume" class="box__file">
      <label id="choose" for="file"><strong style="cursor: pointer;border-bottom: 1px dotted black;">Click this text</strong><span class="box__dragndrop"> or drag it here to select pdf file</span>.</label>
      
      <br><br>
      <button type="submit" class="btn btn-success" id="but_upload">Start Upload</button>
    </div>

    
    <div class="box__uploading">Uploading…</div>
    <div class="box__success">Done! <a href="#" class="box__restart" role="button">Upload more?</a></div>
    <div class="box__error">Error! <span></span>. <a href="#" class="box__restart" role="button">Try again!</a></div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}"></form>

  <br>
  @if($data->resume)
  <a href="/profile/resume/download" target="_blank" class="btn btn-accent m-btn m-btn--icon m-btn--wide">
                  <span>
                    <i class="fa flaticon-download"></i>
                    <span>Download Your Resume</span>
                  </span>
                </a>
                @endif
  </div>
</div>
</div>
	@endsection

  @section('scripts')

 <script type="text/javascript" src="/Icamp18/assets_dash/js/resume.js"></script>
  @endsection