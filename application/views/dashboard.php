<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="http://localhost/mahasiswa/images/" type="image/ico" />
<!-- tittle  -->
<title>Fakultas - </title>
<!-- Bootstrap -->
<link href="http://localhost/mahasiswa/cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="http://localhost/mahasiswa/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="http://localhost/mahasiswa/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="http://localhost/mahasiswa/assets/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="http://localhost/mahasiswa/assets/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- Datatables -->
<link href="http://localhost/mahasiswa/assets/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="http://localhost/mahasiswa/assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- JQVMap -->
<link href="http://localhost/mahasiswa/assets/jqvmap/dist/jqvmap.min.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="http://localhost/mahasiswa/assets/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="http://localhost/mahasiswa/css/custom.min.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="http://localhost/mahasiswa/assets/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<!-- Ion.RangeSlider -->
<link href="http://localhost/mahasiswa/assets/normalize-css/normalize.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<!-- Bootstrap Colorpicker -->
<link href="http://localhost/mahasiswa/assets/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/cropper/dist/cropper.min.css" rel="stylesheet">
<!-- Dropzone.js -->
<link href="http://localhost/mahasiswa/assets/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
<!-- PNotify -->
<link href="http://localhost/mahasiswa/assets/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<link href="http://localhost/mahasiswa/assets/pnotify/dist/pnotify.nonblock.css" rel="stylesheet"></head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <!-- sidebar -->
<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="http://localhost/mahasiswa/fakultas" class="site_title"><center>CRUD MAHASISWA</center></a>
    </div>

    <div class="clearfix"></div>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section" style="margin-top: 20px">
        <!-- menu sidebar -->
        <ul class="nav side-menu">
        <li><a href="http://localhost/mahasiswa/dashboard"><i class="fa fa-home"></i> Halaman Utama <span class="fa fa-chevron"></span></a></li>       
        <li><a href="http://localhost/mahasiswa/fakultas"><i class="fa fa-home"></i> Data Mahasiswa <span class="fa fa-chevron"></span></a>
          <li><a href="http://localhost/mahasiswa/login/logout"><i class="fa fa-home"></i> Logout<span class="fa fa-chevron"></span></a>

          </li>

        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="logout" data-placement="top" title="Logout" href="http://localhost/mahasiswa/login/logout" style="width: 100%">
        <h3>Logout</h3>
      </a>
    </div>
  </div>
</div>

      <!-- top navigation -->
      <div class="top_nav">
  <div class="nav_menu">
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <!-- tombol pojok kanan atas -->
    <nav class="nav navbar-nav">
      
      </nav>
    </div>
 <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->
<div class="row">

  <!-- Selamat Datang -->
<div class="col-md-12">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <h1 class="display-1">Selamat Datang!</h1>
    <h2>Anda telah masuk ke dalam sistem pendataan mahasiswa. Selamat bertugas 🤗🤗🤗🤗🤗🤗.</h2>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <center><ul class="nav navbar-right panel_toolbox"><a href="http://localhost/mahasiswa/fakultas" data-target=""  class="btn btn-success">Lihat Data Mahasiswa</a></ul>
          </div>
          <div class="col-auto">
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <ul class="nav navbar-right panel_toolbox"><a href="#"  data-toggle="modal" data-target="#tambahModal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Mahasiswa</a></ul>
          </div>
          <div class="col-auto">
          </div>
        </div>
      </div>
    </div>
  </div>

             
<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Tambah Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 col-sm-12">  
          <form action="http://localhost/mahasiswa/fakultas/add" method="post" enctype="multipart/form-data" >
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="NIM">NIM</label>
              <div class="col-md-6 col-sm-6 ">
                <input class="form-control" type="text" name="NIM" placeholder="Nomor Induk Siswa" required />
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_mahassiswa">Nama Mahasiswa</label>
              <div class="col-md-6 col-sm-6 ">
                <input class="form-control" type="text" name="nama_mahasiswa" placeholder="Nama Mahasiswa" required/>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="prodi">Program Studi</label>
              <div class="col-md-6 col-sm-6 ">
                <select class="select2_single form-control" name="prodi" tabindex="-1">
                                      <option value="1">Informatika</option>';
                                      <option value="2">Fisika</option>';
                                      <option value="3">Biologi</option>';
                                  </select>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">Alamat</label>
              <div class="col-md-6 col-sm-6 ">
                <textarea class="form-control" name="alamat" required></textarea>
              </div>
            </div>


            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_lahir">Tanggal Lahir</label>
              <div class="col-md-6 col-sm-6 ">
                <div class='input-group date myDatepicker2' >
                  <input type="text" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" required/>
                  <span class="input-group-addon" style="padding-top: 10px">
                    <span class="fa fa-calendar-o"></span>
                  </span>
                </div>
              </div>
            </div>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="kelas">Gender</label>
              <div class="col-md-6 col-sm-6 ">
                <input type="radio" id="gender" name="gender" value="P" selected>
                <label for="pria">Pria</label><br>
                <input type="radio" id="gender" name="gender" value="W">
                <label for="wanita">Wanita</label><br>

              </div>
            </div>
            <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="agama">Agama</label>
    <div class="col-md-6 col-sm-6 ">
        <select class="select2_single form-control" name="agama" tabindex="-1" required>
            <option value="Islam" selected>Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Kepercayaan Lain">Kepercayaan Lain</option>
        </select>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="semester">Semester</label>
    <div class="col-md-6 col-sm-6">
        <select class="select2_single form-control" name="semester" tabindex="-1" required>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </div>
</div>
            <div class="item form-group">
              <div class="col-md-6 col-sm-6 offset-md-3">
                <input class="btn btn-success" type="submit" name="btn" value="Save" />
              </div>
            </div>
          </form>
        </div> 
      </div>
      <div class="modal-footer">
        <div class="col-md-12 col-sm-12">  
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->

    <!-- js -->


<!-- jQuery -->
<script src="http://localhost/mahasiswa/assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="http://localhost/mahasiswa/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/mahasiswa/assets/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="http://localhost/mahasiswa/assets/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="http://localhost/mahasiswa/assets/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="http://localhost/mahasiswa/assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="http://localhost/mahasiswa/assets/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="http://localhost/mahasiswa/assets/jszip/dist/jszip.min.js"></script>
<script src="http://localhost/mahasiswa/assets/pdfmake/build/pdfmake.min.js"></script>
<script src="http://localhost/mahasiswa/assets/pdfmake/build/vfs_fonts.js"></script>
</script>
<!-- Custom Theme Scripts -->
<script src="http://localhost/mahasiswa/js/custom.min.js"></script>
<!-- uang --> 
<script src="http://localhost/mahasiswa/https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="http://localhost/mahasiswa/assets/moment/min/moment.min.js"></script>
<script src="http://localhost/mahasiswa/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="http://localhost/mahasiswa/js/jquery-ui.js" type="text/javascript"></script>
<!-- bootstrap-datetimepicker -->    
<script src="http://localhost/mahasiswa/assets/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>

<!-- bootstrap-daterangepicker -->
<script src="http://localhost/mahasiswa/assets/moment/min/moment.min.js"></script>
<script src="http://localhost/mahasiswa/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="http://localhost/mahasiswa/js/jquery-ui.js" type="text/javascript"></script>
<!-- bootstrap-datetimepicker -->    
<script src="http://localhost/mahasiswa/assets/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Initialize datetimepicker -->
<script  type="text/javascript"> 
  $('.myDatepicker2').datetimepicker({
    format: 'DD/MM/YYYY'
  });
  $('#myDatepicker3').datetimepicker({
    format: 'YYYY'
  });  
</script>
<script>
  function myFunction() {
    var x = document.getElementById("gender").required;
    document.getElementById("demo").innerHTML = x;
  }</script>
</body>
</html>

