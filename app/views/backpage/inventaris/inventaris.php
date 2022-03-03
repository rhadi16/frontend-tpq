<style type="text/css">
  .vc{
    font-size: 17px;
  }
  .btn-xs{
    padding: 5px;
    margin: 2px; 
  }/*
  @media only screen and (max-width: 1024px) {
    .gigo-responsive {
      width: unset;
    }
  }*/
  @media only screen and (max-width: 768px) {
    #judul {
      font-size: 2rem;
    }
    .gigo-responsive {
      width: 100%;
    }
  }
  @media only screen and (max-width: 425px) {
    #judul {
      font-size: 1.5rem !important;
    }
  }
</style>
<!-- <script type="text/javascript" src="assets/barcode/jquery.min.js"></script> -->
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/qrcode.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/dom-to-image.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/FileSaver.min.js"></script>

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">KELOLA DATA INVENTARIS</h3>

                        <div class="row">

                          <div class="col-xs-12">
                            <button type="button" data-toggle="modal" data-target="#tambah-donatur" class="btn btn-lg btn-warning">
                              <span class="fa fa-plus"></span>&nbsp;Tambah Inventaris
                            </button>
                          </div>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="tambah-donatur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Inventaris</h5>
                              </div>
                              <form action="function/inventaris_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">
                                <div class="modal-body">
                                  
                                  <div class="form-group">
                                    <label for="nama_inventaris">Nama Inventaris</label>
                                    <input type="text" class="form-control" id="nama_inventaris" placeholder="Nama Inventaris" name="nama_inventaris" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tgl_beli">Tanggal Beli Inventaris</label>
                                    <input type="date" class="form-control" id="tgl_beli" placeholder="Tanggal Beli" name="tgl_beli" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="harga_beli">Harga</label>
                                    <input type="number" class="form-control" id="harga_beli" placeholder="Harga Beli" name="harga_beli" required>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        
                        <div class="mbr-section-nopadding">
                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Inventaris</th>
                                  <th scope="col">Tanggal Beli</th>
                                  <th scope="col">Harga Beli</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td data-label="No" scope="row"></td>
                                  <td data-label="Nama Inventaris"></td>
                                  <td data-label="Tanggal Beli"></td>
                                  <td data-label="Harga Beli"></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="<?= BASEURL; ?>backpage_inventaris/edit" class="btn btn-info btn-xs">Edit</a>
                                    <a href="function/inventaris_func.php?action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                  </td>
                                </tr>
                              </tbody>

                            </table>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script type="text/javascript">
    $('.confirmation').on('click', function(e) {
       return confirm('Anda Yakin Menghapus Data Ini?');
    });
</script>