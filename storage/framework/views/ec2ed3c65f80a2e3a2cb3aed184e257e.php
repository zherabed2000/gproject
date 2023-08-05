<?php $__env->startSection('content'); ?>

<style>

.btn {
    font-size: 8px !important;
    padding: 5px !important;
    margin-left: 2px !important;

}

    </style>

   <!--begin::Row-->
   <div class="row px-8 mb-5 mb-xl-10" id="notes-container">
                                <!--begin::Col-->
                                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-4 mb-5" id="">
                                        <!--begin::Card widget 15-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Body-->
                                            <div class="card-body py-9" style="background: <?php echo e($note->category->color ?? '#1e1e2d'); ?> !important;">
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
                                                                    <div
                                                                        class="d-flex align-items-center me-5 me-xl-13">
                                                                        <!--begin::Symbol-->
                                                                        <div
                                                                            class="symbol symbol-30px symbol-circle me-3">
                                                                            <img src="assets/media/avatars/300-3.jpg"
                                                                                 class="" alt=""/>
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Info-->
                                                                        <div class="m-0">
                                                                            <a href="../../demo1/dist/apps/projects/users.html"
                                                                               class="fw-bold text-gray-800 text-hover-primary fs-7"><?php echo e($note->name); ?></a>
                                                                            <span
                                                                                class="fw-semibold text-gray-400 d-block fs-8"><?php echo e($note->category->title ?? '---'); ?></span>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Symbol-->
                                                                        <div
                                                                            class="symbol symbol-30px symbol-circle me-3">
                                                                          
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Info-->
                                                                        <div class="m-0">
                                                                            <span
                                                                                class="fw-semibold text-gray-400 d-block fs-8">Date</span>
                                                                            <a href="#"
                                                                               class="fw-bold text-gray-800 text-hover-primary fs-7"><?php echo e($note->created_at); ?></a>
                                                                        </div>
                                                                        <div class="m-5">

                                                                            <a href="<?php echo e('/EditNote/'.$note->id); ?>"
                                                                               class="btn btn-light fw-bold text-gray-800 text-hover-primary fs-7">
                                                                                <!--begin::Svg Icon | path: C:/wamp64/www/keenthemes/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                                                <span class="svg-icon svg-icon-2"><svg
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path opacity="0.3"
                                                                                              fill-rule="evenodd"
                                                                                              clip-rule="evenodd"
                                                                                              d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                                                              fill="currentColor"/>
                                                                                        <path
                                                                                            d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                                            fill="currentColor"/>
                                                                                        <path
                                                                                            d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                                                            fill="currentColor"/>
                                                                                    </svg>
                                                                                </span>                                                                                
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                </div>
                                                                <!--end::Items-->
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Body-->
                                                            <div
                                                                class="d-flex flex-column  text-left pt-5 pb-7 mb-8 card-rounded">
                                                                <p><?php echo e($note->content); ?></p>
                                                            </div>
                                                            <!--end::Body-->
                                                            <!--begin::Footer-->
                                                            
                                                            <div class="d-flex flex-stack mt-auto bd-highlight">
                                                                <!--begin::Actions-->
                                                                <a href="#" class="btn btn-light "
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_users_search">
                                                                    <!--begin::Svg Icon | path: C:/wamp64/www/keenthemes/core/html/src/media/icons/duotune/coding/cod007.svg-->
                                                                    <span class="svg-icon svg-icon-2"><svg width="24"
                                                                                                           height="24"
                                                                                                           viewBox="0 0 24 24"
                                                                                                           fill="none"
                                                                                                           xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                  d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                                                                  fill="currentColor"/>
                                                                            <path
                                                                                d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                                                                fill="currentColor"/>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>


                                                                <a href="#" class="btn btn-light ">
                                                                    <!--begin::Svg Icon | path: C:/wamp64/www/keenthemes/core/html/src/media/icons/duotune/general/gen007.svg-->
                                                                    <!-- <span class="svg-icon svg-icon-muted svg-icon-hx"><svg
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                  d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
                                                                                  fill="currentColor"/>
                                                                            <path
                                                                                d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
                                                                                fill="currentColor"/>
                                                                        </svg>
                                                                    </span> -->
                                                                    <!--end::Svg Icon-->
                                                                    

                                                                    <span
                                                                        class="badge badge-light"><?php echo e($note->created_at->diffForHumans()); ?></span>
                                                                </a>

                                                                <a href="#" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#kt_modal_users_search"><!--begin::Svg Icon | path: C:/wamp64/www/keenthemes/core/html/src/media/icons/duotune/coding/cod007.svg-->
																		<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
																			<path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
																			<path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"></path>
																		</svg>
																		</span>
																		<!--end::Svg Icon--></a>

                                                                <a href="#" class="btn btn-light "
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_users_search">
                                                                    <!--begin::Svg Icon | path: C:/wamp64/www/keenthemes/core/html/src/media/icons/duotune/coding/cod007.svg-->
                                                                    <span class="svg-icon svg-icon-2"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.7" d="M1.248 15C.22 11.77 2.275 4.232 9.466 4.232V2.079a1.025 1.025 0 0 1 1.644-.862l5.479 4.307a1.108 1.108 0 0 1 0 1.723l-5.48 4.307a1.026 1.026 0 0 1-1.643-.861V8.539C2.275 9.616 1.248 15 1.248 15Z"/>
                                                                    </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>

                                                                <form style="display: inline-block;" method="POST"
                                                                      action="<?php echo e(URL('/note/favourite/'.$note->id)); ?>">
                                                                    <input type="hidden" name="_token"
                                                                           value="<?php echo e(csrf_token()); ?>">
                                                                    <button class="btn btn-light " type="submit">
                                                                        <?php if($note->is_favorite == 1): ?>
                                                                            <span class="svg-icon svg-icon-2"
                                                                                  style="color: red"><svg width="24"
                                                                                                          height="24"
                                                                                                          viewBox="0 0 24 24"
                                                                                                          stroke="red"
                                                                                                          fill="red"
                                                                                                          xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                                                                    fill="currentColor"/>
                                                                            </svg>
                                                                        </span>
                                                                        <?php else: ?>
                                                                            <span class="svg-icon svg-icon-2"><svg
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                                                                    fill="currentColor"/>
                                                                            </svg>
                                                                        </span>
                                                                        <?php endif; ?>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                </form>
                                                                

                                                                <form style="display: inline-block;" method="POST"
                                                                      action="<?php echo e(URL('/note/delete/'.$note->id)); ?>">
                                                                    <input type="hidden" name="_token"
                                                                           value="<?php echo e(csrf_token()); ?>">
                                                                    <button class="btn btn-light " type="submit">
                                                                        <!--begin::Svg Icon | path: C:/wamp64/www/keenthemes/core/html/src/media/icons/duotune/general/gen027.svg-->
                                                                        <span class="svg-icon svg-icon-2"><svg
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="currentColor"/>
                                                                                <path opacity="0.5"
                                                                                      d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                      fill="currentColor"/>
                                                                                <path opacity="0.5"
                                                                                      d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                      fill="currentColor"/>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                </form>

                                                                <!--end::Actions-->
                                                            </div>
                                                            <!--end::Footer-->
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <!--begin::Row-->
                            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/moahemdabosido/Desktop/Projects/gproject/resources/views/index.blade.php ENDPATH**/ ?>