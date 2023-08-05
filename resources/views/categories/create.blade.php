@extends('layouts.master')

@section('content')

    <!--begin::Category-->
    <div class="card card-flush px-8 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <form action="{{ isset($item) ? route('categories.update',$item->id) :route('categories.store') }}" method="post">
            @csrf
            @if(isset($item))
                @method('put')
            @endif
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Add Category</h2>

                </div>

            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body ">


                <div class="form-group">
                    <label>Color<span class="text-danger">*</span></label>
                    <input type="color" class="form-control" name="color" value="{{isset($item)?@$item->color :''}}"
                           required/>
                </div>

                <div class="form-group">
                    <label>Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{isset($item)?@$item->title :''}}"
                           required/>
                </div>

                <div class="form-group">
                    <label>Description<span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="description"
                              rows="4" required>{{isset($item)?@$item->description :''}}</textarea>
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
