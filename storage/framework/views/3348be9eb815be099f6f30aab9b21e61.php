<?php $__env->startSection('content'); ?>

    <!--begin::Category-->
    <div class="card card-flush px-8 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <form action="<?php echo e(route('profile.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Update Profile</h2>

                </div>

            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body ">

                <div class="form-group">
                    <label>Avatar</label>
                    <input type="file" name="avatar" accept="image/*" class="form-control form-control-solid"
                           value="<?php echo e(isset($item)?@$item->avatar :''); ?>" placeholder="Add Avatar"/>
                </div>

                <div class="form-group">
                    <label>Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(isset($item)?@$item->name :''); ?>"
                           required/>
                </div>


                <div class="form-group">
                    <label>E-mail<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="<?php echo e(isset($item)?@$item->email :''); ?>"
                           required/>
                </div>

                <div class="form-group">
                    <label>
                        Password
                        <?php if(!isset($item)): ?>
                            <span class="text-danger">*</span>
                        <?php endif; ?>
                    </label>
                    <input type="password" class="form-control" name="password" <?php if(!isset($item)): ?> required <?php endif; ?>/>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gproject\resources\views/users/profile.blade.php ENDPATH**/ ?>