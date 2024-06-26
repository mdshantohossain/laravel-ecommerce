    // cart product added here
var length = document.querySelectorAll('.cardBtn').length;
for(let i = 0; i < length; i++){
    document.querySelectorAll('.cardBtn')[i].onclick = function () {
        $.ajax({
            type: 'GET',
            url: "/cart-product-add-by-ajax",
            data: {id: $(this).data('id')},
            dataType: "JSON",
            success: function (res) {
                if (res[0] === 'success') {
                    $('#cartCount').text(res[2]);
                    toastr.success(res[1]);
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
    }
}

    // wishlist added here
let len = document.querySelectorAll('.wishlistBtn').length;
for (let i = 0; i< len; i++){
    document.querySelectorAll('.wishlistBtn')[i].onclick = function (){
        $.ajax({
            type: 'GET',
            url: "/product-add-wishlist-by-ajax",
            data: {id: $(this).data('id')},
            dataType: 'JSON',
            success: function (res){
                console.log(res)
                if(res[0] === 'success') {
                    $('#wishlistCount').text(res[1])
                    toastr.success(res[1])
                } else {
                    toastr.warning(res[1])
                }
            },
            error: function (err){
                console.log(err)
            }
        })
    }
}

document.addEventListener('DOMContentLoaded', function (){
    $.ajax({
        type: "GET",
        url: '/get-cart-product',
        success: function (res){
            if (res[0] === 'success') {
                res[1].map((product, index) => {
                    console.log(product);
                })
            }
        },
        error: function (err){
            console.log(err)
        }
    });
});

    // username check
$('#username').keyup(function (){
    $.ajax({
        url: '/username-check-bia-ajax',
        type: 'GET',
        data: {value: $(this).val()},
        dataType: 'JSON',
        success: function (res){
            if (res[0] === true) {
                $('#usernameError').text(res[1]);
            } else {
                $('#usernameError').text('');
            }
        },
        error: function (err){
            console.log(err);
        }
    })
})
