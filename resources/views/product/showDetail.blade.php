<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thêm sản phẩm | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/mai.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- or -->
    <link rel="stylesheet" href="{{asset('https://unpkg.com/boxicons@latest/css/boxicons.min.css')}}">
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('http://code.jquery.com/jquery.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script>

        function readURL(input, thumbimage) {
            if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#thumbimage").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
            else { // Sử dụng cho IE
                $("#thumbimage").attr('src', input.value);

            }
            $("#thumbimage").show();
            $('.filename').text($("#uploadfile").val());
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'default');
            $(".removeimg").show();
            $(".Choicefile").unbind('click');

        }
        $(document).ready(function () {
            $(".Choicefile").bind('click', function () {
                $("#uploadfile").click();

            });
            $(".removeimg").click(function () {
                $("#thumbimage").attr('src', '').hide();
                $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
                $(".removeimg").hide();
                $(".Choicefile").bind('click', function () {
                    $("#uploadfile").click();
                });
                $('.Choicefile').css('background', '#14142B');
                $('.Choicefile').css('cursor', 'pointer');
                $(".filename").text("");
            });
        })
    </script>
</head>

<body class="app sidebar-mini rtl">
<style>
    .Choicefile {
        display: block;
        background: #14142B;
        border: 1px solid #fff;
        color: #fff;
        width: 150px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        padding: 5px 0px;
        border-radius: 5px;
        font-weight: 500;
        align-items: center;
        justify-content: center;
    }

    .Choicefile:hover {
        text-decoration: none;
        color: white;
    }

    #uploadfile,
    .removeimg {
        display: none;
    }

    #thumbbox {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }

    .removeimg {
        height: 25px;
        position: absolute;
        background-repeat: no-repeat;
        top: 5px;
        left: 5px;
        background-size: 25px;
        width: 25px;
        /* border: 3px solid red; */
        border-radius: 50%;

    }

    .removeimg::before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        content: '';
        border: 1px solid red;
        background: red;
        text-align: center;
        display: block;
        margin-top: 11px;
        transform: rotate(45deg);
    }

    .removeimg::after {
        /* color: #FFF; */
        /* background-color: #DC403B; */
        content: '';
        background: red;
        border: 1px solid red;
        text-align: center;
        display: block;
        transform: rotate(-45deg);
        margin-top: -2px;
    }

    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-family: Arial, sans-serif;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .styled-table th {
        background-color: #428bca;
        color: white;
    }

    .styled-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .styled-table tbody tr:hover {
        background-color: #ddd;
    }
    .edit-button,
    .delete-button {
        padding: 6px 12px;
        background-color: #428bca;
        color: white;
        border: none;
        cursor: pointer;
        margin-right: 5px;
    }

    .edit-button:hover,
    .delete-button:hover {
        background-color: #3276b1;
    }

    #edit-dialog {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Làm mờ nền */
        z-index: 1000;
        animation: zoomIn 0.5s, rotateIn 0.5s; /* Sử dụng hiệu ứng zoomIn và rotateIn */
        animation-fill-mode: both;
    }

    .center-dialog {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .dialog-content {
        background-color: white;
        max-width: 500px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        transform-origin: center center;
    }

    /* Hiệu ứng zoomIn */
    @keyframes zoomIn {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }

    /* Hiệu ứng rotateIn */
    @keyframes rotateIn {
        0% {
            transform: rotate(180deg);
        }
        100% {
            transform: rotate(0);
        }
    }
</style>
<!-- Navbar-->
@include('admin.header')
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Xem thông số sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title" style="margin-bottom: 15px">Xem thông số sản phẩm</h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" href="#myModal"><i class="fas fa-plus"></i> Thêm thông số</a>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-md-12" style="display: flex;justify-content: space-between;align-items: center; margin-top: 5px; margin-bottom: 5px">
                            <h3>Cấu hình: {{ $configuration->name }}</h3>
                            <h3>Số lượng: {{ $configuration->amount }}</h3>
                            <h3>Giá tiền: {{  number_format($configuration->price, 0, ',', '.') }}VND</h3>
                        </div>
                        <a href="#" class="edit-button" style="color:#FFFFFF;margin-left: 15px;width: 48.5%;text-align: center;padding-bottom: 0px;height: 33px;" onclick="openEditDialog()">
                            <i class="fas fa-edit"></i> Sửa
                        </a>
                        <form method="POST" action="{{ route('config.destroy', $configuration) }}" style="width: 48.5%;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" style="color:#FFFFFF; width: 100%; text-align: center">
                                <i class="fas fa-trash-alt"></i> Xóa
                            </button>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Configuration List -->
                            <table class="styled-table">
                                <thead>
                                <tr>
                                    <th>Tên thông số</th>
                                    <th>Giá trị thông số</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Existing configurations go here -->
                                @foreach($specifications as $specification)
                                <tr>
                                    <td>{{ $specification->name }}</td>
                                    <td>{{ $specification->value }}</td>
                                    <td>
                                        <!-- Add/Edit Button -->
                                        <a class="btn btn-primary edit-specification-button"
                                           data-toggle="modal"
                                           data-target="#editDialog"
                                           data-id="{{ $specification->id }}"
                                           data-name="{{ $specification->name }}"
                                           data-value="{{ $specification->value }}"
                                           style="color: #e675f3;">
                                            <i class="fas fa-edit"></i> Sửa
                                        </a>
                                        <form method="post" action="{{ route('specification.destroy', $specification->id) }}" style="display: inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger btn-sm delete-button" title="Xóa" type="submit">
                                                <i class="fas fa-trash-alt"></i> Xóa
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <!-- Add New Configuration Section -->
                            <div class="modal fade" id="myModal">
                                <form method="post" action="{{ route('product.add-specification', ['configurationId' => $configuration->id]) }}" class="modal-dialog">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm thông số</h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">Tên thông số:</label>
                                                <input type="text" class="form-control" id="modal_name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="value">Giá trị thông số:</label>
                                                <input type="text" class="form-control" id="modal_value" name="value">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-primary">Lưu</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="modal fade" id="editDialog" tabindex="-1" role="dialog" aria-labelledby="editDialogLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        @if(isset($specification))
                                            <form method="POST" id="editForm" action="{{ route('specification.update', $specification->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <h3 style="margin-top: 15px; margin-left: 16px">Sửa thông số kỹ thuật</h3>
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editDialogLabel">Edit Specification</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name">Tên thông số:</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ isset($specification) ? $specification->name : '' }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="value">Giá trị thông số:</label>
                                                    <input type="text" class="form-control" id="value" name="value" value="{{ isset($specification) ? $specification->value : '' }}">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                            </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div id="edit-dialog" style="display: none;">
                                <div class="card">
                                    <div class="card-header">Chỉnh sửa cấu hình</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('config.update', $configuration->id) }}">
                                            @csrf
                                            @method('PUT')

                                            <!-- Thêm các trường chỉnh sửa dữ liệu ở đây -->
                                            <div class="form-group">
                                                <label for="name">Tên cấu hình</label>
                                                <input type="text" name="name" id="name" class="form-control" value="{{ $configuration->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="amount">Số lượng</label>
                                                <input type="text" name="amount" id="amount" class="form-control" value="{{ $configuration->amount }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Giá tiền</label>
                                                <input type="text" name="price" id="price" class="form-control" value="{{ $configuration->price }}">
                                            </div>

                                            <!-- Thêm các trường khác ở đây -->

                                            <button type="submit" class="btn btn-primary">Lưu</button>
                                            <button type="button" onclick="closeEditDialog()" class="btn btn-secondary">Hủy</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{asset('admin/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/pace.min.js')}}"></script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Include Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Add these script tags to your layout or header -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";
            reader.addEventListener("load", function () {
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });

</script>

<script>
    $(document).ready(function () {
        // When the "Thêm thông số" button is clicked, reset the input fields and show the modal
        $(".btn-add").click(function () {
            $("#name").val("");
            $("#value").val("");
        });

        // When the "Lưu" button in the modal is clicked, retrieve the input values and add them to the table
        $("#saveData").click(function () {
            var name = $("#name").val();
            var value = $("#value").val();

            // Check if both name and value are filled
            if (name && value) {
                // Append a new row to the table with the entered data
                var newRow = $("<tr>");
                newRow.append("<td>" + name + "</td>");
                newRow.append("<td>" + value + "</td>");
                newRow.append('<td><button class="edit-button"><i class="fas fa-edit"></i> Sửa</button><button class="delete-button"><i class="fas fa-trash-alt"></i> Xóa</button></td>');

                $("table tbody").append(newRow);

                // Close the modal
                $("#myModal").modal("hide");
            } else {
                alert("Vui lòng điền đầy đủ thông tin.");
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.edit-specification-button').click(function() {
            var specificationId = $(this).data('id');
            var specificationName = $(this).data('name');
            var specificationValue = $(this).data('value');

            // Populate the modal fields with the data attributes
            $('#editDialog').find('#name').val(specificationName);
            $('#editDialog').find('#value').val(specificationValue);

            // Set the form action URL dynamically if needed
            var formAction = "{{ route('specification.update', ':id') }}";
            formAction = formAction.replace(':id', specificationId);
            $('#editForm').attr('action', formAction);
        });
    });
</script>
<script>
    function openEditDialog() {
        var dialog = document.getElementById('edit-dialog');
        dialog.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Khóa cuộn màn hình
    }

    function closeEditDialog() {
        var dialog = document.getElementById('edit-dialog');
        dialog.style.animation = 'zoomOut 0.5s, rotateOut 0.5s'; // Sử dụng hiệu ứng zoomOut và rotateOut
        dialog.style.animationFillMode = 'forwards';

        // Đợi khi animation hoàn thành trước khi ẩn hộp thoại
        setTimeout(function() {
            dialog.style.display = 'none';
            dialog.style.animation = ''; // Xóa animation
            document.body.style.overflow = 'auto'; // Kích hoạt cuộn màn hình trở lại
        }, 500); // Thời gian của animation (0.5 giây)
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
