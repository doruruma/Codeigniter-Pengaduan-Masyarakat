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

  $('.btnLogoutAdmin').click(function (e) {
    e.preventDefault()
    Swal.fire({
      title: "Konfirmasi Logout",
      text: 'Yakin Ingin Logout?',
      type: 'question',
      showCancelButton: true
    }).then((res) => {
      res.value ? $('.formLogoutAdmin').submit() : false
    })
  })

  $('.btnLogoutUser').click(function (e) {
    e.preventDefault()
    Swal.fire({
      title: "Konfirmasi Logout",
      text: 'Yakin Ingin Logout?',
      type: 'question',
      showCancelButton: true
    }).then((res) => {
      res.value ? $('.formLogoutUser').submit() : false
    })
  })

})