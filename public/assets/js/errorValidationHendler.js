
// validasi hendler
export function validationHandler(data) {

    if (!data.success) {
        const inputs = document.querySelectorAll('[data-input]');

        inputs.forEach(input => {
            const p = input.parentElement.nextElementSibling

            if(p && p.classList.contains('error')) p.remove();

            if (input.dataset.input == data.field) {
                const parent = input.parentElement;
                const p = parent.nextElementSibling

                const text = document.createElement('p');
                text.textContent = data.message;
                text.classList.add('text-sm', 'text-red-700', 'p-1', 'error');

                parent.insertAdjacentElement('afterend', text);

            }
        });
    }
}