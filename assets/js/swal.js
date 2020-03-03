$(document).ready(function () {

  localStorage.setItem('url', 'http://localhost/e-report/')

  let type = $('.swal').data('type')
  let text = $('.swal').data('text')
  if (type) {
    Swal.fire({
      title: type.toUpperCase(),
      text: text,
      type: type
    })
  }

  $('.btnLogout').click(function (e) {
    e.preventDefault()
    Swal.fire({
      title: "Konfirmasi Logout",
      text: 'Yakin Ingin Logout?',
      type: 'question',
      showCancelButton: true
    }).then((res) => {
      res.value ? $('.formLogout').submit() : console.log('')
    })
  })

})