var nav = document.querySelector('nav');

window.addEventListener('scroll', function () {
  if (window.pageYOffset > 600) {
    nav.classList.add('bg-white', 'shadow',);
  } else {
    nav.classList.remove('bg-white', 'shadow');
  }
});