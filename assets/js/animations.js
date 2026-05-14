document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".seccion-campania__slider");
  if (!slider) return;

  const slides = slider.querySelectorAll(".seccion-campania__slide");
  const puntos = document.querySelectorAll(".seccion-campania__puntos .punto");
  const botonSiguiente = document.querySelector(".seccion-campania__flecha");

  if (!slides.length) return;

  let indiceActual = 0;

  function mostrarSlide(indice) {
    slides.forEach((slide, i) => {
      slide.classList.toggle("activo", i === indice);
    });

    puntos.forEach((punto, i) => {
      punto.classList.toggle("activo", i === indice);
    });

    indiceActual = indice;
  }

  function siguienteSlide() {
    const nuevoIndice = (indiceActual + 1) % slides.length;
    mostrarSlide(nuevoIndice);
  }

  if (botonSiguiente) {
    botonSiguiente.addEventListener("click", (e) => {
      e.preventDefault();
      siguienteSlide();
    });
  }

  puntos.forEach((punto, i) => {
    punto.addEventListener("click", () => {
      mostrarSlide(i);
    });
  });

  mostrarSlide(0);

  setInterval(() => {
    siguienteSlide();
  }, 3000);
});

// amimacion imagen de letras
document.addEventListener("DOMContentLoaded", () => {
  const textos = document.querySelectorAll(".mover-texto-scroll");

  if (!textos.length) return;

  function animarTextos() {
    const scroll = window.scrollY;

    textos.forEach((texto, index) => {
      const velocidad = 0.003;

      const moverX = Math.sin(scroll * velocidad) * 40;

      texto.style.transform = `translateX(${moverX}px)`;
    });

    requestAnimationFrame(animarTextos);
  }

  animarTextos();
});
