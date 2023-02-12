<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('title')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Lateef&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar" dir="rtl">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="bi bi-house-door"></i>
                    <span>الرئيسية</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clock-fill"></i>
                    <span>ادارة الاحمال</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('admin.show.loads') }}">
                            <i class="bi bi-circle"></i>
                            <span>استعراض الاحمال</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.archive.loads') }}">
                            <i class="bi bi-circle"></i>
                            <span>ارشيف الاحمال</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-clock-fill"></i>
                    <span>ادارة المنظومات</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav2" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('admin.show.systems') }}">
                            <i class="bi bi-circle"></i>
                            <span>استعراض المنظومات</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.archive.systems')}}">
                            <i class="bi bi-circle"></i>
                            <span>ارشيف المنظومات</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar-->
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
