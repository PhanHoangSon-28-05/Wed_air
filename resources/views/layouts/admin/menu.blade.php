<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-plane"></i> Chuyến Bay <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('flight.index') }}">Quản lý chuyến bay</a></li>
                    <li><a href="{{route('flight.create')}}">Tạo chuyến bay</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-user"></i> Phi Công <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('pilot.index') }}">Quản lý phi công</a></li>
                    <li><a href="{{ route('pilot.create') }}">Nhập thông tin phi công</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-plane"></i> Phi Cơ <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('aircraft.index') }}">Quản lý phi cơ</a></li>
                    <li><a href="{{ route('aircraft.create') }}">Nhập thông tin phi cơ</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-mortar-board"></i> Chứng Nhận <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('certification.index') }}">Quản lý chứng nhận</a></li>
                    <li><a href="{{ route('certification.create') }}">Thêm giấy chứng nhận</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
