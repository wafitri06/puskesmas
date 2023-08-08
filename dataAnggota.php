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
								      <th scope="col">Tgl.Terdaftar</th>
								      <th scope="col">Stat.Pinjam</th>
								      <th scope="col">Aksi</th>
								    </tr>
								  </thead>

								  <tbody>
								    <tr onclick="redirectToDetail('detailAnggota1.html')">
								      <td>1</td>
								      <td>198401232020091001</td>
								      <td>Maya Safitri, B.Comp.</td>
								      <td>Dosen</td>
								      <td>21-04-2019</td>
								      <td>Tidak Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    
								    <tr onclick="redirectToDetail('detailAnggota2.html')">
								      <td>2</td>
								      <td>197910052019082021</td>
								      <td>Rizky Pratama, B.Sc.</td>
								      <td>Dosen</td>
								      <td>18-06-2019</td>
								      <td>Tidak Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailAnggota3.html')">
								      <td>3</td>
								      <td>199310192021052019</td>
								      <td>Anisa Purnama, M.IT.</td>
								      <td>Dosen</td>
								      <td>21-04-2019</td>
								      <td>Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    
								    <tr onclick="redirectToDetail('detailAnggota4.html')">
								      <td>4</td>
								      <td>198712152020032014</td>
								      <td>Farhan Syah, M.IT.</td>
								      <td>Dosen</td>
								      <td>18-06-2019</td>
								      <td>Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>
								    <tr onclick="redirectToDetail('detailAnggota5.html')">
								      <td>5</td>
								      <td>199002102019070102</td>
								      <td>Maya Safitri, B.Comp.</td>
								      <td>Dosen</td>
								      <td>21-04-2019</td>
								      <td>Tidak Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailAnggota6.html')">
								      <td>6</td>
								      <td>210112019</td>
								      <td>Siti Anggraini</td>
								      <td>Mahasiswa</td>
								      <td>1-03-2021</td>
								      <td>Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailAnggota7.html')">
								      <td>7</td>
								      <td>190820210</td>
								      <td>Muhammad Rizky</td>
								      <td>Mahasiswa</td>
								      <td>1-03-2021</td>
								      <td>Tidak Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								     </tr>

								      <tr onclick="redirectToDetail('detailAnggota8.html')">
								      <td>8</td>
								      <td>210520191</td>
								      <td>Rina Safitri</td>
								      <td>Mahasiswa</td>
								      <td>1-03-2021</td>
								      <td>Tidak Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								    </tr>

								    <tr onclick="redirectToDetail('detailAnggota9.html')">
								      <td>9</td>
								      <td>200320140</td>
								      <td>Aditya Pratama</td>
								      <td>Mahasiswa</td>
								      <td>1-03-2021</td>
								      <td>Pinjam</td>
								      <td><i class="fa-solid fa-pen-to-square mr-2" style="color: #e17833;"></i><i class="fa-solid fa-trash mr-2" style="color: #ff0000;"></i><i class="fa-solid fa-eye mr-2" style="color: #2ad53e;"></i></td>
								     </tr>

								      <tr onclick="redirectToDetail('detailAnggota10.html')">
								      <td>10</td>
								      <td>190710102</td>
								      <td>Putri Wijayanti</td>
								      <td>Mahasiswa</td>
								      <td>1-03-2021</td>
								      <td>Pinjam</td>
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