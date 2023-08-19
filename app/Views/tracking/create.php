<?php echo view('_partials/head'); ?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php echo view('_partials/sidebar'); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php echo view('_partials/topbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <h1 class="h3 mb-2 text-gray-800 text-center">Tracking System</h1>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data Tracking System </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class="col-md-12">
                      <?php
                      $inputs = session()->getFlashdata('inputs');
                      $errors = session()->getFlashdata('errors');
                      if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                          Whoops! Ada kesalahan saat input data, yaitu:
                          <ul>
                            <?php foreach ($errors as $error) : ?>
                              <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                          </ul>
                        </div>
                      <?php } ?>
                      <?php echo form_open_multipart('tracking/store'); ?>
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <?php
                                echo form_label('NIB');
                                $nullCheckedNib = $inputs['nib'] ?? '';
                                $nib = [
                                  'type'  => 'text',
                                  'name'  => 'nib',
                                  'id'    => 'nib',
                                  'value' => $nullCheckedNib,
                                  'class' => 'form-control',
                                ];
                                echo form_input($nib);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Wave');
                                $nullCheckedWave = $inputs['wave'] ?? '';
                                $wave = [
                                  'type'  => 'text',
                                  'name'  => 'wave',
                                  'id'    => 'wave',
                                  'value' => $nullCheckedWave,
                                  'class' => 'form-control',
                                ];
                                echo form_input($wave);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Nama Lengkap');
                                $nullCheckedNamaLengkap = $inputs['nama_lengkap'] ?? '';
                                $nama_lengkap = [
                                  'type'  => 'text',
                                  'name'  => 'nama_lengkap',
                                  'id'    => 'nama_lengkap',
                                  'value' =>  $nullCheckedNamaLengkap,
                                  'class' => 'form-control',
                                ];
                                echo form_input($nama_lengkap);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Kelas');
                                $nullCheckedKelas = $inputs['kelas'] ?? '';
                                $kelas = [
                                  'type'  => 'text',
                                  'name'  => 'kelas',
                                  'id'    => 'kelas',
                                  'value' => $nullCheckedKelas,
                                  'class' => 'form-control',
                                ];
                                echo form_input($kelas);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Graduate On');
                                $nullCheckedGraduateOn = $inputs['graduate_on'] ?? '';
                                $graduate_on = [
                                  'type'  => 'text',
                                  'name'  => 'graduate_on',
                                  'id'    => 'graduate_on',
                                  'value' => $nullCheckedGraduateOn,
                                  'class' => 'form-control',
                                ];
                                echo form_input($graduate_on);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Tanggal Lahir');
                                $nullCheckedTanggalLahir = $inputs['tanggal_lahir'] ?? '';
                                $tanggal_lahir = [
                                  'type'  => 'text',
                                  'name'  => 'tanggal_lahir',
                                  'id'    => 'tanggal_lahir',
                                  'value' =>  $nullCheckedTanggalLahir,
                                  'class' => 'form-control',
                                ];
                                echo form_input($tanggal_lahir);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Asal Alamat');
                                $nullCheckedAsalAlamat = $inputs['asal_alamat'] ?? '';
                                $asal_alamat = [
                                  'type'  => 'text',
                                  'name'  => 'asal_alamat',
                                  'id'    => 'asal_alamat',
                                  'value' =>   $nullCheckedAsalAlamat,
                                  'class' => 'form-control',
                                ];
                                echo form_input($asal_alamat);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Domisili Alamat');
                                $nullCheckedDomisiliAlamat = $inputs['domisili_alamat'] ?? '';
                                $domisili_alamat = [
                                  'type'  => 'text',
                                  'name'  => 'domisili_alamat',
                                  'id'    => 'domisili_alamat',
                                  'value' => $nullCheckedDomisiliAlamat,
                                  'class' => 'form-control',
                                ];
                                echo form_input($domisili_alamat);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Model Kerja');
                                $nullCheckedModelKerja = $inputs['model_kerja'] ?? '';
                                $model_kerja = [
                                  'type'  => 'text',
                                  'name'  => 'model_kerja',
                                  'id'    => 'model_kerja',
                                  'value' =>  $nullCheckedModelKerja,
                                  'class' => 'form-control',
                                ];
                                echo form_input($model_kerja);
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="<?php echo base_url('tracking'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
                        <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-save"></i> Simpan</button>
                      </div>
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php echo view('_partials/footer') ?>

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php echo view('_partials/logout'); ?>

  <?php echo view('_partials/script'); ?>
</body>

</html>