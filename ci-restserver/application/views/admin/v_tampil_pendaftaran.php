<div class="content-wrapper">
<div class="card mb-3"> 
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Pendaftar</div>
        <div class="card-body">
          <a href="<?php echo base_url().'Report_pdf/pdf_pendaftaran' ?>"> <img src="<?php echo base_url().'assets_admin/print.png' ?>"> </a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr>
                  <!-- <th>&bnsp;</th>
                  <th>&bnsp;</th> -->
                  <th>No</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Alamat</th>
                  <th>Asal Sekolah</th>
                  <th>Nomer Telepon</th>
                  <th>Thn lulus</th>
                  <th>Nem</th>
                  <th>User Name</th>
                  <th>Kode</th>
                  <th>Action</th>
                </tr>
                <?php 
                $no = 1;
                foreach($user as $u){ 
                ?>
                <tr>
                  <!-- <th>&bnsp;</th>
                  <th>&bnsp;</th> -->
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->tempat_lahir ?>/<?php echo $u->tgl_lahir ?></td>
                  <td><?php echo $u->alamat ?></td>
                  <td><?php echo $u->asal_sekolah ?></td>
                  <td><?php echo $u->no_hp ?></td>        
                  <td><?php echo $u->tahun_lulus ?></td>
                  <td><?php echo $u->nem ?></td>
                  <td><?php echo $u->username ?></td>
                  <td><?php echo $u->kode_daftar ?></td>
                  <td>
                      <a href="<?php echo base_url().'Admin/pendaftaran_edit/'.$u->id ?>"> <img src="<?php echo base_url().'assets_admin/edit.png' ?>"> </a>

                      <a href="<?php echo base_url().'Admin/pendaftaran_hapus/'.$u->id ?>"> <img src="<?php echo base_url().'assets_admin/delete.png' ?>"> </a>


                        <!-- <?php echo anchor('admin/pendaftaran_edit/'.$u->id,'Edit'); ?> | 
                                          <?php echo anchor('admin/pendaftaran_hapus/'.$u->id,'Hapus'); ?> -->
                  </td>
                </tr>
                <?php } ?>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>