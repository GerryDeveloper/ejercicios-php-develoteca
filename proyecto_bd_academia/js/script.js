const container = document.getElementById('draggable');

// Desactivar drag and drop
container.addEventListener('mousedown', (e) => e.preventDefault());

// Detectar clic en la mitad izquierda o derecha del formulario
document.addEventListener('click', (e) => {
    if (!container.contains(e.target)) {
        const rect = container.getBoundingClientRect();
        const offsetX = e.clientX - rect.left; // Posición X del clic
        const centerX = rect.width / 2;
        let translateX = 0;
        const translateY = -10; // Movimiento vertical hacia arriba

        if (offsetX < centerX) {
            translateX = Math.max(-15, -15 * (1 - offsetX / centerX));
        } else {
            translateX = Math.min(15, 15 * ((offsetX - centerX) / centerX));
        }

        container.style.animation = `jumpEffect 0.4s ease`;
        container.style.setProperty('--jump-x', `${translateX}px`);
        container.style.setProperty('--jump-y', `${translateY}px`);

        setTimeout(() => {
            container.style.animation = ''; // Reiniciar animación
        }, 400);
    }
});

// Focar campos de entrada al hacer clic en ellos
const inputs = container.querySelectorAll('input, button');
inputs.forEach(input => {
    input.addEventListener('click', (e) => {
        e.stopPropagation(); // Evitar que el salto ocurra
        input.focus();
    });
});
