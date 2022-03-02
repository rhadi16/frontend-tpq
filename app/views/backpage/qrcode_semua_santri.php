<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/gambar/<?php echo $d1['nama_logo']; ?>" type="image/x-icon">

	<title>Qrcode Santri</title>
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

	<script type="text/javascript" src="<?php BASEURL; ?>backpage/assets/barcode/jquery.min.js"></script>
	<script type="text/javascript" src="<?php BASEURL; ?>backpage/assets/barcode/qrcode.js"></script>
	<script type="text/javascript" src="<?php BASEURL; ?>backpage/assets/barcode/dom-to-image.min.js"></script>
	<script type="text/javascript" src="<?php BASEURL; ?>backpage/assets/barcode/FileSaver.min.js"></script>
</head>
<body>

	<div class="kertas">
		<?php
			while($data = mysqli_fetch_array($dt)){
	    ?>

	    	<input type="hidden" id="nist<?php echo $data['nist']; ?>" value="<?php echo $data['nist']; ?>">
        <input type="hidden" id="nama<?php echo $data['nist']; ?>" value="<?php echo $data['nama']; ?>">

	    	<div class="parent-qrcode" style="width: 33.333%; border: 1px solid black;">
				<div class="w3-card-4" style="width:100%; padding: 20px 0;"  id="kartu-santri<?php echo $data['nist']; ?>">
				  <center><div id="qrcode<?php echo $data['nist']; ?>" style="width:100%"></div></center>
				  <div class="w3-container w3-center" style="margin-top: 15px;">
				    <p><b>NIST</b>  : <span id="_nist<?php echo $data['nist']; ?>"></span> <br> 
				       <b>NAMA</b> : <span id="_nama<?php echo $data['nist']; ?>"></span></p>
				  </div>
				</div>
			</div>

			<script type="text/javascript">
              var qrcode<?php echo $data['nist']; ?> = new QRCode(document.getElementById("qrcode<?php echo $data['nist']; ?>"), {
                width : 150,
                height : 150
              });

              function makeCode<?php echo $data['nist']; ?>() {   
                var nist<?php echo $data['nist']; ?>                 = document.getElementById("nist<?php echo $data['nist']; ?>").value;
                var nama<?php echo $data['nist']; ?>                 = document.getElementById("nama<?php echo $data['nist']; ?>").value;
                // var strArr = siswa.split('-');

                // var nis = strArr[0];
                // var nama = strArr[1];

                var data_santri<?php echo $data['nist']; ?> = 
                  nist<?php echo $data['nist']; ?>+'||'+
                  nama<?php echo $data['nist']; ?>;

                if (!data_santri<?php echo $data['nist']; ?>) {
                  alert("Maaf Input STB dan Nama Langkap Terlebih Dahulu!");
                  return;
                }
                
                  // $('#kartu-siswa').show();
                  // $('#btn-kartu-siswa').show();
                
                qrcode<?php echo $data['nist']; ?>.makeCode(data_santri<?php echo $data['nist']; ?>); //kode utama
                $('#_nist<?php echo $data['nist']; ?>').html(nist<?php echo $data['nist']; ?>);
                $('#_nama<?php echo $data['nist']; ?>').html(nama<?php echo $data['nist']; ?>.toUpperCase());

              }

              $(document).ready(function() {
                makeCode<?php echo $data['nist']; ?>();
              });
            </script>

		<?php } ?>

	</div>

</body>
</html>