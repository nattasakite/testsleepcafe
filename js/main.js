var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

window.addEventListener('scroll', () => {
  let page = this;
  let pageTop = this.scrollY;
  let pageHeight = this.outerHeight / 2 ;
  
  let frames = document.querySelectorAll('.scrollAnim');
  frames.forEach( frame => {
    let frameTop = frame.offsetTop;
    let frameHeight = frame.offsetHeight;
    
    if ( pageTop  >= frameTop - pageHeight &&
        pageTop  < frameTop + frameHeight/2 ){
      frame.classList.add('anim');
    }else{
      frame.classList.remove('anim');
    }
  });
});


