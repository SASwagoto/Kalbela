const nonStickyNav = document.querySelector('.non_sticky_nav');
const stickyNav = document.querySelector('.sticky_nav');

function scrollFunction() {
    if (window.scroll > 180) {
      nonStickyNav.classList.add('hidden');
      stickyNav.classList.remove('hidden');
    } else {
        nonStickyNav.classList.remove('hidden');
        stickyNav.classList.add('hidden');
    }
  }

  scrollFunction();
