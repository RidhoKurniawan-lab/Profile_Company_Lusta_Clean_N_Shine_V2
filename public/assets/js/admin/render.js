
import { formatRupiah, formatPrice } from "../helper.js";
import { paginationState } from "./ui.js";

const PUBLIC_URL = document.querySelector('[data-url-public]').dataset.urlPublic;

export function renderDataEdit(data) {
    if (!document.querySelector('[data-edit-content]')) return;

    const name = data.name.split(" ");
    const first = name[0];
    const last = name[1];

    document.querySelector('[data-preview-image]').src = `${data.image == 'default' ? `https://ui-avatars.com/api/?name=${first}+${last}&background=f59e0b&color=fff` : PUBLIC_URL + '/assets/uploads/products/' + data.image}`;
    
    document.querySelector('[data-preview-image]').alt = `${data.image == 'default' ? `default` : data.name}`;
    
    document.querySelector('[data-file-name]').textContent = `${data.image == 'default' ? 'default.png' : data.image}`;

    document.querySelector('[data-form-edit-name]').value = data.name;
    document.querySelector('[data-form-edit-price]').value = data.price;
    document.querySelector('[data-form-edit-stock]').value = data.stock;
    document.querySelector('[data-form-edit-description]').value = data.description;
    document.querySelector('[data-char-count]').textContent = `${data.description.length}/1000 characters`
    
    const select = document.querySelector('[data-dropdown-category]');

    [...select.options].forEach(option => {
        if(Number(option.value) == data.category_id){
            option.selected = true;
        }
    });

    const checkbox = document.querySelectorAll('[data-form-edit-status]');

    checkbox.forEach(item => {
        
        if(item.value == data.status){
            item.checked = true;
        }
    })
}

export function renderSummaryProduct(data) {
    const text = document.querySelectorAll('[data-summary]');

    if (!text) return;

    text.forEach(el => {
        switch (el.dataset.summary) {
            case 'active': el.textContent = data.active; break;
            case 'deactive': el.textContent = data.deactive; break;
            case 'lowstock': el.textContent = data.lowstock; break;
            case 'outofstock': el.textContent = data.outofstock; break;
        }
    })
}

// render pagination
export function renderPaginationProduct(meta) {
    if (!meta) return;
    const tbody = document.querySelector('[data-table-product]');
    if (tbody == null || !tbody) return;

    const { page, limit, total, total_page } = meta;

    paginationState.page = page;
    paginationState.total = total,
        paginationState.totalPages = total_page;

    const start = (page - 1) * limit + 1;
    const end = Math.min(page * limit, total);

    document.querySelector('[data-pagination-footer-info]').textContent = `Showing ${start}-${end} of ${total} Product`;
    document.querySelector('[data-pagination-header-info]').textContent = `Showing ${end} of ${total} Product`;

    const buttonsEl = document.querySelector('[data-pagination-button]');

    // hapus page lama (sisain prev & next)
    buttonsEl.querySelectorAll('[data-page-number]').forEach(b => b.remove());
    buttonsEl.querySelectorAll('[data-ellipsis]').forEach(e => e.remove());

    // disable prev / next
    buttonsEl.querySelector('[data-page="prev"]').disabled = page === 1;
    buttonsEl.querySelector('[data-page="next"]').disabled = page === total_page;

    // logic tampil page (1 2 3 ... 12)
    const maxVisible = 3;
    let startPage = Math.max(1, page - 1);
    let endPage = Math.min(total_page, startPage + maxVisible - 1);

    for (let i = startPage; i <= endPage; i++) {
        buttonsEl.insertBefore(createPageButton(i, i === page),
            buttonsEl.querySelector('[data-page="next"]'));
    }

    if (endPage < total_page - 1) {
        buttonsEl.insertBefore(ellipsis(),
            buttonsEl.querySelector('[data-page="next"]'));
    }

    if (endPage < total_page) {
        buttonsEl.insertBefore(createPageButton(total_page),
            buttonsEl.querySelector('[data-page="next"]'));
    }
}
// render table
export function renderNotFoundTable() {
    const tbody = document.querySelector('[data-table-product]');
    if (tbody == null || !tbody) return;

    tbody.innerHTML = '';

    tbody.innerHTML = `
         <tr class="no-results-state">
                    <td colspan="7" class="py-16 text-center">
                        <div class="flex flex-col items-center justify-center gap-4">
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-amber-50">
                                <i class="text-3xl bi bi-search text-amber-500"></i>
                            </div>
                            <div class="max-w-md">
                                <h3 class="mb-1 text-base font-semibold text-gray-900">Product not found</h3>
                                <p class="mb-4 text-sm text-gray-600">No products match your search criteria</p>
                                <div class="flex flex-col justify-center gap-3 sm:flex-row">
                                    <button data-filter-reset class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 transition-colors border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <i class="bi bi-arrow-clockwise"></i>
                                        <span>Reset Filter</span>
                                    </button>
                                    <a href="/admin/add_product" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white transition-colors rounded-lg bg-amber-500 hover:bg-amber-600">
                                        <i class="bi bi-plus-lg"></i>
                                        <span>Add New Products</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
        `;
}


export function renderTableProduct(data) {
    if (!data) return;

    const tbody = document.querySelector('[data-table-product]');
    if (tbody == null || !tbody) return;

    tbody.innerHTML = '';

    data.data.forEach((item, index) => {
        const startNumber = (paginationState.page - 1) * paginationState.limit;
        const name = item.name.split(" ");
        const first = name[0];
        const last = name[1];

        tbody.insertAdjacentHTML('beforeend', `
            <tr class="transition-colors hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">${startNumber + index + 1}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 shrink-0">
                                <img class="object-cover w-10 h-10 rounded-lg" src="${item.image == 'default' ? `https://ui-avatars.com/api/?name=${first}+${last}&background=f59e0b&color=fff` : PUBLIC_URL + '/assets/uploads/products/' + item.image}" alt="${item.name}">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">${item.name}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-gray-900">${formatRupiah(item.price)}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium text-blue-800 bg-blue-100 rounded-full">${item.category}</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="mr-2 text-sm font-medium text-gray-900">${item.stock}</div>
                            <div class="w-16 h-2 bg-gray-200 rounded-full">
                                <div class="h-2 rounded-full bg-emerald-500" style="width: ${item.stock * 2}%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium rounded-full 
                        ${item.status == 'active'
                ? 'text-emerald-800  bg-emerald-100'
                : 'text-red-800 bg-red-100'} ">${item.status}</span>
                    </td>   
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <a href="/admin/link_product?id=${item.id}" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors cursor-pointer">
                                <i class="bi bi-link"></i>
                            </a>
                            <a href="/admin/edit_product?id=${item.id}" class="p-1.5 text-amber-600 hover:bg-amber-50 rounded-lg transition-colors">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button data-delete-button value="${item.id}" class="p-1.5 text-red-600 hover:bg-red-50 rounded-lg transition-colors cursor-pointer">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `)
    });
}

function createPageButton(page, active = false) {
    const btn = document.createElement('button');
    btn.dataset.pageNumber = page;
    btn.textContent = page;
    btn.className = active
        ? 'px-3 py-1.5 bg-amber-500 text-white rounded-lg font-medium'
        : 'px-3 py-1.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50';
    return btn;
}

function ellipsis() {
    const span = document.createElement('span');
    span.dataset.ellipsis = true;
    span.className = 'px-2 text-gray-500';
    span.textContent = '...';
    return span;
}