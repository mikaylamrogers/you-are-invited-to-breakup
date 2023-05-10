let unopened = document.querySelector('.unopened');
let opened = document.querySelector('.opened');

unopened.addEventListener('click', function() {
    unopened.style.display = 'none';
    opened.style.display = 'block';
});