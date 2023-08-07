<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>

    <title>Home</title>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <style>
        a.btn.btn-primary {
            background: #7971D9;
        }

        a.btn.btn-light.fw-bold.text-gray-800.text-hover-primary.fs-7 {
            margin-left: 29px;


        }

        /* Hide the file input visually */
        .visually-hidden {
            position: absolute;
            left: -9999px;
        }

        #kt_app_sidebar_logo img {
            height: 150px !important;
            padding: 0 !important;
            margin-left: -35px !important;
        }

        .row {
            --bs-gutter-x: -2.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            margin-bottom: 5px;
        }
    </style>

    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-sidebar-enabled="true"
      data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
      class="app-default">
<!--begin::Theme mode setup on page load-->
<script>
    if (document.documentElement) {
        const defaultThemeMode = "system";
        const name = document.body.getAttribute("data-kt-name");
        let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
        if (themeMode === null) {
            if (defaultThemeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            } else {
                themeMode = defaultThemeMode;
            }
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

                    <div class="row pt-4">
                        <div class="col-md-12">
                            <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Session::has('alert-' . $msg)): ?>
                                    <div class="alert alert-<?php echo e($msg); ?>">
                                        <?php echo e(Session::get('alert-' . $msg)); ?></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <?php if($errors->any()): ?>

                        <div class="row pt-4">
                            <div class="col-md-12">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="row">


                            <?php echo $__env->yieldContent('content'); ?>




                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->

                    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                          rx="1" transform="rotate(90 13 6)" fill="currentColor"/>
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor"/>
                </svg>
            </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->


    <!--begin::Modals-->

    <?php echo $__env->make('layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

</body>
<!--end::Body-->
<!-- Load jQuery and jQuery UI scripts -->


<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
<!--end::Global Javascript Bundle-->


<script src="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used by this page)-->
<script src="<?php echo e(asset('assets/js/widgets.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom/widgets.js')); ?>"></script>

<script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php echo $__env->yieldPushContent('js'); ?>
<script>
    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });


    $(document).on('click', '.delete', function (event) {
        var delete_url = $(this).data('url');
        event.preventDefault();
        swal.fire({
            title: 'Are you sure to delete the selected item?',
            icon: 'question',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#56ace0',
            allowOutsideClick: false
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url: delete_url,
                    method: 'delete',
                    type: 'json',
                    dataType: 'json',
                    success: function (response) {
                        if (response.status) {
                            toastr.success(response.message);
                            setTimeout(function (){
                                location.reload();
                            }, 3000)
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function (response) {
                        toastr.error('Something was wrong');
                    }
                });
            }
        });
    });


    $(document).on('click', '.operation', function (event) {
        let url = $(this).data('url');
        event.preventDefault();
        $.ajax({
            url: url,
            method: 'post',
            type: 'json',
            dataType: 'json',
            success: function (response) {
                if (response.status) {
                    toastr.success(response.message);
                    setTimeout(function (){
                        location.reload();
                    }, 3000)
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error('Something was wrong');
            }
        });
    });

</script>


</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/gproject/resources/views/layouts/master.blade.php ENDPATH**/ ?>