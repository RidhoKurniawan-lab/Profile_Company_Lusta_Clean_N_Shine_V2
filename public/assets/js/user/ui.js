import { api } from '../api.js';
import { on } from '../dom.js';
import { renderCardProduct, renderDetail } from './render.js';

on('DOMContentLoaded', async () => {
    if(!document.querySelector('[data-card-wrapper]')) return;

    try {
        const response = await api('/api/product/getByStatus', {
            method: 'GET',
        });

        if (response.success) {
            renderCardProduct(response.data);
        }

    } catch (error) {
        alert(error.message);
    }
})

on('DOMContentLoaded', async () => {
    if(!document.querySelector('[data-detail-page]')) return;

    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    try {
        const response = await api(`/api/product/detail?id=${id}`, {
            method: 'GET',
        });
        
        if (response.success) {
            renderDetail(response.data);
        }

    } catch (error) {
        alert(error.message);
    }
})
