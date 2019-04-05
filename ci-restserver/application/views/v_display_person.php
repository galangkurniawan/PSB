<style type="text/css">

 
table {
  position: center;
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  text-align: center;
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{

  border-left:none;  
}
 
table tr {
  /*text-align: center;*/
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
</style>
<body>
  <!-- <h2>Hai, <?php //echo $this->session->userdata("nama"); ?></h2> -->
  <!-- <a href="<?php //echo base_url('login/logout'); ?>">Logout</a> -->
          <div class="col-md-10 col-md-offset-1 text-center animate-box">
            <div class="about-wrap">
              <div class="heading-2">
                <br><br><br><br>
                <h2>"<?php echo $record['nama'] ?>"  Telah terdaftar</h2>
              </div>
              <p> </p>
              <p></p>
            </div>
          </div>

        <div class="row">
        <div class="col-md-4 animate-box">
        </div>
          <div class="col-md-4 animate-box">
            <p>Cek Kembali Data anda, bila terjadi kesalahan harap segera melapor ke panitia pendaftaran.</p>
            <p>Anda akan mendapat Username dan Kode Pendaftaran ingat baik baik username yang anda dapatkan</p>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4 animate-box">
          </div>
          <div class="col-md-4 animate-box">
            <p><h4> Username : <h2><b><?php echo $this->session->userdata('user')["nama"]; ?></b></h2> </h4></p>
          </div>
          <div class="col-md-4 animate-box">
            <p><h4>Kode Pendaftaran :</h4> <h2> <b><?php echo $record['kode_daftar'] ?></b> </h2> </p>
          </div>
        </div>




<div id="colorlib-about" class="colorlib-light-grey">
  <div class="container">
    <div class="row row-pb-md">

      <center>
    <table cellspacing='0'>
    <thead>
      <tr>
        <th colspan="2">Biodata</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nama</td>
        <td><?php echo $record['nama'] ?></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php echo $record['gender'] ?></td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td><?php echo $record['tempat_lahir'] ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo $record['tgl_lahir'] ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $record['alamat'] ?></td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td><?php echo $record['asal_sekolah'] ?></td>
      </tr>
      <tr>
        <td>Nem</td>
        <td><?php echo $record['nem'] ?></td>
      </tr>
      <tr>
        <td>Tahun Lulus</td>
        <td><?php echo $record['tahun_lulus'] ?></td>
      </tr>
    </tbody>
  </table>
  </center>
    </div>
  </div>
</div>
  
</body>
