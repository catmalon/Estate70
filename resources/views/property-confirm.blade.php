<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓮海70 | 訂單管理</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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

    <!-- Agent Section Begin -->
    <section class="agent-section spad">
        <div class="container">
            <div class="row">
                @foreach ($orders as $order)
                <div class="col-lg-4 col-md-6">
                    <div class="as-item">
                        <div class="as-pic" >
                            <img src="/storage/{{$order->rents->images[0]->file_path}}" alt="">
                        </div>
                        <div class="as-text">
                            @if (($order->state === 1) && ($order->rents->state === 1)) 
                                <div class="rating-point">待確認</div>
                            @elseif ($order->state === 0)
                                <div class="rating-point">已取消</div>
                            @elseif ($order->state === 1)
                                <div class="rating-point">已確認</div>
                            @endif
                            <a href="/property/1">
                                <div class="at-title">
                                    <h6>{{$order->rents->location_city}} {{$order->rents->location_detail}}</h6>
                                    <p>租金：{{$order->rents->price}} / 月  坪數：{{$order->rents->size}} 坪</p>
                                </div>
                            </a>
                            <ul>
                                <li>房客姓名 <span>{{$order->tenants->name}}</span></li>
                                <li>E-mail <span>{{$order->tenants->email}}</span></li>
                                <li>電話 <span>{{$order->tenants->phone}}</span></li>
                                <li>申請時間 <span>{{$order->created_at}}</span></li>
                            </ul>
                            @if (($order->state === 1) && ($order->rents->state === 1))
                                <form action="/confirm" method="post">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                    <button type="submit" class="primary-btn sm-width">確認房客申請</button>
                                </form>
                                <form action="/cancel" method="post">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                    <button type="submit" class="primary-btn sm-width">取消房客申請</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
    <!-- Agent Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>