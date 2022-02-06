<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

// pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function anggota($data)
{
  global $conn;

  $nama_buku = htmlspecialchars($data['nama']);
  $nama_pengarang =  htmlspecialchars($data['alamat']);
  $penerbit =  htmlspecialchars($data['jenis_kelamin']);
  $nama_perpustakaan =  htmlspecialchars($data['agama']);
  $sekolah_asal =  htmlspecialchars($data['sekolah_asal']);
  $foto_maba =  htmlspecialchars($data['foto_maba']);
  $aksi =  htmlspecialchars($data['aksi']);

  $query = "INSERT INTO calon_mhs 
VALUES 
(null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba', '$aksi');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM calon_mhs WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama_buku = htmlspecialchars($data['nama_buku']);
  $nama_pengarang =  htmlspecialchars($data['nama_pengarang']);
  $penerbit =  htmlspecialchars($data['penerbit']);
  $nama_perpustakaan =  htmlspecialchars($data['nama_perpustakaan']);
  $sekolah_asal =  htmlspecialchars($data['sekolah_asal']);
  $foto_maba =  htmlspecialchars($data['foto_maba']);
  $aksi =  htmlspecialchars($data['aksi']);

  $query = "UPDATE calon_mhs SET
  nama_buku ='$nama_buku',
  nama_pengarang ='$nama_pengarang',
  penerbit ='$penerbit',
  nama_perpustakaan ='$nama_perpustakaan',
  sekolah_asal ='$sekolah_asal',
  foto_maba ='$foto_maba'
  aksi ='$aksi'
  WHERE id =$id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}