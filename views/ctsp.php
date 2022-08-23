<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg=<?= asset("img/breadcrumb.jpg")?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Vegetable’s Package</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad" ng-controller="ctrl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="/upload_file/<?=$data['load_ctsp']['img_sp']?>" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="/upload_img/<?=$data['b']['img1']?>"
                                src="/upload_img/<?=$data['b']['img1']?>" alt="">
                            <img data-imgbigurl="/upload_img/<?=$data['b']['img2']?>"
                                src="/upload_img/<?=$data['b']['img2']?>" alt="">
                            <img data-imgbigurl="/upload_img/<?=$data['b']['img3']?>"
                                src="/upload_img/<?=$data['b']['img3']?>" alt="">
                            <img data-imgbigurl="/upload_img/<?=$data['b']['img4']?>"
                                src="/upload_img/<?=$data['b']['img4']?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?=$data['load_ctsp']['ten_sp']?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price"><?= $data['load_ctsp']['gia_sp']?>/kg</div>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <!-- <span class="dec qtybtn">-</span> -->
                                    <input type="text" ng-model="slInput" value="1">
                                    <!-- <span class="inc qtybtn">+</span> -->
                                </div>
                            </div>
                        </div>
                        <a href="" ng-click="addCart(<?= $data['load_ctsp']['ma_sp']?>)" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Khuyến mãi</b> <span>Vận chuyển 2h (Cần Thơ)<samp> Free ship từ 2kg</samp></span></li>
                            <li><b>Quy cách</b> <span>kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Nhận xét <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin sản phẩm</h6>
                                    <p><?=$data['load_ctsp']['ctsp']?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Nhận xét</h6>
                                    <p>Chức năng đang phát triển</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                foreach($data['a'] as $valllll){
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="/upload_file/<?=$valllll['img_sp']?>">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="/ctsp?ma_sp=<?=$valllll['ma_sp']?>&ma_dm=<?=$valllll['ma_dm']?>"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="/ctsp?ma_sp=<?=$valllll['ma_sp']?>&ma_dm=<?=$valllll['ma_dm']?>"><?=$valllll['ten_sp']?></a></h6>
                        <h5><?=$valllll['gia_sp']?>đ</h5>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<!-- Related Product Section End -->
<script>
    app.controller("ctrl", function($scope,$http){
        let slInput = $scope.slInput = 1;
        $scope.addCart = (ma_sp)=>{
            let id_sp = ma_sp;
            $http.get("/api/cart?ma_sp="+id_sp).then(res=>{
                let product = res.data;
                product.Soluong = slInput;
                product.tTien = $scope.slInput * (product.gia_sp);
                // console.log(product);
                if(!localStorage['cart']){
                    let arr = [];
                    arr.push(product);
                    localStorage['cart'] = JSON.stringify(arr);
                    alert("Thêm giỏ hàng thành công");
                    console.log(arr);
                }else{
                    let arr = JSON.parse(localStorage['cart']);
                        arr.push(product);
                    localStorage['cart'] = JSON.stringify(arr);
                    alert("Thêm giỏ hàng thành công");
                }
            })
        }
    });
</script>