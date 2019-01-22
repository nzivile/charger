<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/vendors/swiper/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
</head>
<body>

<div class="header full-width">
    <div class="header--item">
        <a href="#" class="header--logo"></a>
    </div>
    <div class="header--item header--item__menu">
        <div class="header--menu">
            <a href="#" class="header--menu-link">
                about us
            </a>
            <a href="#" class="header--menu-link">
                services
            </a>
            <a href="#" class="header--menu-link">
                projects
            </a>
        </div>
    </div>
    <div class="header--item">
        <a href="#" class="header--menu-link header--menu-link__burger">
            menu
        </a>
    </div>
</div>

<div class="full-width slider">
    <div class="slider--content">
        <div class="slider--item">
            <div class="slider--action slider--action__prev">
                prev
            </div>
        </div>
        <div class="slider--item slider--item__center">
            <div class="slider--title">
                We're Charger
            </div>
            <div class="slider--description">
                One of the most powerful and recognized brand names in the custom automotive industry.
            </div>
            <div>
                <a href="#" class="slider--button">
                    read more
                </a>
            </div>
        </div>
        <div class="slider--item">
            <div class="slider--action slider--action__next">
                next
            </div>
        </div>
    </div>
    <div class="slider--footer slider--footer__bottom">
        <div class="slider--item">
            <div class="slider--socials">
                <a href="#" class="slider--social-link">
                    Facebook
                </a>
                <a href="#" class="slider--social-link">
                    Twitter
                </a>
                <a href="#" class="slider--social-link">
                    Youtube
                </a>
            </div>
        </div>
        <div class="slider--item slider--item__pro">
            <div class="slider--progress slider--progress__width">
                <div class="slider--progress-number">
                    01
                </div>
                <div class="slider--progr">
                    <div class="slider--progress-line">
                    </div>
                </div>
                <div class="slider--progress-number">
                    10
                </div>
            </div>
        </div>
        <div class="slider--scroll">
            Scroll down
        </div>
    </div>
</div>

<div class="full-width about-us">
    <div class="letter">
        A
    </div>
    <div class="letter-description">
        Who we are
    </div>
    <div class="about-us--container">
        <div class="about-us--block">
            <div class="about-us--image">
            </div>
            <div class="about-us--content">
                <div class="title">
                    About us
                </div>
                <div class="description">
                    Charger Customs - luxury automotive restyling center based in Corona, California. There is no limit
                    to what we can do.
                </div>
                <div>
                    <a href="#" class="button">
                        more
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services full-width">
    <div class="letter letter__left">
        S
    </div>
    <div class="letter-description letter-description__left">
        Cars & Details
    </div>
    <div class="services--container">
        <div class="services--header">
            <div class="services--title">
                Services
            </div>
            <div class="services--subtitle">
                Learn more
            </div>
        </div>
        <div class="services--img-block">
            <div class="services--img-item services--img-item__one">
                <div class="services--img-name">
                    Tuning
                </div>
                <div class="services--img-info">
                    <div class="services--img-title">
                        Tuning
                    </div>
                    <div class="services--img-description">
                        Modification of the performance or appearance of a vehicle.
                    </div>
                    <div class="services--img-read">
                        Read more
                    </div>
                </div>
            </div>
            <div class="services--img-item services--img-item__two">
                <div class="services--img-name">
                    Restoration
                </div>
                <div class="services--img-info">
                    <div class="services--img-title">
                        Restoration
                    </div>
                    <div class="services--img-description">
                        Modification of the performance or appearance of a vehicle.
                    </div>
                    <div class="services--img-read">
                        Read more
                    </div>
                </div>
            </div>
            <div class="services--img-item services--img-item__three">
                <div class="services--img-name">
                    Repairs
                </div>
                <div class="services--img-info">
                    <div class="services--img-title">
                        Repairs
                    </div>
                    <div class="services--img-description">
                        Modification of the performance or appearance of a vehicle.
                    </div>
                    <div class="services--img-read">
                        Read more
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="projects full-width">
    <div class="letter projects--letter">
        P
    </div>
    <div class="letter-description projects--description">
        Our portfolio
    </div>
    <div class="projects--title">
        Projects
    </div>
    <div class="projects--img-block projects--img-block__first swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide projects--img projects--img__one"></div>
            <div class="swiper-slide projects--img projects--img__two"></div>
            <div class="swiper-slide projects--img projects--img__three"></div>
            <div class="swiper-slide projects--img projects--img__four"></div>
        </div>
    </div>
    <div class="projects--img-block projects--img-block__last swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide projects--img projects--img__one"></div>
            <div class="swiper-slide projects--img projects--img__two"></div>
            <div class="swiper-slide projects--img projects--img__three"></div>
            <div class="swiper-slide projects--img projects--img__four"></div>
        </div>
    </div>
    <div class="projects--button">
        <a href="#" class="button">
            more
        </a>
    </div>
</div>

<div class="testimonials full-width">
    <div class="testimonials--container">
    </div>
</div>

<script src="assets/vendors/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="assets/vendors/swiper/swiper.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        var swiper = new Swiper('.projects .projects--img-block__first', {
            slidesPerView: 4,
            spaceBetween: 40,
            centeredSlides: true,
            slidesOffsetBefore: 100,
            loop: true,
            slideActiveClass: 'projects--img__active'
        });
        var swiper2 = new Swiper('.projects .projects--img-block__last', {
            slidesPerView: 4,
            spaceBetween: 40,
            centeredSlides: true,
            slidesOffsetBefore: -300,
            loop: true,
            slideActiveClass: 'projects--img__active'
        });
    });
</script>

</body>
</html>

