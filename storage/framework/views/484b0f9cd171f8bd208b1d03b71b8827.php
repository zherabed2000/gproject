<?php $__env->startSection('content'); ?>

    <!--begin::Category-->
    <div class="card card-flush px-8 mb-5 mb-xl-10">
        <!--begin::Card header-->
        <form action="<?php echo e(isset($item) ? route('users.update',$item->id) :route('users.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if(isset($item)): ?>
                <?php echo method_field('put'); ?>
            <?php endif; ?>
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
                    <label>Avatar</label>
                    <input type="file" name="avatar" accept="image/*" class="form-control form-control-solid"
                           value="<?php echo e(isset($item)?@$item->avatar :''); ?>" placeholder="Add Avatar"
                           required/>
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

                <div class="fv-row mb-8">
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="is_admin"
                               value="1" <?php echo e(isset($item) && $item->is_admin ? 'checked' : ''); ?> />
                        <span class="form-check-label fw-semibold text-gray-700 fs-6 ms-1">Is Admin</span>
                    </label>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/gproject/resources/views/users/create.blade.php ENDPATH**/ ?>