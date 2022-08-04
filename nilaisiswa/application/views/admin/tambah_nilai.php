<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pemilihan Bidang Studi Perguruan Tinggi</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/colorpicker.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/datepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/uniform.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/select2.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/maruti-style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-admin/HTML/css/maruti-media.css" class="skin-color" />
  </head>

  <body>
    <!--Header-part-->
    <div id="header">
      <h1><a href="<?php echo site_url('Admin') ?>">Admin</a></h1>
    </div>
    <!--close-Header-part--> 

    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
    <!--close-top-Header-messaages--> 

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
      <ul class="nav">
        <li class=""><a title="" href="<?php echo site_url('Login/logout') ?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
      </ul>
    </div>
    <!--close-top-Header-menu-->

    <div id="sidebar">
      <ul>
        <li class="active"><a href="<?php echo site_url('Admin') ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Manajemen Data</span></a>
          <ul>
            <li><a href="<?php echo site_url('Admin/kelola_admin') ?>">Data Admin</a></li>
            <li><a href="<?php echo site_url('Admin/kelola_user') ?>">Data User</a></li>
            <li><a href="<?php echo site_url('Admin/kelola_kelas') ?>">Data Kelas</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="<?php echo site_url('Admin') ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
      <div class="container-fluid">
        <h3>Tambah Data Nilai Siswa Tahun <?php echo $this->uri->segment(3) ?></h3>
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title">
                <span class="icon"><i class="icon-th"></i></span> 
                <h5>Tambah Data Jagung Tahun <?php echo $this->uri->segment(3) ?></h5>
              </div>
              <div class="widget-content nopadding">
                <?php echo form_open('Admin/tambah_nilai/'.$this->uri->segment(3),array(
                  'class' => 'form-horizontal')); 
                ?>
                <div class="control-group">
                  <label class="control-label">Kelas :</label>
                  <div class="controls">
                    <select name="fk_kelas" id="inputFk_kelas" class="span11">
                      <?php foreach ($kelas as $key) { ?>
                        <option value="<?php echo $key->id_kelas ?>"><?php echo $key->nama_kelas ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Pendidikan Agama Islam dan Budi Pekerti :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="PAI" id="PAI" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Pendidikan Agama Katholik dan Budi Pekerti :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="PAK" id="PAK" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Pendidikan Pancasila dan Kewarganegaraan :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="PPKn" id="PPKn" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Bahasa Indonesia :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="BI" id="BI" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Matematika (Umum) :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="M" id="M" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Sejarah Indonesia :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="SI" id="SI" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Bahasa Inggris :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="Bing" id="Bing" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Seni Budaya :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="SB" id="SB" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Pendidikan Jasmani, Olahraga, dan Kesehatan :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="PJOK" id="PJOK" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">FISIKA :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="F" id="F" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Kimia :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="K" id="K" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Simulasi dan Komunikasi Digital :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="SKD" id="SKD" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Sistem Komputer :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="SK" id="SK" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Komputer dan Jaringan Dasar :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="KJD" id="KJD" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Pemrograman Dasar :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="PD" id="PD" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Dasar Desain Grafis :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="DDG" id="DDG" placeholder="please fill" required>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Muatan Lokal Bahasa Daerah :</label>
                  <div class="controls">
                    <input type="number" class="span8" name="BD" id="BD" placeholder="please fill" required>
                  </div>
                </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="<?php echo site_url('Admin/kelola_nilai') ?>" class="btn btn-primary" role="button" aria-pressed="true">Kembali</a>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
    <div class="row-fluid">
      <div id="footer" class="span12"> 2022 &copy; Mukhammad Arifin</div>
    </div>
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/jquery.min.js"></script> 
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/jquery.ui.custom.js"></script> 
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/bootstrap-colorpicker.js"></script> 
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/bootstrap-datepicker.js"></script> 
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/jquery.uniform.js"></script> 
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/select2.min.js"></script> 
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/maruti.js"></script> 
    <script src="<?php echo base_url() ?>assets/template-admin/HTML/js/maruti.form_common.js"></script>
    

    <script type="text/javascript">
      // This function is called from the pop-up menus to transfer to
      // a different page. Ignore if the value returned is a null string:
      function goPage (newURL) {

          // if url is empty, skip the menu dividers and reset the menu selection to default
          if (newURL != "") {
          
              // if url is "-", it is this page -- reset the menu:
              if (newURL == "-" ) {
                  resetMenu();            
              } 
              // else, send page to designated URL            
              else {  
                document.location.href = newURL;
              }
          }
      }

      // resets the menu selection upon entry to this page:
      function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
      }
    </script>
  </body>
</html>