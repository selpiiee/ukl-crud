<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD DATA SISWA</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #577D86;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #537188;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #537188;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #D2E9E9;
          color: #537188;
          padding: 10px;
          text-decoration: none;
          font-size: 15px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data Siswa Cloud Computing</h1></center>
    <center><p><a href="tambah_produk.php">+ &nbsp; Add Data</a> <br/>
    </p></center>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Absence</th>
          <th>Class</th>
          <th>Picture</th>
          <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo substr($row['absensi'], 0, 20); ?>...</td>
          <td><?php echo number_format($row['kelas'],0,',','.'); ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
          <td>
							<center><a href="asset/view/form_ubah.php?id=<?php echo $data['id'] ?>">Edit </a></center>
		 </td>
						<td>
							<center><a href="asset/controller/proses_hapus.php?id=<?php echo $data['id'] ?>"
									onclick="return confirm('Apakah anda yakin ingin menghapus data siswa <?php echo $data['nama']; ?> ? ')">
									Delete </a></center>
						</td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>