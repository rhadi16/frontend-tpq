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

	    	<input type="hidden" id="nipg<?php echo $data['nipg']; ?>" value="<?php echo $data['nipg']; ?>">
        <input type="hidden" id="nama<?php echo $data['nipg']; ?>" value="<?php echo $data['nama']; ?>">

	    	<div class="parent-qrcode" style="width: 33.333%; border: 1px solid black;">
				<div class="w3-card-4" style="width:100%; padding: 20px 0;"  id="kartu-pengurus<?php echo $data['nipg']; ?>">
				  <center><div id="qrcode<?php echo $data['nipg']; ?>" style="width:100%"></div></center>
				  <div class="w3-container w3-center" style="margin-top: 15px;">
				    <p><b>NIPG</b> : <span id="_nipg<?php echo $data['nipg']; ?>"></span> <br> 
				       <b>NAMA</b> : <span id="_nama<?php echo $data['nipg']; ?>"></span></p>
				  </div>
				</div>
			</div>

			<script type="text/javascript">
              var qrcode<?php echo $data['nipg']; ?> = new QRCode(document.getElementById("qrcode<?php echo $data['nipg']; ?>"), {
                width : 150,
                height : 150
              });

              function makeCode<?php echo $data['nipg']; ?>() {   
                var nipg<?php echo $data['nipg']; ?> = document.getElementById("nipg<?php echo $data['nipg']; ?>").value;
                var nama<?php echo $data['nipg']; ?> = document.getElementById("nama<?php echo $data['nipg']; ?>").value;
                // var strArr = siswa.split('-');

                // var nis = strArr[0];
                // var nama = strArr[1];

                var data_pengurus<?php echo $data['nipg']; ?> = 
                  nipg<?php echo $data['nipg']; ?>+'||'+
                  nama<?php echo $data['nipg']; ?>;

                if (!data_pengurus<?php echo $data['nipg']; ?>) {
                  alert("Maaf Input STB dan Nama Langkap Terlebih Dahulu!");
                  return;
                }
                
                  // $('#kartu-siswa').show();
                  // $('#btn-kartu-siswa').show();
                
                qrcode<?php echo $data['nipg']; ?>.makeCode(data_pengurus<?php echo $data['nipg']; ?>); //kode utama
                $('#_nipg<?php echo $data['nipg']; ?>').html(nipg<?php echo $data['nipg']; ?>);
                $('#_nama<?php echo $data['nipg']; ?>').html(nama<?php echo $data['nipg']; ?>.toUpperCase());

              }

              $(document).ready(function() {
                makeCode<?php echo $data['nipg']; ?>();
              });
            </script>

		<?php } ?>

	</div>
</body>
</html>