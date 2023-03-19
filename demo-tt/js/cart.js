$(window).load(function() {
    var open_cart = document.querySelector('.cart');
    var cart_shop = document.querySelector('.cart_shop');
    var remove_cart = document.querySelector('.remove_cart');
    open_cart.addEventListener('click', () =>{
        cart_shop.classList.add('cart_shop2');
    })

    remove_cart.addEventListener('click', () =>{
        cart_shop.classList.remove('cart_shop2');
    })
    var add_cart = document.querySelectorAll('.add_cart');
    add_cart.forEach((item) => {
        item.addEventListener('click', (event) => {
            var click_add = event.target;
            var product = click_add.parentElement.parentElement;
            var product_img = product.querySelector('img').src;
            var name_product = product.querySelector('h2').innerText;
            var price_product = product.querySelector('p').innerText.slice(0,-1);
           
            add_infomation(product_img, name_product, price_product); 
            alert("thêm vào giỏ hàng thành công");
        })
    })
    function add_infomation(product_img, name_product, price_product){
    
        
        var add_tr = document.createElement('tr');
        var tr_content = '<tr><td ><img style="width: 80px" src="'+product_img+'" alt=""><span class="tilte">'+name_product+'</span></td><td><p><span class="prices">'+price_product+'</span><sup></sup></p></td><td><input  type="number" value="1" min="1" max="10"></td><td ><span class="delete-card">Xóa</span></td></tr>';
        add_tr.innerHTML = tr_content;
        var cart_table = document.querySelector('tbody');
        cart_table.append(add_tr);
        delete_card();
        card_total();
    }
    function delete_card(){
        var card_item = document.querySelectorAll('tbody tr');
        for(var i = 0; i < card_item.length; i++){
            var delete_ = document.querySelectorAll('.delete-card');
            delete_[i].addEventListener('click', (event) => {
                var events = event.target;
                var parent_card = events.parentElement.parentElement;
                parent_card.remove();
                card_total();
                
            })
            
        }
    }
    function card_total(){
        var card_item = document.querySelectorAll('tbody tr');
        var total_money = 0;
        for(var i = 0; i < card_item.length; i++){
            var input_value = card_item[i].querySelector('input').value;
            var product_price = card_item[i].querySelector('.prices').innerText.slice(0,-4);
            total_core =  product_price * input_value*1000000; 
            total_money += total_core;
        }
        var total = document.querySelector('.price-total span')
        total.innerText = total_money.toLocaleString('de-DE'); 
        input_change(); 
    }
    function input_change(){
        var card_item = document.querySelectorAll('tbody tr');
        for(var i = 0; i < card_item.length; i++){
            var input_value = card_item[i].querySelector('input');
            input_value.addEventListener('change', () => {
                card_total();
            })

        }
    }
  });