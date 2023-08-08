<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dataBuku.css">
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
					<a href="dataBuku.html" class="active" style="text-decoration: none;">
						<span class="fa-solid fa-book"></span>
						<small>Data Buku</small>
					</a>
				</li>
				<li>
					<a href="dataAnggota.html" style="text-decoration: none;">
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

			<div class="card shadow">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold" style="color:black;">DATA BUKU</h6>
					<form class="d-flex" role="search">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit" style="text-decoration: none;">Search</button>
		      </form>
				</div>
			</div>

			<div class="analytics">
       <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <table class="table">

                  <thead style="background-color: #D9D9D9;">
								    <tr align="center">
							            <th>No</th>
							            <th>Buku</th>
							            <th width="250px">Judul Buku</th>
							            <th width="150px">Penulis</th>
							            <th>Penerbit</th>
							            <th>Tahun Terbit</th>
							            <th>Rak</th>
							            <th>Aksi</th>
							          </tr>
								  </thead>

								  <tbody>
								    <tr onclick="redirectToDetail('detailBuku1.html')">
								      <td><b>1.</b></td>
							            <td><img src="img/buku1.jpg" width="100"></td>
							            <td>Membuat Robot Menggunakan Raspberry Pi + Pemrograman Python+cd</td>
							            <td>Mada Sanjaya WS, Ph.D</td>
							            <td>Penerbit Andi</td>
							            <td>2019</td>
							            <td>Rak A1</td>
							            <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    
								    <tr onclick="redirectToDetail('detailBuku2.html')">
								      <td><b>2.</b></td>
							            <td><img src="img/buku2.png" width="100"></td>
							            <td>PAS: Desain Web 3 in 1 (Photoshop, Flash & Dreamweaver)</td>
							            <td>Wahana Komputer</td>
							            <td>Penerbit Andi</td>
							            <td>2012</td>
							            <td>Rak A1</td>
							            <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailBuku3.html')">
								      <td><b>3.</b></td>
				                        <td><img src="img/buku3.jpg" width="100"></td>
				                        <td>Dasar Pemrograman Robot Menggunakan Arduino+cd</td>
				                        <td>Abdul Kadir</td>
				                        <td>Penerbit Andi</td>
				                        <td>2019</td>
				                        <td>Rak A1</td>
				                        <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailBuku4.html')">
								      <td><b>4.</b></td>
				                        <td><img src="img/buku4.jpeg" width="100"></td>
				                        <td>Kompilasi Proyek Kriptografi Dengan Visual Basic.Net + cd</td>
				                        <td>R.H. Sianipar</td>
				                        <td>Penerbit Andi</td>
				                        <td>2016</td>
				                        <td>Rak A1</td>
				                        <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailBuku5.html')">
								      <td><b>5.</b></td>
				                        <td><img src="img/buku5.jpg" width="100"></td>
				                        <td>Buku Programming Wireless Untuk Arduino + cd</td>
				                        <td>Abdul Kadir</td>
				                        <td>Penerbit Andi</td>
				                        <td>2018</td>
				                        <td>Rak A1</td>
				                        <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailBuku6.html')">
								      <td><b>6.</b></td>
							            <td><img src="img/buku6.jpg" width="100"></td>
							            <td>Melumpuhkan Hacker dengan Web Application Firewall (WAF)+cd</td>
				                        <td>Girindro Pringgo Digdo</td>
				                        <td>Penerbit Andi</td>
				                        <td>2016</td>
							            <td>Rak A2</td>
							            <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    
								    <tr onclick="redirectToDetail('detailBuku7.html')">
								      <td><b>7.</b></td>
							            <td><img src="img/buku7.jpg" width="100"></td>
							            <td>Arduino, Belajar Cepat Dan Pemrograman</td>
				                        <td>Heri Andrianto</td>
				                        <td>Informatika</td>
				                        <td>2016</td>
							            <td>Rak A2</td>
							            <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailBuku8.html')">
								      <td><b>8.</b></td>
				                        <td><img src="img/buku8.jpg" width="100"></td>
				                        <td>Handbook Jaringan Komputer</td>
				                        <td>I Putu Agus Eka Pratama</td>
				                        <td>Informatika</td>
				                        <td>2016</td>
				                        <td>Rak A2</td>
				                        <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailBuku9.html')">
								      <td><b>9.</b></td>
				                        <td><img src="img/buku9.jpeg" width="100"></td>
				                        <td>Elektronika Digital dan Sistem Embedded</td>
				                        <td width="200px">Prof.Dr.Widodo Budiharto, SSi, Mkom</td>
				                        <td>Penerbit Andi</td>
				                        <td>2018</td>
				                        <td>Rak A2</td>
				                        <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailBuku10.html')">
								      <td><b>10.</b></td>
				                        <td><img src="img/buku10.jpg" width="100"></td>
				                        <td>Security Jaringan Komputer Berbasis CEH</td>
				                        <td>Rifkie Primartha</td>
				                        <td>Informatika</td>
				                        <td>2018</td>
				                        <td>Rak A2</td>
				                        <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								  </tbody>

                </table>
           </table>
         </div>


			</div>
		</div>

		</main>
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="dataBuku.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>