    <style type="text/css">
        table tr td{
            text-align: left;
        }
        .logo-image {
            width: 200px;
        }
        @media only screen and (max-width: 1440px) {
            #judul {
              font-size: 3.5rem;
            }
          }
          @media only screen and (max-width: 1024px) {
            #judul {
              font-size: 2.5rem;
            }
          }
          @media only screen and (max-width: 768px) {
            #judul {
              font-size: 2rem;
            }
          }
          @media only screen and (max-width: 425px) {
            #judul {
              font-size: 1.3rem;
            }
          }
    </style>


    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container">
                <div class="row">
                    <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">
                        <h1 class="mbr-section-title display-3">
                            <center id="judul" style="color: #3e2723;">Selamat Datang
                                <br>Di Aplikasi Kelola Data Siswa
                                <br>
                                <img src="<?php BASEURL; ?>backpage/assets/gambar/logo-tpa.png" class="logo-image">
                            </center>
                        </h1>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Ubah Logo
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Logo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form action="function/logo_func.php?action=update" id="form_proposal" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Masukkan Gambar</label>
                                        <input type="file" class="form-control-file" id="nama_logo" name="nama_logo" required>
                                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                        <input type="hidden" name="nama_logo_sebelum" value="<?php echo $d['nama_logo']; ?>">
                                    </div>


                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                </form>

                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
