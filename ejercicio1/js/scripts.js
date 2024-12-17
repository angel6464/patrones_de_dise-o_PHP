document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const select = document.getElementById('nivel');
    const button = form.querySelector('button');

    button.addEventListener('click', function(e) {
        if (select.value === '') {
            alert('Por favor, selecciona un nivel.');
            e.preventDefault();
        }
    });
});
