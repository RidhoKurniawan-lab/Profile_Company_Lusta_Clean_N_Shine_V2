import { api } from '../api.js';
import { on } from '../dom.js';
import { formDataToObject } from '../helper.js';
import { addNewLink } from './event.js';
import { alertConfirm, alertError, alertSuccess } from '../sweetAlert.js';
import { renderNotFoundTable, renderPaginationProduct, renderSummaryProduct, renderTableProduct, renderDataEdit } from './render.js';

on('DOMContentLoaded', async (e) => {
    e.preventDefault();
    getCategory();
    fetchProducts();
});

export const paginationState = {
    page: 1,
    limit: 10,
    total: 0,
    totalPages: 1,
    category_id: null,
    minPrice: null,
    maxPrice: null,
    minStock: null,
    maxStock: null,
    sort: null,
    status: null,
    search: null,
}

on('DOMContentLoaded', async () => {
    if (!document.querySelector('[data-summary-page]')) return;

    try {
        const response = await api('/api/summary', {
            method: 'GET',
            credentials: 'include'
        });

        if (response.success) {
            document.querySelector('[data-total-product]').textContent = response.summary.totalProduct;
            document.querySelector('[data-total-active]').textContent = response.summary.totalActive;
            document.querySelector('[data-total-deactive]').textContent = response.summary.totalDeActive;
            document.querySelector('[data-total-link]').textContent = response.summary.totalLink;
        }
    } catch (error) {
        alert(error.message);
    }
})

export async function getProductLink() {
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');
    if (id) {
        try {
            const response = await api(`/api/product_link/getById?id=${id}`, {
                method: 'GET',
                credentials: 'include'
            });

            if (response.success) {
                response.data.forEach(item => {
                    addNewLink(item);
                })
            }

        } catch (error) {
            alert(error.message);
        }
    }
}
// update link
on('submit', '[data-form-link]', async (e) => {
    e.preventDefault();
    const form = document.querySelector('[data-form-link]');
    const button = form.querySelector('button[type="submit"]');

    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    const formData = new FormData(form);
    const formProduct = formDataToObject(formData);

    if (Object.keys(formProduct).length === 0) {
        await alertError('No Data Added', 'there is no data added', { timer: 1500, showConfirmButton: false });
        window.location.href = '/admin/product'
        return;
    };

    button.disabled = true;
    button.innerText = 'Loading...';
    
    try {
        const response = await api(`/api/product_link/update?id=${id}`, {
            method: 'POST',
            credentials: 'include',
            body: JSON.stringify(formProduct)
        }); 

        if (!response.success) {
            await alertError('Something Wrong!', response.message);
            return;
        }

        await alertSuccess('Success', response.message, { timer: 1500, showConfirmButton: false });
    } catch (error) {
        alert(error.message);
    }

})

on('click', '[data-delete-button]', async (e) => {
    e.preventDefault();

    const id = document.querySelector('[data-delete-button]').value;

    const confirm = await alertConfirm(
        'Delete?',
        'Are you sure you want to delete this product?'
    )

    if (!confirm.isConfirmed) return;

    try {
        const response = await api(`/api/product/delete?id=${id}`, {
            method: 'POST',
            credential: 'include'
        })

        if (response.success) {
            fetchProducts();
        }

    } catch (error) {
        alert(error.message);
    }
});

// update product
on('submit', '[data-form-edit-product]', async (e) => {
    e.preventDefault();

    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    const form = document.querySelector('[data-form-edit-product]');
    const button = form.querySelector('button[type="submit"]');

    const formData = new FormData(form);
    const productData = Object.fromEntries(formData.entries());

    productData.price = Number(productData.price);
    productData.stock = Number(productData.stock);
    productData.category_id = Number(productData.category_id);

    const sendData = new FormData();
    Object.entries(productData).forEach(([key, value]) => {
        sendData.append(key, value);
    });

    const image = formData.get('image');
    if (image instanceof File && image.size > 0) {
        sendData.append('image', image)
    }

    button.disabled = true;
    button.innerText = 'Loading...';

    try {
        const response = await api(`/api/product/update?id=${id}`, {
            method: 'POST',
            credentials: 'include',
            body: sendData
        });

        if (!response.success) {
            await alertError('Something Wrong!', response.message);
            return
        }

        await alertSuccess('Success', response.message, { timer: 1500, showConfirmButton: false });
        window.location.href = '/admin/product'

    } catch (error) {
        alert(error.message);
    }
})
// get for edit page
on('DOMContentLoaded', async (e) => {
    e.preventDefault;

    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');
    if (id) {
        try {
            const response = await api(`/api/product/getById?id=${id}`, {
                method: 'GET',
                credentials: 'include'
            });

            if (response.success) {
                getCategory();
                renderDataEdit(response.data);
            }

        } catch (error) {
            alert(error.message);
        }
    }
})

// get product
export async function fetchProducts() {
    const { page, limit, category_id, maxPrice, minPrice, minStock, maxStock, sort, status, search } = paginationState;

    try {
        const response = await api(`/api/product/get?page=${page}&limit=${limit}&category=${category_id}&minPrice=${minPrice}&maxPrice=${maxPrice}&minStock=${minStock}&maxStock=${maxStock}&sort=${sort}&status=${status}&search=${search}`, {
            method: 'GET',
            credentials: 'include'
        });
        if (response.success) {
            renderTableProduct(response);
            renderPaginationProduct(response.meta);
            renderSummaryProduct(response.summary);
        } else {
            renderNotFoundTable();
        }
    } catch (error) {
        alert(error.message);
    }
}
// action add product
on('submit', '[data-form-add-product]', async (e) => {
    e.preventDefault();

    const form = document.querySelector('[data-form-add-product]');
    const button = form.querySelector('button[type="submit"]');

    const formData = new FormData(form);
    const productData = Object.fromEntries(formData.entries());

    productData.price = Number(productData.price);
    productData.stock = Number(productData.stock);
    productData.category_id = Number(productData.category_id);

    const sendData = new FormData();
    Object.entries(productData).forEach(([key, value]) => {
        sendData.append(key, value);
    });

    const image = formData.get('image');
    if (image instanceof File && image.size > 0) {
        sendData.append('image', image)
    }

    button.disabled = true;
    button.innerText = 'Loading...';

    try {
        const response = await api('/api/product/insert', {
            method: 'POST',
            credentials: 'include',
            body: sendData
        });
        
        if (!response.success) {
            await alertError('Something Wrong!', response.message);
            return
        }

        await alertSuccess('Success', response.message, { timer: 1500, showConfirmButton: false });
        window.location.href = '/admin/product'

    } catch (error) {
        alert(error.message);
    }
})

async function getCategory() {
    try {
        const response = await api('/api/category/get', {
            method: 'GET',
            credential: 'include'
        });
        if (response.success) {

            const select = document.querySelector('[data-dropdown-category ]');

            if (select) {
                select.innerHTML = '';
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'All Category';
                select.appendChild(option);
                response.data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.id;
                    option.textContent = item.name;
                    select.appendChild(option);
                });
            }
        }

    } catch (error) {
        alert(error.message);
    }
}

// get session
on('DOMContentLoaded', async (e) => {
    e.preventDefault();

    try {
        const response = await api('/api/session/get', {
            method: 'GET',
            credential: 'include'
        });

        if (response.success) {
            const name = response.data.name.split(" ");
            const first = name[0];
            const last = name[1];

            document.querySelector('[data-user-name]').textContent = response.data.name;
            document.querySelector('[data-user-image]').src = `https://ui-avatars.com/api/?name=${first}+${last}&background=f59e0b&color=fff`
        }
    } catch (error) {
        alert(error.message);
    }
});

//Logout
on('click', '[data-logout-button]', async (e) => {
    e.preventDefault();

    const confirm = await alertConfirm(
        'Logout?',
        'Are you sure you want to Logout?'
    )

    if (!confirm.isConfirmed) return;

    try {
        const response = await api('/api/logout', {
            method: 'POST',
            credential: 'include'
        })

        if (response.success) {
            window.location.href = '/login'
        }

    } catch (error) {
        alert(error.message);
    }
});

