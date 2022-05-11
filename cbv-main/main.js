var carts = document.querySelectorAll('.add-cart');

// candles in array
var products = [
    {
        name: 'Blueberry Pie',
        tag: 'blueberry-pie',
        price: 20,
        inCart: 0
    },
    {
        name: 'Chocolate Sugar Cookie',
        tag: 'chocolate-sugar-cookie',
        price: 25,
        inCart: 0
    },
    {
        name: 'Gingerbread',
        tag: 'gingerbread',
        price: 30,
        inCart: 0
    },
    {
        name: 'Peanut Chocolate Cheesecake',
        tag: 'peanut-chocolate-cheesecake',
        price: 20,
        inCart: 0
    },
    {
        name: 'Smores Donut',
        tag: 'smores-donut',
        price: 25,
        inCart: 0
    }
];


for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

// loads cart numbers 
function onLoadCartNumbers() {
    var productNumbers = sessionStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

// number of items in cart in the cart via sessionStorage, updates number 
function cartNumbers(product, action) {

    var productNumbers = sessionStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    var cartItems = sessionStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (action == "decrease") {
        sessionStorage.setItem('cartNumbers', productNumbers - 1);
        document.querySelector('.cart span').textContent = productNumbers - 1;
    } else if (productNumbers) {
        sessionStorage.setItem("cartNumbers", productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
        sessionStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(product);
}

//putting items into sessionStorage
function setItems(product) {
    var cartItems = sessionStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null) {

        let currentProduct = product.tag;
        if (cartItems[currentProduct] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    sessionStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

// function to find cost of items
function totalCost(product, action) {

    var cartCost = sessionStorage.getItem('totalCost');

    if (action == "decrease") {
        cartCost = parseInt(cartCost);

        sessionStorage.setItem('totalCost', cartCost - product.price);

    } else if (cartCost != null) {

        cartCost = parseInt(cartCost);
        sessionStorage.setItem("totalCost", cartCost + product.price);

    } else {
        sessionStorage.setItem("totalCost", product.price);
    }
}

// function to display the cart
function displayCart() {
    var cartItems = sessionStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    var cartF = sessionStorage.getItem("totalCost");
    cartF = parseInt(cartF);

    var cartFinal = cartF + 12;

    var productContainer = document.querySelector('.products');
    var sideOrder = document.querySelector('.side');

    // add dynamic info into html elements
    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        sideOrder.innerHTML = '';
        Object.values(cartItems).map((item, index) => {
            // main cart with products
            productContainer.innerHTML += `
            <div class="flex border-b-2 border-rosewood py-6">
                        <div class="rounded-lg h-24 w-24 overflow-hidden my-auto">
                                <img alt="content" class="object-cover object-center h-full w-full" src="./img/candles-${item.tag}.png">
                        </div>
                            <div class="flex flex-col md:flex-row">
                                <div class="my-auto px-4 md:px-12 w-36">
                                    <span class="font-medium">${item.name}</span>
                                </div>
                                <div class="my-auto px-4 md:px-12 ml-auto product">
                                    <i class="btnBack fa fa-trash text-xl cursor-pointer"></i>
                                </div>
                                <div class="my-auto px-4 md:px-12">
                                    <button class="decrease previous round btnBack">&#8249;</button><span class="font-medium"> ${item.inCart} </span><button class="increase next round btnBack">&#8250;</button>
                                </div>
                                <div class="my-auto px-4 md:px-12">
                                    <h2 class="font-bold">$${item.price}.00</h2>
                                </div>
                            </div>
                    <div class="flex flex-col border-rosewood mx-auto md:ml-auto rounded-r-lg px-8">
                    <div class="my-auto mx-auto">
                        <div class="py-4">
                            <p class="text-xl font-medium">${item.name} Total</p>
                            <p class="text-xl font-bold">$${item.inCart * item.price}.00</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            `;
        });
        // order details info + shipping
        sideOrder.innerHTML += `
                    <div class="my-auto mx-auto">
                        <div class="pb-4">
                            <h2 class="text-3xl font-bold mt-6">Order details</h2>
                        </div>
                        <div class="py-4">
                            <p class="text-xl font-medium">Subtotal</p>
                            <p class="text-xl font-bold">$${cartF}.00</p>
                        </div>
                        <div class="py-4 mb-4 border-b-2 border-rosewood">
                            <p class="text-xl font-medium">Shipping</p>
                            <p class="text-xl font-bold">$12.00</p>
                        </div>
                        <div class="py-4">
                            <p class="text-xl font-medium">Total cost</p>
                            <p class="text-xl font-bold">$${cartFinal}.00</p>
                        </div>
                        <button onclick="alert('Order Placed!')" class="flex mx-auto mt-6 font-cabin bg-princeton-orange-links border-0 py-2 px-5 focus:outline-none rounded">
                        Place order
                        </button>
                    </div>
                </div>
        `
    }

    deleteButtons();
    manageQuantity();
}

// delete items in cart
function deleteButtons() {
    var deleteButtons = document.querySelectorAll('.product i');
    var productName;
    var productNumbers = sessionStorage.getItem('cartNumbers');
    var cartItems = sessionStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    var cartCost = sessionStorage.getItem('totalCost');

    // finds items to delete & deletes it
    for (let i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', () => {
            productName = deleteButtons[i].parentElement.parentElement.firstChild.nextSibling.textContent.trim().toLowerCase().replace(/ /g, '-');
            sessionStorage.setItem('cartNumbers', productNumbers - cartItems[productName].inCart);

            sessionStorage.setItem('totalCost', cartCost - (cartItems[productName].price * cartItems[productName].inCart));

            delete cartItems[productName];
            sessionStorage.setItem('productsInCart', JSON.stringify(cartItems));

            displayCart();
            onLoadCartNumbers();

        });
    }
}

// add or sub quantity of items
function manageQuantity() {
    var decreaseButtons = document.querySelectorAll('.decrease');
    var increaseButtons = document.querySelectorAll('.increase');
    var cartItems = sessionStorage.getItem('productsInCart');
    var currentQuantity = 0;
    var currentProduct = "";
    cartItems = JSON.parse(cartItems);


    // decrease button funtion
    for (let i = 0; i < decreaseButtons.length; i++) {
        decreaseButtons[i].addEventListener('click', () => {
            currentQuantity = decreaseButtons[i].parentElement.querySelector('span').textContent;
            currentProduct = decreaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLowerCase().replace(/ /g, '-').trim();

            if (cartItems[currentProduct].inCart > 1) {
                cartItems[currentProduct].inCart -= 1;
                cartNumbers(cartItems[currentProduct], "decrease");
                totalCost(cartItems[currentProduct], "decrease");
                sessionStorage.setItem('productsInCart', JSON.stringify(cartItems))

                displayCart();

            }
        });
    }

    // increase button funtion
    for (let i = 0; i < increaseButtons.length; i++) {
        increaseButtons[i].addEventListener('click', () => {
            currentQuantity = increaseButtons[i].parentElement.querySelector('span').textContent;

            currentProduct = increaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLowerCase().replace(/ /g, '-').trim();

            cartItems[currentProduct].inCart += 1;
            cartNumbers(cartItems[currentProduct]);
            totalCost(cartItems[currentProduct]);
            sessionStorage.setItem('productsInCart', JSON.stringify(cartItems));

            displayCart();

        });
    }

}

// loads cart & cart numbers 
onLoadCartNumbers();
displayCart();