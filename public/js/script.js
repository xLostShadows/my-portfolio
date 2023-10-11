const radialGradient = document.querySelector('.radial-gradient');

document.addEventListener('mousemove', (event) => {
    const mouseX = event.clientX;
    const mouseY = event.clientY;

    const gradientX = (mouseX / window.innerWidth) * 100;
    const gradientY = (mouseY / window.innerHeight) * 100;

    radialGradient.style.background = `600px at ${gradientX} ${gradientY} rgba(29, 78, 216, 0.15), transparent 80%)`;
});
