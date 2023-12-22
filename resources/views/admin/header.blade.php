<style>
    .app-menu__item.active, .app-menu__item:hover, .app-menu__item:focus {
        background: #c6defd;
        text-decoration: none;
        color: rgb(22 22 72);
        box-shadow: none;
        border: 1px solid rgb(22 22 72);
    }
</style>

<header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
                                    aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


        <!-- User Menu-->
        <li><a class="app-nav__item" href="{{route('admin.logout')}}"><i class='bx bx-log-out bx-rotate-180'></i> </a>

        </li>
    </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('/images/pngtree-user-cartoon-avatar-pattern-flat-avatar-png-image_4492883.png')}}" width="500px"
                                        alt="User Image">
        @php
        $admin = session('admin');
        $adminName = $admin->name;
        @endphp
        <div>
            <p class="app-sidebar__user-name"><b>{{ $adminName }}</b></p>
            <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
                <span class="app-menu__label">POS Bán Hàng</span></a></li>
        <li><a class="app-menu__item {{ Request::is('admin/index*') ? 'active' : '' }}" href="{{ asset('admin/index') }}"><i class='app-menu__icon bx bx-tachometer'></i><span
                    class="app-menu__label">Bảng điều khiển</span></a></li>
        <li><a class="app-menu__item {{ Request::is('admin/member*') ? 'active' : '' }}" href="{{ asset('admin/member') }}"><i class='app-menu__icon bx bx-id-card'></i> <span
                    class="app-menu__label">Quản lý nhân viên</span></a></li>
        <li><a class="app-menu__item {{ Request::is('admin/customer*') ? 'active' : '' }}" href="{{ asset('admin/customer') }}"><i class='app-menu__icon bx bx-user-voice'></i><span
                    class="app-menu__label">Quản lý khách hàng</span></a></li>
        <li><a class="app-menu__item {{ Request::is('product/product*') ? 'active' : '' }}" href="{{ asset('product/product') }}"><i
                    class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
        </li>
        <li><a class="app-menu__item {{ Request::is('admin/order*') ? 'active' : '' }}" href="{{ asset('admin/order') }}"><i class='app-menu__icon bx bx-task'></i><span
                    class="app-menu__label">Quản lý đơn hàng</span></a></li>
        <li><a class="app-menu__item" href="table-data-banned.html"><i class='app-menu__icon bx bx-run'></i><span
                    class="app-menu__label">Quản lý nội bộ
          </span></a></li>
        <li><a class="app-menu__item" href="table-data-money.html"><i class='app-menu__icon bx bx-dollar'></i><span
                    class="app-menu__label">Bảng kê lương</span></a></li>
        <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
                    class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
        </li>
        <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span
                    class="app-menu__label">Lịch công tác </span></a></li>
        <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
</aside>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll(".app-menu__item");

        menuItems.forEach(item => {
            item.addEventListener("click", () => {
                // Loại bỏ lớp "active" từ tất cả các phần tử li
                menuItems.forEach(menuItem => {
                    menuItem.classList.remove("active");
                });

                // Thêm lớp "active" vào phần tử được nhấp vào
                item.classList.add("active");
            });
        });
    });
</script>

