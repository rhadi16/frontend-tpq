$(document).ready(function() {
  const flashdata = $('.flash-data').data('flashdata')
  if (flashdata) {
    Swal.fire(
      'Selamat!',
      'Anda Telah Melakukan Pendaftaran, Silahkan Menunggu Konfirmasi!',
      'success'
    )
  }

  $('.confirmation').on('click', function(e) {
    Swal.fire({
      title: 'Apakah Anda Yakin,',
      text: "Mendaftarkan Anak Anda Ke TPQ ini ?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Iya, Bismillah!'
    }).then((result) => {
      if (result.isConfirmed) {
        if ($('#nama_ortu_wali').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Nama Orang Tua/Wali Belum Terinput!'
            })
        }
        else if ($('#jkel_ortu_wali').val() == "Jenis Kelamin Orang Tua/Wali..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Jenis Kelamin Orang Tua/Wali Belum Terinput!'
            })
        }
        else if ($('#id_hubungan_keluarga').val() == "Pilih Hubungan Keluarga..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Hubungan Keluarga Santri Dengan Orang Tua/Wali Belum Terinput!'
            })
        }
        else if ($('#alamat_ortu_wali').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Alamat Orang Tua/Wali Belum Terinput!'
            })
        }
        else if ($('#pekerjaan_ortu_wali').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Pekerjaan Orang Tua/Wali Belum Terinput!'
            })
        }
        else if ($('#alamat_ortu_wali').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Alamat Orang Tua/Wali Belum Terinput!'
            })
        }
        else if ($('#no_hp_wa_ortu_wali').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Nomor HP Orang Tua/Wali Belum Terinput!'
            })
        }
        else if ($('#nama_santri').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Nama Santri Belum Terinput!'
            })
        }
        else if ($('#tempat_lahir_santri').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Tempat Lahir Santri Belum Terinput!'
            })
        }
        else if ($('#tanggal_lahir_santri').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Tanggal Lahir Santri Belum Terinput!'
            })
        }
        else if ($('#jkel_santri').val() == "Jenis Kelamin Santri..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Jenis Kelamin Santri Belum Terinput!'
            })
        }
        else if ($('#id_ref_sekolah').val() == "Pilih Tingkat Sekolah..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Tingkat Sekolah Belum Terinput!'
            })
        }
        else if ($('#id_ref_kelas').val() == "Pilih Kelas..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Kelas Belum Terinput!'
            })
        }
        else if ($('#iqra_alquran').val() == "Tingkat Bacaan Iqra/Al-Qur'an..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Tingkat Bacaan Belum Terinput!'
            })
        }
        else if ($('#sts_hidup_ayah').val() == "Status Hidup Ayah..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Status Hidup Ayah Belum Terinput!'
            })
        }
        else if ($('#sts_hidup_ibu').val() == "Status Hidup Ibu..") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Status Hidup Ibu Belum Terinput!'
            })
        }
        else if ($('#file_name').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Foto Belum Terinput!'
            })
        }
        else if ($('#tgl_pendaftaran').val() == "") {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Tanggal Pendaftaran Belum Terinput!'
            })
        }
        else {
            $('form#form_proposal').submit();
        }
      }
    })
  });
});