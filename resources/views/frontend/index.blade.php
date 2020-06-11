<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href="{{asset('css/index.css')}}" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Comic Neue|Lobster|Rubik|Heebo|Yanone Kaffeesatz|Prompt|Josefin Sans|Fjalla One|Kanit|Anton|VT323|Pacifico|Geo|Questrial|Inconsolata|Kanit|Anton|Poppins|Hammersmith One|Kalam|Josefin Sans|Teko|Montserrat Alternates|Handlee|Ropa Sans|Russo One|Bellota|Electrolize|Prompt|Lobster Two|Source Code Pro|Questrial|Do Hyeon|Acme|Righteous|Kanit|Baloo Bhai 2">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/30eb83224b.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<html>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="https://www.practo.com/" id="item"><img src="{{asset('images/practologo.jpg')}}" class="img img-sm" /></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto" id="navigationbar">
                <li class="nav-item" id="nav1">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item" id="nav1">
                    <a class="nav-link" href="#second">About</a>
                </li>
                <li class="nav-item"id="nav1">
                    <a class="nav-link " href="https://www.practo.com/company/contact" target="_blank">Contact us</a>
                </li>
            </ul>
    </nav>
    <div class="container-fluid" id="first_container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h5>Tired of roaming the entire city for diagnostic tests?</h5>
                <p>
                    Get your diagnostic tests registered at your door-step.<br>
                    Make your life easy and happy.<br>
                    Consult a doctor, upload your prescription here and you are done!<br>
                    We will allocate a test session for you.
                </p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{asset('images/firstimage.jpg')}}" class="img img-fluid img-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col bookbutton">
                <button class="btn btn-sm" id="diagnosticbutton"><a href="tests-page">Book a Diagnostic Test</a></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="button">
            <a class="btn btn-sm" id="explorebutton" href="#second">Explore More</a>
        </div>
    </div>
    <br />
    
    <div class="container-fluid" id="second">
        <h4>
            Your home for health
        </h4>
        <br />
        <div class="row">
            <div class="col col-7">
        <p>For millions of people, Practo is the trusted and familiar home where they know they’ll find a healing touch. It connects them with everything they need to take good care of themselves and their family - assessing health issues, finding the right doctor, booking diagnostic tests, obtaining medicines, storing health records or learning new ways to live healthier.</p>
        </div>
        <div class="col col-5" align="right">
            <img src="{{asset('images/image-1.jpg')}}" class="img img-fluid" />
        </div>
            </div>
        </div>
        <div class="healthsecond">
            <h4>
                Diverse people.<br />
                One purpose.
            </h4>
            </br>
            <div class="row">
                <div class="col col-md-5">
                    <img src="{{asset('images/image-2.jpg')}}" class="img img-fluid" />

                </div>
                <div class="col col-md-7">
                    <p>
                        We are dreamers, thinkers and do-ers rolled into one.Together, we want to improve the healthcare experience for all humanity.<br /> We are guided by our values and driven by our motto to do great. These are not just principles for our products or our company, but they are a reflection of who we are as people.<br />

                    </p>
                </div>
            </div>
        </div>
    <br />
    <div class="dogreat">
        <h3 align="center">
            #DoGreat
        </h3>
        <p>
            Do Great is our motto and is the hallmark of a true Practeon. It signifies the intrinsic motivation in each Practeon to strive for excellence. Every time. This means Practeons do their best work, not for want of rewards or recognitions but because they expect it of themselves.
        </p>
    </div>
    </div>
    <br />
    <div class="container-fluid" id="footer">
        <br />
        <h5 align="center">Contact Us</h5>
        <br />
        <div class="row">
            <div class="col col-9">
                <h6><i class="fas fa-map-marked"></i> Address: <p>
    Salarpuria symbiosis Arekere Village Begur, Bannerghatta Main Rd,<br /> Venugopal Reddy Layout, Uttarahalli Hobli, Bengaluru, Karnataka 560076
</p></h6>
                <h6><i class="fas fa-blog"></i><a href="https://blog.practo.com/" data-toggle="tooltip" data-placement="right" title="Our Blog"> Blog</a></h6>
                <h6><i class="fas fa-newspaper"></i><a href="https://www.practo.com/company/press" data-toggle="tooltip" data-placement="right" title="Latest News"> Press</a></h6>
            </div>
            <div class="col col-3">
                <i class="fab fa-facebook"></i><a href="#"> Facebook</a>
                <br />
                <i class="fab fa-twitter"></i><a href="#"> Twitter</a><br />
                <i class="fab fa-linkedin"></i><a href="#"> Linkedin</a><br />
                <i class="fab fa-youtube"></i><a href="#"> Youtube</a><br />
                <i class="fab fa-github"></i><a href="#"> Github</a><br />
               </div>
        </div>
        <br />
        <div class="image" align="center">
            <img class="img img-fluid" src="{{asset('images/logo.jpg')}}" />
        </div>
        <br />
    </div>
</body>
