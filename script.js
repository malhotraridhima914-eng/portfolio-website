// Prevent browser hash from scrolling to About after refresh
window.addEventListener('load', () => {
  if (location.hash) {
    history.replaceState(null, '', window.location.pathname + window.location.search);
  }
  window.scrollTo(0, 0);
});

