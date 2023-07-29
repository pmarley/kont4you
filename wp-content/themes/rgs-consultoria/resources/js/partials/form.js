export default function() {
  $('#input-file').on('change', function() {

    $('.label-input-file > svg').remove(); // remove ícone de upload

    const label = $('.label-input-file')

    if ($('.box-input-buttons > div > .wpcf7-form-control-wrap > .wpcf7-not-valid-tip')) {
      return label.html('Erro ao fazer upload')
    }

    return label.html('Upload concluído')
  });

  $('.input-submit').on('click', () => {

    const form = $('.wpcf7-form')

    if (form.hasClass('sent')) {
      $('.wpcf7-response-output').addClass('check-icon')
    }
  })
}
