<div class="app-menu">

    <!-- Brand Logo -->
    <a href="index.html" class="logo-box">
        <img src="{{asset('backend')}}/assets/images/logo-light.png" class="logo-light h-6" alt="Light logo">
        <img src="{{asset('backend')}}/assets/images/logo-dark.png" class="logo-dark h-6" alt="Dark logo">
    </a>

    <!--- Menu -->
    <div data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{route('dashboard')}}" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-house"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-pen-nib"></i></span>
                    <span class="menu-text"> Posts </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{route('post.all')}}" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">All Posts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Add New Post</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('category.create')}}" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Categories</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('tag.create')}}" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Tags</span>
                        </a>
                    </li>
                </ul>
            </li>    

            <li class="menu-title">Custom</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-file"></i></span>
                    <span class="menu-text"> Extra Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="pages-starter.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Starter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-invoice.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Invoice</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-maintenance.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Maintenance</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-sign-in"></i></span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="auth-login.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Log In</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-register.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-recoverpw.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-lock-screen.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Lock Screen</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-bug"></i></span>
                    <span class="menu-text"> Error Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="pages-404.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-500.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Error 500</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-layout"></i></span>
                    <span class="menu-text"> Layout </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="layout-light-sidebar.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Light Sidebar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layout-dark-topbar.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Dark Topbar</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Elements</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-cookie"></i></span>
                    <span class="menu-text"> Components </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="ui-alerts.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Alerts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-buttons.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-collapse.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Collapse</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-dropdowns.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Dropdowns</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-progress.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Progress</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-skeleton.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Skeleton</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-spinners.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Spinners</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-ratio.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Ratio</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tabs.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Tab</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-modals.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Modals</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-offcanvas.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Offcanvas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-popovers.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Popovers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tooltips.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Tooltips</span>
                        </a>
                    </li>
        
                    <li class="menu-item">
                        <a href="ui-swiper.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Swiper</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-ratings.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Ratings</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-pen-nib"></i></span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="forms-elements.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Form Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-masks.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Masks</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-editor.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Editor</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-validation.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Validation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-layout.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Form Layout</span>
                        </a>
                    </li>
                </ul>
            </li>            

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-map-pin"></i></span>
                    <span class="menu-text"> Maps </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="maps-vector.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Vector Maps</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="maps-google.html" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Google Maps</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="tables-basic.html" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="ph-duotone ph-table"></i></span>
                    <span class="menu-text"> Tables </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="charts-apex.html" class="menu-link">
                    <span class="menu-icon"><i class="ph-duotone ph-chart-bar"></i></span>
                    <span class="menu-text"> Chart </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ph-duotone ph-share-fat"></i>
                    </span>
                    <span class="menu-text"> Level </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="javascript: void(0)" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Item 1</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript: void(0)" class="menu-link">
                            <span class="menu-dot"></span>
                            <span class="menu-text">Item 2</span>
                            <span class="badge bg-info rounded ms-auto">New</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                    <span class="menu-icon">
                        <i class="ph-duotone ph-seal-check"></i>
                    </span>
                    <span class="menu-text"> Badge Items </span>
                    <span class="badge bg-danger rounded ms-auto">Hot</span>
                </a>
            </li>
        </ul>
    </div>
</div>