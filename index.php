<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
			<h3><b><b>P</b></b><span><b><b>osyandu balita</b></b></span></h3>
		</div>

		<div class="side-content">
			<div class="profile">
				<div class="profile-img bg-img" style="background-image: url(img/pus.png);"></div>
				<h4 style="color: white;"><b>Puskesmas Fakfak Tengah</b></h4>
			</div>
		</div>

		<div class="side-menu">
			<ul>
				<li>
					<a href="index.html" class="active" style="text-decoration: none;">
						<span class="fa-solid fa-gauge"></span>
						<small>Dashboard</small>
					</a>
				</li>
				<li>
					<a href="dataBuku.html" style="text-decoration: none;">
						<span class="fa-solid fa-book"></span>
						<small>Pelayanan Gizi</small>
					</a>
				</li>
				<li>
					<a href="dataAnggota.html" style="text-decoration: none;">
						<span class="fa-solid fa-user"></span>
						<small>Pelayanan Imunisasi</small>
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
						<small>Data Petugas</small>
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

			<div class="card shadow">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold" style="color:black;">DAFTAR BUKU BARU MASUK</h6>
					<form class="d-flex" role="search">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit" style="text-decoration: none;">Search</button>
		      </form>
				</div>
			</div>

			<div class="analytics">

				<div class="card">
					<div class="container-fluid">
            <div class="row">
                <div class="card ml-5 mt-5" style="width: 13rem; height: 22rem;">
                  <img src="img/buku8a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Security Jaringan Komputer Berbasis CEH</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5" style="width: 13rem; height: 22rem;">
                  <img src="img/buku9a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Jaringan Komputer Wire dan Wireless Beserta Penerapannya</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5" style="width: 13rem; height: 22rem;">
                  <img src="img/buku10a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Dasar Raspberry Pi, Panduan Praktis Mempelajari Pemrograman</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5" style="width: 13rem; height: 22rem;">
                  <img src="img/buku11a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Elektronika Digital dan Sistem Embedded</h5>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="card ml-5 mt-5" style="width: 13rem; height: 24rem;">
                  <img src="img/buku12a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Handbook Jaringan Komputer</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5" style="width: 13rem; height: 24rem;">
                  <img src="img/buku13a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Panduan Praktis Membuat Robot Cerdas Menggunakan ARDUINO dan MATLAB+cd</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5" style="width: 13rem; height: 24rem;">
                  <img src="img/buku14a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Teknik Pemrograman Dan Multithreading Pada Mikrokontroler+cd</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5 mb-2" style="width: 13rem; height: 24rem;">
                  <img src="img/buku15a.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title mt-0" align="center" style="font-size: 18px;">Analisis Jaringan Komunikasi</h5>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="card ml-5 mt-5" style="width: 13rem; height: 24rem;">
                  <img src="img/bukua.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">PAS: Desain Web 3 in 1 (Photoshop, Flash & Dreamweaver)</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5" style="width: 13rem; height: 24rem;">
                  <img src="img/bukub.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Membuat Robot Menggunakan Raspberry Pi + Pemrograman Python+cd</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5" style="width: 13rem; height: 24rem;">
                  <img src="img/bukuc.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title" align="center" style="font-size: 18px;">Dasar Pemrograman Robot Menggunakan Arduino+cd</h5>
                  </div>
                </div>
                <div class="card ml-5 mt-5 mb-5" style="width: 13rem; height: 24rem;">
                  <img src="img/bukud.jpg" class="card-img-top" style="height: 220px; width: 100;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title mt-0" align="center" style="font-size: 18px;">Kompilasi Proyek Kriptografi Dengan Visual Basic.Net + cd</h5>
                  </div>
                </div>
            </div>

		</main>
<script type="text/javascript" src="index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>