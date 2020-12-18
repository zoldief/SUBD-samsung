$('.cart-content').hide();
$(function () {
    //cart
    const element = $('.cart');
    const quantity = document.querySelector('.cart__quantity');
    const list = document.querySelector('.cart-content__list');
    const fullPrice = document.querySelector('.fullPrice');
    const btn = document.querySelectorAll('.offer__btn');
    const deletes = document.querySelectorAll('.cart-product__delete');
    const product = document.querySelectorAll('.cart-product');
    const orderItems = document.querySelector('.cart-form__items');
    const orderFullPrice = document.querySelector('.cart-form__fullPrice');
    const orderModal = document.querySelector('.cart-content__AddToCart');
    const cartItem = document.querySelectorAll('.cart-content__item');
    let price = 0;
    const productArray = [];

    const normalPrice = (str) => {
        return Number(str.replace(/\u0024/, ''));
    };

    const plusFullPrice = (currentPrice) => {
        return price += currentPrice;
    }

    const minusFullPrice = (currentPrice) => {
        return price -= currentPrice;
    }

    const printFullPrice = () => {
        fullPrice.textContent = `${price}$`;
    }

    const printQuantity = () => {
        let length = list.querySelector('.simplebar-content').children.length;
        quantity.textContent = length;
    }

    const deleteProducts = (productParent) => {
        let id = productParent.querySelector('.cart-product').dataset.id;
        document.querySelector(`.product[data-id="${id}"]`).querySelector('.offer__btn').disabled = false;
        let currentPrice = normalPrice(productParent.querySelector('.cart-product__price').textContent);
        minusFullPrice(currentPrice);
        printFullPrice();
        productParent.remove();
        printQuantity();
        if (quantity.textContent == '0') {
            quantity.classList.remove('quantity-active')
        }
    }

    const getCookie = (name) => {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    const generateCartProduct = (img, price, title, id) => {
        return `
        <li class="cart-content__item">
                  <article class="cart-content__product cart-product" data-id="${id}">
                    <img src="${img}" class="cart-product__img" alt="">
                    <div class="cart-product__title">${title}</div>
                    <div class="cart-product__control">
                      <div class="cart-product__count">1pcs</div>
                      <div class="cart-product__price">$${price}</div>
                    </div>
                    <button class="cart-product__delete"><i class="far fa-trash-alt"></i></button>
                  </article>
                </li>
        `;
    }

    btn.forEach(el => {
        el.addEventListener('click', (e) => {
            let self = e.currentTarget;
            let parent = self.closest('.product');
            let id = parent.dataset.id;
            let img = parent.querySelector('.product__img').getAttribute('src');
            let title = parent.querySelector('.product__name').textContent;
            let priceString = parent.querySelector('.product__price').textContent;
            let priceNumber = normalPrice(priceString);
            plusFullPrice(priceNumber);
            printFullPrice();
            list.querySelector('.simplebar-content').insertAdjacentHTML('afterbegin', generateCartProduct(img, priceNumber, title, id));
            printQuantity();
            quantity.classList.add('quantity-active');
            self.disabled = true;
        })
    })

    list.addEventListener('click', (e) => {
        if (e.target.classList.contains('fa-trash-alt')) {
            deleteProducts(e.target.closest('.cart-content__item'));
        }
    });

    if (list.querySelector('.simplebar-content').length < 1) {
        $('.cart-content').hide();
    }

    $('.cart__title').click(function (e) {
        e.preventDefault();
        var clicks = $(this).data('clicks');
        if (!clicks && +quantity.textContent > 0) {
            $('.cart-content').fadeIn();
            $('.user-form').slideUp();
        } else {
            $('.cart-content').slideUp();
        }
        $(this).data("clicks", !clicks);
    });

    orderModal.addEventListener('click', (e) => {
        orderItems.textContent = quantity.textContent;
        orderFullPrice.textContent = fullPrice.textContent;
        let array = list.querySelector('.simplebar-content').children;
        for (item of array) {
            let title = item.querySelector('.cart-product__title').textContent;
            let priceString = normalPrice(item.querySelector('.cart-product__price').textContent);
            let id = item.querySelector('.cart-product').dataset.id;
            let obj = {};
            obj.id = id;
            obj.title = title;
            obj.price = priceString;
            obj.user = +getCookie('user-id');
            productArray.push(obj);
        }
    })

    document.querySelector('.cart-form').addEventListener('submit', (e) => {
        e.preventDefault();
        let formData = new FormData(e.currentTarget);
        formData.append('product', JSON.stringify(productArray));
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    console.log(123);
                }
            }
        }
        xhr.open('POST', 'order.php', true);
        xhr.send(formData);
        e.currentTarget.reset();
        $.magnificPopup.close();
    })
    $('.cart-content__AddToCart').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',
        showCloseBtn: true,
        callbacks: {
            beforeOpen: function () {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            },
            close: function () {
                alert('Oreder compete, expect a call!')
                document.querySelector('.offer__btn').forEach(item => {
                    item.disabled = false;
                })
                price = 0;
                printFullPrice();
                $('.cart-content__item').remove();
                printQuantity();
                $('.cart-content').slideUp();
                if (quantity.textContent == '0') {
                    quantity.classList.remove('quantity-active')
                }
            }
        }
    });
});