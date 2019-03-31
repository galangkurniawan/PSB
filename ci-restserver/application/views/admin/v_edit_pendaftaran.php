<style type="text/css">
    /* SELAMAT DATANG DI BLOG DUMET SCHOOL */

* {margin: 0; padding: 0;}

.form_hint, .required_notification {font-size: 11px;}

body {
    font-family: Arial, Helvetica, sans-serif;
    color: #333;
}

#main {
    width: 680px;
    margin: auto;
    margin-top: 100px;  
}

#main h3 {
    border-bottom: 1px solid #999;
    color: #333;
    padding-bottom: 20px;
    margin-bottom: 20px;    
}

#main a {
    color: #333;
    text-decoration: none;
}   

#main a:hover {
    color: #03F;    
}

/* === Form Elements === */
.contact_form ul {
    list-style: none;   
}

.contact_form li{
    padding:12px; 
    border-bottom:1px solid #eee;
    position:relative;
}

.contact_form label {
    width:150px;
    margin-top: 3px;
    display:inline-block;
    float:left;
    padding:3px;
}
.contact_form input {
    height:30px; 
    width:270px; 
    padding:0px 5px;
}

.contact_form textarea {padding:8px; width:300px;}
.contact_form button {margin-left:156px;}

    /* form element visual styles */
    .contact_form input, .contact_form textarea { 
        border:1px solid #aaa;
        box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
        border-radius:2px;
        padding-right:30px;
        -moz-transition: padding .25s; 
        -webkit-transition: padding .25s; 
        -o-transition: padding .25s;
        transition: padding .25s;
    }
    .contact_form input:focus, .contact_form textarea:focus {
        background: #fff; 
        border:1px solid #F00; 
        box-shadow: 0 0 3px #900; 
        padding-right:70px;
    }

/* === HTML5 validation styles === */   
.contact_form input:required, .contact_form textarea:required {
    background: #fff url(images/red_asterisk.png) no-repeat 98% center;
}
.contact_form input:required:valid, .contact_form textarea:required:valid {
    background: #fff url(images/valid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #5cd053;
    border-color: #28921f;
}
.contact_form input:focus:invalid, .contact_form textarea:focus:invalid {
    background: #fff url(images/invalid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #d45252;
    border-color: #b03535
}

/* === Form hints === */
.form_hint {
    background: #d45252;
    border-radius: 3px 3px 3px 3px;
    color: white;
    margin-left:8px;
    padding: 1px 6px;
    z-index: 999; /* hints stay above all other elements */
    position: absolute; /* allows proper formatting if hint is two lines */
    display: none;
}
.form_hint::before {
    content: "\25C0";
    color:#d45252;
    position: absolute;
    top:1px;
    left:-6px;
}
.contact_form input:focus + .form_hint {display: inline;}
.contact_form input:required:valid + .form_hint {background: #28921f;}
.contact_form input:required:valid + .form_hint::before {color:#28921f;}

/* === Button Style === */
button.submit {
    background-color: #7399B4;
    border: 1px solid #7399B4;
    border-bottom: 1px solid #7399B4;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    color: white;
    font-weight: bold;
    padding: 6px 20px;
    text-align: center;
}
button.submit:hover {
    opacity:.85;
    cursor: pointer; 
}
button.submit:active {
    border: 1px solid #3B6386;
}
</style>



?>
<div class="card mb-3">
        
          

<div id="main">
        <h4>Edit Pendaftaran</h4>
        <?php echo form_open_multipart('admin/pendaftaran_edit_in')?>
        <div class="contact_form">
        <!-- <form class="contact_form" action="" method=""> -->
            <ul>

                <li>
                    <input name="id" type="hidden" value="<?php echo $record['id'] ?>">

                    <label for="nama">Nama </label>
                    <input name="nama" type="text" placeholder="" value="<?php echo $record['nama'] ?>">
                    <!-- <span class="form_hint">example "http://someaddress.com"</span> -->
                </li>
                <li>
                    <label for="gender">Jenis Kelamin</label>
                    <div class="select-style">
                      <select name="gender">
                        <option value="<?php echo $record['gender'] ?>" hidden=""> <?php echo $record['gender'] ?> </option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                </li>

                <li>
                    <label for="tempat_lahir">Tempat Lahir </label>
                    <input name="tempat_lahir" type="text" placeholder="" value="<?php echo $record['tempat_lahir'] ?>" required="">
                    <!-- <span class="form_hint">example "http://someaddress.com"</span> -->
                </li>


                <li>
                    <label for="tanggal">Tanggal Lahir</label>
                    <!-- <input type="date" class="form-control" name="tanggal" value="<?php echo isset($itemOutData->date_out) ? set_value('date_out', date('m/d/Y', strtotime($itemOutData->date_out))) : set_value('date_out'); ?>"> -->

                    <input type="date" name="tanggal" placeholder="" value="<?php echo $record['tgl_lahir'] ?>" required>
                </li>
                <li>
                    <label for="alamat">Alamat </label>
                    <textarea name="alamat" cols="40" rows="6" required><?php echo $record['alamat'] ?></textarea>
                </li>
                <li>
                    <label for="asal_sekolah">Asal sekolah</label>
                    <input name="asal_sekolah" type="text" placeholder="" value="<?php echo $record['asal_sekolah'] ?>">
                    <!-- <span class="form_hint">example "http://someaddress.com"</span> -->
                </li>
                <li>
                    <label for="tahun_lulus">Tahun Lulus</label>
                    <div class="select-style">
                      <select name="tahun_lulus">
                        <option value="<?php echo $record['tahun_lulus'] ?>" hidden=""><?php echo $record['tahun_lulus'] ?></option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                      </select>
                    </div>
                </li>

                <!-- <li>
                    <label for="username">Username</label>
                    <input name="username" type="text" placeholder="Username..">
                </li> -->
                <!-- <input type="text" name="username" value=""> -->
                <li>
                    <!-- <label for="password">Password</label> -->
                    <input name="password" type="hidden" value="<?php echo $record['password'] ?>">
                    <input type="hidden" name="username" value="<?php echo $record['username'] ?>">
                    <input type="hidden" name="kode_daftar" value="<?php echo $record['kode_daftar'] ?>">
                </li>
                <!-- <li>
                    <label for="password1">Password *</label>
                    <input name="password1" type="password" placeholder="Konfirm Password" >
                    <span id="message"></span>
                </li> -->

                <!-- <input type="hidden" name="username"> -->
                
                <li>
                    <button class="submit" type="submit" name="edit">edit</button>
                </li>
            </ul>
            </div>
        </form>
    </div>

        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      <!-- </div> -->
    <!-- </div> -->