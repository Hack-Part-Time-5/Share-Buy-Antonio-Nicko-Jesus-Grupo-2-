
/* boton animado */

const button = document.querySelector('.animated-button');
if (button){
  button.addEventListener('mouseenter', () => {
    button.style.backgroundPosition = '0% 100%'; /* al pasar el ratón por encima del botón, el gradiente se moverá hacia abajo */
  });
  
  button.addEventListener('mouseleave', () => {
    button.style.backgroundPosition = '0% 0%'; /* cuando se quite el ratón del botón, el gradiente volverá a su posición inicial */
  });
}

