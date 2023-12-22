<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách nhân viên | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/mai.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css')}}">
    <!-- or -->
    <link rel="stylesheet" href="{{asset('https://unpkg.com/boxicons@latest/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css')}}">

</head>

<body onload="time()" class="app sidebar-mini rtl">
<!-- Navbar-->
@include('admin.header')
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/index'}}"><b>Bảng điều khiển</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--Left-->
        <div class="col-md-12 col-lg-12">
            <div class="row">
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
                        <div class="info">
                            <h4>Tổng khách hàng</h4>
                            <p><b>{{ $count }} khách hàng</b></p>
                            <p class="info-tong">Tổng số khách hàng được quản lý.</p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
                        <div class="info">
                            <h4>Tổng sản phẩm</h4>
                            <p><b>{{ $total }} sản phẩm</b></p>
                            <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
                        <div class="info">
                            <h4>Tổng đơn hàng</h4>
                            <p><b>{{ $orderCounts }} đơn hàng</b></p>
                            <p class="info-tong">Tổng số đơn hàng trong tháng.</p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
                        <div class="info">
                            <h4>Các đơn hàng đã bị hủy</h4>
                            <p><b>{{ $cancel }} sản phẩm</b></p>
                            <p class="info-tong">Số đơn hàng mà khách hàng đã hủy.</p>
                        </div>
                    </div>
                </div>
                <!-- col-12 -->
{{--                <div class="col-md-12">--}}
{{--                    <div class="tile">--}}
{{--                        <h3 class="tile-title">Tình trạng đơn hàng</h3>--}}
{{--                        <div>--}}
{{--                            <table class="table table-bordered">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>ID đơn hàng</th>--}}
{{--                                    <th>Tên khách hàng</th>--}}
{{--                                    <th>Tổng tiền</th>--}}
{{--                                    <th>Trạng thái</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($latestOrders as $latestOrder)--}}
{{--                                <tr>--}}
{{--                                    <td>AL3947</td>--}}
{{--                                    <td></td>--}}
{{--                                    <td>--}}
{{--                                        {{ $latestOrder->until_price }}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        @if($latestOrder->status == 1)--}}
{{--                                            <span class="badge bg-primary">Chờ xác nhận</span>--}}
{{--                                        @elseif($latestOrder->status == 2)--}}
{{--                                            <span class="badge bg-info">Đã duyệt đơn hàng</span>--}}
{{--                                        @elseif($latestOrder->status == 3)--}}
{{--                                            <span class="badge bg-warning">Đang giao hàng</span>--}}
{{--                                        @elseif($latestOrder->status == 4)--}}
{{--                                            <span class="badge bg-light">Đã giao hàng cho khách</span>--}}
{{--                                        @elseif($latestOrder->status == 5)--}}
{{--                                            <span class="badge bg-success">Khách hàng đã nhận đơn hàng</span>--}}
{{--                                        @elseif($latestOrder->status == 6)--}}
{{--                                            <span class="badge bg-danger">Đã hủy</span>--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <!-- / div trống-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- / col-12 -->--}}
{{--                <!-- col-12 -->--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="tile">--}}
{{--                        <h3 class="tile-title">Khách hàng mới</h3>--}}
{{--                        <div>--}}
{{--                            <table class="table table-hover">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>ID</th>--}}
{{--                                    <th>Tên khách hàng</th>--}}
{{--                                    <th>Email</th>--}}
{{--                                    <th>Số điện thoại</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>#183</td>--}}
{{--                                    <td>Hột vịt muối</td>--}}
{{--                                    <td>21/7/1992</td>--}}
{{--                                    <td><span class="tag tag-success">0921387221</span></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
                <!-- / col-12 -->
            </div>
        </div>
        <!--END left-->
        <!--Right-->
        <!--END right-->
    </div>


{{--    <div class="text-center" style="font-size: 13px">--}}
{{--        <p><b>Copyright--}}
{{--                <script type="text/javascript">--}}
{{--                    document.write(new Date().getFullYear());--}}
{{--                </script> Phần mềm quản lý bán hàng | Dev By Trường--}}
{{--            </b></p>--}}
{{--    </div>--}}
</main>
<script src="{{asset('admin/js/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('https://unpkg.com/boxicons@latest/dist/boxicons.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/js/main.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/js/plugins/pace.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('admin/js/plugins/chart.js')}}}"></script>
<!--===============================================================================================-->
<script type="text/javascript">
    var data = {
        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
        datasets: [{
            label: "Dữ liệu đầu tiên",
            fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
            strokeColor: "rgb(255, 212, 59)",
            pointColor: "rgb(255, 212, 59)",
            pointStrokeColor: "rgb(255, 212, 59)",
            pointHighlightFill: "rgb(255, 212, 59)",
            pointHighlightStroke: "rgb(255, 212, 59)",
            data: [20, 59, 90, 51, 56, 100]
        },
            {
                label: "Dữ liệu kế tiếp",
                fillColor: "rgba(9, 109, 239, 0.651)  ",
                pointColor: "rgb(9, 109, 239)",
                strokeColor: "rgb(9, 109, 239)",
                pointStrokeColor: "rgb(9, 109, 239)",
                pointHighlightFill: "rgb(9, 109, 239)",
                pointHighlightStroke: "rgb(9, 109, 239)",
                data: [48, 48, 49, 39, 86, 10]
            }
        ]
    };
    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxb = $("#barChartDemo").get(0).getContext("2d");
    var barChart = new Chart(ctxb).Bar(data);
</script>
<script type="text/javascript">
    //Thời Gian
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Thành công!',
            text: '{{ session('success') }}',
        });
        @endif

        @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Lỗi!',
            text: '{{ session('error') }}',
        });
        @endif
    });
</script>
</body>

</html>
