<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tempest Admin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="shortcut icon" href="assets/hyperspace/assets/css/images/icon_home.jpg" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['../../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/atlantis.min.css">

    <link rel="stylesheet" href="../../assets/css/datatable.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" style="background-color: #312450">

                <a href="index.html" class="logo">
                    <img src="assets/hyperspace/assets/css/images/logo.png" alt="navbar brand" class="navbar-brand"
                        width="140">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" style="background-color: #312450">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="../assets/img/profile.jpg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/profile.jpg"
                                                    alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="text-muted">hello@example.com</p><a href="profile.html"
                                                    class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <form id="form" action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <a href="javascript:void(0)" onclick="document.getElementById('form').submit()" class="dropdown-item" href="#">Logout</a>
                                        </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    {{ Auth::user()->name }}
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-warning">
                        <li class="nav-item">
                            <a href="admin" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">

                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Menu</h4>
                        </li>
                        <li class="nav-item active submenu">
                            <a href="/table">
                                <i class="fas fa-table"></i>
                                <p>Table</p>

                            </a>
                        </li>


                        <li class="nav-item mt-2">
                            <form id="form" action="{{ route('logout') }}" method="post">
                                @csrf
                                <a href="javascript:void(0)" onclick="document.getElementById('form').submit()"
                                    class="btn btn-block" style="background-color: #312450; color:white;">
                                    <i class="fas fa-sign-out-alt" style="color: white"></i>
                                    <p style="color:white; text-indent: 50%">LOG OUT</p>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">TABLES</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-item">
                                <a href="#">Tables</a>
                            </li>

                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="col">

                                        <h4 class="card-title">DATA BARANG</h4>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn" data-toggle="modal"
                                            data-target="#tambah"
                                            style="margin-top: 10px;background-color: #312450; color:white;">
                                            Tambah Data Barang
                                        </button>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table id="add-row" class="display table table-striped table-hover">

                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>ID</th>
                                                    <th>KODE BARANG</th>
                                                    <th>NAMA BARANG</th>
                                                    <th>TIPE BARANG</th>
                                                    <th>JUMLAH BARANG</th>
                                                    <th>DISTRIBUTOR</th>
                                                    <th>TANGGAL MASUK</th>
                                                    <th>TANGGAL KELUAR</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>

                                            <?php
                                            $no = 1;
                                            ?>
                                            <tbody>
                                                @foreach ($tampil as $p)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $p->id }}</td>
                                                        <td>{{ $p->kd_barang }}</td>
                                                        <td>{{ $p->nm_barang }}</td>
                                                        <td>{{ $p->tp_barang }}</td>
                                                        <td>{{ $p->jml_barang }}</td>
                                                        <td>{{ $p->dstbr_barang }}</td>
                                                        <td>{{ $p->tgl_masuk }}</td>
                                                        <td>{{ $p->tgl_keluar }}</td>
                                                        <td>
                                                            <a href="#edit{{ $p->id }}" class='btn btn'
                                                                style="color: white; background-color: #312450;"
                                                                data-toggle='modal'><span
                                                                    class='fas fa-edit'></span></a>
                                                            <a href="#delete" class='btn btn-danger'
                                                                data-toggle='modal'><span
                                                                    class='fas fa-trash'></span></a>
                                                        </td>
                                                    </tr>
                                                    @include('modal_edit_delete')
                                                @endforeach
                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('admin') }}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row">
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="id"
                                                class="form-control form-control-alternative"
                                                id="exampleFormControlInput1" placeholder="Masukan id">
                                        </div>
                                    </div> --}}


                                    <div class="col-md-6">
                                        @error('kd_barang')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="text" name="kd_barang"
                                                class="form-control form-control-alternative"
                                                id="exampleFormControlInput1" placeholder="Masukkan kd barang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @error('nm_barang')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="text" name="nm_barang" placeholder="Masukkan nama barang"
                                                class="form-control form-control-alternative" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @error('tp_barang')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <select name="tp_barang" id="" class="form-control">
                                                <option value="" hidden>Pilih tipe barang</option>
                                                <option value="Packs">Packs</option>
                                                <option value="Pcs">Pcs</option>
                                                <option value="Slop">Slop</option>
                                                <option value="Box">Box</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @error('jml_barang')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="number" name="jml_barang"
                                                placeholder="Masukkan jumlah barang"
                                                class="form-control form-control-alternative" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @error('dstbr_barang')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="text" name="dstbr_barang"
                                                class="form-control form-control-alternative"
                                                id="exampleFormControlInput1"
                                                placeholder="Masukkan distributor barang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @error('tgl_masuk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="date" name="tgl_masuk"
                                                placeholder="Masukkan tanggal masuk"
                                                class="form-control form-control-alternative" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @error('tgl_keluar')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="date" name="tgl_keluar"
                                                class="form-control form-control-alternative"
                                                id="exampleFormControlInput1" placeholder="Masukkan tanggal keluar">
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn"
                                        style="color: white; background-color: #312450">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">

                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2022, made with <i class="fa fa-heart heart text-danger"></i> by <a href="">KELOMPOK
                            2</a>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>Logo Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                            <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Navbar Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="green"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange"></button>
                            <button type="button" class="changeTopBarColor" data-color="red"></button>
                            <button type="button" class="changeTopBarColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                            <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="green2"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                            <button type="button" class="changeTopBarColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Sidebar</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Background</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                            <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                            <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-toggle">
                <i class="flaticon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->

    <script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Atlantis JS -->
    <script src="../../assets/js/atlantis.min.js"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="../../assets/js/setting-demo2.js"></script>

    <script src="../../assets/js/datatable.js"></script>
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action =
                '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>
</body>

</html>
