import { on } from '../dom.js';
import { fetchProducts, getProductLink } from './ui.js';
import { paginationState } from "./ui.js";
let linkCount = 0;


function updateStats() {
    const linksContainer = document.getElementById('links-container');
    const linkItems = linksContainer.querySelectorAll('.link-item');
    const totalLinks = linkItems.length;

    let validLinks = 0;
    let successLinks = 0;

    linkItems.forEach(item => {
        const linkInput = item.querySelector('.product-link');
        const statusText = item.querySelector('.status-text');

        if (linkInput.value) {
            validLinks++;
        }

        if (statusText.textContent.includes('Success')) {
            successLinks++;
        }
    });

    document.getElementById('total-links').textContent = totalLinks;
    document.getElementById('valid-links').textContent = validLinks;
    document.getElementById('success-links').textContent = successLinks;
}

on('DOMContentLoaded', async () => {
    if (!document.querySelector('[data-link-page]')) return;

    await getProductLink();
});

on('click', '[data-add-link]', () => {
    addNewLink();
})

// event for description limit
on('input', '[data-form-edit-description]', (e) => {
    const charCountEl = document.querySelector('[data-char-count]');
    const len = e.target.value.length;

    charCountEl.textContent = `${len}/1000 characters`;

    if (len === 1000) { // misal mulai merah dari 900 karakter
        charCountEl.classList.replace('text-gray-500', 'text-red-500');
    } else {
        charCountEl.classList.replace('text-red-500', 'text-gray-500');
    }
});

// action filter search
on('input', '[data-filter-search]', (e) => {
    paginationState.search = e.target.value;
    paginationState.page = 1;
    fetchProducts();
})

on('click', '[data-filter]', (e) => {

    if (e.target.value !== 'custom') {
        paginationState.status = e.target.value;
        paginationState.page = 1;
        fetchProducts();
        document.querySelector('[data-filter-custom]').classList.add('hidden');
    } else {
        paginationState.status = 'all';
        paginationState.page = 1;
        fetchProducts();
        document.querySelector('[data-filter-custom]').classList.remove('hidden');
    }
})

// filter button
on('click', '[data-filter]', (e) => {

    if (e.target.value !== 'custom') {
        paginationState.status = e.target.value;
        paginationState.page = 1;
        fetchProducts();
    }else if(e.target.value !== 'all'){
        reset();
    } else {
        paginationState.status = 'all';
        paginationState.page = 1;
        fetchProducts();
        document.querySelector('[data-filter-custom]').classList.toggle('hidden');
    }
})

// reset filter
on('click', '[data-filter-reset]', () => {
    reset()
});

function reset() {
    
    paginationState.category = null;
    paginationState.minPrice = null;
    paginationState.maxPrice = null;
    paginationState.minStock = null;
    paginationState.maxStock = null;

    paginationState.page = 1;

    document.querySelectorAll('[data-filter-stock], [data-filter-category], [data-filter-price]').forEach(el => {
        el.value = '';
    });

    document.querySelector('[data-table-product]').innerHTML = '';

    fetchProducts();

}

// on change filter sort
on('change', '[data-filter-sort]', (e) => {
    paginationState.sort = e.target.value;
    paginationState.page = 1;
    fetchProducts();
});

// on change filter stock
on('change', '[data-filter-stock]', (e) => {

    let min = null;
    let max = null

    if (e.target.value) {
        [min, max] = e.target.value.split('-');
        min = min ? Number(min) : null;
        max = max ? Number(max) : null;
    }

    paginationState.maxStock = max;
    paginationState.minStock = min;

    paginationState.page = 1;
    fetchProducts();
});

// on change filter price
on('change', '[data-filter-price]', (e) => {

    let min = null;
    let max = null

    if (e.target.value) {
        [min, max] = e.target.value.split('-');
        min = min ? Number(min) : null;
        max = max ? Number(max) : null;
    }

    paginationState.maxPrice = max;
    paginationState.minPrice = min;

    paginationState.page = 1;
    fetchProducts();
});

// on change filter category
on('change', '[data-filter-category]', (e) => {
    paginationState.category_id = Number(e.target.value);
    paginationState.page = 1;
    fetchProducts();
});

// on change filter limit
on('change', '[data-pagination-limit]', (e) => {
    paginationState.limit = Number(e.target.value);
    paginationState.page = 1
    fetchProducts();
});

// Pagination update page
on('click', '[data-pagination] button', (e) => {
    const btn = e.target.closest('button');
    if (!btn) return;

    if (btn.dataset.page === 'prev') {
        if (paginationState.page > 1) paginationState.page--;
    } else if (btn.dataset.page === 'next') {
        if (paginationState.page < paginationState.totalPages)
            paginationState.page++;
    } else if (btn.dataset.pageNumber) {
        paginationState.page = Number(btn.dataset.pageNumber);
    }

    fetchProducts();
})

// show image been uploaded
on('change', '[data-image-upload]', (e) => {
    const file = e.target.files[0];

    if (!file) return;

    document.querySelector('[data-file-name]').textContent = file.name;

    const reader = new FileReader();
    reader.onload = function (e) {
        document.querySelector('[data-preview-image]').src = e.target.result;
        document.querySelector('[data-image-wrapper]').classList.remove('hidden');
        document.querySelector('[data-upload-placeholder]').classList.add('hidden');
    }
    reader.readAsDataURL(file);
})

// open sidebar
on('click', '[data-open-mobile-menu]', () => {
    document.querySelector('[data-mobile-sidebar]').style.display = 'flex';
});

// close sidebar
on('click', '[data-close-mobile-menu]', () => {
    document.querySelector('[data-mobile-sidebar]').style.display = 'none';
});

// close if click in overlay
on('click', '[data-mobile-sidebar-overlay]', () => {
    document.querySelector('[data-mobile-sidebar]').style.display = 'none';
});

// event sidebar button active
on('DOMContentLoaded', () => {
    const path = window.location.pathname;

    document.querySelectorAll('[data-menu]').forEach(el => {
        // reset
        el.classList.remove('bg-amber-50', 'text-amber-700', 'border', 'border-amber-200');
        el.classList.add('hover:bg-gray-100', 'transition-colors');

        if (path == '/admin' + el.dataset.menu) {
            el.classList.add('bg-amber-50', 'text-amber-700', 'border', 'border-amber-200');
            el.classList.remove('hover:bg-gray-100', 'transition-colors');
        }
    });
});

export function addNewLink({
    id = null,
    url = null,
    platform = null,
} = {}) {

    linkCount++;
    const linksContainer = document.getElementById('links-container');
    const linkTemplate = document.getElementById('link-item-template');
    const linkItem = linkTemplate.content.cloneNode(true);
    const linkElement = linkItem.querySelector('.link-item');

    const linkNumber = linkElement.querySelector('.link-number');


    if (id || url || platform) {
        linkElement.querySelector('.status-text').textContent = 'Success';
        linkElement.querySelector('.status-indicator').classList.replace('bg-gray-300', 'bg-emerald-300');
        linkElement.querySelector('[data-tmp-id]').value = `${id}`;
        linkElement.querySelector('[data-tmp-url]').value = `${url}`;
        linkElement.querySelectorAll('[data-tmp-mrkt]').forEach(check => {
            check.checked = false;
            if (check.value == platform) {
                check.checked = true;
            }
        })
    }

    // Update link number
    linkElement.querySelector('[data-tmp-id]').name = `link[${linkCount - 1}][id]`;
    linkElement.querySelector('[data-tmp-url]').name = `link[${linkCount - 1}][url]`;
    linkElement.querySelectorAll('[data-tmp-mrkt]').forEach(check => {
        check.name = `link[${linkCount - 1}][platform]`;
        check.id = `link-${linkCount - 1}-platform-${check.value}`;

        check.nextElementSibling.setAttribute(
            'for', check.id
        )
    });

    linkNumber.textContent = linkCount;

    // Add event listeners
    const removeBtn = linkElement.querySelector('.remove-link-btn');
    const marketplaceBtns = linkElement.querySelectorAll('.marketplace-btn');
    const productLinkInput = linkElement.querySelector('.product-link');

    removeBtn.addEventListener('click', () => {
        linkElement.remove();
        linkCount--;
        updateStats();
    });

    marketplaceBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            marketplaceBtns.forEach(b => {
                b.classList.remove('border-orange-500', 'bg-orange-50', 'border-green-500', 'bg-green-50', 'border-purple-500', 'bg-purple-50', 'border-red-500', 'bg-red-50');
            });

            // ambil marketplace dari button
            const marketplace = btn.dataset.marketplace;

            // SET RADIO / CHECKBOX
            linkElement.querySelectorAll('[data-tmp-mrkt]').forEach(check => {
                check.checked = (check.value === marketplace);
            });

            // Add active class to clicked button
            switch (marketplace) {
                case 'Tokopedia':
                    btn.classList.add('border-green-500', 'bg-green-50');
                    productLinkInput.placeholder = 'https://tokopedia.com/...';
                    break;
                case 'Bukalapak':
                    btn.classList.add('border-purple-500', 'bg-purple-50');
                    productLinkInput.placeholder = 'https://bukalapak.com/...';
                    break;
                case 'Lazada':
                    btn.classList.add('border-red-500', 'bg-red-50');
                    productLinkInput.placeholder = 'https://lazada.co.id/...';
                    break;
                default:
                    btn.classList.add('border-orange-500', 'bg-orange-50');
                    productLinkInput.placeholder = 'https://shopee.co.id/product/...';
                    break;
            }
        });
    });

    // Auto-detect marketplace from link input
    productLinkInput.addEventListener('blur', () => {
        const link = productLinkInput.value;
        if (link) {
            const marketplace = detectMarketplace(link);
            if (marketplace) {
                // Highlight the corresponding marketplace button
                marketplaceBtns.forEach(btn => {
                    if (btn.textContent.trim() === marketplace.name) {
                        marketplaceBtns.forEach(b => {
                            b.classList.remove('border-orange-500', 'bg-orange-50', 'border-green-500', 'bg-green-50', 'border-purple-500', 'bg-purple-50', 'border-red-500', 'bg-red-50');
                        });
                        btn.classList.add(marketplace.borderClass, marketplace.bgClass);
                    }
                });
            }
        }
    });

    linksContainer.appendChild(linkItem);
    updateStats();
}

function detectMarketplace(url) {
    if (url.includes('shopee')) {
        return {
            name: 'Shopee',
            borderClass: 'border-orange-500',
            bgClass: 'bg-orange-50'
        };
    } else if (url.includes('tokopedia')) {
        return {
            name: 'Tokopedia',
            borderClass: 'border-green-500',
            bgClass: 'bg-green-50'
        };
    } else if (url.includes('bukalapak')) {
        return {
            name: 'Bukalapak',
            borderClass: 'border-purple-500',
            bgClass: 'bg-purple-50'
        };
    } else if (url.includes('lazada')) {
        return {
            name: 'Lazada',
            borderClass: 'border-red-500',
            bgClass: 'bg-red-50'
        };
    }
    return null;
}