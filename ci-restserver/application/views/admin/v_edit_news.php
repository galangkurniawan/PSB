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
        <h4>Edit Berita</h4>
        <?php echo form_open_multipart('admin/news_edit_in')?>
        <div class="contact_form">
        <!-- <form class="contact_form" action="" method=""> -->
            <ul>
                <li>
                    <input name="id" type="hidden" value="<?php echo $record['id'] ?>">
                    <label for="tanggal">Tanggal :</label>
                    <!-- <input type="date" class="form-control" name="tanggal" value="<?php echo isset($itemOutData->date_out) ? set_value('date_out', date('m/d/Y', strtotime($itemOutData->date_out))) : set_value('date_out'); ?>"> -->

                    <input type="date" name="tanggal" placeholder="" value="<?php echo $record['tanggal'] ?>" required>
                </li>
                <li>
                    <img src="<?php echo base_url().'assets/img/'.$record['gambar'] ?>" width="40" height="40" class="img-responsive">
                    <label for="gambar">Gambar : </label>
                <input name="gambarlama" type="hidden" value="<?php echo $record['gambar'] ?>">
                <input type="file" name="gambar" id="gambar" value="<?php echo $record['gambar'] ?>">
                    <!-- <span class="form_hint">example "name@email.com"</span> -->
                </li>
                <li>
                    <label for="judul">Judul :</label>
                    <input name="judul" type="text" placeholder="" value="<?php echo $record['judul'] ?>">
                    <!-- <span class="form_hint">example "http://someaddress.com"</span> -->
                </li>
                <li>
                    <label for="isi">Isi Berita :</label>
                    <textarea name="isi" cols="40" rows="6"required><?php echo $record['isi'] ?></textarea>
                </li>
                <li>
                    <label for="sumber">sumber</label>
                    <input name="sumber" type="text" value="<?php echo $record['sumber'] ?>" placeholder="">
                    <!-- <span class="form_hint">example "http://someaddress.com"</span> -->
                </li>
                <li>
                    <button class="submit" type="submit" name="tambah">Tambah</button>
                </li>
            </ul>
            </div>
        </form>
    </div>

        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      <!-- </div> -->
    <!-- </div> -->