@extends('master')

@section('content')

    <body class="home blog halimthemes halimmovies" data-masonry="">

        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>
            <div class="col-xs-12 carausel-sliderWidget">
                <section id="halim-advanced-widget-4">
                    <div class="section-heading">
                        <a href="#" title="Phim Chiếu Rạp">
                            <span class="h-text">Phim mới</span>
                        </a>
                        <ul class="heading-nav pull-right hidden-xs">
                            <li class="section-btn halim_ajax_get_post" data-catid="4" data-showpost="12"
                                data-widgetid="halim-advanced-widget-4" data-layout="6col"><span
                                    data-text="Chiếu Rạp"></span></li>
                        </ul>
                    </div>

                    <div id="halim-advanced-widget-4-ajax-box" class="halim_box">
                        @foreach ($listMovieTheaters as $movieTheater)
                            <article class="col-md-2 col-sm-4 col-xs-6 thumb grid-item post-38424">
                                <div class="halim-item">
                                    <a class="halim-thumb" href="#" title="{{ $movieTheater->name }}">
                                        <figure><img class="lazy img-responsive"
                                                src="{{ url('movies/' . $movieTheater->image) }}"
                                                alt="{{ $movieTheater->name }}" title="GÓA PHỤ ĐEN"></figure>
                                        <span class="status">HD</span><span class="episode"><i
                                                class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                                        <div class="icon_overlay"></div>
                                        <div class="halim-post-title-box">
                                            <div class="halim-post-title ">
                                                <p class="entry-title">{{ $movieTheater->name }}</p>
                                                <p class="original_title">Black Widow</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>

                </section>
                <div class="clearfix"></div>
            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                <section id="halim-advanced-widget-2">
                    <div class="section-heading">
                        <a href="danhmuc.php" title="Phim Bộ">
                            <span class="h-text">Phim Bộ</span>
                        </a>
                    </div>
                    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">

                        @foreach ($listMovieSeries as $movieSerie)
                            <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                                <div class="halim-item">
                                    <a class="halim-thumb" href="#">
                                        <figure><img class="lazy img-responsive"
                                                src="{{ url('movies/' . $movieSerie->image) }}"
                                                alt="{{ $movieSerie->name }}" title="{{ $movieSerie->name }}">
                                        </figure>
                                        <span class="status">TẬP 15</span><span class="episode"><i
                                                class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                                        <div class="icon_overlay"></div>
                                        <div class="halim-post-title-box">
                                            <div class="halim-post-title">
                                                <p class="entry-title">{{ $movieSerie->name }}</p>
                                                <p class="original_title">My Roommate Is a Gumiho</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </section>
                <div class="clearfix"></div>
                <section id="halim-advanced-widget-2">
                    <div class="section-heading">
                        <a href="danhmuc.php" title="Phim Lẻ">
                            <span class="h-text">Phim Lẻ</span>
                        </a>
                    </div>
                    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">

                        @foreach ($listMovieOdds as $movieOdd)
                            <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                                <div class="halim-item">
                                    <a class="halim-thumb" href="chitiet.php">
                                        <figure><img class="lazy img-responsive"
                                                src="{{ url('movies/' . $movieOdd->image) }}"
                                                alt="{{ $movieOdd->name }}" title="{{ $movieOdd->name }}">
                                        </figure>
                                        <span class="status">TẬP 15</span><span class="episode"><i
                                                class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                                        <div class="icon_overlay"></div>
                                        <div class="halim-post-title-box">
                                            <div class="halim-post-title ">
                                                <p class="entry-title">{{ $movieOdd->name }}</p>
                                                <p class="original_title">My Roommate Is a Gumiho</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </section>
                <div class="clearfix"></div>
                <section id="halim-advanced-widget-2">
                    <div class="section-heading">
                        <a href="#" title="Phim Lẻ">
                            <span class="h-text">Phim Chiếu Rạp</span>
                        </a>
                    </div>
                    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">

                        @foreach ($listMovieTheaters as $movieTheater)
                            <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                                <div class="halim-item">
                                    <a class="halim-thumb" href="#">
                                        <figure><img class="lazy img-responsive"
                                                src="{{ url('movies/' . $movieTheater->image) }}"
                                                alt="{{ $movieTheater->name }}"
                                                title="{{ $movieTheater->name }}">
                                        </figure>
                                        <span class="status">TẬP 15</span><span class="episode"><i
                                                class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                                        <div class="icon_overlay"></div>
                                        <div class="halim-post-title-box">
                                            <div class="halim-post-title ">
                                                <p class="entry-title">{{ $movieTheater->name }}</p>
                                                <p class="original_title">My Roommate Is a Gumiho</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </section>
                <div class="clearfix"></div>
            </main>
            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
                <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                    <div class="section-bar clearfix">
                        <div class="section-title">
                            <span>Top Views</span>
                            <ul class="halim-popular-tab" role="tablist">
                                <li role="presentation" class="active">
                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                        data-type="today">Day</a>
                                </li>
                                <li role="presentation">
                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                        data-type="week">Week</a>
                                </li>
                                <li role="presentation">
                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                        data-type="month">Month</a>
                                </li>
                                <li role="presentation">
                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                        data-type="all">All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <section class="tab-content">
                        <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                            <div class="halim-ajax-popular-post-loading hidden"></div>
                            <div id="halim-ajax-popular-post" class="popular-post">
                                <div class="item post-37176">
                                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                        <div class="item-link">
                                            <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                                class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                                title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                            <span class="is_trailer">Trailer</span>
                                        </div>
                                        <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang"
                                            style="display: block;/* width: 100%; */">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="item post-37176">
                                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                        <div class="item-link">
                                            <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                                class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                                title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                            <span class="is_trailer">Trailer</span>
                                        </div>
                                        <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang"
                                            style="display: block;/* width: 100%; */">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="item post-37176">
                                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                        <div class="item-link">
                                            <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                                class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                                title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                            <span class="is_trailer">Trailer</span>
                                        </div>
                                        <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang"
                                            style="display: block;/* width: 100%; */">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="item post-37176">
                                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                        <div class="item-link">
                                            <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                                class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                                title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                            <span class="is_trailer">Trailer</span>
                                        </div>
                                        <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang"
                                            style="display: block;/* width: 100%; */">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="item post-37176">
                                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                        <div class="item-link">
                                            <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                                class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                                title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                            <span class="is_trailer">Trailer</span>
                                        </div>
                                        <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang"
                                            style="display: block;/* width: 100%; */">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="item post-37176">
                                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                        <div class="item-link">
                                            <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                                class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                                title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                            <span class="is_trailer">Trailer</span>
                                        </div>
                                        <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang"
                                            style="display: block;/* width: 100%; */">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="item post-37176">
                                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                        <div class="item-link">
                                            <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                                class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                                title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                            <span class="is_trailer">Trailer</span>
                                        </div>
                                        <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang"
                                            style="display: block;/* width: 100%; */">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                </div>
            </aside>
        </div>

        <style>
            #overlay_mb {
                position: fixed;
                display: none;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 99999;
                cursor: pointer
            }

            #overlay_mb .overlay_mb_content {
                position: relative;
                height: 100%
            }

            .overlay_mb_block {
                display: inline-block;
                position: relative
            }

            #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
                width: 600px;
                height: auto;
                position: relative;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                text-align: center
            }

            #overlay_mb .overlay_mb_content .cls_ov {
                color: #fff;
                text-align: center;
                cursor: pointer;
                position: absolute;
                top: 5px;
                right: 5px;
                z-index: 999999;
                font-size: 14px;
                padding: 4px 10px;
                border: 1px solid #aeaeae;
                background-color: rgba(0, 0, 0, 0.7)
            }

            #overlay_mb img {
                position: relative;
                z-index: 999
            }

            @media only screen and (max-width: 768px) {
                #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
                    width: 400px;
                    top: 3%;
                    transform: translate(-50%, 3%)
                }
            }

            @media only screen and (max-width: 400px) {
                #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
                    width: 310px;
                    top: 3%;
                    transform: translate(-50%, 3%)
                }
            }

        </style>

        <style>
            #overlay_pc {
                position: fixed;
                display: none;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 99999;
                cursor: pointer;
            }

            #overlay_pc .overlay_pc_content {
                position: relative;
                height: 100%;
            }

            .overlay_pc_block {
                display: inline-block;
                position: relative;
            }

            #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
                width: 600px;
                height: auto;
                position: relative;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            #overlay_pc .overlay_pc_content .cls_ov {
                color: #fff;
                text-align: center;
                cursor: pointer;
                position: absolute;
                top: 5px;
                right: 5px;
                z-index: 999999;
                font-size: 14px;
                padding: 4px 10px;
                border: 1px solid #aeaeae;
                background-color: rgba(0, 0, 0, 0.7);
            }

            #overlay_pc img {
                position: relative;
                z-index: 999;
            }

            @media only screen and (max-width: 768px) {
                #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
                    width: 400px;
                    top: 3%;
                    transform: translate(-50%, 3%);
                }
            }

            @media only screen and (max-width: 400px) {
                #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
                    width: 310px;
                    top: 3%;
                    transform: translate(-50%, 3%);
                }
            }

        </style>

        <style>
            .float-ck {
                position: fixed;
                bottom: 0px;
                z-index: 9
            }

            * html .float-ck

            /* IE6 position fixed Bottom */
                {
                position: absolute;
                bottom: auto;
                top: expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop, 10)||0)-(parseInt(this.currentStyle.marginBottom, 10)||0)));
            }

            #hide_float_left a {
                background: #0098D2;
                padding: 5px 15px 5px 15px;
                color: #FFF;
                font-weight: 700;
                float: left;
            }

            #hide_float_left_m a {
                background: #0098D2;
                padding: 5px 15px 5px 15px;
                color: #FFF;
                font-weight: 700;
            }

            span.bannermobi2 img {
                height: 70px;
                width: 300px;
            }

            #hide_float_right a {
                background: #01AEF0;
                padding: 5px 5px 1px 5px;
                color: #FFF;
                float: left;
            }

        </style>
    </body>
@endsection
