<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-12 mb-5 ">
        <!--begin::Card widget 15-->
        <div class="card card-flush h-xl-100">
            <!--begin::Body-->
            <div class="card-body py-0 pt-9" style="background-color: #615f7c;">
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
                                <div class="d-flex justify-content-between flex-wrap d-grid gap-2">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-start me-5 me-xl-13">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px symbol-circle me-3">
                                            <img src="<?php echo e(asset('assets/media/avatars/300-3.jpg')); ?>"
                                                 class="" alt=""/>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <a href="javascript:;"
                                               class="fw-bold text-gray-800 text-hover-primary fs-7"><?php echo e($comment->user->name); ?></a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div>
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <span class="fw-semibold text-gray-400 d-block fs-8">Date</span>
                                            <span class="fw-bold text-gray-800 text-hover-primary fs-7">
                                            <?php echo e(\Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?>

                                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div
                                class="d-flex flex-column  text-left pt-5 pb-7 mb-8 card-rounded">
                                <p><?php echo e($comment->comment); ?></p>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\gproject\resources\views/notes/comment_card.blade.php ENDPATH**/ ?>