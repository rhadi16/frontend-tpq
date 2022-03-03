<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/gambar/<?php echo $d1['nama_logo']; ?>" type="image/x-icon">

	<title>Qrcode Pengurus</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.kertas {
			width: 800px;
			margin: 20px auto;
			position: relative;
			display: flex;
			flex-wrap: wrap;
		}

		.parent-qrcode {
			text-align: center;
		}
	</style>

	<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/jquery.min.js"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/qrcode.js"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/dom-to-image.min.js"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/FileSaver.min.js"></script>
</head>
<body>

	<div class="kertas">
	    	<input type="hidden" id="nipg" value="">
        <input type="hidden" id="nama" value="">

	    	<div class="parent-qrcode" style="width: 33.333%; border: 1px solid black;">
				<div class="w3-card-4" style="width:100%; padding: 20px 0;"  id="kartu-pengurus">
				  <center><div id="qrcode" style="width:100%"></div></center>
				  <div class="w3-container w3-center" style="margin-top: 15px;">
				    <p><b>NIPG</b> : <span id="_nipg"></span> <br> 
				       <b>NAMA</b> : <span id="_nama"></span></p>
				  </div>
				</div>
			</div>

			<script type="text/javascript">
              var qrcode = new QRCode(document.getElementById("qrcode"), {
                width : 150,
                height : 150
              });

              function makeCode() {   
                var nipg = document.getElementById("nipg").value;
                var nama = document.getElementById("nama").value;
                // var strArr = siswa.split('-');

                // var nis = strArr[0];
                // var nama = strArr[1];

                var data_pengurus = 
                  nipg+'||'+
                  nama;

                if (!data_pengurus) {
                  alert("Maaf Input STB dan Nama Langkap Terlebih Dahulu!");
                  return;
                }
                
                  // $('#kartu-siswa').show();
                  // $('#btn-kartu-siswa').show();
                
                qrcode.makeCode(data_pengurus); //kode utama
                $('#_nipg').html(nipg);
                $('#_nama').html(nama.toUpperCase());

              }

              $(document).ready(function() {
                makeCode();
              });
            </script>
	</div>
</body>
</html>