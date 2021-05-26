<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓮海70 | 房東管理頁面</title>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Property Section Begin -->
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                @foreach ($rents as $rent)
                <div class="col-lg-4 col-md-6">
                    <div class="property-item">
                        <a href="/property/{{$rent->id}}">
                            <div class="pi-pic set-bg" data-setbg="/storage/{{$rent->images[0]->file_path}}">
                                @if ($rent->state === 0) 
                                    <div class="label"> 有申請待確認 </div>
                                @endif
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
                        @if ($rent->state === 0)
                            <form action="/confirm/{{$rent->id}}" method="get" enctype="multipart/form-data">
                                <button type="submit" class="site-btn"> 確認申請 </button>
                            </form>
                        @endif
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