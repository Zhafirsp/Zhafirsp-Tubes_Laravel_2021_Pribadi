let stars = document.getElementById('stars');
let moon = document.getElementById('moon');
let mountains_behind = document.getElementById('mountains_behind');
let text = document.getElementById('text');
let btn = document.getElementById('btn');
let mountains_front = document.getElementById('mountains_front');

window.addEventListener('scroll', function () {
  let value = window.scrollY;
  stars.style.left = value * 0.25 + 'px';
  moon.style.top = value * 0.5 + 'px';
  mountains_front.style.top = value * 0 + 'px';
  text.style.marginRight = value * 2.3 + 'px';
})