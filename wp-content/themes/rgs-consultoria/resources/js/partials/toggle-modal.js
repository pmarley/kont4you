export default () => {
    const containerModal = $('.main-container-modal')
    const closeModal = $('.close-modal')

    containerModal.addClass('active')
    console.log('fez load')

    closeModal.on('click', () => {
        containerModal.removeClass('active')
        console.log('fez click')
    })

}