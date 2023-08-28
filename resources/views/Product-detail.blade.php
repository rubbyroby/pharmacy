<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Roby Pharmacy - Products Detail</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="import/css/bootstrap.min.css" rel="stylesheet">

        <link href="import/css/bootstrap-icons.css" rel="stylesheet">

        <link href="import/css/templatemo-tiya-golf-club.css" rel="stylesheet">
        

    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="{{url('/Home')}}">
                        <img src="import/images/comprimes.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                        <span class="navbar-brand-text">
                            Roby
                            <small>Pharmacy</small>
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/Home#section_1')}}">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/Home#section_2')}}">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/Home#section_3')}}">Membership</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/Home#section_4')}}">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/Home#section_5')}}">Contact Us</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{url('/Products-Listing')}}">Products Listing</a></li>

                                    <li><a class="dropdown-item active" href="{{url('/product-detail')}}">Product Detail</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="#" method="post" role="form">

                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number">Membership No.</label>

                                <input type="text" name="member-login-number" id="member-login-number" class="form-control" placeholder="11002560" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password">Password</label>

                                <input type="password" name="member-login-password" id="member-login-password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>

                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Login</button>
                            </div>

                            <div class="text-center my-4">
                                <a href="#">Forgotten password?</a>
                            </div>
                        </div>
                    </form>

                    <div class="mt-auto mb-5">
                        <p>
                            <strong class="text-white me-3">Any Questions?</strong>

                            <a href="tel: 065-273-4790" class="contact-link">
                            	065-273-4790
                            </a>
                        </p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            

            <section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">

                            <h1 class="text-white mb-4 pb-2">Product Detail</h1>

                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Learn more</a>
                        </div>

                    </div>
                </div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>


            <section class="events-section events-detail-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-12 mx-auto">
                            <h2 class="mb-lg-5 mb-4">Roby Pharmacy's Products</h2>

                            <div class="custom-block-image-wrap">
                                <img src="import/images/avene.jpg" class="custom-block-image img-fluid" alt="">
                            </div>

                            <div class="custom-block-info">
                                <h3 class="mb-3">AVENE</h3>

                                    <p>Avec l'âge tout s'accélère. Les cellules vieillissantes se propagent et la peau fonctionne au ralenti. Les laboratoires dermatologiques Avène créent le sérum Hyaluron Activ B3, hautement concentré en acide hyaluronique pur et niacinamide pour agir sur la cause du vieillissement et prolonger la vie des cellules. Grâce à sa formule minimaliste contenant uniquement 8 ingrédients, ce sérum apporte un effet tenseur dès 15 jours. Dès 15 jours, la peau est repulpée, plus ferme et plus élastique. Testé sur peaux sensibles, ce soin sans parfum est adapté à toutes les zones du visage, même le contour de l'oeil. Le sérum concentré repulpant Hyaluron Activ B3 est un soin éco-conçu contenant 94% d'ingrédients d'origine naturelle, sans ingrédients d’origine animale, dans un flacon pipette en verre recyclable.</p>

                                <div class="events-detail-info row my-5">
                                    <div class="col-lg-12 col-12">
                                        <h4 class="mb-3">Product Detail</h4>
                                    </div>

                                    <!-- <div class="col-lg-4 col-12">
                                        <span class="custom-block-span">Date:</span>

                                        <p class="mb-0">18 Mar 2048</p>
                                    </div>

                                    <div class="col-lg-4 col-12 my-3 my-lg-0">
                                        <span class="custom-block-span">Location:</span>

                                        <p class="mb-0">Tiya Golf Club</p>
                                    </div> -->

                                    <div class="col-lg-4 col-12">
                                        <span class="custom-block-span">Price:</span>

                                        <p class="mb-0">$25</p>
                                    </div>
                                </div>
                                    <!-- 
                                <div class="contact-info">
                                    <div class="contact-info-item">
                                        <div class="contact-info-body">
                                            <strong>London, United Kingdom</strong>

                                            <p class="mt-2 mb-1">
                                                <a href="tel: 065-273-4790" class="contact-link">
                                                    (212) 
                                                    065-273-4790
                                                </a>
                                            </p>
    
                                            <p class="mb-0">
                                                <a href="mailto:info@company.com" class="contact-link">
                                                    info@roby.com
                                                </a>
                                            </p>
                                        </div>

                                        <div class="contact-info-footer">
                                            <a href="https://goo.gl/maps/7aDWcjDiZjyRmPHJ8">Directions</a>
                                        </div>
                                    </div>

                                    <img src="import/images/WorldMap.svg" class="img-fluid" alt="">
                                </div> -->
                            </div>

                            <div class="custom-block-image-wrap">
                                <img src="import/images/avene.jpg" class="custom-block-image img-fluid" alt="">
                            </div>

                            <div class="custom-block-info">
                                <h3 class="mb-3">EUCERIN</h3>

                                    <p>Avec l'âge, la production naturelle d'Acide Hyaluronique de notre peau décroît : des rides et ridules se forment, la peau paraît moins jeune. Le Soin de Nuit HYALURON-FILLER agit sur les premiers signes de l'âge. Il repulpe sensiblement les ridules et les rides même profondes pour une peau à l'apparence plus jeune, tout en favorisant la régénération de la peau.</p>
                                <div class="events-detail-info row my-5">
                                    <div class="col-lg-12 col-12">
                                        <h4 class="mb-3">Product Detail</h4>
                                    </div>

                                    <!-- <div class="col-lg-4 col-12">
                                        <span class="custom-block-span">Date:</span>

                                        <p class="mb-0">18 Mar 2048</p>
                                    </div>

                                    <div class="col-lg-4 col-12 my-3 my-lg-0">
                                        <span class="custom-block-span">Location:</span>

                                        <p class="mb-0">Tiya Golf Club</p>
                                    </div> -->

                                    <div class="col-lg-4 col-12">
                                        <span class="custom-block-span">Price:</span>

                                        <p class="mb-0">$35</p>
                                    </div>
                                </div>
<!-- 
                                <div class="contact-info">
                                    <div class="contact-info-item">
                                        <div class="contact-info-body">
                                            <strong>London, United Kingdom</strong>

                                            <p class="mt-2 mb-1">
                                                <a href="tel: 065-273-4790" class="contact-link">
                                                    (212) 
                                                    065-273-4790
                                                </a>
                                            </p>
    
                                            <p class="mb-0">
                                                <a href="mailto:info@company.com" class="contact-link">
                                                    info@roby.com
                                                </a>
                                            </p>
                                        </div>

                                        <div class="contact-info-footer">
                                            <a href="https://goo.gl/maps/7aDWcjDiZjyRmPHJ8">Directions</a>
                                        </div>
                                    </div>

                                    <img src="import/images/WorldMap.svg" class="img-fluid" alt="">
                                </div> -->
                            </div>

                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="{{url('/Home')}}">
                            <img src="import/images/comprimes.png" class="navbar-brand-image img-fluid" alt="">
                            <span class="navbar-brand-text">
                                Roby
                                <small>Pharmacy</small>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <h5 class="site-footer-title mb-4">Join Us</h5>

                        <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                            <span>Mon-Fri</span>
                            9:00 AM - 6:00 PM
                        </p>

                        <p class="d-flex me-lg-3">
                            <span>Sat-Sun</span>
                            10:30 AM - 4:30 PM
                        </p>
                        <br>
                        <p class="copyright-text">Copyright © 2023 Roby Pharmacy</p>
                    </div>

                        <div class="col-lg-2 col-12 ms-auto">
                            <ul class="social-icon mt-lg-5 mt-3 mb-4">
                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/rabab_sadouk/?hl=fr" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://twitter.com/RababSadouk" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://wa.me/qr/HZJ57DM5JMNHL1" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <!-- <p class="copyright-text">Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p> -->
                        </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="import/js/jquery.min.js"></script>
        <script src="import/js/bootstrap.bundle.min.js"></script>
        <script src="import/js/jquery.sticky.js"></script>
        <script src="import/js/custom.js"></script>

    </body>
</html>