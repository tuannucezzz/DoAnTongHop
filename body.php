<div class="main main-raised">
    <div class="container mainn-raised" style="width:100%;">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->


            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="img/banner1.jpg" alt="Los Angeles" style="width:100%;">

                </div>

                <div class="item">
                    <img src="img/banner2.jpg" style="width:100%;">

                </div>

                <div class="item">
                    <img src="img/banner3.jpg" alt="New York" style="width:100%;">

                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <!-- SECTION -->
    <div class="section mainn mainn-raised">


        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <a href="products.php?cat_id=1">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="./img/alienware3.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Laptop<br>Gaming</h3>
                                <a href="products.php?cat_id=1" class="cta-btn">Mua ngay <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <a href="products.php?cat_id=2">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="./img/msi5.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Laptop<br>Văn Phòng</h3>
                                <a href="products.php?cat_id=2" class="cta-btn">Mua ngay <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <a href="products.php?cat_id=3">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="./img/apple1.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Laptop<br>Đồ Họa</h3>
                                <a href="products.php?cat_id=3" class="cta-btn">Mua ngay <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="products.php?cat_id=4">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="./img/lg6.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Laptop<br>Mỏng nhẹ</h3>
                                <a href="products.php?cat_id=4" class="cta-btn">Mua ngay <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->



    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Sản phẩm mới nhất</h3>
                        <div class="section-nav">
                            <!-- <ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul> -->
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12 mainn mainn-raised">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">

                                    <?php
                                    include 'db.php';


                                    $product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                                    $run_query = mysqli_query($con, $product_query);
                                    if (mysqli_num_rows($run_query) > 0) {

                                        while ($row = mysqli_fetch_array($run_query)) {
                                            $pro_id    = $row['product_id'];
                                            $pro_cat   = $row['product_cat'];
                                            $pro_brand = $row['product_brand'];
                                            $pro_title = $row['product_title'];
                                            $pro_price = number_format($row['product_price'], 0, '', ',') . 'Đ';
                                            $pro_image = $row['product_image'];

                                            $cat_name = $row["cat_title"];

                                            echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>92,849,000Đ</del></h4>
										<div class='product-rating'>";
                                            $rating_query = "SELECT ROUND(AVG(rating),1) AS avg_rating  FROM reviews WHERE product_id='$pro_id '";
                                            $run_review_query = mysqli_query($con, $rating_query);
                                            $review_row = mysqli_fetch_array($run_review_query);

                                            if ($review_row > 0) {
                                                $avg_count = $review_row["avg_rating"];
                                                $i = 1;
                                                while ($i <= round($avg_count)) {
                                                    $i++;
                                                    echo '
													<i class="fa fa-star"></i>';
                                                }
                                                $i = 1;
                                                while ($i <= 5 - round($avg_count)) {
                                                    $i++;
                                                    echo '
													<i class="fa fa-star-o empty"></i>';
                                                }
                                            }
                                            echo "</div>
										<div class='product-btns'>
											<button pid='$pro_id' id='wishlist' class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>Thêm vào danh sách ưa thích</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>So sánh</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>Xem nhanh</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> Thêm vào giỏ hàng</button>
									</div>
								</div>
                               
							
                        
			";
                                        };
                                    }
                                    ?>
                                    <!-- product -->


                                    <!-- /product -->


                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <!-- <div id="hot-deal" class="section mainn mainn-raised"> -->
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Ngày</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Giờ</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Phút</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Giây</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">Giảm giá sâu trong tuần</h2>
                    <p>Sản phẩm mới giảm giá 20% </p>
                    <a class="primary-btn cta-btn" href="store.php">Nhấn vào đây</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->


<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản phẩm bán chạy</h3>
                    <div class="section-nav">
                        <!-- <ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Formals</a></li>
									<li><a data-toggle="tab" href="#tab2">Shirts</a></li>
									<li><a data-toggle="tab" href="#tab2">T-Shirts</a></li>
									<li><a data-toggle="tab" href="#tab2">Pants</a></li>
								</ul> -->
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12 mainn mainn-raised">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                <?php
                                include 'db.php';


                                $product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 25";
                                $run_query = mysqli_query($con, $product_query);
                                if (mysqli_num_rows($run_query) > 0) {

                                    while ($row = mysqli_fetch_array($run_query)) {
                                        $pro_id    = $row['product_id'];
                                        $pro_cat   = $row['product_cat'];
                                        $pro_brand = $row['product_brand'];
                                        $pro_title = $row['product_title'];
                                        $pro_price = number_format($row['product_price'], 0, '', ',') . 'Đ';
                                        $pro_image = $row['product_image'];

                                        $cat_name = $row["cat_title"];

                                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>92,849,000Đ</del></h4>
										<div class='product-rating'>";
                                        $rating_query = "SELECT ROUND(AVG(rating),1) AS avg_rating  FROM reviews WHERE product_id='$pro_id '";
                                        $run_review_query = mysqli_query($con, $rating_query);
                                        $review_row = mysqli_fetch_array($run_review_query);

                                        if ($review_row > 0) {
                                            $avg_count = $review_row["avg_rating"];
                                            $i = 1;
                                            while ($i <= round($avg_count)) {
                                                $i++;
                                                echo '
													<i class="fa fa-star"></i>';
                                            }
                                            $i = 1;
                                            while ($i <= 5 - round($avg_count)) {
                                                $i++;
                                                echo '
													<i class="fa fa-star-o empty"></i>';
                                            }
                                        }
                                        echo "</div>
										<div class='product-btns'>
											<button pid='$pro_id' id='wishlist' class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>Thêm vào danh sách ưa thích</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>So sánh</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>Xem nhanh</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> Thêm vào giỏ hàng</button>
									</div>
								</div>
                               
							
                        
			";
                                    };
                                }
                                ?>

                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Sản phẩm bán chạy</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>


                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div id="get_product_home">
                        <!-- product widget -->

                        <!-- product widget -->
                    </div>

                    <div id="get_product_home2">
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/acer1.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">62,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/acer2.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">68,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/acer3.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">54,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Sản phẩm bán chạy</h4>
                    <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-4">
                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/alienware1.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">20,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/alienware2.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">20,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/alienware3.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">24,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/samsung1.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">52,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/samsung2.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">22,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/samsung3.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">12,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>
                </div>
            </div>

            <div class="clearfix visible-sm visible-xs">

            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Sản phẩm bán chạy</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-5">
                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/apple1.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">20,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/apple2.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">25,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/apple3.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">22,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/alienware1.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">20,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->


                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/alienware2.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">32,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./product_images/alienware3.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">tên sản phẩm </a></h3>
                                <h4 class="product-price">28,849,000Đ <del class="product-old-price">92,849,000Đ</del>
                                </h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
</div>