<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Polda Jatim</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="eBusiness/img/polda.png" rel="icon">
    <link href="eBusiness/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="eBusiness/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="eBusiness/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="eBusiness/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="eBusiness/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="eBusiness/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="eBusiness/lib/animate/animate.min.css" rel="stylesheet">
    <link href="eBusiness/lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="eBusiness/css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="eBusiness/css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="eBusiness/css/responsive.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                    <h1><span><img src="eBusiness/img/polda.png" alt="" title="Polda Jatim"
                                                style="width: 40px;height: 45px;margin-right: 10px"></span>Polda Jatim
                                    </h1>
                                    <!-- Uncomment below if you prefer to use an image logo -->

                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#about">Profil</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#visi">Visi & Misi</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#team">Pejabat Utama</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#blog">News</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">

            <div id="ensign-nivoslider" class="slides">
                @foreach ($slider as $item)
                    <img src="{{ asset('storage/' . $item->slider) }}" alt="" />
                @endforeach
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <h2 class="title1"></h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2"></h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <!-- <a class="ready-btn right-btn page-scroll" href="#services"></a>
                  <a class="ready-btn page-scroll" href="#about"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="slider-content text-center">
                                <!-- layer 1 -->
                                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <!-- <h2 class="title2">Polda JaTim </h2> -->
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <!-- <h1 class="title2">Kepolisian Daerah Jawa Timur</h1> -->
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <!-- <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <!-- <h2 class="title1">Polda JaTim</h2> -->
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <!-- <h1 class="title2">Kepolisian Daerah Jawa Timur</h1> -->
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <!-- <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Kepolisian Daerah Jawa Timur</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-left">
                        <div class="single-well">
                            <a href="#">
                                <img src="{{ asset('storage/' . $logo->logo) }}" alt=""
                                    style="width: 750px;height: 550px;">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <a href="#">
                                <h4 class="sec-head">{{ $profil->judul }}</h4>
                            </a>
                            <p style="text-align: justify">
                                {{ $profil->deskripsi }}
                            </p>
                            <a href="#">
                                <h4 class="sec-head">{{ $profil->judul_1 }}</h4>
                            </a>
                            <p style="text-align: justify">
                                {{ $profil->deskripsi_1 }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End col-->
            </div>
        </div>
    </div>
    <!-- End About area -->

    <!-- Faq area start -->
    <div id="visi" class="faq-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Visi & Misi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="faq-details">
                        <div class="panel-group" id="accordion">
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" class="active" data-parent="#accordion"
                                            href="#check1">
                                            <span class="acc-icons"></span>Visi
                                        </a>
                                    </h4>
                                </div>
                                <div id="check1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p style="text-align: justify">
                                            {!! nl2br($visi->visi) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                            <!-- Panel Default -->
                            {{-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                            <span class="acc-icons"></span> Misi
                                        </a>
                                    </h4>
                                </div>
                                <div id="check2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p style="text-align: justify">
                                            1. Memberikan perlindungan, pengayoman dan pelayanan kepada masyarakat
                                            (meliputi security, surety, safety and peace) sehingga masyarakat terbebas
                                            dari gangguan fisik maupun psikis.
                                        </p>
                                        <p style="text-align: justify">
                                            2. Memberikan bimbingan kepada masyarakat melalui upaya preemtif dan
                                            preventif yang dapat meningkatkan kesadaran dan kekuatan serta kepatuhan
                                            hukum masyarakat(law abiding citizenship).
                                        </p>
                                        <p style="text-align: justify">
                                            3. Menegakkan hukum secara profesional dan proporsional dengan menjunjung
                                            tinggi supremasi hukum dan hak asasi manusia menuju kepada adanya kepastian
                                            hukum dan rasa keadilan.
                                        <p>
                                        <p style="text-align: justify">
                                            4. Memelihara keamanan dan ketertiban masyarakat dengan tetap memperhatikan
                                            norma-norma dan nilai-nilai yang berlaku dalam bingkai integritas wilayah
                                            hukum Polda Jatim.
                                        </p>
                                        <p style="text-align: justify">
                                            5. Mengelola profesionalisme sumberdaya manusia dengan dukungan sarana
                                            prasarana serta meningkatkan upaya konsolidasi dan soliditas Polda Jatim
                                            untuk mewujudkan keamanan di wilayah Jawa Timur sehingga dapat mendorong
                                            meningkatnya gairah kerja guna mencapai kesejahteraan masyarakat.
                                        </p>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- End Panel Default -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="faq-details">
                        <div class="panel-group" id="accordion">
                            <!-- Panel Default -->
                            {{-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" class="active" data-parent="#accordion"
                                            href="#check3">
                                            <span class="acc-icons"></span>Visi
                                        </a>
                                    </h4>
                                </div>
                                <div id="check3" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p style="text-align: justify">
                                            Terwujudnya postur Polda Jatim yang profesional, bermoral, dan modern
                                            sebagai pelindung, pengayom serta pelayan masyarakat yang terpercaya dalam
                                            memelihara Kamtibnas dan menegakkan hukum.
                                        </p>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- End Panel Default -->
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                            <span class="acc-icons"></span> Misi
                                        </a>
                                    </h4>
                                </div>
                                <div id="check4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p style="text-align: justify">
                                            {!! nl2br($visi->misi) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="tab-menu">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#p-view-1" role="tab" data-toggle="tab">PRE</a>
                            </li>
                            <li>
                                <a href="#p-view-2" role="tab" data-toggle="tab">SI</a>
                            </li>
                            <li>
                                <a href="#p-view-3" role="tab" data-toggle="tab">SI</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="p-view-1">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h4>PREdiktif</h4>
                                    <p style="text-align: justify">
                                        Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi
                                        magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor
                                        dolores unde ab, libero quo. Aut, laborum sequi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-2">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h4>ResponSIbilitas</h4>
                                    <p style="text-align: justify">
                                        voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas,
                                        praesentium architecto ducimus, doloribus fuga itaque omnis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-3">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h4>transparanSI</h4>
                                    <p style="text-align: justify">
                                        voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas,
                                        praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- end Row -->
        </div>
    </div>
    <!-- End Faq Area -->

    <!-- Start team Area -->
    <div id="team" class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Pejabat Utama</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-top">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $kapolda->foto) }}" alt="">
                                </a>
                            </div>
                            <div class="team-content text-center">
                                <h4>{{ !empty($kapolda->jabatan) ? $kapolda->jabatan->jabatan : ' ' }}</h4>
                                <p>{{ $kapolda->nama }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <!-- End column -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="margin-top: 15px;">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{ asset('storage/' . $wakapolda->foto) }}" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center">
                            <h4>{{ !empty($wakapolda->jabatan) ? $wakapolda->jabatan->jabatan : ' ' }}</h4>
                            <p>{{ $wakapolda->nama }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <!-- End column -->
            </div>

            <!-- Unsur Pimpinan -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <br>
                        <h3>Unsur Pimpinan</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-top">
                    @foreach ($umum as $item)
                        <div class="col-md-4 "
                            style="width: 20%;margin-right: 50px;margin-left: 92px;margin-bottom: 30px">
                            <div class="single-team-member">
                                <div class="team-img text-center">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt=""
                                            style="width: 180px;height: 170px;">
                                    </a>
                                </div>
                                <div class="team-content text-center">
                                    <h4>{{ !empty($item->jabatan) ? $item->jabatan->jabatan : ' ' }}</h4>
                                    <p>{{ $item->nama }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End column -->
                </div>
            </div>

            <!-- Unsur Pengawas dan Pembantu Pimpinan/Pelayanan -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Unsur Pengawas dan Pembantu Pimpinan/Pelayanan</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-top">
                    @foreach ($pengawas as $item)
                        <div class="col-md-4"
                            style="width: 20%;margin-right: 50px;margin-left: 92px;margin-bottom: 30px">
                            <div class="single-team-member">
                                <div class="team-img text-center">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt=""
                                            style="width: 180px;height: 175px;">
                                    </a>
                                </div>
                                <div class="team-content text-center">
                                    <h4>{{ !empty($item->jabatan) ? $item->jabatan->jabatan : ' ' }}</h4>
                                    <p>{{ $item->nama }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End column -->
                </div>
            </div>

            <!-- Unsur Pelaksana Tugas Pokok -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Unsur Pelaksana Tugas Pokok</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-top">
                    @foreach ($pokok as $item)
                        <div class="col-md-3" style="width: 20%;margin-right: 20px;margin-left: 28px">
                            <div class="single-team-member">
                                <div class="team-img text-center">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt=""
                                            style="width: 180px;height: 175px;">
                                    </a>
                                </div>
                                <div class="team-content text-center">
                                    <h4>{{ !empty($item->jabatan) ? $item->jabatan->jabatan : ' ' }}</h4>
                                    <p>{{ $item->nama }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End column -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->



    <!-- Start Blog Area -->
    <div id="blog" class="blog-area">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>News Polda Jatim</h2>
                </div>
            </div>
        </div>
        {{-- <div class="blog-inner area-padding">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Breaking News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Left Blog -->
                    @foreach ($news as $new)
                        <div class="col-md-3">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $new->gambar) }}" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"> {{ $new->created_at }} </i>
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="#">{{ $new->judul }}</a>
                                    </h4>
                                    <p>
                                        {{ $new->deskripsi }}
                                    </p>
                                </div>
                                <span>
                                    <a href="{{ $new->link }}" class="ready-btn">Read more</a>
                                </span>
                            </div>
                            <!-- Start single blog -->
                        </div>
                    @endforeach
                    <!-- End Left Blog-->
                </div>
            </div>
        </div> --}}

        <?php
        // persiapkan curl
        $ch = curl_init();
        
        // set url
        curl_setopt($ch, CURLOPT_URL, 'https://tribratanews.jatim.polri.go.id/berita/');
        
        // return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        // $output contains the output string
        $output = curl_exec($ch);
        
        // tutup curl
        curl_close($ch);
        
        // menampilkan hasil curl
        echo $output;
        ?>
    </div>
    <!-- End Blog -->

    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call: 110<br>
                                    <span>24 Jam</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: info@example.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Jl. Ahmad Yani No.116, Gayungan,<br>
                                    <span>Kec. Wonocolo, Kota SBY, Jawa Timur 60231</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                <strong>Kepolisian Daerah Jawa Timur</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> --}}

    <!-- JavaScript Libraries -->
    <script src="eBusiness/lib/jquery/jquery.min.js"></script>
    <script src="eBusiness/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="eBusiness/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="eBusiness/lib/venobox/venobox.min.js"></script>
    <script src="eBusiness/lib/knob/jquery.knob.js"></script>
    <script src="eBusiness/lib/wow/wow.min.js"></script>
    <script src="eBusiness/lib/parallax/parallax.js"></script>
    <script src="eBusiness/lib/easing/easing.min.js"></script>
    <script src="eBusiness/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="eBusiness/lib/appear/jquery.appear.js"></script>
    <script src="eBusiness/lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="eBusiness/contactform/contactform.js"></script>

    <script src="eBusiness/js/main.js"></script>
    <script>
        $('.jeg_header_wrapper').hide();
        $('.jeg_vc_content').hide();
        $('.footer-holder').hide();
    </script>
</body>

</html>
