<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/linea.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <title>Natours | Exciting tours for adventurous people</title>
</head>

<body>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>
        
        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span> Natours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Your benefits</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Popular tours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Book now</a></li>
            </ul>
        </nav>
    </div>
    <header class="header">
        <div class="header__logo-box">
            <img src="img/logo-white.png" alt="Logo" class="header__logo">
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Outdoors</span>
                <span class="heading-primary--sub">is where life happens</span>
            </h1>

            <a href="#" class="btn btn--white btn--animated">Discover our tours </a>
        </div>
    </header>
    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exiting tours for adventurous people
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
                    <p class="paragraph">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo error minus ea voluptate esse
                        deserunt praesentium hic nobis nihil? Fugiat, tempore nemo nihil ex repellendus laborum in nulla
                        doloribus maxime?
                    </p>

                    <h3 class="heading-tertiary u-margin-bottom-small">Live adventues like you never have before</h3>
                    <p class="paragraph">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, tempore nemo nihil ex
                        repellendus laborum in nulla doloribus maxime?
                    </p>

                    <a href="#" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">

                            <img srcset="img/nat-1.jpg 300w, img/nat-1-large.jpg 1000w"
                            size="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                            alt="Photo 1" 
                            class="composition__photo composition__photo--p1"
                            src="img/nat-1-large.jpg">

                            <img srcset="img/nat-2.jpg 300w, img/nat-2-large.jpg 1000w"
                            size="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                            alt="Photo 2" 
                            class="composition__photo composition__photo--p2"
                            src="img/nat-2-large.jpg">

                            <img srcset="img/nat-3.jpg 300w, img/nat-3-large.jpg 1000w"
                            size="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                            alt="Photo 3" 
                            class="composition__photo composition__photo--p3"
                            src="img/nat-3-large.jpg">

                        <!--
                        <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">-->
                    </div>
                </div>

            </div>

        </section>

        <section class="section-features">


            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="icon-basic-world feature-box__icon"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Explore the World</h3>
                        <p class="feature-box__text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat,
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="icon-basic-compass feature-box__icon"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                        <p class="feature-box__text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat,
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="icon-basic-map feature-box__icon"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                        <p class="feature-box__text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat,
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="icon-basic-heart feature-box__icon"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life!</h3>
                        <p class="feature-box__text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat,
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-tours">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Most popular tours
                </h2>
            </div>
            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">
                                    The sea explorer
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tour</li>
                                    <li>Up to 30 people</li>
                                    <li>2 rout guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$297</p>
                                </div>
                                <a href="#" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">
                                    The forest hiker
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>7 day tour</li>
                                    <li>Up to 40 people</li>
                                    <li>6 tour guides</li>
                                    <li>Sleep in provided tents</li>
                                    <li>Difficulty: medium</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$497</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">
                                    The snow adventurer
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>5 day tour</li>
                                    <li>Up to 15 people</li>
                                    <li>3 tour guides</li>
                                    <li>Sleep in provided</li>
                                    <li>Difficulty: hard</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$897</p>
                                </div>
                                <a href="#" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-big">
                <a href="#" class="btn btn--green">Discover all tours</a>
            </div>

        </section>

        <section class="section-stories">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="img/video.mp4" type="video/mp4">
                    <source src="img/video.webm" type="video/webm">
                    Your browser is not supporterd!
                </video>
            </div>
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    We make people genuinely happy
                </h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-8.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">
                            Mary Smith
                        </figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-9.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">
                            Jack Wilson
                        </figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">WOW! My life is completly different now</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat, Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Fugiat, Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Fugiat
                        </p>
                    </div>
                </div>
            </div>
            <div class="u-center-text u-margin-top-big">
                <a href="#" class="btn-text">Read all stories &rarr;</a>
            </div>
        </section>

        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Start booking now
                            </h2>
                        </div>

                        <form action="#" class="form">
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full Name" id="name" required>
                                <label for="name" class="form__label">Full Name</label>
                            </div>
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Small tour group</label>
                                </div>
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Small tour group</label>
                                </div>
                            </div>

                            <div class="form_group">
                                <button class="btn btn--green">Next step &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__logo-box">

            <picture class="footer__logo">
                <source srcset="img/logo-green-small-1x.png 1x,img/logo-green-small-2x.png 2x" 
                media="(max-width: 37.5rem)">
                    <img srcset="img/logo-green-1x.png 1x, img/logo-green-2x.png, 2x" alt="Full logo" src="img/logo-green-2x.png">
            </picture>
            
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Build by <a href="#" class="footer__link">Jeremie Beluche</a> for his online course <a href="#" class="footer__link">advanced CSS and Sass</a> Copyright &copy; by Jonas. You are 100% allowed to use this web page for both personal and commercial use, but NOT to claim it as your own design! A credit to the original author, is of course highly appreciated!
                </p>
            </div>
        </div>
    </footer>

    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
                <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
            </div>
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small"> Start booking now</h2>
                <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read the terms before booking!</h3>
                <p class="popup__text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.</p>
                <a href="#" class="btn btn--green">Book now</a>
            </div>
        </div>
    </div>


    <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>

                <div class="col-1-of-2">
                        Col 1 of 2
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>

                <div class="col-1-of-3">
                        Col 1 of 3
                </div>

                <div class="col-1-of-3">
                        Col 1 of 3
                </div>
            </div>

            <div class="row">
                    <div class="col-1-of-3">
                        Col 1 of 3
                    </div>
    
                    <div class="col-2-of-3">
                            Col 2 of 3
                    </div>   
            </div>

            <div class="row">
                    <div class="col-1-of-4">
                        Col 1 of 4
                    </div>
    
                    <div class="col-1-of-4">
                            Col 1 of 4
                    </div>
    
                    <div class="col-1-of-4">
                            Col 1 of 4
                    </div>

                    <div class="col-1-of-4">
                            Col 1 of 4
                    </div>
                </div>

                <div class="row">
                        <div class="col-1-of-4">
                            Col 1 of 4
                        </div>
        
                        <div class="col-1-of-4">
                                Col 1 of 4
                        </div>
        
                        <div class="col-2-of-4">
                                Col 2 of 4
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-1-of-4">
                                Col 1 of 4
                            </div>
            
                            <div class="col-3-of-4">
                                    Col 3 of 4
                            </div>
                        </div>

        </section>
    -->

</body>

</html>