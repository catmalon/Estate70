<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓮海70 | 房屋細節</title>

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

    <!-- Property Details Section Begin -->
    <section class="property-details-section">
        <div class="container">
            <!-- <div class="row"> -->
                <!-- <div class="col-lg-8"> -->
                    <div class="pd-text">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="pd-title">
                                    <br/>
                                    <p><span class="icon_pin_alt"></span> {{$rent->location_city}} {{$rent->location_detail}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">租屋內容</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">房東說明</a>
                                    </li> --}}
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tab-details">
                                            <ul class="left-table">
                                                <li>
                                                    <span class="type-name">房間型態</span>
                                                    <span class="type-value">{{$rent->type}}</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">房間數量</span>
                                                    <span class="type-value">{{$rent->room}} 間</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">價格</span>
                                                    <span class="type-value">$ {{$rent->price}} / 每月</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">可否養寵物</span>
                                                    <span class="type-value">{{$noPet}}</span>
                                                </li>
                                                
                                            </ul>
                                            <ul class="right-table">
                                                <li>
                                                    <span class="type-name">坪數</span>
                                                    <span class="type-value">{{$rent->size}} 坪</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">樓層</span>
                                                    <span class="type-value">{{$rent->floor}} 樓</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">是否為頂樓加蓋</span>
                                                    <span class="type-value">{{$notRooftop}}</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">房東提供</span>
                                                    <span class="type-value">{{$equString}}</span>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="tab-desc">
                                            {{$rent->comment}}
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolor itaque facere consequatur, dignissimos minus adipisci ipsam repudiandae nisi illum provident, natus quidem vero? Quaerat ducimus sequi praesentium commodi, consectetur corporis eos sit perspiciatis, quae sed officia error, iure quasi.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolor itaque facere consequatur, dignissimos minus adipisci ipsam repudiandae nisi illum provident, natus quidem vero? Quaerat ducimus sequi praesentium commodi, consectetur corporis eos sit perspiciatis, quae sed officia error, iure quasi.</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <br></br>
                            @foreach ($rent->images as $image)
                                <img src="/storage/{{$image->file_path}}" width="800px"/>
                            @endforeach
                        </div>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </section>
    <!-- Property Details Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-text">
                                <h5>租屋地址</h5>
                                <p>{{$rent->location_city}} {{$rent->location_detail}}</p>
                            </div>
                        </div>
                        
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="ci-text">
                                <h5>房東姓名</h5>
                                <p>{{$landlord->name}}</p>
                            </div>
                        </div>

                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <h5>房東電話</h5>
                                <ul>
                                    <li>{{$landlord->phone}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="cs-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d735515.5813275519!2d-80.41163541934742!3d43.93644386501528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882a55bbf3de23d7%3A0x3ada5af229b47375!2sMono%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sbd!4v1583262687289!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen=""></iframe>
        </div> --}}
    </section>
    <!-- Contact Section End -->

    <!--Tenant order Start-->
    <section class="property-submit-section spad">
        <div class="container">
            <div class="property-submit-form">
                <form action="{{ route('forTenant.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="pf-property-details">
                        <h4>我想要租</h4>
                        <div class="property-details-inputs">
                            <input type="text" placeholder="姓名" name="tenant_name" id="_name">
                            <input type="text" placeholder="電話 (e.g., 0911000111)" name="tenant_phone" id="_phone">
                            <input type="text" placeholder="E-mail" name="tenant_mail" id="_mail">
                        </div>
                        <button type="submit" class="site-btn">送出</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Tenant order End-->

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