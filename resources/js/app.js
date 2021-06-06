require('./bootstrap');

require('alpinejs');

export function formatPrice(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
