document.querySelectorAll('#playlist button').forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        document.querySelectorAll('#playlist button').forEach(btn => btn.classList.remove('active'));
        // Add active class to the clicked button
        button.classList.add('active');
        // Change the iframe src to the new video's src
        document.getElementById('YouTube-Iframe').src = button.getAttribute('data-iframe');
    });
});
// Scroll Playlist horizontally with mousewheel on hover
const scrollContainer = document.querySelector("#playlist");
scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});

