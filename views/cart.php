<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= asset("img/breadcrumb.jpg")?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section ng-controller="myctrl" class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody ng-show="checkCart">
                            <tr ng-repeat="cart in carts"> 
                                <td class="shoping__cart__item">
                                    <img src="/upload_file/{{cart.img_sp}}" alt="">
                                    <h5>{{cart.ten_sp}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{cart.gia_sp}}
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty btn">
                                            <input ng-change="updateSL(cart.ma_sp)" ng-model="cart.Soluong" type="number" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                {{cart.tTien}}
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span ng-click="xoa_sp(cart.ma_sp)" class="icon_close"></span>
                                </td>
                            </tr>
                        </tbody>
                            <h3 ng-hide="checkCart">Không có sản phẩm trong giỏ nè</h3>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                        Upadate Cart</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Tổng cộng</h5>
                    <ul>
                        <li>Số tiền là:<span>{{Tong_tien}}đ</span></li>
                    </ul>
                    <a href="{{thanh_toan}}" class="primary-btn">THANH TOÁN</a>
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
<script>
    app.controller("myctrl", function($scope, $http){
        $scope.thanh_toan = "";
        $scope.carts = [];
        if(!localStorage['cart']){
            $scope.thanh_toan = "/login";
        }else{
            $scope.thanh_toan = "/order";
        }


        let carts = [];
        $scope.checkCart = false;
        $scope.updateSL = (ma_sp)=>{
           $scope.carts.forEach((val,index)=>{
                if(val.ma_sp === ma_sp){
                    val.tTien = val.Soluong * (val.gia_sp);
                }
            })
            localStorage['cart'] = JSON.stringify($scope.carts);
            updateTien();
        }
        $scope.xoa_sp = (ma_sp)=>{
            $scope.carts.forEach((val,index)=>{
                if(val.ma_sp  === ma_sp){
                    $scope.carts.splice(index,1); 
                }
            })
            localStorage['cart'] = JSON.stringify($scope.carts);
            updateTien();
        }
        $scope.Tong_tien = 0;
        function updateTien(){
            // hàm này sẽ foreach $scope.carts
            // lấy tổng tiền từng cái cộng lại rồi gán zoo $scope.tongtien
            $scope.Tong_tien = 0;
            if(localStorage['cart']){
                $scope.carts.forEach((val, index)=> {
                    $scope.Tong_tien += val.tTien;
                    console.log($scope.Tong_tien);
                })
            }else{
                $scope.Tong_tien = 0;
            }
        }
        if(localStorage['cart']){
            carts = JSON.parse(localStorage['cart']);
            $scope.checkCart = true;
        }

        
        $scope.carts = carts;
        updateTien();
    })
</script>