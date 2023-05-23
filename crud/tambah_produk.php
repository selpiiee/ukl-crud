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
    button {
          background-color: #D2E9E9;
          color: #537188;
          padding-bottom: 10px;
		  padding-left: 15px;
		  padding-right: 15px;
		  padding-top: 10px;
          text-decoration: none;
          font-size: 14px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Add Data</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Student's Name</label>
          <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
          <label>Absence</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Class</label>
         <input type="text" name="harga_beli" required="" />
        </div>
        <div>
          <label>Picture</label>
         <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
         <center><button type="submit">Save Data</button></center>
        </div>
        </section>
      </form>
  </body>
</html>