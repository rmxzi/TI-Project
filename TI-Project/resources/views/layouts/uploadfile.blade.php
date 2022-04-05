@extends('layouts.app')
@section("title")
 it
@endsection
@section("content")


<div class="undermenuarea">
    <div class="boxedshadow">
        
    </div>
    <!-- SLIDER AREA
    ================================================== -->
    >
</div>
<!-- UNDER SLIDER - BLACK AREA
================================================== -->

<div class="shadowunderslider">
</div>
<!-- START content area
================================================== -->
<div class="grid">
    <div class="row space-bot">
        <div class="row space-top">
            <div class="c12 space-top">
                <h1 class="maintitle ">
                <span>UPLOAD FileS</span>
                </h1>
            </div>
        </div>
@if(session()->has('success'))
    <div class="box-body">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           {{ @session()->get('success') }}
        </div>
    </div>
@endif

 @if(Auth::check())                  
<div class="container">
         {!! Form::open(['action'=>'Front\Home\HomePageController@Upload','files'=>'true']) !!}
      <div class="row">
        <div class="col-25">
          <label for="udate"> Upload Date</label>
        </div>
        <div class="col-75">
            <input type="date" required id="uploaddate" name="created_at">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="filename">File Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="filename" name="name" placeholder="Your file name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="upload">Upload File</label>
        </div>
        <div class="col-75">
            <input type="file" required id="myFile" name="uploadfile">

        </div>
      </div>
    
      <div class="row">
        <input type="submit" value="Submit">
      </div>
     {!! Form::close() !!}
  </div>
  @else
    <div class="c12 space-top">
     <span> Please login first to be able to upload a file</span>
    </div>
  @endif

        <!--Box 1-->
    
    </div>
    <!-- SHOWCASE
    ================================================== -->

    <div class="row space-bot">
        <div class="c12">
            
        </div>
    </div>
    <!-- CALL TO ACTION 
    ================================================== -->
    
</div><!-- end grid -->



@endsection