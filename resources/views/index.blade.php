@extends('layouts.master')

@push('css')

    <style>

        .btn {
            font-size: 8px !important;
            padding: 5px !important;
            margin-left: 2px !important;

        }
        .btn .svg-icon{
            margin-right: 0;
        }
    </style>
@endpush

@section('content')

    <!--begin::Row-->
    <div class="row px-8 mb-5 mb-xl-10" id="notes-container">
        <!--begin::Col-->

{{--        <div class="row">--}}
            @foreach ($notes as $note)
                @include('notes.card')
            @endforeach
{{--        </div>--}}
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-4">
            <!--begin::Card widget 15-->
            <div class="card card-flush h-xl-100">
                <!--begin::Body-->
                <div class="card-body py-9">
                    <!--begin::Row-->
                    <div class="row gx-9 h-100">
                        <!--begin::Col-->

                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-12">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column h-100">
                                <!--begin::Header-->
                                <div class="mb-7">

                                    <!--begin::Items-->
                                    <div
                                        class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <!--begin::Item-->

                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->


                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <a href="/AddNote">
                                    <div
                                        class="d-flex flex-column  text-center pt-5    card-rounded">
                                        <p>
                                            <img
                                                src="assets/media/icons/duotune/arrows/arr075.svg"
                                                height="200" style="opacity: 20%;"/></p>
                                    </div>
                                </a>

                                <!--end::Body-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 15-->
        </div>
        <!--end::Col-->

    </div>
    <!--end::Row-->

    @include('notes.modals')

@endsection

@push('js')
    <script>
        $(function() {
            $("#notes-container").sortable({
                stop: function (event, ui) {
                    $("#notes-container .item").each(function () {
                        // Write code here
                    });
                }
            }).disableSelection();
        });
    </script>
@endpush
