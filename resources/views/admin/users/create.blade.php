@extends('admin.layout')
@section("title")
Add a new User
@endsection
@section("content")

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" fa fa-users font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Add a new User</span>
                </div>
            </div>
                {!! Form::open(['action'=>'Admin\User\UsersController@store','files'=>'true']) !!}
                    <div class="{{$errors->has('name')?'has-error':''}}" >
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" value="{{old('name')}}" class="form-control" name="name" id="form_control_1">
                            <label for="form_control_1">Name</label>
                           <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                     </div>

                    <div class="{{$errors->has('email')?'has-error':''}}" >
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="email" value="{{old('email')}}" class="form-control" name="email" id="form_control_1">
                            <label for="form_control_1">Email</label>
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                     </div>

                    <div class="{{$errors->has('password')?'has-error':''}}" >
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="password" value="{{old('password')}}" class="form-control" name="password" id="form_control_1">
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                            <label for="form_control_1">Password</label>
                        </div>
                     </div>

                    <div class="{{$errors->has('phone')?'has-error':''}}" >
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" value="{{old('phone')}}" class="form-control" name="phone" id="form_control_1">
                            <label for="form_control_1">Phone</label>
                        <small class="text-danger">{{ $errors->first('phone') }}</small>
                        </div>
                     </div>

                      <div class="{{$errors->has('user_image')?'has-error':''}}" >
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input class="form-control" id="form_control_1" type="file" name="user_image">
                            <label for="form_control_1">Image</label>
                        <small class="text-danger">{{ $errors->first('user_image') }}</small>
                        </div>
                    </div>


              

                    <div style="margin-bottom: 20px" class="text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button  class="btn default">Add User</button>
                            </div>
                        </div>
                    </div>

                 {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection 