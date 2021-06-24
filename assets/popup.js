const flashData = $('.flash-data').data('flashdata');
// console.log(flashData);

if(flashData == true){
    swal({
        title: 'Login Berhasil!',
        text: 'Selamat Datang Kembali Admin',
        type: 'success'
    });
}