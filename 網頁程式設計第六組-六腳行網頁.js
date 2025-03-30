let body = document.body;
let sidebar = document.querySelector('.sidebar')
let menubutton = document.querySelector('#menubutton')

menubutton.addEventListener('click', function(e) {
  sidebar.classList.toggle('open')
});

body.addEventListener('click', function (e) {
  if (e.target !== menubutton && !sidebar.contains(e.target)) {
    sidebar.classList.remove('open')
  }
})