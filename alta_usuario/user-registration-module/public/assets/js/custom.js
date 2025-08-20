// This file contains custom JavaScript for the application, enabling interactive features and client-side validation.

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');

    if (form) {
        form.addEventListener('submit', function(event) {
            let isValid = true;

            // Example client-side validation
            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const mensaje = document.getElementById('mensaje').value;

            if (nombre.trim() === '') {
                isValid = false;
                alert('Por favor, ingrese su nombre.');
            }

            if (email.trim() === '' || !validateEmail(email)) {
                isValid = false;
                alert('Por favor, ingrese un correo electrónico válido.');
            }

            if (mensaje.trim() === '') {
                isValid = false;
                alert('Por favor, ingrese un mensaje.');
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission
            }
        });
    }

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
});