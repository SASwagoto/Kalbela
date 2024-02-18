<div class="app-menu">

    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="logo-box">
        <img src="{{asset('frontend/images/notunkhobor.png')}}" class="logo-light h-10" alt="Light logo">
        <img src="{{asset('frontend/images/notunkhobor.png')}}" class="logo-dark h-10" alt="Dark logo">
    </a>

    <!--- Menu -->
    <div data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{route('dashboard')}}" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="fa-solid fa-home"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i class="fa-solid fa-pencil"></i></span>
                    <span class="menu-text"> Posts </span>
                    <span class="menu-arrow"><i class="fa-solid fa-caret-right"></i></span>
                    
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{route('post.all')}}" class="menu-link">
                            <i class="fa-solid fa-circle fa-2xs"></i>
                            <span class="menu-text">All Posts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('post.create')}}" class="menu-link">
                            <i class="fa-solid fa-circle fa-2xs"></i>
                            <span class="menu-text">Add New Post</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('category.create')}}" class="menu-link">
                            <i class="fa-solid fa-circle fa-2xs"></i>
                            <span class="menu-text">Categories</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('tag.create')}}" class="menu-link">
                            <i class="fa-solid fa-circle fa-2xs"></i>
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
        </ul>
    </div>
</div>