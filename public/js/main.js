// function pictureClick() {
//    var overlay = document.querySelector('.overlay-container');
//    var pic = document.querySelector('.overlay-container>.overlay>img.mainView');
//    pic.src = this.src;
//    // overlay.style.zIndex = '100';
//    overlay.classList.remove('invisible');
//    overlay.classList.add('visible');
// }

// function closeClick() {
//    var overlay = document.querySelector('.overlay-container');
//    overlay.classList.remove('visible');
//    overlay.classList.add('invisible');
//    // sleep(1000);
//    // overlay.style.zIndex = '-1';
// }

function closeClick() {
   var addr = 'index.php';
   document.location.href = addr;
}

function pictureClick() {
   var addr = 'bigpicture.php?id='+this.id;
   document.location.href = addr;
}

window.onload = function() {
   var elems = document.querySelectorAll('.inner>img');
   var len = elems.length;
   for (var i=0; i<len; i++)  {
      elems[i].addEventListener('click', pictureClick);
   }

   var elems = document.querySelector('#close');
   elems.addEventListener('click', closeClick);

}

