<?php
$link1 = strtolower($this->uri->segment(1));
$link2 = strtolower($this->uri->segment(2));
$link3 = strtolower($this->uri->segment(3));
$link4 = strtolower($this->uri->segment(4));
?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title"><?php echo $judul_web; ?></h4>
            </div>
            <div class="panel-body">
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <form class="form-horizontal" action="" data-parsley-validate="true" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-lg-3">Nama Pengguna</label>
                    <div class="col-lg-9">
                      <input type="text" name="nama" class="form-control" value="" placeholder="Nama" required autofocus onfocus="this.value = this.value;">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-3">Level</label>
                    <div class="col-lg-9">
                      <select class="form-control default-select2"
                              name="level" selected="<?php echo $query->level; ?>" required>
                        <option value="">- Pilih -</option>
<!--                          'superadmin','pelaksana','humas','perancang','kasub_perancang','pemda'-->
                        <option value="pelaksana">Pelaksana</option>
                        <option value="humas">Humas</option>
                        <option value="perancang">Perancang</option>
                        <option value="kasub_perancang">Kasub Perancang</option>
                        <option value="pemda">Pemda</option>

                      </select>
                    </div>
                  </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Zona</label>
                        <div class="col-lg-9">
                            <select class="form-control default-select2"
                                    name="zona_id" selected="<?php echo $query->id_zona; ?>" required>
                                <option value="">- Pilih Zona -</option>
                                <?php
                                /*cara get semua records di database*/
                                $data_zonaAll = $this->db->get("tbl_zona");
                               // echo "<pre>"; print_r($data_zonaAll);
                                foreach ($data_zonaAll->result() as $index=>$zona){
                                    if($zona->nama_zona!='superadmin' && $zona->nama_zona!='kasub_perancang'){ ?>
                                        <option value="<?= $zona->id_zona?>"><?= $zona->nama_panjang?></option>
                                    <?php } ?>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                  <div class="form-group">
                    <label class="control-label col-lg-3">Username</label>
                    <div class="col-lg-9">
                      <input type="text" name="username" class="form-control" value="" placeholder="Username" required autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-3">Password</label>
                    <div class="col-lg-9">
                      <input type="password" name="password" class="form-control" value="" placeholder="Password" required autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-3">Re-Password</label>
                    <div class="col-lg-9">
                      <input type="password" name="password2" class="form-control" value="" placeholder="Konfirmasi Password" required autocomplete="off">
                    </div>
                  </div>
                  <hr>
                  <a href="<?php echo $link1; ?>/<?php echo $link2; ?>.html" class="btn btn-default"><< Kembali</a>
                  <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
                </form>
            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
