// Prevent browser hash from scrolling to About after refresh
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

