const cartIcon = document.querySelector('.nav__photo__2');
const cart = document.querySelector('.cart');
const cartClose = document.querySelector('.cart__close');

cartIcon.addEventListener('click', ()=> {
    cart.classList.add('active');
})

cartClose.addEventListener('click', ()=> {
    cart.classList.remove('active');
})

if (document.readyState == "loading") {
    document.addEventListener('DOMContentLoaded',start());
} else {
    start();
}

function start() {
    addEvents();
}

function update() {
    addEvents();
    updateTotal();
}

function addEvents() {
    let cartRemove_btns = document.querySelectorAll(".cart__remove");
    console.log(cartRemove_btns);
    cartRemove_btns.forEach((btn) => {
        btn.addEventListener("click", handle_removeCartItem);
    })


    let cartQuantity_inputs = document.querySelectorAll(".cart__quantity");
    cartQuantity_inputs.forEach(input => {
        input.addEventListener("change", handle_changeItemQuantity);
    })


    let addCart_btns = document.querySelectorAll(".product__cart");
    addCart_btns.forEach((btn) => {
        btn.addEventListener("click", handle_addCartItem);
    })

    const btn_buy = document.querySelector(".btn__buy");
    btn_buy.addEventListener("click", handle_buyOrder);
}

let itemsAdded = [];

function handle_addCartItem() {
    let product = this.parentElement;
    let title = product.querySelector(".product__title").innerHTML;
    let price = product.querySelector(".product__price").innerHTML;
    let imgSrc = product.querySelector(".product__image").src;
    console.log(title,price,imgSrc);

    let newToAdd = {
        title,
        price,
        imgSrc,
        };

    if(itemsAdded.find((el) => el.title == newToAdd.title)) {
        alert ("You already have this item in your cart")
        return;
    } else {
        itemsAdded.push(newToAdd);
    }

    let cartBoxElement = cartBoxComponent(title,price,imgSrc);
    let newNode = document.createElement("div");
    newNode.innerHTML = cartBoxElement;
    const cartContent = cart.querySelector(".cart__content");
    cartContent.appendChild(newNode);

    update();
}


function handle_removeCartItem() {
    this.parentElement.remove();
    itemsAdded = itemsAdded.filter((el) => 
    el.title != 
    this.parentElement.querySelector(".cart__product__title").innerHTML);

    update();
}

function handle_changeItemQuantity() {
    if (isNaN(this.value) || this.value < 1) {
        this.value = 1;
    }
    this.value = Math.floor(this.value);

    update();
}

function handle_buyOrder() {
    if (itemsAdded.length <= 0) {
        alert ("You haven't any items in your cart");
        return;
    }
    const cartContent = cart.querySelector(".cart__content");
    cartContent.innerHTML = '';
    alert("Your order has been successfully processed!");
    itemsAdded = [];

    update();


}



function updateTotal() {
    let cartBoxes = document.querySelectorAll(".cart__box");
    const totalElement = cart.querySelector(".total__price");
    let total = 0;
    cartBoxes.forEach((cartBox) => {
        let priceElement = cartBox.querySelector(".cart__product__price");
        let price = parseFloat(priceElement.innerHTML.replace(" ", " RUB"));
        let quantity = cartBox.querySelector(".cart__quantity").value;
        total += price * quantity;
    })

        total = total.toFixed(3);
        totalElement.innerHTML = total + " RUB";
}

function cartBoxComponent(title,price,imgSrc){
    return `
    <div class="cart__box">
        <img src =${imgSrc} alt = "" class="cart__image">
        <div class="detail__box">
        <div class="cart__product__title">${title}</div>
        <div class="cart__product__price">${price}</div>
        <input class="cart__quantity" type="number" value="1">
        </div>
        <img class="cart__remove" src="https://cdn-icons-png.flaticon.com/512/8568/8568959.png" alt="">
        </div>`;
}