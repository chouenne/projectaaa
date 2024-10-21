window.addEventListener('scroll', function () {
  const header = document.getElementById('header');
  const scrollPosition = window.scrollY; // Get the current scroll position

  if (scrollPosition > window.innerHeight * 0.2) { // Check if scrolled down 20vh
    header.style.backgroundColor = 'black'; // Change to black background
  } else {
    header.style.backgroundColor = 'transparent'; // Change back to transparent
  }
});

// js for the story page mission toggle

document.querySelectorAll('.toggle-btn').forEach(button => {
  button.addEventListener('click', function () {
    // Toggle the detail visibility
    const detail = this.parentElement.nextElementSibling;
    detail.style.display = detail.style.display === 'block' ? 'none' : 'block';

    // Toggle the plus sign to an X
    this.classList.toggle('active');
  });
});

// js for the story page scroll image

document.addEventListener('scroll', function () {
  const aboutPageLeft = document.querySelector('.about-page-left');
  const aboutPageRight = document.querySelector('.about-page-right');

  // Get the bounding rect of the right text
  const rightTextRect = aboutPageRight.getBoundingClientRect();

  // Check if the right text has been fully viewed
  if (rightTextRect.bottom <= window.innerHeight) {
    // If the bottom of the right text is above the viewport, we want to let it scroll normally
    aboutPageLeft.style.position = 'absolute'; // Change position to absolute
    aboutPageLeft.style.bottom = '0'; // Align to the bottom of the right text
  } else {
    // If the right text is not fully viewed, keep it sticky
    aboutPageLeft.style.position = 'sticky';
    aboutPageLeft.style.top = '0';
  }
});




