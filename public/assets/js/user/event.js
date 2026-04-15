import { on } from '../dom.js';

let caroulelTime = null;

// Event carousel
on('DOMContentLoaded', () => {
    const carousel = document.querySelector('[data-carousel]');
    if(!carousel) return;

    const track = document.querySelector('[data-carousel-track]');
    const slides = track.children;

    let index = 0;
    const interval = 8000;

    function updateCarousel(newIndex) {
        index = newIndex
        track.style.transform = `translateX(-${index * 100}%)`;

        document.querySelectorAll('[data-indicator]').forEach(el => {
            el.classList.replace('bg-yellow-500', 'bg-gray-300');
            el.classList.replace('hover:bg-yellow-600', 'hover:bg-gray-400');
            if (index == el.dataset.indicator) {
                el.classList.replace('bg-gray-300', 'bg-yellow-500');
                el.classList.replace('hover:bg-gray-400', 'hover:bg-yellow-600')
            }
        })
    }

    on('click', '[data-indicator]', (e) => {
        updateCarousel(Number(e.target.dataset.indicator));
        caroulelTime = null
    })

    function move(){
        updateCarousel((index + 1) % slides.length);
    }

    caroulelTime = setInterval(move, interval);
});

// Open sidebar (mobile)
on('click', '[data-toggle-sidebar]', () => {
    document.querySelector('#mobile-menu')
        ?.classList.toggle('hidden');

    document.querySelector('nav')?.classList.replace('bg-transparent', 'bg-white');
});

// Close sidebar (mobile)
on('click', (e) => {
    if (!e.target.closest('nav') && !document.querySelector('#mobile-menu').classList.contains('hidden')) {
        document.querySelector('#mobile-menu')
            ?.classList.add('hidden');

        if (window.scrollY >= 50) {
            document.querySelector('nav')?.classList.replace('bg-transparent', 'bg-white');
        } else {
            document.querySelector('nav')?.classList.replace('bg-white', 'bg-transparent');
        }
    }
});

// Menu navbar selected
on('DOMContentLoaded', () => {
    const path = window.location.pathname;

    document.querySelectorAll('[data-menu]').forEach(el => {
        // reset
        el.classList.replace('text-black', 'text-white');
        el.classList.remove('bg-white');

        if (path == '/' + el.dataset.menu) {
            el.classList.replace('text-white', 'text-black');
            el.classList.add('bg-white');
        }
        
        if (path == '/product/detail' || path == '/product/detail?id=') {
            document.querySelector('[data-menu="product"]').classList.replace('text-white', 'text-black');
            document.querySelector('[data-menu="product"]').classList.add('bg-white');
        }
    });
});

// Triger bg nav with scroll
on('scroll', () => {
    if (window.scrollY >= 50) {
        document.querySelector('nav')?.classList.replace('bg-transparent', 'bg-white');
    } else {
        document.querySelector('nav')?.classList.replace('bg-white', 'bg-transparent');
    }
});
