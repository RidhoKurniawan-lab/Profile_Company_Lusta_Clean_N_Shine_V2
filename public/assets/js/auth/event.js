import { on } from '../dom.js';

// Show password
on('click', '[data-toggle]', () => {
    const password = document.querySelector("input[data-input='password']");

    if (document.querySelector('[data-toggle-icon]')?.classList.contains('bi-eye-slash')) {
        document.querySelector('[data-toggle-icon]')?.classList.replace('bi-eye-slash', 'bi-eye');
        password.type = 'text';
    } else {
        document.querySelector('[data-toggle-icon]')?.classList.replace('bi-eye', 'bi-eye-slash');
        password.type = 'password'; 
    }
});

// reset validation if value input change
on('input', '[data-input]', (e) => {
    const input = e.target.parentElement.nextElementSibling;

    if (input && input.classList.contains('error')) input.remove();
})