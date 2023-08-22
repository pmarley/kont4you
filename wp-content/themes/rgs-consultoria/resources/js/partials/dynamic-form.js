export default function () {
    $('[name="your-child"]').on('change', function () {
        const hasChildren = $(this).val() === 'Não'

        if (hasChildren) {
            $('[data-name="your-children-name"]').hide()
            $('[name="your-children-name"]').removeAttr('aria-required', 'true')
            $('[name="your-children-name"]').removeClass('wpcf7-validates-as-required')
        }
        else {
            $('[data-name="your-children-name"]').show()
            $('[name="your-children-name"]').attr('aria-required', 'true')
            $('[name="your-children-name"]').addClass('wpcf7-validates-as-required')
        }

    })

    $('[name="your-parent"]').on('change', function () {
        const parent = $(this).val()

        if(parent === 'Pai') {
            $('[name="your-parent-name"]').attr('placeholder', 'Nome do PAI')
            $('[name="your-parent-married-name"]').attr('placeholder', 'Nome do cônjuge do PAI')
            $('.label-parent-married').text('O PAI é casado?')
            $('.box-italian > label > .patern').text('Assinale se seu PAI é ')
            $('.box-born-before').hide()
        } else {
            $('[name="your-parent-name"]').attr('placeholder', 'Nome da MÃE')
            $('[name="your-parent-married-name"]').attr('placeholder', 'Nome do cônjuge da MÃE')
            $('.label-parent-married').text('A MÃE é casada?')
            $('.box-italian > label > .patern').text('Assinale se sua MÃE é ')
            $('.box-born-before').show()
        }
    })

    $('[name="your-citizenship"]').on('change', function () {
        const grand = $(this).val()

        if(grand === 'Avô'){
            $('[name="your-grandfather-name"]').attr('placeholder', 'Nome do AVÔ')
            $('[name="your-grandfather-married-name"]').attr('placeholder', 'Nome do cônjuge do AVÔ')
            $('.label-grandfather-married').text('Seu AVÔ é casado?')
            $('.box-italian > label > .grandfather').text('Assinale se seu AVÔ é ')
            $('.box-grandfather-before').hide()
        } else {
            $('[name="your-grandfather-name"]').attr('placeholder', 'Nome da AVÓ')
            $('[name="your-grandfather-married-name"]').attr('placeholder', 'Nome do cônjuge da AVÓ')
            $('.label-grandfather-married').text('Sua AVÓ é casada?')
            $('.box-italian > label > .grandfather').text('Assinale se sua AVÓ é ')
            $('.box-grandfather-before').show()
        }
    })

    $('[name="your-great-granfather"]').on('change', function () {
        const grand = $(this).val()

        if(grand === 'Bisavô'){
            $('[name="your-great-grandfather-name"]').attr('placeholder', 'Nome do BISAVÔ')
            $('[name="your-great-grandfather-married-name"]').attr('placeholder', 'Nome do cônjuge do BISAVÔ')
            $('.label-great-grandfather-married').text('Seu BISAVÔ é casado?')
            $('.box-italian > label > .great-grandfather').text('Assinale se seu BISAVÔ é ')
            $('.box-great-grandfather-before').hide()
        } else {
            $('[name="your-great-grandfather-name"]').attr('placeholder', 'Nome da BISAVÓ')
            $('[name="your-great-grandfather-married-name"]').attr('placeholder', 'Nome do cônjuge da BISAVÓ')
            $('.label-great-grandfather-married').text('Sua BISAVÓ é casada?')
            $('.box-italian > label > .great-grandfather').text('Assinale se sua BISAVÓ é ')
            $('.box-great-grandfather-before').show()
        }
    })

    $('[name="your-great-grandmother"]').on('change', function () {
        const grand = $(this).val()

        if(grand === 'Tetravô'){
            $('[name="your-tetravo-name"]').attr('placeholder', 'Nome do TETRAVÔ')
            $('[name="your-tetravo-conjuge-nome"]').attr('placeholder', 'Nome do cônjuge do TETRAVÔ')
            $('.label-tetravo-married').text('Seu TETRAVÔ é casado?')
            $('.box-italian > label > .tetravo').text('Assinale se seu TETRAVÔ é ')
            $('.box-tetravo').hide()
        } else {
            $('[name="your-tetravo-name"]').attr('placeholder', 'Nome do TETRAVÓ')
            $('[name="your-tetravo-conjuge-nome"]').attr('placeholder', 'Nome do cônjuge do TETRAVÓ')
            $('.label-tetravo-married').text('Seu TETRAVÓ é casado?')
            $('.box-italian > label > .tetravo').text('Assinale se seu TETRAVÓ é ')
            $('.box-tetravo').show()
        }
    })


}