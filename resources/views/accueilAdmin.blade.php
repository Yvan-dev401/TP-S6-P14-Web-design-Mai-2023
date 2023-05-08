<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>divIA : site d'informations sur l'IA</title>
<meta name="description" content="L'intelligence artificielle (IA) est une technologie en pleine expansion qui transforme notre monde à un rythme rapide. Les informations sur l'IA sont essentielles pour comprendre comment elle peut affecter notre vie quotidienne et notre avenir en tant que société.">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="css/version/tech.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('page.accueiladmin') }}">div<strong>IA</strong></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page.accueiladmin') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page.gestioncontenu') }}">Contenus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page.insertcontenu') }}">Insertion de contenu</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page.accueilclient') }}">Déconnexion</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <!-- Les 3 contenus affiché dès le début -->
        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    @if(isset($contenus[0]))
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                            <img src="data:image/png;base64,{{ $contenus[0]->photo }}" alt="{{ $contenus[0]->titre }}" style="height: 515px;">
                            <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="#" title="">IA</a></span>
                                        <h4><a href="{{ route('page.gestioncontenu') }}">{{ $contenus[0]->titre }}</a></h4>
                                        <small>{{ $contenus[0]->date }}</small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->
                    @endif
                    @if(isset($contenus[1]))
                    <div class="second-slot">
                        <div class="masonry-box post-media">
                            <img src="data:image/png;base64,{{ $contenus[1]->photo }}" alt="{{ $contenus[1]->titre }}" style="height: 515px;">
                            <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="#">IA</a></span>
                                        <h4><a href="{{ route('page.gestioncontenu') }}">{{ $contenus[1]->titre }}</a></h4>
                                        <small>{{ $contenus[1]->date }}</small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                    @endif
                    @if(isset($contenus[2]))
                    <div class="last-slot">
                        <div class="masonry-box post-media">
                            <img src="data:image/png;base64,{{ $contenus[2]->photo }}" alt="{{ $contenus[2]->titre }}" style="height: 515px;">
                            <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="#">IA</a></span>
                                        <h4><a href="{{ route('page.gestioncontenu') }}">{{ $contenus[2]->titre }}</a></h4>
                                        <small>{{ $contenus[2]->date }}</small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                </div><!-- end masonry -->
                @endif
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h1 class="pull-left">Informations sur l'IA <i class="fa fa-rss"></i></h1>
                            </div><!-- end blog-top -->
                            @if(isset($contenus[3]))
                            @for ($i = 3; $i < (count($contenus)); $i++) <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="data:image/png;base64,{{ $contenus[$i]->photo }}" alt="{{ $contenus[$i]->titre }}">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{ route('page.gestioncontenu') }}">{{ $contenus[$i]->titre }}</a></h4>
                                        <p>{{ $contenus[$i]->description }}</p>
                                        <small class="firstsmall"><a class="bg-orange">IA</a></small>
                                        <small>{{ $contenus[$i]->date }}</small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                        </div><!-- end row -->
                        @endfor
                        @endif
                    </div><!-- end container -->
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Découvrez un des outils d'IA le plus puissant en ce moment : <a href="https://openai.com/blog/chatgpt">Présentation de ChatGPT</a>.</div>
                        <br>
                        <div class="copyright">&copy; ETU001521.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>