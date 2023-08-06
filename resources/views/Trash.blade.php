@extends('layouts.master')

@push('css')

    <style>

        .btn {
            font-size: 8px !important;
            padding: 5px !important;
            margin-left: 2px !important;

        }

        .btn .svg-icon {
            margin-right: 0;
        }
    </style>
@endpush

@section('content')

    <!--begin::Row-->
    <div class="row px-8 mb-5 mb-xl-10" id="notes-container">

        @foreach ($notes as $note)
            @include('notes.card')
        @endforeach

    </div>
    @include('notes.modals')

@endsection

@push('js')
    <script>
        $(function () {
            $("#notes-container").sortable({
                stop: function (event, ui) {
                    $("#notes-container .item").each(function () {
                        // Write code here
                    });
                }
            }).disableSelection();
        });
    </script>

    <script>
        $(document).on('click', '.add_attachment', function () {
            let url = $(this).attr('data-url');
            let attachment = $(this).attr('data-attachment');
            $('.modal#add_attachment').find('form').attr('action', url);

            if (attachment) {
                $('.modal#add_attachment').find('#image_container').removeClass('d-none').find('img').attr('src', attachment);
            } else {
                $('.modal#add_attachment').find('#image_container').addClass('d-none').find('img').attr('src', '');
            }
        })
        $(document).on('click', '.comments_btn', function () {
            let url = $(this).attr('data-url');
            let fetch_url = $(this).attr('data-fetch-url');

            $.ajax({
                url: fetch_url,
                method: "GET",
                success: function (res) {
                    $('.modal#note_comments').find('#comments_cards').html(res.html);
                    $('.modal#note_comments').find('form').attr('action', url);
                    $('.modal#note_comments').modal('show');
                },
                error: function (error) {
                    $('.modal#note_comments').find('#comments_cards').html('');
                    toastr.error('Something was wrong');

                }
            })


        })
    </script>
@endpush
