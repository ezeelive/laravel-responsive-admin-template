<body class="cat__config--horizontal cat__menu-left--colorful cat__config--superclean">

<nav class="cat__menu-left">
    <div class="cat__menu-left__lock cat__menu-left__action--menu-toggle">
        <div class="cat__menu-left__pin-button">
            <div><!-- --></div>
        </div>
    </div>
    <div class="cat__menu-left__logo">
        <a href="{{url('dashboard') }}">
            <img src="{!! asset('/dist/modules/dummy-assets/common/img/logo-inverse.jpg') !!}" />
        </a>
    </div>
    <div class="cat__menu-left__inner">
        <ul class="cat__menu-left__list cat__menu-left__list--root">
            <!--<li class="cat__menu-left__item">
                <a href="{{ url('users')}}" class="cat__menu-right__action--menu-toggle">
                    <span class="cat__menu-left__icon icmn-users cat__core__spin-delayed--pseudo-selector"></span>
                    Users
                </a>
            </li>-->
            <li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="cat__menu-left__icon icmn-sphere"></span>
                    Website (CMS)
                </a>
                <ul class="cat__menu-left__list">
                    <li class="cat__menu-left__item">
                        <a href="{{ url('pages')}}">
                            <span class="cat__menu-left__icon icmn-file-text2"></span>
                            Pages
                        </a>
                    </li>
                </ul>
            </li>
			<li class="cat__menu-left__item cat__menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="cat__menu-left__icon icmn-bubble"></span>
                    Main Menu
                </a>
                <ul class="cat__menu-left__list">
                    <li class="cat__menu-left__item">
                        <a href="#">
                            <span class="cat__menu-left__icon icmn-file-text2"></span>
                            Menu 1
                        </a>
                    </li>
                    <li class="cat__menu-left__item">
                        <a href="#">
                            <span class="cat__menu-left__icon icmn-bubble"></span>
                            Menu 2
                        </a>
                    </li>
                    <li class="cat__menu-left__item cat__menu-left__submenu">
                        <a href="javascript: void(0);">
                            <span class="cat__menu-left__icon icmn-calendar"></span>
                            Menu 3
                        </a>
                        <ul class="cat__menu-left__list">
                            <li class="cat__menu-left__item">
                                <a href="#">
                                    <span class="cat__menu-left__icon icmn-paste"></span>
                                    Sub Menu 1
                                </a>
                            </li>
                            <li class="cat__menu-left__item">
                                <a href="#">
                                    <span class="cat__menu-left__icon icmn-clipboard"></span>
                                     Sub Menu 2
                                </a>
                            </li>
                            <li class="cat__menu-left__item">
                                <a href="#">
                                    <span class="cat__menu-left__icon icmn-table2"></span>
                                     Sub Menu 3
                                </a>
                            </li>
                        </ul>
                    </li>
				</ul>
            </li>
        </ul>
    </div>
</nav>