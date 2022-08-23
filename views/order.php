 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg= <?= asset("img/breadcrumb.jpg")?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section ng-controller="myctrl" class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form>
                    <div class="row justify-content-center"  >                            
                        <div class="col-lg-6 col-md-8">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <li>Username<span><?=$_SESSION['khach_hang']['username']?></span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>{{Tong_tien}}</span></div>
                                <div class="checkout__checkbox">
                                    <label for="acc-or">
                                        <a href="/login">Nếu bạn chưa có tài khoản?</a>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button class="site-btn" ng-click="dat_hang()">ĐẶT HÀNG</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    <script>
        app.controller("myctrl", function($scope, $http){
            $scope.Tong_tien = 0;   
            let cart = JSON.parse(localStorage['cart']);
            cart.forEach((val,index) =>{
                $scope.Tong_tien += val.tTien;
            })

            $scope.dat_hang = function(){
                let dataOder = {
                    dataOder: JSON.parse(localStorage['cart'])
                }
                $http({
                    method: "POST",
                    url: "/api/oder",
                    data: dataOder
                }).then(res =>{
                    let data = res.data;
                    localStorage.clear('cart');
                    alert(data);
                    window.location.href="/";
                })
            }
        })
    </script>