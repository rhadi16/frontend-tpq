<footer>

<div id="modal_tentang" class="modal fade">
    <div class=" vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tentang Aplikasi Digital TPQ</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">[x]</span>
                          </button>
                </div>
                <div class="modal-body">


                <div class="row">
                    <div class="mbr-section col-md-12 col-md-offset-1 text-xs-center">
                        <h1 class="mbr-section-title">Digital TPQ</h1><br>
                        <div class="mbr-section-lead lead text-justify"><p><big>Digital TPQ Adalah Aplikasi Manajemen Administrasi Yang Diperuntukkan Bagi TPQ atau Taman Pendidikan Quran Di Buat Oleh TPQ Masjid Nurul Ishlah.</big></p>

                    <p><!-- <big>(Peraturan Menteri PANRB Nomor 30 Tahun 2014)</big> --></p>
                    </div>
                </div>
            </div>


                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

<script src="<?= BASEURL; ?>frontpage/js/monetization.js.download" type="text/javascript"></script>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<script type="text/javascript">    

    (function() {
      if (typeof _bsa !== 'undefined' && _bsa) {
        _bsa.init('default', 'CKYD6KQU', 'placement:startbootstrapcom', {
          target: '.bsa-cpc',
          align: 'horizontal',
          disable_css: 'true'
        });
      }
    })();
    // Function to check whether there are any ads are visible. If not ads are loaded, hide the container.
    window.onload = function() {
      if (document.getElementsByClassName("_default_").length > 0) {
        document.getElementsByClassName("bsa-ad")[0].style.display = "flex";
      }
    }
  </script>

<div class="footer-main bg-dark py-5 small">
<div class="container" style="color: rgba(255,255,255,.7)">
TPQ MASJID NURUL ISHLAH <br>
 <br>
Kelurahan , Kecamatan , 
</div>
</div>
</footer>

<script async="" id="dsq-count-scr" src="<?= BASEURL; ?>frontpage/js/count.js.download" type="text/javascript"></script>
<script src="<?= BASEURL; ?>frontpage/js/jquery-3.3.1.min.js.download"></script>
<script src="<?= BASEURL; ?>frontpage/js/bootstrap.bundle.min.js.download"></script>
<script type="text/javascript" src="<?= BASEURL; ?>frontpage/js/jquery.lazy.min.js"></script>
<script src="<?= BASEURL; ?>frontpage/lib/sweetalert/sweetalert2.all.min.js"></script>

<script type="text/javascript">
  
  $('#muncul_tentang').on('click', function() {

     $('#modal_tentang').modal('show');

  });

</script>

<iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://siwanda.luwuutarakab.go.id/assets/widget_iframe.0639d67d95b7680840758b6833f06d87.html" title="Twitter settings iframe" style="display: none;"></iframe></body></html>