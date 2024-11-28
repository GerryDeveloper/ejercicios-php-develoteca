/**
 * 
 * const draggable = document.getElementById('draggable');

let offsetX, offsetY;
let isDragging = false;

draggable.addEventListener('mousedown', (e) => {
    offsetX = e.clientX - draggable.offsetLeft;
    offsetY = e.clientY - draggable.offsetTop;
    isDragging = true;
    draggable.style.transition = "none";  // Quitar animación mientras se arrastra
});

document.addEventListener('mousemove', (e) => {
    if (isDragging) {
        const x = e.clientX - offsetX;
        const y = e.clientY - offsetY;
        draggable.style.transform = `translate(${x}px, ${y}px)`;
    }
});

document.addEventListener('mouseup', () => {
    if (isDragging) {
        isDragging = false;
        draggable.style.transition = "transform 0.3s ease";  // Restaurar animación
        draggable.style.transform = "translate(0, 0)";  // Volver a posición original
    }
});
 */

// 
const draggable = document.getElementById('draggable');

let offsetX, offsetY;
let isDragging = false;

draggable.addEventListener('mousedown', (e) => {
    offsetX = e.clientX - draggable.offsetLeft;
    offsetY = e.clientY - draggable.offsetTop;
    isDragging = true;
    draggable.style.transition = "none";  // Quitar animación mientras se arrastra
});

document.addEventListener('mousemove', (e) => {
    if (isDragging) {
        const x = e.clientX - offsetX;
        const y = e.clientY - offsetY;
        draggable.style.transform = `translate(${x}px, ${y}px)`;
    }
});

document.addEventListener('mouseup', () => {
    if (isDragging) {
        isDragging = false;
        draggable.style.transition = "transform 0.3s ease";  // Restaurar animación
        draggable.style.transform = "translate(0, 0)";  // Volver a posición original
    }
});
