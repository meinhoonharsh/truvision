<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"> -->
<style>
    .testimonial-bg {
        border: 7px solid var(--secondary);
        padding: 80px 70px;
        text-align: center;
        position: relative;
        width: 90%;
        max-width: 1000px;
        margin: 50px auto;
    }

    .testimonial-bg:before {
        content: "\f10d";
        font-family: "fontawesome";
        width: 75px;
        height: 75px;
        line-height: 75px;
        background: var(--orange);
        text-align: center;
        font-size: 50px;
        color: var(--primary);
        position: absolute;
        top: -40px;
        left: 2%;
    }

    .testimonial {
        padding: 0 15px;
    }

    .testimonial .description {
        font-size: 20px;
        font-weight: 400;
        color: #848484;
        font-family: var(--ptext);
        word-spacing: 0.3em;
        line-height: 30px;
        padding-bottom: 25px;
        margin-bottom: 15px;
        position: relative;
    }

    .testimonial .description:before {
        content: "";
        width: 75%;
        border-top: 1px solid #ddd;
        margin: 0 auto;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .testimonial .description:after {
        content: "";
        width: 20px;
        height: 20px;
        background: var(--orange);
        position: absolute;
        bottom: -10px;
        left: 50%;
        border-bottom: 1px solid var(--orange);
        border-right: 1px solid var(--orange);
        transform: translateX(-50%) rotate(45deg);
    }

    .testimonial .pic {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 3px solid var(--orange);
        margin: 25px auto;
        padding: 7px;
        overflow: hidden;
    }

    .testimonial .pic img {
        width: 100%;
        border-radius: 50%;
        aspect-ratio: 1/1;
        height: auto;
    }

    .testimonial .title {
        display: inline-block;
        font-size: 23px;
        font-weight: 700;
        color: var(--orange);
        text-transform: capitalize;
        margin: 0;
        font-family: 'blackchancery';
    }

    .testimonial .post {
        font-family: var(--philosopher);
        display: inline-block;
        font-size: 20px;
        color: #fff9;

    }

    .owl-theme .owl-controls {
        background: #fff;
        margin-top: 10px;
        position: absolute;
        bottom: -34%;
        right: 0;
    }

    .owl-theme .owl-controls .owl-buttons div {
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 50%;
        background: #34363b;
        opacity: 1;
        padding: 0;
    }

    .owl-prev:before,
    .owl-next:before {
        content: "\f104";
        font-family: "fontawesome";
        font-size: 23px;
        font-weight: 700;
        color: #fff;
    }

    .owl-next:before {
        content: "\f105";
    }

    @media only screen and (max-width:767px) {
        .testimonial-bg {
            padding: 50px 40px;
        }

        .owl-theme .owl-controls {
            bottom: -22%;
        }
    }

    @media only screen and (max-width:480px) {
        .testimonial-bg:before {
            width: 55px;
            height: 55px;
            line-height: 55px;
            font-size: 40px;
        }

        .testimonial-bg {
            padding: 30px 10px;
        }

        .owl-theme .owl-controls {
            bottom: -15%;
        }
    }

    @media only screen and (max-width:360px) {

        .testimonial .title,
        .testimonial .post {
            font-size: 16px;
        }

        .owl-theme .owl-controls {
            bottom: -12%;
        }
    }
</style>







@include('mini.parallax', ['name' => 'Testimonial', 'random' => rand(1, 18)])

<div class="w-100">
    <div class="row">
        <div class="w-100  mx- col-md-offset-2">
            <div class="testimonial-bg">
                <div id="testimonial-slider" class="owl-carousel">
                    
                    <div class="testimonial">
                        <p class="description">
                            A big thank you to the entire team for all the support and for keeping me laughing
                            throughout! Though I couldn’t capture moments myself, you all made sure every memory was
                            beautifully saved.
                        </p>
                        <div class="pic">
                            <img src="/static/assets/images/testimonial/2.jpg" alt="">
                        </div>
                        <h3 class="title">Dr. Devyani Surange</h3>
                    </div>
                    <div class="testimonial">
                        <p class="description">
                            Namaste Uncle! The reels are absolutely amazing — perfect songs, perfect moments. The entire
                            team was wonderful, and the setup was fantastic. Special thanks to Tarun Bhaiya and
                            especially to you for everything!
                        </p>
                        <div class="pic">
                            <img src="/static/assets/images/testimonial/1.jpg" alt="">
                        </div>
                        <h3 class="title">Gold Bajaj</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
    </script> -->
<script>
    $(document).ready(function() {
        $("#testimonial-slider").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });
</script>
