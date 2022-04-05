@extends('admin.layout')
@section("title")
Modify the User
@endsection
@section("content")

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" fa fa-users font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">Modify the User </span>
                    </div>                                    
                </div>
                  {!! Form::model($update,['method'=>'PATCH','action'=>['Admin\User\UsersController@update',$update->id],'novalidate'=>'novalidate','files'=>'true']) !!}
          
                        <div class="{{$errors->has('name')?'has-error':''}}" >
                            <div class="form-group form-md-line-input form-md-floating-label">
                                 {{ Form::text('name',null,['class'=>'form-control','id'=>'form_control_1']) }}
                                <label for="form_control_1">Name</label>
                            </div>
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                         </div>


                        <div class="{{$errors->has('email')?'has-error':''}}" >
                            <div class="form-group form-md-line-input form-md-floating-label">
                                {{ Form::text('email',null,['class'=>'form-control','id'=>'form_control_1']) }}
                                <label for="form_control_1">Email</label>
                            </div>
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                         </div>


                        <div class="{{$errors->has('password')?'has-error':''}}" >
                            <div class="form-group form-md-line-input form-md-floating-label">
                                 {!! Form::password('password',['class'=>'form-control','autocomplete'=>'new-password']) !!}
                                <label for="form_control_1">Password</label>
                            </div>
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                         </div>


                        <div class="{{$errors->has('phone')?'has-error':''}}" >
                            <div class="form-group form-md-line-input form-md-floating-label">
                            {{ Form::text('phone',null,['class'=>'form-control','id'=>'form_control_1']) }}
                            <label for="form_control_1">Phone</label>
                            </div>
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        </div>

                        @php
                        $explodeImg =  explode(".",$update->photo);
                        $pathImg =  '/uploads/user/'.$update->photo;
                      @endphp

                   
                      @if($update->count() != 0 && $update->photo != '')
                        <div class="col-md-12" >
                          <div class="box box-success">
                            <div class="box-body text-center">
                             <img style="max-width: 80%; border:1px solid #cecece" src="{{ $explodeImg[0] == 'http://lorempixel' ? $update->photo : $pathImg }}">
                            </div>
                          </div>
                        </div>
                      @endif


                      <div class="form-group form-md-line-input has-info {{$errors->has('user_image')?'has-error':''}}">
                          {!! Form::file('user_image',['class'=>'form-control']) !!}
                          <label for="form_control_1">Photo</label>
                           <span class="help-block">Photo</span>
                          <small class="text-danger">{{ $errors->first('user_image') }}</small>
                      </div>


                        <div style="margin-bottom: 20px" class="text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <button  class="btn default">Modify the User</button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                <!-- END FORM-->
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>

@endsection