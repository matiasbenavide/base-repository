export async function main(options) {
    let totalPriceInput = $('#totalPrice');

    let products = options.products;
    let combos = options.combos;

    let totalPrice = 0;

    for (const key in products) {
        totalPrice += products[key].product.price * products[key].quantity;
    }

    for (const key in combos) {
        totalPrice += combos[key].product.price * combos[key].quantity;
    }

    totalPriceInput.val('AR$ ' + totalPrice);
}
