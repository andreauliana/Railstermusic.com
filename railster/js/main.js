document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('a[href^="#"]').forEach(function(link) {
    link.addEventListener('click', function(event) {
      var target = document.querySelector(link.getAttribute('href'));

      if (target) {
        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  if (window.M) {
    var sidenav = document.querySelectorAll('.sidenav');
    var dropdowns = document.querySelectorAll('.dropdown-trigger');
    var carousels = document.querySelectorAll('.carousel');

    M.Sidenav.init(sidenav);
    M.Dropdown.init(dropdowns);
    M.Carousel.init(carousels);
  }
});
