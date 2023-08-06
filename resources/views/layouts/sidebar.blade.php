<!--begin::sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
     data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="/">
            <img alt="Logo" src="{{ asset('assets/logonew.svg') }}"
                 class="h-25px app-sidebar-logo-default"/>
            <img alt="Logo" src="{{ asset('assets/logonew.svg') }}"
                 class="h-20px app-sidebar-logo-minimize"/>
        </a>
        <!--end::Logo image-->

    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper"
             class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
             data-kt-scroll-activate="true" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
             data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
             data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3"
                 id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ url('/') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                     height="20" viewBox="0 0 20 20">
                                                    <path id="Vector"
                                                          d="M0,20V6.667L10,0,20,6.667V20H12.5V12.222h-5V20Z"
                                                          fill="#bfbfbf"/>
                                                </svg>

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>

                        <span class="menu-title">Home</span>
                    </a>


                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('categories.index') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.875"
                                                     height="18.75" viewBox="0 0 21.875 18.75">
                                                    <path id="Vector"
                                                          d="M1.563,7.031h0ZM4.616.115a.781.781,0,0,1,.29.315l.563,1.133H8.594a.781.781,0,0,1,.781.781V7.813a.781.781,0,0,1-.781.781H.781A.781.781,0,0,1,0,7.813V.781A.781.781,0,0,1,.781,0H4.2a.781.781,0,0,1,.413.115ZM15.438,7.031h0ZM17.116.115a.781.781,0,0,1,.29.315l.563,1.133h3.125a.781.781,0,0,1,.781.781V7.813a.781.781,0,0,1-.781.781H13.281a.781.781,0,0,1-.781-.781V.781A.781.781,0,0,1,13.281,0H16.7a.781.781,0,0,1,.413.115ZM1.563,17.188h0Zm3.053-6.917a.781.781,0,0,1,.29.315l.563,1.133H8.594a.781.781,0,0,1,.781.781v5.469a.781.781,0,0,1-.781.781H.781A.781.781,0,0,1,0,17.969V10.938a.781.781,0,0,1,.781-.781H4.2a.781.781,0,0,1,.413.115Zm9.447,6.917h0Zm3.053-6.917a.781.781,0,0,1,.29.315l.563,1.133h3.125a.781.781,0,0,1,.781.781v5.469a.781.781,0,0,1-.781.781H13.281a.781.781,0,0,1-.781-.781V10.938a.781.781,0,0,1,.781-.781H16.7a.781.781,0,0,1,.413.115Z"
                                                          transform="translate(0 0)" fill="#bfbfbf"/>
                                                </svg>


                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>

                        <span class="menu-title">Categories</span>
                    </a>


                </div>
                <!--end:Menu item-->


                <!--begin:Menu Iem User-->
                @if (auth()->user()->is_admin == 1)
                    <div class="menu-item menu-accordion">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('users.index') }}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.875"
                                                         height="18.75" viewBox="0 0 21.875 18.75">
                                                        <path id="Vector"
                                                              d="M1.563,7.031h0ZM4.616.115a.781.781,0,0,1,.29.315l.563,1.133H8.594a.781.781,0,0,1,.781.781V7.813a.781.781,0,0,1-.781.781H.781A.781.781,0,0,1,0,7.813V.781A.781.781,0,0,1,.781,0H4.2a.781.781,0,0,1,.413.115ZM15.438,7.031h0ZM17.116.115a.781.781,0,0,1,.29.315l.563,1.133h3.125a.781.781,0,0,1,.781.781V7.813a.781.781,0,0,1-.781.781H13.281a.781.781,0,0,1-.781-.781V.781A.781.781,0,0,1,13.281,0H16.7a.781.781,0,0,1,.413.115ZM1.563,17.188h0Zm3.053-6.917a.781.781,0,0,1,.29.315l.563,1.133H8.594a.781.781,0,0,1,.781.781v5.469a.781.781,0,0,1-.781.781H.781A.781.781,0,0,1,0,17.969V10.938a.781.781,0,0,1,.781-.781H4.2a.781.781,0,0,1,.413.115Zm9.447,6.917h0Zm3.053-6.917a.781.781,0,0,1,.29.315l.563,1.133h3.125a.781.781,0,0,1,.781.781v5.469a.781.781,0,0,1-.781.781H13.281a.781.781,0,0,1-.781-.781V10.938a.781.781,0,0,1,.781-.781H16.7a.781.781,0,0,1,.413.115Z"
                                                              transform="translate(0 0)" fill="#bfbfbf"/>
                                                    </svg>


                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>

                            <span class="menu-title">Users</span>
                        </a>


                    </div>
                @endif

                <!--end:Menu item Users-->


                <!--begin:Menu item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('notes.create') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                     height="24" viewBox="0 0 24 24">
                                                    <path id="Vector"
                                                          d="M13.5,6.75a6.75,6.75,0,1,1-1.977-4.773A6.75,6.75,0,0,1,13.5,6.75Zm-6-3a.75.75,0,0,0-1.5,0V6H3.75a.75.75,0,0,0,0,1.5H6V9.75a.75.75,0,0,0,1.5,0V7.5H9.75a.75.75,0,0,0,0-1.5H7.5ZM6.75,15A8.25,8.25,0,0,0,14.1,3h5.4a4.5,4.5,0,0,1,4.492,4.236L24,7.5v6H18l-.264.007a4.5,4.5,0,0,0-4.229,4.228L13.5,18v6h-6a4.5,4.5,0,0,1-4.492-4.236L3,19.5V14.1a8.205,8.205,0,0,0,3.75.9Zm17.1,0a3,3,0,0,1-.537.978l-.192.21L16.19,23.121a3,3,0,0,1-1.188.73L15,18l.007-.225a3,3,0,0,1,2.757-2.766L18,15Z"
                                                          transform="translate(0 0)" fill="#bfbfbf"/>
                                                </svg>




                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>

                        <span class="menu-title">Add Note</span>
                    </a>


                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{route('friends.index')}}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg id="fa-solid:user-friends" xmlns="http://www.w3.org/2000/svg"
                                                     width="25" height="20" viewBox="0 0 25 20">
                                                    <rect id="fa-solid:user-friends-2"
                                                          data-name="fa-solid:user-friends" width="25"
                                                          height="20" fill="none"/>
                                                    <path id="Vector"
                                                          d="M3.125,4.375A4.375,4.375,0,1,1,7.5,8.75,4.373,4.373,0,0,1,3.125,4.375ZM15,14.5v1.125A1.875,1.875,0,0,1,13.125,17.5H1.875A1.875,1.875,0,0,1,0,15.625V14.5A4.5,4.5,0,0,1,4.5,10h.324a6.04,6.04,0,0,0,5.352,0H10.5A4.5,4.5,0,0,1,15,14.5ZM15,5a3.75,3.75,0,1,1,3.75,3.75A3.751,3.751,0,0,1,15,5Zm10,9.375a1.875,1.875,0,0,1-1.875,1.875h-6.9c0-.082.023-.164.023-.25V14.5A5.717,5.717,0,0,0,14.7,10.6a4.339,4.339,0,0,1,2.176-.6h.148a4.926,4.926,0,0,0,3.453,0h.148A4.373,4.373,0,0,1,25,14.375Z"
                                                          transform="translate(0 1.25)" fill="#bfbfbf"/>
                                                </svg>



                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>

                        <span class="menu-title">Add Friends</span>
                    </a>


                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="/Favorite">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                     height="18" viewBox="0 0 20 18">
                                                    <path id="Vector"
                                                          d="M8.65,17.465l-1.725-1.6q-2.65-2.47-4.788-4.9A7.934,7.934,0,0,1,0,5.6a5.477,5.477,0,0,1,1.575-4A5.277,5.277,0,0,1,5.5,0,5.635,5.635,0,0,1,8,.572a5.959,5.959,0,0,1,2,1.566A5.976,5.976,0,0,1,12,.572,5.617,5.617,0,0,1,14.5,0a5.277,5.277,0,0,1,3.925,1.6A5.477,5.477,0,0,1,20,5.6a8.01,8.01,0,0,1-2.125,5.372,60.417,60.417,0,0,1-4.825,4.914l-1.7,1.578a1.972,1.972,0,0,1-2.7,0Z"
                                                          fill="#bfbfbf"/>
                                                </svg>



                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>

                        <span class="menu-title">Favorite</span>
                    </a>


                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="/Trash">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.583"
                                                     height="18.75" viewBox="0 0 14.583 18.75">
                                                    <path id="Vector"
                                                          d="M14.583,3.125H0V1.042H3.646L4.688,0H9.9l1.042,1.042h3.646M1.042,4.167h12.5v12.5a2.083,2.083,0,0,1-2.083,2.083H3.125a2.083,2.083,0,0,1-2.083-2.083Z"
                                                          fill="#bfbfbf"/>
                                                </svg>



                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>

                        <span class="menu-title">Trash</span>
                    </a>


                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="/faq">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg id="mdi:frequently-asked-questions"
                                                     xmlns="http://www.w3.org/2000/svg" width="24"
                                                     height="24" viewBox="0 0 24 24">
                                                    <rect id="mdi:frequently-asked-questions-2"
                                                          data-name="mdi:frequently-asked-questions" width="24"
                                                          height="24" fill="none"/>
                                                    <path id="Vector"
                                                          d="M16,13H4L0,17V1A1,1,0,0,1,1,0H16a1,1,0,0,1,1,1V12a1,1,0,0,1-1,1Zm5-6V21l-4-4H6a1,1,0,0,1-1-1V15H19V6h1a1,1,0,0,1,1,1ZM6.19,2a3.515,3.515,0,0,0-2.11.59,2.063,2.063,0,0,0-.77,1.77l.01.03H5.25a.915.915,0,0,1,.28-.69,1,1,0,0,1,.66-.23,1.035,1.035,0,0,1,.75.28,1.056,1.056,0,0,1,.26.75,1.387,1.387,0,0,1-.23.82,1.818,1.818,0,0,1-.61.59,4.039,4.039,0,0,0-1.05.91A1.975,1.975,0,0,0,5,8H7a1.693,1.693,0,0,1,.13-.74,1.39,1.39,0,0,1,.51-.52,3.143,3.143,0,0,0,1.11-.93A2.133,2.133,0,0,0,9.19,4.5a2.251,2.251,0,0,0-.81-1.82A3.279,3.279,0,0,0,6.19,2ZM5,9v2H7V9Zm6,2h2V9H11Zm0-9V8h2V2Z"
                                                          transform="translate(2 2)" fill="#bfbfbf"/>
                                                </svg>




                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>

                        <span class="menu-title">Frequently ask...</span>
                    </a>


                </div>
                <!--end:Menu item-->


            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->

</div>
<!--end::sidebar-->
