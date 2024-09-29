// Simple client-side validation example
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        const email = document.querySelector('input[name="email"]').value;
        const password = document.querySelector('input[name="password"]').value;

        if (email === '' || password === '') {
            e.preventDefault();
            alert('Please fill in all fields.');
        }
    });
});
