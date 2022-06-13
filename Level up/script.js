window.onscroll = function() {scrollFunction()};

// при прокрутке страницы
function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) { // при прокрутке окна на 200px от верха страницы - показывает кнопку
        document.getElementById("scrollup").style.display = "block";
    } else {
        document.getElementById("scrollup").style.display = "none";
    }
}

// при нажатии на кнопку scrollup
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}