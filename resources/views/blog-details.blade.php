<!DOCTYPE html>
<html lang="en">
@include('layouts.top')

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
  @include('layouts.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url({{asset('img/bg-img/66.avif')}});background-color: rgba(0,0,0,0.4); background-blend-mode: overlay;">
            <h2>SINGLE BLOG POST</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title">Garden designers across the country forecast ideas shaping the gardening world in 2018</h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 19 Jun 2018</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Mason Jenkins</a>
                                </div>
                                <div class="post-thumbnail mb-30">
                                    <img src="img/bg-img/35.jpg" alt="">
                                </div>
                                <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                                <div class="row mb-30">
                                    <div class="col-lg-7">
                                        <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                                        <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="img/bg-img/36.jpg" alt="">
                                    </div>
                                </div>
                                <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                                        <h5>Richard Jefferies</h5>
                                    </div>
                                </blockquote>
                                <h4>Plant the love of the holy ones within your spirit.</h4>
                                <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                                <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>
                            </div>
                        </div>

                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex justify-content-between align-items-center">
                            <!-- Tags -->
                            <ol class="popular-tags d-flex align-items-center flex-wrap">
                                <li><span>Tag:</span></li>
                                <li><a href="#">PLANTS</a></li>
                                <li><a href="#">CACTUS</a></li>
                            </ol>
                            <!-- Share -->
                            <div class="post-share">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h4 class="headline">2 Comments</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/37.jpg" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Simona Halep</h5>
                                                <span class="comment-date">09:00 AM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <div class="comment-wrapper d-flex">
                                                <!-- Comment Meta -->
                                                <div class="comment-author">
                                                    <img src="img/bg-img/38.jpg" alt="">
                                                </div>
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Rafael Nadal</h5>
                                                        <span class="comment-date">09:30 AM,  20 Jun 2018</span>
                                                    </div>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                    <a class="active" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/39.jpg" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Maria Sharapova</h5>
                                                <span class="comment-date">02:20 PM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <!-- Leave A Comment -->
                        <div class="leave-comment-area clearfix">
                            <div class="comment-form">
                                <h4 class="headline">Leave A Comment</h4>

                                <div class="contact-form-area">
                                    <!-- Comment Form -->
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact-name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Post Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <form action="#" method="get" class="search-form">
                                <input type="search" name="search" id="widgetSearch" placeholder="Search...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Author Widget -->
                            <div class="author-widget">
                                <div class="author-thumb-name d-flex align-items-center">
                                    <div class="author-thumb">
                                        <img src="img/bg-img/29.jpg" alt="">
                                    </div>
                                    <div class="author-name">
                                        <h5>Alan Jackson</h5>
                                        <p>Editor</p>
                                    </div>
                                </div>
                                <p>I’m the editor for houseplants &amp; garden design articles on social, and I like to put each of those articles in the topic.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Recent post</h4>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/30.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Harris Bugg design for Bridgewater</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/31.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>The designers will create a new kitchen garden</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/32.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>SGD Members win Best of Houzz Design Award</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/33.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Shepherding Vegetables From Roof to Restaurant</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Tag Cloud</h4>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">PLANTS</a></li>
                                <li><a href="#">NEW PRODUCTS</a></li>
                                <li><a href="#">CACTUS</a></li>
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">NEWS</a></li>
                                <li><a href="#">TRENDING</a></li>
                                <li><a href="#">VIDEO</a></li>
                                <li><a href="#">GARDEN DESIGN</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>BEST SELLER</h4>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Cactus Flower</a>
                                    <p>$10.99</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Tulip Flower</a>
                                    <p>$11.99</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/34.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Recuerdos Plant</a>
                                    <p>$9.99</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
  @include('layouts.footer')
    <!-- ##### Footer Area End ##### -->

@include('layouts.bottom')
</body>

</html>