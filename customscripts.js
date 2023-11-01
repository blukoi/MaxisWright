// READ MORE MODALS
// READ MORE MODALS
// READ MORE MODALS
// READ MORE MODALS
// READ MORE MODALS

document.addEventListener('DOMContentLoaded', function () {
    const ffReadMore = document.getElementById('ff-research-readmore');
    const ffBackground = document.getElementById('ff-research-bg');
    const ffModal = document.getElementById('ff-research-modal');
    const ffClose = document.getElementById('ff-research-close');

    ffReadMore.addEventListener('click', function () {
        ffBackground.classList.add('activebg');
        ffModal.classList.add('activemodal');
        addClickOutsideListener();
        disableScroll(); //DISABLE BODY SCROLL
    });

    ffClose.addEventListener('click', function () {
        ffBackground.classList.remove('activebg');
        ffModal.classList.remove('activemodal');
        removeClickOutsideListener();
        enableScroll(); // ENABLE BODY SCROLL
    });

    function closeOnClickOutside(event) {
        if (event.target === ffBackground) {
            ffBackground.classList.remove('activebg');
            ffModal.classList.remove('activemodal');
            removeClickOutsideListener();
            enableScroll(); // ENABLE BODYBSCROLL
        }
    }

    function addClickOutsideListener() {
        document.addEventListener('click', closeOnClickOutside);
    }

    function removeClickOutsideListener() {
        document.removeEventListener('click', closeOnClickOutside);
    }

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = 'auto';
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
        disableScroll(); //DISABLE BODY SCROLL
    });

    ffClose.addEventListener('click', function () {
        ffBackground.classList.remove('activebg');
        ffModal.classList.remove('activemodal');
        removeClickOutsideListener();
        enableScroll(); // ENABLE BODY SCROLL
    });

    function closeOnClickOutside(event) {
        if (event.target === ffBackground) {
            ffBackground.classList.remove('activebg');
            ffModal.classList.remove('activemodal');
            removeClickOutsideListener();
            enableScroll(); // ENABLE BODYBSCROLL
        }
    }

    function addClickOutsideListener() {
        document.addEventListener('click', closeOnClickOutside);
    }

    function removeClickOutsideListener() {
        document.removeEventListener('click', closeOnClickOutside);
    }

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = 'auto';
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
        disableScroll(); //DISABLE BODY SCROLL
    });

    ffClose.addEventListener('click', function () {
        ffBackground.classList.remove('activebg');
        ffModal.classList.remove('activemodal');
        removeClickOutsideListener();
        enableScroll(); // ENABLE BODY SCROLL
    });

    function closeOnClickOutside(event) {
        if (event.target === ffBackground) {
            ffBackground.classList.remove('activebg');
            ffModal.classList.remove('activemodal');
            removeClickOutsideListener();
            enableScroll(); // ENABLE BODYBSCROLL
        }
    }

    function addClickOutsideListener() {
        document.addEventListener('click', closeOnClickOutside);
    }

    function removeClickOutsideListener() {
        document.removeEventListener('click', closeOnClickOutside);
    }

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = 'auto';
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
        disableScroll(); //DISABLE BODY SCROLL
    });

    ffClose.addEventListener('click', function () {
        ffBackground.classList.remove('activebg');
        ffModal.classList.remove('activemodal');
        removeClickOutsideListener();
        enableScroll(); // ENABLE BODY SCROLL
    });

    function closeOnClickOutside(event) {
        if (event.target === ffBackground) {
            ffBackground.classList.remove('activebg');
            ffModal.classList.remove('activemodal');
            removeClickOutsideListener();
            enableScroll(); // ENABLE BODYBSCROLL
        }
    }

    function addClickOutsideListener() {
        document.addEventListener('click', closeOnClickOutside);
    }

    function removeClickOutsideListener() {
        document.removeEventListener('click', closeOnClickOutside);
    }

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = 'auto';
    }
});

// INDEX TYPING EFFECT
// INDEX TYPING EFFECT
// INDEX TYPING EFFECT
// INDEX TYPING EFFECT
// INDEX TYPING EFFECT

var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };
  
  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];
  
    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }
  
    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
    var that = this;
    var delta = 300 - Math.random() * 100;
  
    if (this.isDeleting) { delta /= 2; }
  
    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }
  
    setTimeout(function() {
      that.tick();
    }, delta);
  };
  
  window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
};