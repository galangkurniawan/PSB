<div class="content-wrapper">
<div class="card mb-3"> 
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Event</div>
        <div class="card-body">
          <button type="submit" class="btn btn-primary" onclick="window.location.href='<?php echo base_url().'Admin/tambah_event' ?>'"><img src="<?php echo base_url().'assets_admin/add.png' ?>"> Add Event</button>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr>
                  <!-- <th>&bnsp;</th>
                  <th>&bnsp;</th> -->
                  <th>No</th>
                  <th>tanggal</th>
                  <th>Penyelenggara</th>
                  <th>Nama event</th>
                  <th>Tempat</th>
                  
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
                  <td><?php echo $u->tanggal ?></td>
                  <td><?php echo $u->penyelenggara; ?></td>
                  <td><?php echo $u->nama_event ?></td>
                  <td><?php echo $u->tempat ?></td>
                  
                  <td>

                    <a href="<?php echo base_url().'Admin/event_edit/'.$u->id ?>"> <img src="<?php echo base_url().'assets_admin/edit.png' ?>"> </a> | 

                    <a href="<?php echo base_url().'Admin/event_hapus/'.$u->id ?>"> <img src="<?php echo base_url().'assets_admin/delete.png' ?>"> </a>

                        <!-- <?php echo anchor('admin/event_edit/'.$u->id,'Edit'); ?>
                                          <?php echo anchor('admin/event_hapus/'.$u->id,'Hapus'); ?> -->
                  </td>
                </tr>
                <?php } ?>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>