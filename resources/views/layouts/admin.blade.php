<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/main.css')}} ">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<body>
                 
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__logo">BOOK STORE</div>
                        <div class="left__profile">
                            <div class="left__image"><img src="{{asset('assets/nguyencuson.jpg')}}" alt=""></div>
                            @if(Auth::check())
                                <p class="left__name">
                                  {{ Auth::user()->username  }}
                                </p>
                             @endif
                        </div>
                     
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a href="{{ route('/admin/index') }}" class="left__title"><img src="{{asset('assets/icon-dashboard.svg')}}" alt="">{{ __('message.Home') }}</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/grid.svg')}}" alt="">Th??? Lo???i<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('category.create') }}">Th??m Th??? Lo???i</a>
                                    <a class="left__link" href="{{ route('category.index') }}">Xem Th??? Lo???i</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/icon-tag.svg')}}" alt="">S???n Ph???m<img class="left__iconDown" src="{{asset('')}}assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('product.create') }}">Th??m S???n Ph???m</a>
                                    <a class="left__link" href="{{ route('product.index') }}">Xem S???n Ph???m</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/tag-alt.svg')}}" alt="">Khuy???n m???i<img class="left__iconDown" src="{{asset('')}}assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('discount.create') }}">Th??m khuy???n m???i</a>
                                    <a class="left__link" href="{{ route('discount.index') }}">Li???u k?? danh s??ch</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/icon-pencil.svg')}}" alt="">Tin t???c<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('news.create') }}">Th??m tin </a>
                                    <a class="left__link" href="{{ route('news.index') }}">Qu???n l?? tin t???c</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/icon-edit.svg')}}" alt="">????n h??ng<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="">Th??m ????n h??ng</a>
                                    <a class="left__link" href="{{ route('order.index') }}">Li???t k?? ????n h??ng</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/icon-picture.svg')}}" alt="">{{ __('message.Images') }}<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('picture.create') }}">Th??m h??nh ???nh</a>
                                    <a class="left__link" href="{{ route('picture.index') }}">Xem h??nh ???nh</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/icon-book.svg')}}" alt="">Qu???n l?? quy???n<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('role.index') }}">Xem quy???n</a>
                                    <a class="left__link" href="{{ route('role.create') }}">Th??m quy???n</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/icon-users.svg')}}" alt="">Kh??ch h??ng<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('customer.create') }}">Th??m kh??ch h??ng</a>
                                    <a class="left__link" href="{{ route('customer.index') }}">Xem kh??ch h??ng</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/icon-user.svg')}}" alt="">Ng?????i d??ng<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{ route('user.create') }}">Th??m ng?????i d??ng</a>
                                    <a class="left__link" href="{{ route('user.index') }}">Xem ng?????i d??ng</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="{{ route('contact_admin.index') }}" class="left__title"><img src="{{asset('assets/envelope-alt.svg')}}" alt="">Qu???n l?? li??n h???</a>
                            </li>
                            <li class="left__menuItem">
                                <a href="{{ route('comment.index') }}" class="left__title"><img src="{{asset('assets/chat.svg')}}" alt="">Qu???n l?? b??nh lu???n</a>
                            </li>
                          
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/line-chart.svg')}}" alt="">Th???ng k?? s???n ph???m<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="/statistic/index">Th???ng k?? s???n ph???m</a>
                                    <a class="left__link" href="/statistic/comment_count">????nh gi?? n???i b???t</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/chart.svg')}}" alt="">Th???ng k?? ????n h??ng<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="/statistic/order_pay">Th???ng k?? ????n h??ng</a>
                                    <a class="left__link" href="/statistic/order_highlight">????n h??ng n???i b???t</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/poll.svg')}}" alt="">Th???ng k?? h??ng th??ng<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="/statistic/order_time">Th???ng k?? doanh thu</a>
                                    <a class="left__link" href="/statistic/order_count">Th???ng k?? s??? l?????ng</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/poll.svg')}}" alt="">Th???ng k?? theo qu??<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="/statistic/order_quarter">Th???ng k?? doanh thu theo qu??</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('assets/poll.svg')}}" alt="">Th???ng k?? d???ng bi???u ?????<img class="left__iconDown" src="{{asset('assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="/statistic/chart/revenue">Th???ng k?? doanh thu</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                    <a href="{{ route('logout') }}" class="left__title"><img src="{{asset('assets/icon-logout.svg')}}" alt="">????ng Xu???t</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="right__content">
                        @yield('admin_content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" />

   <script>
        CKEDITOR.replace("ckeditor");
        CKEDITOR.replace("ckeditor1");
        CKEDITOR.replace("ckeditor2");
        CKEDITOR.replace("ckeditor3");
    </script>
    <script>
        $(function () { 
            getRevenueToday();
            $('.year').change(function () { 
                $('#form_year').submit();
            });
            $('.count').change(function () { 
                $('#form_count').submit();
            });
            $('.hight').change(function () { 
                $('#form_hight').submit();
            });

            var chart = new Morris.Bar({
                element: 'myfirstchart',
                lineColors: [
                    '#819C79', '#fc8710','#FF6541', '#A4ADD3', '#766D56'
                ],
                xkey: 'period',
                ykeys: ['order', 'quantity'],
                labels: ['Doanh thu','S??? l?????ng'],
                fillOpacity: 0.6,
                hideHover: 'auto',
                behaveLikeLine: true,
                resize: true,
                parseTime: false,
                pointFillColors:['#ffffff'],
                pointStrokeColors: ['black'],
            });

            // filter from date to date
            $('#btn-revenue-filter-by-date').click(function() { 
                var _token = $('input[name="_token"]').val();
                var from_date = $('#datepicker').val();
                var to_date = $('#datepicker2').val();
                $.ajax({
                    url: "{{ url('/statistic/chart/filter_by_date') }}",
                    method: "POST",
                    dataType: "JSON",
                    data: {from_date: from_date, to_date: to_date, _token: _token},
                    success: function(data){
                        chart.setData(data);
                    }
                });
            });

            // filter by month
            $('#btn-revenue-filter-by-month').click(function() { 
                var _token = $('input[name="_token"]').val();
                var month = $('.revenue-filter-month').val();
                var year = $('.revenue-filter-year').val();
                $.ajax({
                    url: "{{ url('/statistic/chart/filter_by_month_year') }}",
                    method: "POST",
                    dataType: "JSON",
                    data: {month: month, year: year, _token: _token},
                    success: function(data){
                        chart.setData(data);
                    }
                });         
            });

            // filter by year
            $('#btn-revenue-filter-by-year').click(function() { 
                var _token = $('input[name="_token"]').val();
                var year = $('.revenue-filter-year').val();
                $.ajax({
                    url: "{{ url('/statistic/chart/filter_by_year') }}",
                    method: "POST",
                    dataType: "JSON",
                    data: {year: year, _token: _token},
                    success: function(data){
                        chart.setData(data);
                    }
                });         
            });

            // filter by choose option
            $('.revenue-filter-choose').change(function () { 
                var filter_value = $(this).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ url('/statistic/chart/get_revenue_filter_date') }}",
                    method: "POST",
                    data: {filter_value: filter_value, _token: _token},
                    dataType: "JSON",
                    success: function (data) {                    
                        chart.setData(data);
                    }
                });
            });

            // get today
            function getRevenueToday() { 
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ url('/statistic/chart/get_revenue_today') }}",
                    method: "POST",
                    data: { _token: _token},
                    dataType: "JSON",
                    success: function(data){
                        chart.setData(data);
                    }
                });
             }

             //filter by quater
             $('#btn-revenue-filter-by-quater').click(function() { 
                var _token = $('input[name="_token"]').val();
                var year = $('.revenue-filter-quater').val();
                $.ajax({
                    url: "{{ url('/statistic/chart/filter_by_quater') }}",
                    method: "POST",
                    dataType: "JSON",
                    data: {year: year, _token: _token},
                    success: function(data){
                        chart.setData(data);
                    }
                });         
            });
        })
    </script>
</body>
</html>