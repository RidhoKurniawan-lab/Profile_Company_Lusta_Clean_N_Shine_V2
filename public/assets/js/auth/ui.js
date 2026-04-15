import { api } from '../api.js';
import { on } from '../dom.js';
import { validationHandler } from '../errorValidationHendler.js';
import { alertConfirm, alertError, alertSuccess } from '../sweetAlert.js';

// Login
on('submit', '[data-form-login]', async (e) => {
    e.preventDefault();

    const form = document.querySelector('[data-form-login]');

    const email = form.email.value;
    const password = form.password.value;

    try {

        const response = await api('/api/login', {
            method: 'POST',
            body: JSON.stringify({ email, password })
        });

        if (response.success) {
            await alertSuccess('Success', response.message, { timer: 1500, showConfirmButton: false });

            window.location.href = '/admin'
        }

        validationHandler(response);

    } catch (error) {
        alert(error.message);
    }
});


