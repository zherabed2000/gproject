@extends('layouts.master')

@section('content')

    <!--begin::Category-->
    <div class="card card-flush px-8 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <form action="{{ isset($item) ? route('notes.update',$item->id) :route('notes.store') }}" method="post">
            @csrf
            @if(isset($item))
                @method('put')
            @endif
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Add Note</h2>

                </div>

            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body ">


                <div class="form-group">
                    <label>Title<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{isset($item)?@$item->name :''}}"
                           required/>
                </div>


                <div class="form-group">
                    <label>Category<span class="text-danger">*</span></label>

                    <select class="form-select" data-control="select2" data-placeholder="Select an option"
                            name="category_id">
                        <option></option>
                        @foreach ($categories as $category)
                            <option
                                value="{{$category->id}}" {{ isset($item) && $item->category_id == $category->id ? 'selected' : '' }}>{{$category->title}}</option>
                        @endforeach
                    </select>


                </div>

                <div class="form-group">
                    <label>Notes<span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="content"
                              rows="4" required>{{isset($item)?@$item->content :''}}</textarea>
                </div>

                <div class="form-group">
                    <label>Reminder Date<span class="text-danger">*</span></label>
                    <input class="form-control" name="reminder_date" value="{{isset($item)?@$item->reminder_date :''}}"
                           readonly id="kt_datepicker_1"/>

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
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"
            integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/custom/documentation/forms/flatpickr.js') }}"></script>

@endpush
