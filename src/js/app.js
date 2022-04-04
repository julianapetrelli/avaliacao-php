export function modal() {

    const modal = document.querySelector('#modal');
    const openModal = document.querySelector('#open-modal');
    const closeModal = document.querySelector('#close-modal');

    openModal.addEventListener('click', () => {
        modal.show();
        modal.classList.add('open')
    })
    
    closeModal.addEventListener('click', () => {
        modal.close();
        modal.classList.remove('open')
    })
};