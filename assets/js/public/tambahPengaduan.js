$(document).ready(function () {

  $('#images').change(function () {
    $('.imgPreview').empty()
    for (let i = 0; i < this.files.length; i++) {
      $('.imgPreview').append("<img src='' class='img-thumbnail py-1 px-1 img" + i + "' width='250'></img>")
      $('.img' + i).attr('src', window.URL.createObjectURL(this.files[i]))
    }
  })

})