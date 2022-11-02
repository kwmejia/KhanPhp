/*=============================
Animaciones con el scroll
==============================*/

let alrutaBanner = document.querySelector("#banner").clientHeight;
let header = document.getElementById('header');
window.addEventListener('scroll', () => {
    let posY = window.scrollY;
    // console.log(posY);
    // console.log(alrutaBanner);
    if (posY >= alrutaBanner - 400) {
        header.children[0].classList.add('header-scroll');
    } else {
        header.children[0].classList.remove('header-scroll');
    }
});
