function init() {
    var timer = null;
    window.addEventListener('scroll', function(e) {
        var burger = document.querySelector(".cd-nav-trigger");

        if (timer !== null) {
            burger.classList.add("wobble");
            clearTimeout(timer);
        }
        timer = setTimeout(function() {
            burger.classList.remove("wobble");
        }, 150);


    });
}

window.onload = init();