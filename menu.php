
<div class="modal-shiftfix">
<!-- Navigation -->
<div class="navbar navbar-fixed-top scroll-hide">
<div class="container-fluid top-bar">
    <div class="pull-right">
        <ul class="nav navbar-nav pull-right">
            <!--navigasi user-->
            <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img width="34" height="34" src="assets/images/avatar-male.jpg" /><?php echo $_SESSION[role];?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">
                            <i class="icon-user"></i>Profile</a>
                    </li>

                    <li><a href="logout.php">
                            <i class="icon-signout"></i>Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <h3><b>Aplikasi Herregistrasi</b></h3>
</div>
<div class="container-fluid main-nav clearfix">
    <div class="nav-collapse">
        <ul class="nav">
            <li>
                <a href="media.php?call=dashboard"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
            </li>


            <li class="dropdown current"><a data-toggle="dropdown" class="current" href="#">
                    <span aria-hidden="true" class="se7en-forms"></span>Master<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="current" href="media.php?call=mhs">
                            <span class="notifications label label-warning"></span>
                             Master Mahasiswa
                            </a>

                    </li>
                    <li>
                        <a href="media.php?call=masterbiaya">Master Biaya</a>
                    </li>
                    <li>
                        <a href="media.php?call=manageuser">Manajemen User</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a data-toggle="dropdown" href="#">
                    <span aria-hidden="true" class="se7en-tables"></span>Transaksi<b class="caret"></b></a>
                <ul class="dropdown-menu">
                        <li><a href="media.php?call=bayar">Pembayaran</a></li>
                        <li><a href="media.php?call=validasi">Validasi Berkas</a></li>

                </ul>
            </li>
            <li class="dropdown"><a href="#">
                    <span aria-hidden="true" class="se7en-charts"></span>Laporan</a>
                <ul class="dropdown-menu">
                    <li><a href="media.php?call=laporanbayar">Laporan Pembayaran</a> </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
</div>