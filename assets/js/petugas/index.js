$(document).ready(function () {

  $('.table').dataTable()
  $('.btnDelete').click(function (e) {
    e.preventDefault()
    let id = $(this).data('id')
    Swal.fire({
      title: 'Konfirmasi Hapus',
      text: 'Data Tidak Bisa Dikembalikan',
      type: 'question',
      showCancelButton: true
    }).then((res) => {
      res.value ? document.location.href = localStorage.getItem('url') + 'petugas/delete/' + id : console.log(id)
    })
  })

})