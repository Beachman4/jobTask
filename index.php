<?php include("header.php"); ?>
<style>
    .slideshow-list li:not(:first-child) {
        display: none;
    }
    .slideshow-list li img {
        width: 100%;
    }
    .slideshow-list {
        list-style: none;
        padding-left: 0;
    }
    .slideshow {
        position: absolute;
        width: 100%;
    }
</style>
</div>
<!--<div class="slideshow">
    <ul class="slideshow-list">
        <li class="image" id="1">
            <img src="/img/slider1.jpg">
        </li>
        <li class="image" id="2">
            <img src="/img/slider2.jpg">
        </li>
        <li class="image" id="3">
            <img src="/img/slider3.jpg">
        </li>
        <li class="image" id="4">
            <img src="/img/slider4.jpg">
        </li>
    </ul>
</div>-->
<div class="camera_container">
    <div class="camera_wrap" id="camera">
        <div data-src="/img/slider1.jpg"></div>
        <div data-src="/img/slider2.jpg"></div>
        <div data-src="/img/slider3.jpg"></div>
        <div data-src="/img/slider4.jpg"></div>
    </div>
</div>
<script>
    $('#camera').camera({
        autoAdvance: true,
        height: '40.2%',
        minHeight: '300px',
        pagination: true,
        thumbnails: false,
        playPause: false,
        hover: false,
        loader: 'none',
        navigation: true,
        navigationHover: false,
        mobileNavHover: false,
        fx: 'simpleFade'
    });
</script>
<style>
</style>
<style>
    .panel1 span {
        color: #57cbec;
    }
    .panel1_wrap {
        margin-top: -430px;
        box-shadow: 0 15px 20px rgba(97, 120, 134, 0.3);
        margin-bottom: 100px;
    }
    .camera_pag {
        margin-top: 0;
    }
</style>
<div class="container">
    <div class="panel1_wrap row">
        <div class="panel1 col-lg-12" style="text-align: center;background-color: #fff; padding-left: 0;border-top: 7px solid #57cbec;">
            <!--<img src="/img/arrow.png">-->
            <span class="caret"></span>
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="font-family: 'Tangerine', cursive;font-weight: bold;text-align: center;font-size: 72px;">Welcome to Seniors 1st</h3>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisl ante, pellentesque ac lectus nec, efficitur facilisis dui. In consectetur dolor vitae mollis semper. Donec dictum bibendum luctus. Suspendisse in congue lectus. Duis convallis blandit urna, eu tincidunt dolor laoreet id. Vestibulum lacus nisi, blandit at congue a, efficitur sit amet neque. Aenean id tincidunt erat, posuere interdum ante.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .companion_care, .pet_care, .cooking {
            text-align: center;
            padding: 30px;
            height: 120px;
        }
        .companion_care h4, .pet_care h4, .cooking h4 {
            font-size: 30px;
            font-family: 'Open Sans', sans-serif;
            color: #fff;
        }
        .companion_care {
            background-color: #0c8cbd;
        }
        .pet_care {
            background-color: #ffb101;
        }
        .cooking {
            background-color: #ef308c;
        }
        .featured_image {
            width: 100%;
        }
        .testimonials {
            margin-bottom: 3rem;
        }
        .testimonials h1, .testimonials p {
            text-align: center;
        }
        h1 {
            font-family: "Tangerine", cursive;
        }
        .testimonials h1 {
            font-family: "Tangerine", cursive;
            font-size: 72px;
            font-weight: bold;
        }
        .user-tests {
            margin-top: 2rem;
            background-color: #fff;
        }
        .user-tests p {
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
        }
    </style>
    <div class="row">
        <div class="col-lg-4" style="padding-left: 0; padding-right: 0;">
            <img class="featured_image" src="/img/featured_services_image1.jpg">
            <div class="companion_care">
                <h4>Companion Care</h4>
            </div>
        </div>
        <div class="col-lg-4" style="padding-left: 0; padding-right: 0;">
            <div class="pet_care">
                <h4>Pet Care</h4>
            </div>
            <img class="featured_image" src="/img/featured_services_image2.jpg">
        </div>
        <div class="col-lg-4" style="padding-left: 0; padding-right: 0;">
            <img class="featured_image" src="/img/featured_services_image_3.jpg">
            <div class="cooking">
                <h4>Cooking & Light Housekeeping</h4>
            </div>
        </div>
    </div>
    <style>

    </style>
    <div class="row testimonials">
        <div class="col-lg-12">
            <h1>Testimonials</h1>
            <div class="user-tests">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ligula id ante varius hendrerit a sed est. Vestibulum vestibulum, eros quis placerat maximus, ligula libero imperdiet nisl, nec suscipit neque sapien eu libero. Pellentesque a viverra magna. Aliquam ultricies lacinia nisl vitae venenatis. Aenean et nulla vel ipsum sodales vulputate. Cras nec tortor in diam interdum fringilla quis in dui. Donec fermentum rutrum ultrices. Nullam vulputate sagittis libero id maximus. Integer elit purus, scelerisque at purus eget, dignissim pretium nibh.</p>
                <img src="/img/message.png">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1">
            <img src="/img/test.png">
        </div>
        <div class="col-lg-1" style="margin-left: -30px;">
            <img src="/img/quotes.png">
        </div>
        <div class="col-lg-2" style="color: #0c8cbd; margin-top: 30px; margin-left: -60px;">
            <p>Ann Stone & Mike</p>
        </div>
        <div class="col-lg-2" style="float: right; margin-top: 30px;">
            <img src="/img/bull.png">
        </div>
    </div>
    <style>
        .contact {
            background-color: #4cccff;
        }
        .contact h1, .contact li, .contact a {
            color: #fff;
        }
        .contact ul {
            list-style: none;
            padding-left: 0;
        }
        textarea {
            resize: none;
        }
        input[type=text], textarea {
            text-decoration: none;
            color: #fff !important;
            background-color: #4cccff !important;
            border-top: none;
            border-right: none;
            border-left: none;
            border-bottom: 1px solid #fff;
            text-shadow: none;
            box-shadow: none;
        }
    </style>
    </div>
    <div class="row contact">
        <div class="container">
        <div class="col-lg-9">
            <h1>Contact Form</h1>
            <div class="row">
                <div class="col-lg-4">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="col-lg-4">
                    <input type="text" name="phone" placeholder="Phone">
                </div>
                <div class="col-lg-4">
                    <input type="text" name="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <textarea name="message" style="resize: none;" placeholder="Message"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <button class="contact_submit btn btn-default" type="button" id="contact_submit">Submit</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="text-align: center;">
            <h1>Contact</h1>
            <ul>
                <li>Company Name</li>
                <li>275 West Campbell Rd Richardson, TX 75080</li>
                <li>+1 800 603 6035</li>
                <li>+1 800 889 9898</li>
                <li><a href="mailto:mail@demolink.org">mail@demolink.org</a></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="container">
<?php include("footer.php"); ?>
