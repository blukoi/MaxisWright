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

document.addEventListener('DOMContentLoaded', function () {
    const ffReadMore = document.getElementById('ff-designing-readmore');
    const ffBackground = document.getElementById('ff-designing-bg');
    const ffModal = document.getElementById('ff-designing-modal');
    const ffClose = document.getElementById('ff-designing-close');

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

document.addEventListener('DOMContentLoaded', function () {
    const ffReadMore = document.getElementById('ff-revisions-readmore');
    const ffBackground = document.getElementById('ff-revisions-bg');
    const ffModal = document.getElementById('ff-revisions-modal');
    const ffClose = document.getElementById('ff-revisions-close');

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

document.addEventListener('DOMContentLoaded', function () {
    const ffReadMore = document.getElementById('ff-finalthoughts-readmore');
    const ffBackground = document.getElementById('ff-finalthoughts-bg');
    const ffModal = document.getElementById('ff-finalthoughts-modal');
    const ffClose = document.getElementById('ff-finalthoughts-close');

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