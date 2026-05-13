document.addEventListener("DOMContentLoaded", () => {
  const nubes = document.querySelectorAll(".mover-nube");

  if (!nubes.length) return;

  let ultimoScroll = window.scrollY;
  const posiciones = Array.from({ length: nubes.length }, () => 0);

  function animarNubes() {
    const scrollActual = window.scrollY;
    const diferencia = scrollActual - ultimoScroll;

    nubes.forEach((nube, index) => {
      const velocidad = index % 2 === 0 ? 0.03 : -0.02;
      posiciones[index] += diferencia * velocidad;
      nube.style.transform = `translate3d(${posiciones[index]}px, 0, 0)`;
    });

    ultimoScroll = scrollActual;
    requestAnimationFrame(animarNubes);
  }

  requestAnimationFrame(animarNubes);
});
