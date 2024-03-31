<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous"
        />
</head>
<style>
body{
  font-family:'times new roman';
}  
</style>
<body>
  <?php
  $nim =$_POST['nim'];
  $nama =$_POST['nama'];
  $waktu =$_POST['waktu'];
  $prodi =$_POST['prodi'];
  $semester =$_POST['semester'];
  $kelas =$_POST['kelas'];
  $hadir =$_POST['hadir'];
  $tugas =$_POST['tugas'];
  $uts =$_POST['uts'];
  $uas =$_POST['uas'];
  // teruskan sampai ke uas

  $nilai_hadir = ($hadir / 16*0.2)* 100;
  $nilai_tugas = $tugas * 0.2;
  $nilai_uts = $uts * 0.2;
  $nilai_uas=$uas*0.4;
  $total_nilai = $nilai_hadir + $nilai_tugas + $nilai_uts + $nilai_uas;
  
  if($prodi == "SI")
  {
    $program_studi = "Sistem Informasi";
    $biaya = 3280000;
  }
  else if($prodi == "IN")
  {
    $program_studi = "Informatika";
    $biaya = 3280000;
  }
  else 
  {
    $program_studi = "Akuntansi";
    $biaya = 2580000;
  }

  if($waktu == "sore")
  {$biaya += 500000 ;}

  else{
    $biaya += 0;
  }

 



  if ($total_nilai>=80 )
  {$grade = "A";
  $keterangan = "Lulus";
}
  else if($total_nilai>=70)
  {
    $grade="B";
    $keterangan="Lulus";
  }
  else if($total_nilai>=55)
  {
    $grade="C";
    $keterangan="Lulus";
  }
  else if($total_nilai>=40)
  {
    $grade="D";
    $keterangan="Tidak Lulus";
  }
  else if($total_nilai<40)
  {
    $grade="E";
    $keterangan="Tidak Lulus";
  }

  else {
    $grade = "Salah Input Nilai";
    $keterangan = "Nilai Tidak valid";
  }

?>
 <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center text-info">Sistem Perhitungan Nilai Mahasiswa</h2>
              <h4 class="text-center text-dark mb-5">-Univ Bsi Pontianak</h2>
            </div>
          </div>
<table align ="center"  class="table table-sm table-hover">
  <tr>
    <td>No Induk Mahasiswa</td>
    <td>:</td>
    <td><?php echo $nim;?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $nama;?></td>
  </tr>
  <tr>
    <td>Waktu</td>
    <td>:</td>
    <td><?php echo $waktu;?></td>
  </tr>
  <tr>
    <td>Program Studi</td>
    <td>:</td>
    <td><?php echo $prodi."-".$program_studi;?></td>
  </tr>
  <tr>
    <td>Semester</td>
    <td>:</td>
    <td><?php echo $semester;?></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?php echo $kelas;?></td>
  </tr>
  <tr>
    <td>Hadir</td>
    <td>:</td>
    <td><?php echo $hadir;?></td>
  </tr>
 
  <tr>
    <td>Tugas</td>
    <td>:</td>
    <td><?php echo $tugas;?></td>
  </tr>
  <tr>
    <td>Uts</td>
    <td>:</td>
    <td><?php echo $uts;?></td>
  </tr>
  <tr>
    <td>Uas</td>
    <td>:</td>
    <td><?php echo $uas;?></td>
  </tr>
  <tr>
    <td>Total Nilai</td>
    <td>:</td>
    <td><?php echo $total_nilai;?></td>
  </tr>
  <tr>
    <td>Grade</td>
    <td>:</td>
    <td><?php echo $grade;?></td>
  </tr>
 
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><?php echo $keterangan;?></td>
  </tr>
  
  <tr>
    <td>Biaya</td>
    <td>:</td>
    <td><?php echo $biaya;?></td>
  </tr>
  
 
<div class="container">

</div>
</body>
</html>