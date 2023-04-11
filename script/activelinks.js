// Get all navigation links
const links = document.querySelectorAll('.nav-link');

// Loop through each link and add click event listener
links.forEach(link => {
  link.addEventListener('click', () => {
    // Remove active class from all links
    links.forEach(link => link.classList.remove('active'));

    // Add active class to clicked link
    link.classList.add('active');
  });
});

// Set active link on page load
const currentUrl = window.location.href;
const activeLink = document.querySelector(`.nav-link[href="${currentUrl}"]`);
if (activeLink) {
  activeLink.classList.add('active');
}