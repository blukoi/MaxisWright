document.addEventListener('DOMContentLoaded', function () {
    const ffReadMore = document.getElementById('ff-research-readmore');
    const ffBackground = document.getElementById('ff-research-bg');
    const ffModal = document.getElementById('ff-research-modal');
    const ffClose = document.getElementById('ff-research-close');

    ffReadMore.addEventListener('click', function () {
        ffBackground.classList.add('activebg');
        ffModal.classList.add('activemodal');
        addClickOutsideListener();
    });

    ffClose.addEventListener('click', function () {
        ffBackground.classList.remove('activebg');
        ffModal.classList.remove('activemodal');
        removeClickOutsideListener();
    });

    function closeOnClickOutside(event) {
        if (event.target === ffBackground) {
            ffBackground.classList.remove('activebg');
            ffModal.classList.remove('activemodal');
            removeClickOutsideListener();
        }
    }

    function addClickOutsideListener() {
        document.addEventListener('click', closeOnClickOutside);
    }

    function removeClickOutsideListener() {
        document.removeEventListener('click', closeOnClickOutside);
    }
});
