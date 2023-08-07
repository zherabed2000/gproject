<?php $__env->startPush('css'); ?>

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
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <!--begin::Row-->
    <div class="row px-8 mb-5 mb-xl-10" id="notes-container">
        <!--begin::Col-->

        
        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('notes.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-3 mb-5 item">
            <!--begin::Card widget 15-->
            <div class="card card-flush h-xl-100">
                <!--begin::Body-->
                <div class="card-body py-9" style="background:#1e1e2d!important;">
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
                                <a href="<?php echo e(route('notes.create')); ?>">
                                    <div
                                        class="d-flex flex-column  text-center pt-5    card-rounded">
                                        <p>
                                            <img src="<?php echo e(asset('assets/media/icons/duotune/arrows/arr075.svg')); ?>"
                                                 height="200" style="opacity: 20%;"/>
                                        </p>
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

    <?php echo $__env->make('notes.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/gproject/resources/views/index.blade.php ENDPATH**/ ?>