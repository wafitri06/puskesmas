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
					<a href="peminjaman.html" class="active" style="text-decoration: none;">
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
					<h6 class="m-0 font-weight-bold" style="color:black;">DATA ANGGOTA</h6>
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
								    <tr>
								     	<th scope="col">No</th>
										<th scope="col">NIP/NIM</th>
										<th scope="col">Nama</th>
										<th scope="col">Tipe</th>
										<th scope="col">Tgl.Pinjam</th>
										<th scope="col">Tgl.Kembali</th>
										<th scope="col">Status</th>
										<th scope="col">Aksi</th>
								    </tr>
								  </thead>

								  <tbody>
								    <tr onclick="redirectToDetail('detailAnggota3.html')">
								     <td scope="row">1</td>
									<td>199310192021052019</td>
									<td>Anisa Purnama, M.IT.</td>
									<td>Dosen</td>
									<td>13-02-2023</td>
									<td>27-02-2023</td>
									<td style="color:#21D71E;">Kembali</td>
									<td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    
								    <tr onclick="redirectToDetail('detailAnggota4.html')">
								       <td scope="row">2</td>
						   	        <td>198712152020032014</td>
									<td>Farhan Syah, M.IT.</td>
									<td>Dosen</td>
									<td>1-03-2023</td>
									<td>27-03-2023</td>
									<td style="color:#F00303;">Belum</td>
									<td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailAnggota10.html')">
								      <td scope="row">3</td>
						   	        <td>190710102</td>
									<td>Putri Wijayanti</td>
									<td>Mahasiswa</td>
									<td>3-02-2023</td>
									<td>17-02-2023</td>
									<td style="color:#21D71E;">Kembali</td>
									<td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    
								    <tr onclick="redirectToDetail('detailAnggota9.html')">
								       <td scope="row">4</td>
						   	        <td>200320140</td>
									<td>Aditya Pratama</td>
									<td>Mahasiswa</td>
									<td>13-02-2023</td>
									<td>27-02-2023</td>
									<td style="color:#F00303;">Belum</td>
									<td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    <tr onclick="redirectToDetail('detailAnggota6.html')">
								      <td scope="row">5</td>
						   	        <td>210112019</td>
									<td>Siti Anggaraini</td>
									<td>Mahasiswa</td>
									<td>11-02-2023</td>
									<td>16-02-2023</td>
									<td style="color:#F4ED51;">2 hari</td>
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
<script type="text/javascript" src="dataAnggota.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>