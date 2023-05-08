<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>{{ $contenu->titre }} - divIA</title>
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

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('page.accueilclient') }}">div<strong>IA</strong></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page.accueilclient') }}">Accueil</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page.login') }}">Se connecter</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="{{ route('page.accueilclient') }}">Accueil</a></li>
                                    <li class="breadcrumb-item"><a>Contenu</a></li>
                                    <li class="breadcrumb-item active">{{ $contenu->titre }}</li>
                                </ol>

                                <span class="color-orange"><a>IA</a></span>

                                <h1>{{ $contenu->titre }}</h1>
                                <div class="blog-meta big-meta">
                                    <small>{{ $contenu->date }}</small>
                                </div><!-- end meta -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="data:image/png;base64,{{ $contenu->photo }}" alt="{{ $contenu->titre }}" style="height: 515px;">
                            </div><!-- end media -->

                            <div class="blog-content">
                                <div class="pp">
                                    <p>{{ $contenu->description }}</p>
                                </div><!-- end pp -->
                            </div><!-- end content -->
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
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