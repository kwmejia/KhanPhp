/*================================
 * Efecto dark-Mode
 *============================== */
let body = document.body;
let botonDark = document.querySelector('#boton');
let EstadoBotonDark = false;
let tituloAlbumes = document.getElementById('titulo-albumes');
let footer = document.getElementById('footer');


botonDark.addEventListener('click', () => {
    if (!EstadoBotonDark) {

        body.classList.remove('ligth');
        body.classList.add('dark');
        botonDark.classList.remove('boton-dark');
        botonDark.classList.add('dark-flotante');
        botonDark.children[0].classList.remove('bolita-blanca');
        botonDark.children[0].classList.add('bolita-gris');
        tituloAlbumes.classList.remove('title-albumes');
        tituloAlbumes.classList.add('title-albumes-dark');
        footer.classList.remove('footer-ligth');
        footer.classList.add('footer-dark');
        EstadoBotonDark = true;

    } else {

        body.classList.remove('dark');
        body.classList.add('ligth');
        botonDark.classList.remove('dark-flotante');
        botonDark.classList.add('boton-dark');
        botonDark.children[0].classList.remove('bolita-negra');
        botonDark.children[0].classList.add('bolita-blanca');
        tituloAlbumes.classList.remove('title-albumes-dark');
        tituloAlbumes.classList.add('title-albumes');
        footer.classList.remove('footer-dark');
        footer.classList.add('footer-ligth');
        EstadoBotonDark = false;
    }
});




/*=============================
PRELOAD
==============================*/

window.addEventListener('load', () => {
    // setTimeout(() => {
        this.document.getElementById("loader").classList.toggle("loader2");
    // }, 1000);
                                       
});




// window.addEventListener('load', () => {
//     $("#p").delay(350).fadeOut("slow");
//     body.classList.remove('hidden');
// });





