<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓮海70 | 屋主刊登</title>

    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet"> -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/richtext.min.css" type="text/css">
    <link rel="stylesheet" href="/css/image-uploader.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
    
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/"><img src="/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <a href="/login" class="hw-btn">房東登入</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->


    <!-- Property Submit Section Begin -->
    <section class="property-submit-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-submit-form">
                        <form action="{{ route('property.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="pf-location">
                                <p>*為必填</p>
                                <h4>租屋地址*</h4>
                                <div class="location-inputs">
                                    <select class="city-width" name="location_city">
                                        <option value="不限">不限</option>
                                        <option value="鼓山區">鼓山區</option>
                                        <option value="鹽埕區">鹽埕區</option>
                                        <option value="前金區">前金區</option>
                                        <option value="新興區">新興區</option>
                                        <option value="其他">其他</option>
                                    </select>
                                    <input type="text" name="location_detail" placeholder="詳細地址">
                                    <br><br/>
                                </div>
                            </div>
                            <div class="pf-type">
                                <h4>租屋型態*</h4>
                                <div class="type-item">
                                    <label for="pt-studio">獨立套房
                                        <input name="type" type="radio" id="pt-studio" value="獨立套房">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-suite">分租套房
                                        <input name="type" type="radio" id="pt-suite" value="分租套房">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-room">雅房
                                        <input name="type" type="radio" id="pt-room" value="雅房">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-apartment">整層住家
                                        <input name="type" type="radio" id="pt-apartment" value="整層住家">
                                        <span class="checkbox"></span>
                                    </label>
                                    <label for="pt-villa">獨棟
                                        <input name="type" type="radio" id="pt-villa" value="獨棟">
                                        <span class="checkbox"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="pf-feature-price">
                                <h4>每月租金*</h4>
                                <div class="fp-inputs">
                                    <input type="text" placeholder="金額（新台幣）" name="price" id="price">
                                </div>
                            </div>

                            <div class="pf-feature">
                                <h4>房東提供</h4>
                                <div class="features-list">
                                    <div class="feature-item">
                                        <label for="air">冷氣
                                            <input name="air" type="checkbox" id="air" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="lundry">洗衣機
                                            <input name="lundry" type="checkbox" id="lundry" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="refrigerator">冰箱
                                            <input name="refrigerator" type="checkbox" id="refrigerator" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        
                                    </div>
                                    <div class="feature-item">
                                        <label for="gas">天然瓦斯
                                            <input name="gas" type="checkbox" id="gas" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="bed">床
                                            <input name="bed" type="checkbox" id="bed" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="closet">衣櫃
                                            <input name="closet" type="checkbox" id="closet" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        
                                    </div>
                                    <div class="feature-item">
                                        <label for="sofa">沙發
                                            <input name="sofa" type="checkbox" id="sofa" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="balcony">陽台
                                            <input name="balcony" type="checkbox" id="balcony" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="elevator">電梯
                                            <input name="elevator" type="checkbox" id="elevator" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="pet">可養寵物
                                            <input name="pet" type="checkbox" id="pet" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="feature-item">
                                        <label for="TV">電視
                                            <input name="TV" type="checkbox" id="TV" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="tvCable">第四台
                                            <input name="tvCable" type="checkbox" id="tvCable" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="wifi">Wi-Fi網路
                                            <input name="wifi" type="checkbox" id="wifi" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="notRooftop">非頂樓加蓋
                                            <input name="notRooftop" type="checkbox" id="notRooftop" value="on">
                                            <span class="checkbox"></span>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="pf-property-details">
                                <h4>房東資訊*</h4>
                                <div class="property-details-inputs">
                                    <input type="text" placeholder="姓名" name="landlord_name" id="_name">
                                    <input type="text" placeholder="電話 (e.g., 0911000111)" name="landlord_phone" id="_phone">
                                    <input type="text" placeholder="E-mail" name="landlord_mail" id="_mail">
                                </div>
                                <br></br>
                            </div>
                            <div class="pf-feature-image">
                                <h4>租屋圖片</h4>
                                <div class="feature-image-content"></div>
                            </div>
                            <div class="pf-property-details">
                                <h4>租屋細節*</h4>
                                <div class="property-details-inputs">
                                    <input type="text" placeholder="坪數大小" name="size" id="size">
                                    <input type="text" placeholder="房間數" name="room">
                                    <input type="text" placeholder="樓層" name="floor">
                                </div>
                            </div>
                            {{-- <div class="pf-summernote">
                                <br></br>
                                <h4>備註</h4>
                                <textarea class="texteditor-content" name="comment"></textarea>
                            </div> --}}
                            <button type="submit" class="site-btn sm-width">送出</button>
                            <!-- <div class="pf-map">
                                <h4>Goolge Map</h4>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="map-inputs">
                                            <input type="text" placeholder="Latitude">
                                            <input type="text" placeholder="Longitude">
                                            <input type="text" placeholder="Street View">
                                        </div>
                                        <button type="button" class="site-btn">PPlace the pin the address above</button>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="g-map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d735515.5813275519!2d-80.41163541934742!3d43.93644386501528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882a55bbf3de23d7%3A0x3ada5af229b47375!2sMono%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sbd!4v1583262687289!5m2!1sen!2sbd" height="245" style="border:0;" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Submit Section End -->


    <!-- Js Plugins -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.richtext.min.js"></script>
    <script src="/js/image-uploader.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>