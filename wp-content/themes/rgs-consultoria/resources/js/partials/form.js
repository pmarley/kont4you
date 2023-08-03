export default function () {
  $('#input-file').on('change', function () {

    $('.label-input-file > svg').remove(); // remove ícone de upload

    const label = $('.label-input-file')

    return label.html('Upload concluído')
  });

  $('.input-submit').on('click', async () => {

    setTimeout(() => {
      const form = $('.wpcf7-form')

      if (form.hasClass('sent')) {
        $('.wpcf7-response-output').addClass('check-icon')
      }
    }, 2000)
  })

  $('#download-lnk-click-pdf').on('click', async () => {
    setTimeout((e) => {
      const form = $('.wpcf7-form')
      const containerModal = $('.main-container-modal')
      const closeModal = $('.close-modal')

      if (form.hasClass('sent')) {
        closeModal.on('click', () => {
          containerModal.removeClass('active')
        })
        containerModal.addClass('active')
        window.scrollTo(0,0)
      }
      
    }, 2000)
  })
}
