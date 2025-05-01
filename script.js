// Smooth scroll for navigation links
document.querySelectorAll('nav a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      document.querySelector(targetId).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

// Mobile menu toggle
function toggleMenu() {
  var menu = document.getElementById('menu');
  menu.classList.toggle('show');
}


function playVideo(thumb) {
  var video = thumb.nextElementSibling; // Zoek de video die na de thumbnail komt
  thumb.style.display = 'none'; // Verberg de thumbnail
  video.style.display = 'block'; // Toon de video
  video.play(); // Start de video
}







