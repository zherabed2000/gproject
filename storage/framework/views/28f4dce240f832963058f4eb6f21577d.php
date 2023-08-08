<?php $__env->startSection('content'); ?>

    <style>
        a.btn.btn-primary {
            background: #7971D9;
        }

        a.btn.btn-light.fw-bold.text-gray-800.text-hover-primary.fs-7 {
            margin-left: 29px;


        }
    </style>





    <div class="col-lg-12 col-xl-12 px-8 mb-5 mb-xl-10">
        <!--begin::Contacts-->
        <div class="card card-flush" id="kt_contacts_list">
            <!--begin::Card header-->
            <div class="card-header pt-7" id="kt_contacts_list_header">
                <!--begin::Form-->
                <h2 class="mb-5">Pending Friends Request</h2>
                <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off"
                      action="<?php echo e(url()->current()); ?>" method="get">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span
                        class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="17.0365" y="15.1223"
                                                                                  width="8.15546" height="2" rx="1"
                                                                                  transform="rotate(45 17.0365 15.1223)"
                                                                                  fill="currentColor"></rect>
																			<path
                                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                                fill="currentColor"></path>
																		</svg>
																	</span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid ps-13" name="search"
                           value="<?php echo e(request('search')); ?>"
                           placeholder="Search">
                    <!--end::Input-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-5" id="kt_contacts_list_body">
                <!--begin::List-->
                <div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true"
                     data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                     data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header"
                     data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body"
                     data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px"
                     style="max-height: 772px;">

                    <?php if( count($friends) > 0 ): ?>

                        <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-40px symbol-circle">
                                        <img alt="Pic" src="<?php echo e(asset('assets/media/avatars/300-6.jpg')); ?>">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-4">
                                        <a href="#"
                                           class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2"> <?php echo e($friend->friend->name); ?> </a>
                                        <div class="fw-semibold fs-7 text-muted">  <?php echo e($friend->friend->email); ?> </div>

                                        <?php
                                            $is_blocked = $friend->is_blocked ?? 0;
                                        ?>

                                        <?php if($is_blocked == 1 ): ?>
                                            <div class="badge badge-danger"> Blocked</div>
                                        <?php else: ?>
                                            <?php if($friend->status == "accepted"): ?>
                                                <div class="badge badge-success">Friend</div>
                                            <?php else: ?>
                                                <div class="badge badge-warning">Pending</div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                       data-kt-menu-trigger="click"
                                       data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<path
                                                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                                                fill="currentColor"/>
																						</svg>
																					</span>
                                        <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->

                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="<?php echo e(route('friends.remove', $friend->id )); ?>"
                                               class="menu-link px-3"
                                               data-kt-ecommerce-category-filter="delete_row">
                                                <i class="fa-solid fa-trash" style="margin-right: 3px;"></i>
                                                Remove
                                            </a>
                                            <a href="<?php echo e(route('friends.accept', $friend->id )); ?>"
                                               class="menu-link px-3">
                                                <i class="fa-solid fa-check" style="margin-right: 3px;"></i>
                                                Accept
                                            </a>

                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>

                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php else: ?>
                        <div class="alert alert-danger">
                            No Finds Found
                        </div>
                    <?php endif; ?>


                    <!--end::Menu-->
                    </td>
                    <!--end::Details-->
                </div>
                <!--end::User-->
            </div>
            <!--end::List-->
        </div>
        <!--end::Card body-->

    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gproject\resources\views/friends/new.blade.php ENDPATH**/ ?>