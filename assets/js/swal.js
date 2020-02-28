$(document).ready(function () {

  let type = $('.swal').data('type')
  let text = $('.swal').data('text')
  if (type) {
    Swal.fire({
      title: type.toUpperCase(),
      text: text,
      type: type
    })
  }

})