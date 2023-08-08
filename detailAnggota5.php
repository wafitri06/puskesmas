<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dataAnggota.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Aplikasi Web Perpustakaan</title>
</head>
<body>
<input type="checkbox" id="menu-toggle">
	<div class="sidebar">
		<div class="side-header">
			<h3><b><b>P</b></b><span><b><b>ERPUSTAKAAN MI</b></b></span></h3>
		</div>

		<div class="side-content">
			<div class="profile">
				<div class="profile-img bg-img" style="background-image: url(img/profile1.jpg);"></div>
				<h4 style="color: white;"><b>Arsyi R Ningrum</b></h4>
			</div>
		</div>

		<div class="side-menu">
			<ul>
				<li>
					<a href="index.html" style="text-decoration: none;">
						<span class="fa-solid fa-gauge"></span>
						<small>Dashboard</small>
					</a>
				</li>
				<li>
					<a href="dataBuku.html" style="text-decoration: none;">
						<span class="fa-solid fa-book"></span>
						<small>Data Buku</small>
					</a>
				</li>
				<li>
					<a href="dataAnggota.html" class="active" style="text-decoration: none;">
						<span class="fa-solid fa-user"></span>
						<small>Data Anggota</small>
					</a>
				</li>
				<li>
					<a href="dataAdmin.html" style="text-decoration: none;">
						<span class="fa-solid fa-lock"></span>
						<small>Data Admin</small>
					</a>
				</li>
				<li>
					<a href="peminjaman.html" style="text-decoration: none;">
						<span class="fa-solid fa-rotate-right"></span>
						<small>Peminjaman</small>
					</a>
				</li>
				<li>
					<a href="pengembalian.html" style="text-decoration: none;">
						<span class="fa-solid fa-rotate-left"></span>
						<small>Pengembalian</small>
					</a>
				</li>
				<li>
					<a href="peraturan.html" style="text-decoration: none;">
						<span class="fa-solid fa-gear"></span>
						<small>Peraturan</small>
					</a>
				</li>
			</ul>
		</div>
	</div>

<div class="main-content">
		
		<header>
			<div class="header-content">
				<label for="menu-toggle">
					<span class="fa-solid fa-bars mt-3"></span>
				</label>

			<div class="dropdown">
				<span><i class="fa-solid fa-user mr-1"></i></span>
			  <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration:none; color: black;">
			    <b>Arsyi R Ningrum</b>
			  </a>

			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" href="detailAdmin1.html">Profile</a></li>
			    <li><a class="dropdown-item" href="login.html">Logout</a></li>
			  </ul>
			</div>
			</div>
		</header>

		<main>

		<div class="card shadow mb-4">
                <div class="card-header py-3">
				    <h6 class="m-0 font-weight-bold">
				        <a href="dataAnggota.html" style="color: black; text-decoration: none;">
				            <i class="fas fa-caret-left mr-2" style="color: #000000; font-size: 15px;"></i>
				            DETAIL ANGGOTA
				        </a>
				    </h6>
				</div>

			<div class="analytics">
       <div class="card-body">
        <div class="table-responsive">
            <table border="3px" class="table table-bordered">
			  <tbody>
			    <tr style="height:25px;">
			      <td width="350px">ID Anggota</td>
			      <td>DAGTa05</td>
			      <td rowspan="7" width="250px"><img src="img/DAGT5.jpg" width="250px"></td>
			    </tr>
			    <tr style="height:25px;">
			      <td>NIP/NIM</td>
			      <td>199002102019070102</td>
			    </tr>
			    <tr style="height:25px;">
			      <td>Nama</td>
			      <td>Maya Safitri, B.Comp.</td>
			    </tr>
			    <tr style="height:25px;">
			      <td>Tipe</td>
			      <td>Dosen</td>
			    </tr>
			    <tr style="height:25px;">
			      <td>Jenis Kelamin</td>
			      <td>Perempuan</td>
			    </tr>
			    <tr style="height:25px;">
			      <td>Tempat, Tanggal Lahir</td>
			      <td>Jember, 10 November 1999</td>
			    </tr>
			    <tr style="height:25px;">
			      <td>Alamat</td>
			      <td>Jl. Anggrek</td>
			    </tr>
			  </tbody>
			</table>

			<table border="3px" class="table table-bordered">
			  <tbody>
			  	<tr>
			  		<th colspan="7" style="text-align: center; background-color: #dedede;"><i class="fa-solid fa-clock-rotate-left mr-2" style="color: #000000;"></i>History Peminjaman Buku</th>
			  	</tr>
			    <tr style="height:25px;">
			      <td width="10px"><b>No</b></td>
			      <td width="350px"><b>Judul Buku</b></td>
			      <td width="220px"><b>Tanggal Peminjaman</b></td>
			      <td width="220px"><b>Tanggal Pengembalian</b></td>
			      <td><b>Denda</b></td>
			      <td><b>Status</b></td>
			      <td width="100px"><b>Aksi</b></td>
			    </tr>
			    <tr style="height:25px;">
			      <td><b>1</b></td>
                  <td>Membuat Robot Menggunakan Raspberry Pi + Pemrograman Python+cd</td>
                  <td>2023-02-01</td>
                  <td>2023-02-08</td>
                  <td>-</td>
                  <td style="color:#21D71E;">Selesai</td>
                  <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
			    </tr>
			    <tr style="height:25px;">
			     <td><b>2</b></td>
                  <td>Buku Programming Wireless Untuk Arduino + cd</td>
                  <td>2023-01-01</td>
                  <td>2023-01-08</td>
                  <td>-</td>
                  <td style="color:#21D71E;">Selesai</td>
                  <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
			    </tr>
			    <tr style="height:25px;">
			      <td><b>3</b></td>
                  <td>Kompilasi Proyek Kriptografi Dengan Visual Basic.Net + cd</td>
                  <td>2023-01-01</td>
                  <td>2023-01-08</td>
                  <td>-</td>
                  <td style="color:#21D71E;">Selesai</td>
                  <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
			    </tr>
			    <tr style="height:25px;">
			      <td><b>4</b></td>
                  <td>PAS: Desain Web 3 in 1 (Photoshop, Flash & Dreamweaver)</td>
                  <td>2023-01-18</td>
                  <td>2023-01-25</td>
                  <td>-</td>
                  <td style="color:#21D71E;">Selesai</td>
                  <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
			    </tr>
			    <tr style="height:25px;">
			      <td><b>5</b></td>
                  <td>Buku Programming Wireless Untuk Arduino + cd</td>
                  <td>2023-02-03</td>
                  <td>2023-02-17</td>
                  <td>-</td>
                  <td style="color:#21D71E;">Selesai</td>
                  <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
			    </tr>
			    </tr>
			  </tbody>
			</table>
         </div>


			</div>
		</div>

		</main>
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="dataAnggota.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>