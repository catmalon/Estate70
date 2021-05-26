<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓮海70 | 租屋資訊網</title>

    <!-- Google Font -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet"> --}}

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
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
                            <a href="/property/create" class="hw-btn">我要刊登</a>
                            <a href="/login" class="hw-btn">房東登入</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

        <!-- Search Section Begin -->
        <section class="search-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-title">
                            <h4>想找什麼租屋？</h4>
                        </div>
                    </div>
                </div>
                <div class="search-form-content">
                    <form action="{{ route('property.index') }}" method="get" class="filter-form">
                        <select class="sm-width" name="location_city">
                            <option value="">不限</option>
                            <option value="鼓山區">鼓山區</option>
                            <option value="鹽埕區">鹽埕區</option>
                            <option value="前金區">前金區</option>
                            <option value="新興區">新興區</option>
                            <option value="其他">其他</option>
                        </select>
                        <select class="sm-width" name="type">
                            <option value="">不限</option>
                            <option value="獨立套房">獨立套房</option>
                            <option value="分租套房">分租套房</option>
                            <option value="雅房">雅房</option>
                            <option value="整層住家">整層住家</option>
                            <option value="獨棟">獨棟</option>
                        </select>
                        <select class="sm-width" name="room">
                            <option value="">不限</option>
                            <option value="1">1房</option>
                            <option value="2">2房</option>
                            <option value="3">3房</option>
                            <option value="4">4房</option>
                            <option value="over_5">5房以上</option>
                        </select>
                        <div class="room-size-range-wrap sm-width">
                            <div class="price-text">
                                <label for="roomsizeRange">坪數 :</label>
                                <input name="size" type="text" id="roomsizeRange" readonly>
                            </div>
                            <div id="roomsize-range" class="slider"></div>
                        </div>
                        <div class="price-range-wrap sm-width">
                            <div class="price-text">
                                <label for="priceRange">月租金（新台幣）:</label>
                                <input name="price" type="text" id="priceRange" readonly>
                            </div>
                            <div id="price-range" class="slider"></div>
                        </div>
                        <div><br></br><br></br><br></br></div>
                        <div class="more-option">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mo-list">
                                            <div class="ml-column">
                                                <label for="air">冷氣
                                                    <input name="air" type="checkbox" id="air">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <label for="lundry">洗衣機
                                                    <input name="lundry" type="checkbox" id="lundry">
                                                    <span class="checkbox"></span>
                                            </div>
                                            <div class="ml-column">
                                                </label>
                                                <label for="gas">天然瓦斯
                                                    <input name="gas" type="checkbox" id="gas">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <label for="wifi">Wi-Fi網路
                                                    <input name="wifi" type="checkbox" id="wifi">
                                                    <span class="checkbox"></span>
                                                </label>
                                            </div>
                                            <div class="ml-column">
                                                <label for="balcony">陽台
                                                    <input name="balcony" type="checkbox" id="balcony">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <label for="elevator">電梯
                                                    <input name="elevator" type="checkbox" id="elevator">
                                                    <span class="checkbox"></span>
                                                </label>
                                            </div>
                                            <div class="ml-column last-column">
                                                <label for="notRooftop">排除頂樓加蓋
                                                    <input name="notRooftop" type="checkbox" id="notRooftop">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <label for="pet">可養寵物
                                                    <input name="pet" type="checkbox" id="pet">
                                                    <span class="checkbox"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="search-btn sm-width">搜尋</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- Search Section End -->


    <!-- Property Section Begin -->
    <section class="property-section spad">
        <div class="container">
                <div class="row">
                    @foreach ($rents as $rent)
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item">
                            <a href="/property/{{$rent->id}}">
                                <div class="pi-pic set-bg" data-setbg="/storage/{{$rent->images[0]->file_path}}">
                                    <div class="label">For rent</div>
                                </div>
                                <div class="pi-text">
                                    <div class="pt-price">$ {{$rent->price}}<span>/月</span></div>
                                    <p><span class="icon_pin_alt"></span> {{$rent->location_city}} {{$rent->location_detail}}</p>
                                    <ul>
                                        <li><i class="fa fa-object-group"></i> {{$rent->size}} 坪</li>
                                        <li><i class="fa fa-bed"></i> {{$rent->room}} 房</li>
                                        <li><i class="fa fa-server"></i> {{$rent->type}}</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            
            
        </div>
    </section>
    

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