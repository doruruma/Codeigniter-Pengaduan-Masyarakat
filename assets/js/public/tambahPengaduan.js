$(document).ready(function () {

  for (let i = 1; i < 5; i++) {
    $('#img' + i).change(function () {
      const fileName = $(this).val().split('\\').pop()
      $(this).next('.custom-file-label').addClass('selected').html(fileName)
      $('.img' + i).attr('src', window.URL.createObjectURL(this.files[0]))
    })
  }

})