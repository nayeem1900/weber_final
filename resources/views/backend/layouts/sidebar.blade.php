
@php
$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if(Auth::user()->role=='Admin')
        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}} ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('users.view')}}" class="nav-link {{($route=='users.view')?'active':''}} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                </li>



            </ul>
        </li>
        @endif
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Profile
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('profiles.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Your Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profiles.password.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Your password</p>
                    </a>
                </li>



            </ul>
        </li>


            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Logo
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('logos.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Logo</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Slider
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('sliders.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Slider</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Service
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('wdes.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View WADE</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage About
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('abouts.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Heade</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('aboutd.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Head_Detail</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Client Pictture
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('clogos.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Client Picture</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Brochure
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('etenders.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Brochure</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Carrier
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('carriers.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Carrier</p>
                        </a>
                    </li>

                </ul>
            </li>



    </ul>
</nav>