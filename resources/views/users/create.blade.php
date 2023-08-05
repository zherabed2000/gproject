@extends('layouts.master')

@section('content')

    <!--begin::Category-->
    <div class="card card-flush px-8 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <form action="{{ isset($item) ? route('users.update',$item->id) :route('users.store') }}" method="post">
            @csrf
            @if(isset($item))
                @method('put')
            @endif
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Add User</h2>

                </div>

            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body ">


                <div class="form-group">
                    <label>Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{isset($item)?@$item->name :''}}"
                           required/>
                </div>


                <div class="form-group">
                    <label>E-mail<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{isset($item)?@$item->email :''}}"
                           required/>
                </div>

                <div class="form-group">
                    <label>
                        Password
                        @if(!isset($item))
                            <span class="text-danger">*</span>
                        @endif
                    </label>
                    <input type="password" class="form-control" name="password" @if(!isset($item)) required @endif/>
                </div>


            </div>
            <!--end::Card body-->

            <div class="card-footer">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary mr-2 w-100">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!--end::Category-->

@endsection
