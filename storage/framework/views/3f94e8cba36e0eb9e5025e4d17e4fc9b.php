<?php $__env->startSection('content'); ?>

    <!--begin::Category-->
    <div class="card card-flush px-8 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <form action="<?php echo e(route('notes.share.store',$item->id)); ?>" method="post">
            <?php echo csrf_field(); ?>


            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Share Note</h2>

                </div>

            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body ">


                <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="fv-row mb-8">
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="ids[]" value="<?php echo e($friend->friend->id); ?>" />
                            <span class="form-check-label fw-semibold text-gray-700 fs-6 ms-1"><?php echo e($friend->friend->email . ' | ' . $friend->friend->name); ?></span>
                        </label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



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

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"
            integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo e(asset('assets/js/custom/documentation/forms/flatpickr.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gproject\resources\views/notes/share.blade.php ENDPATH**/ ?>