document.querySelectorAll('.elemento img').forEach((el) => {
    el.addEventListener('click', function (ev) {
        ev.stopPropagation();
        this.parentNode.classList.add('active');
    });
});

document.querySelectorAll('.elemento ').forEach((el) => {
    el.addEventListener('click', function (ev) {
        this.classList.remove('active');
    });
});


