
document.addEventListener('scroll', function () {
    const imageCloud = document.querySelector('.image-cloud-one');
    const scrollPosition = window.scrollY; // Obtiene la posición de scroll

    // Mueve la imagen en función de la posición de scroll
    imageCloud.style.transform = `translate(0%, ${-60 + scrollPosition * -0.1}%)`;
});
document.addEventListener('scroll', function () {
    const imageCloud = document.querySelector('.image-cloud-two');
    const scrollPosition = window.scrollY; // Obtiene la posición de scroll

    // Mueve la imagen en función de la posición de scroll
    imageCloud.style.transform = `translate(16%, ${-150 + scrollPosition * 0.1}%)`;
});