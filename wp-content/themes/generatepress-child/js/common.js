document.addEventListener('DOMContentLoaded', function() {

  let modalButtons = document.querySelectorAll('.js-open-modal');
  let overlay = document.querySelector('#overlay-modal');
  let closeButtons = document.querySelectorAll('.js-modal-close');
  let pauseVideo = document.querySelector('.vd');

  modalButtons.forEach(function(item){

    item.addEventListener('click', function(e) {

        e.preventDefault();

        let modalId = this.getAttribute('data-modal');
        let  modalElem = document.querySelector('.modal[data-modal="' + modalId + '"]');

        modalElem.classList.add('active');
        overlay.classList.add('active');
    });

  });
  closeButtons.forEach(function(item){
    item.addEventListener('click', function(e) {
        let parentModal = this.closest('.modal');

        parentModal.classList.remove('active');
        overlay.classList.remove('active');
        pauseVideo.pause();
    });
  });
  document.body.addEventListener('keyup', function (e) {
      let key = e.keyCode;

      if (key == 27) {
          document.querySelector('.modal.active').classList.remove('active');
          document.querySelector('.overlay').classList.remove('active');
          pauseVideo.pause();
      };
  }, false);
  overlay.addEventListener('click', function() {
      document.querySelector('.modal.active').classList.remove('active');
      this.classList.remove('active');
      pauseVideo.pause();
  });
});
