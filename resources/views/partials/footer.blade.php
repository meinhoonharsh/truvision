<style>
    .footer-widget p {
        margin-bottom: 27px;
    }

    p {
        font-family: 'Nunito', sans-serif;
        font-size: 16px;
        color: white;
        line-height: 28px;
    }

    .animate-border {
        position: relative;
        display: block;
        width: 115px;
        height: 3px;
        background: var(--orange);
    }

    .animate-border:after {
        position: absolute;
        content: "";
        width: 35px;
        height: 3px;
        left: 0;
        bottom: 0;
        border-left: 10px solid #fff;
        border-right: 10px solid #fff;
        -webkit-animation: animborder 2s linear infinite;
        animation: animborder 2s linear infinite;
    }

    @-webkit-keyframes animborder {
        0% {
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
        }

        100% {
            -webkit-transform: translateX(113px);
            transform: translateX(113px);
        }
    }

    @keyframes animborder {
        0% {
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
        }

        100% {
            -webkit-transform: translateX(113px);
            transform: translateX(113px);
        }
    }

    .animate-border.border-white:after {
        border-color: #fff;
    }

    .animate-border.border-yellow:after {
        border-color: #F5B02E;
    }

    .animate-border.border-orange:after {
        border-right-color: var(--orange);
        border-left-color: var(--orange);
    }

    .animate-border.border-ash:after {
        border-right-color: #EEF0EF;
        border-left-color: #EEF0EF;
    }

    .animate-border.border-offwhite:after {
        border-right-color: #F7F9F8;
        border-left-color: #F7F9F8;
    }

    /* Animated heading border */
    @keyframes primary-short {
        0% {
            width: 15%;
        }

        50% {
            width: 90%;
        }

        100% {
            width: 10%;
        }
    }

    @keyframes primary-long {
        0% {
            width: 80%;
        }

        50% {
            width: 0%;
        }

        100% {
            width: 80%;
        }
    }

    .dk-footer {
        margin-top: 5%;
        padding: 75px 0 0;
        background-color: #15141480;
        position: relative;
        z-index: 2;
    }

    .dk-footer .contact-us {
        margin-top: 0;
        margin-bottom: 30px;
        padding-left: 80px;
    }

    .dk-footer .contact-us .contact-info {
        margin-left: 50px;
    }

    .dk-footer .contact-us.contact-us-last {
        margin-left: -80px;
    }

    .dk-footer .contact-icon i {
        font-size: 24px;
        top: -15px;
        position: relative;
        color: var(--orange);
    }

    .dk-footer-box-info {
        position: absolute;
        top: -122px;
        background: var(--primary);
        padding: 40px;
        box-shadow: 0 0 15px #000;
        border-radius: 10px;
        z-index: 2;
    }

    .dk-footer-box-info .footer-social-link h3 {
        color: #fff;
        font-size: 24px;
        margin-bottom: 25px;
    }

    .dk-footer-box-info .footer-social-link ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .dk-footer-box-info .footer-social-link li {
        display: inline-block;
    }

    .dk-footer-box-info .footer-social-link a i {
        display: block;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        background: #000;
        margin-right: 5px;
        color: #fff;
    }

    .dk-footer-box-info .footer-social-link a i.fa-facebook {
        background-color: #3B5998;
    }

    .dk-footer-box-info .footer-social-link a i.fa-twitter {
        background-color: #55ACEE;
    }

    .dk-footer-box-info .footer-social-link a i.fa-google-plus {
        background-color: #DD4B39;
    }

    .dk-footer-box-info .footer-social-link a i.fa-linkedin {
        background-color: #0976B4;
    }

    .dk-footer-box-info .footer-social-link a i.fa-instagram {
        background-color: #B7242A;
    }

    .footer-awarad {
        margin-top: 285px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .footer-awarad p {
        color: #fff;
        font-size: 24px;
        font-weight: 700;
        margin-left: 20px;
        padding-top: 15px;
    }

    .footer-info-text {
        margin: 26px 0 32px;
    }

    .footer-left-widget {
        padding-left: 80px;
    }

    .footer-widget .section-heading {
        margin-bottom: 35px;
    }

    .footer-widget h3 {
        font-size: 24px;
        color: #fff;
        position: relative;
        margin-bottom: 15px;
        max-width: -webkit-fit-content;
        max-width: -moz-fit-content;
        max-width: fit-content;
    }

    .footer-widget ul {
        width: 50%;
        float: left;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .footer-widget li {
        margin-bottom: 18px;
    }

    .footer-widget p {
        margin-bottom: 27px;
    }

    .footer-widget a {
        color: #fffa;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    .footer-widget a:hover {
        color: var(--orange);
    }

    .footer-widget:after {
        content: "";
        display: block;
        clear: both;
    }

    .dk-footer-form {
        position: relative;
    }

    .dk-footer-form input[type=email] {
        padding: 14px 28px;
        border-radius: 50px;
        background: var(--primary);
        border: 1px solid var(--primary);
    }

    .dk-footer-form input::-webkit-input-placeholder,
    .dk-footer-form input::-moz-placeholder,
    .dk-footer-form input:-ms-input-placeholder,
    .dk-footer-form input::-ms-input-placeholder,
    .dk-footer-form input::-webkit-input-placeholder {
        color: #878787;
        font-size: 14px;
    }

    .dk-footer-form input::-webkit-input-placeholder,
    .dk-footer-form input::-moz-placeholder,
    .dk-footer-form input:-ms-input-placeholder,
    .dk-footer-form input::-ms-input-placeholder,
    .dk-footer-form input::placeholder {
        color: #878787;
        font-size: 14px;
    }

    .dk-footer-form button[type=submit] {
        position: absolute;
        top: 0;
        right: 0;
        padding: 12px 24px 12px 17px;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        border: 1px solid var(--orange);
        background: var(--orange);
        color: #fff;
    }

    .dk-footer-form button:hover {
        cursor: pointer;
    }

    /* ==========================
    
        Contact
    
    =============================*/
    .contact-us {
        position: relative;
        z-index: 2;
        margin-top: 65px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .contact-icon {
        position: absolute;
    }

    .contact-icon i {
        font-size: 36px;
        top: -5px;
        position: relative;
        color: var(--orange);
    }

    .contact-info {
        margin-left: 75px;
        color: #fff;
    }

    .contact-info h3 {
        font-size: 20px;
        color: #fff;
        margin-bottom: 0;
    }

    .copyright {
        padding: 28px 0;
        margin-top: 55px;
        background-color: #20202090;
    }

    .copyright span,
    .copyright a {
        color: #878787;
        -webkit-transition: all 0.3s linear;
        -o-transition: all 0.3s linear;
        transition: all 0.3s linear;
    }

    .copyright a:hover {
        color: var(--orange);
    }

    .copyright-menu ul {
        text-align: right;
        margin: 0;
    }

    .copyright-menu li {
        display: inline-block;
        padding-left: 20px;
    }

    .back-to-top {
        position: relative;
        z-index: 2;
    }

    .back-to-top .btn-dark {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        padding: 0;
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #2e2e2e;
        border-color: #2e2e2e;
        display: none;
        z-index: 999;
        -webkit-transition: all 0.3s linear;
        -o-transition: all 0.3s linear;
        transition: all 0.3s linear;
    }

    .back-to-top .btn-dark:hover {
        cursor: pointer;
        background: var(--orange);
        border-color: var(--orange);
        color: var(--primary)
    }

    .footer-logo img {
        max-width: 70%;
        margin: 0 auto;
        width: 50vw;
    }

    .footer-logo {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .footer-social h3 {
        color: #fff;
        font-size: 24px;
        margin-bottom: 25px;
    }

    .footer-social ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .footer-social li {
        display: inline-block;
    }

    .footer-social a i {
        display: block;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        background: #000;
        margin-right: 5px;
        color: #fff;
    }
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<footer id="dk-footer" class="dk-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="dk-footer-box-info">
                    <div class="footer-logo">

                        <a href="index.html" class="" style="text-align:center">

                            <img src="/static/assets/images/logowhite.png" alt="footer_logo" class="img-fluid">
                        </a>
                    </div>
                    <p class="footer-info-text">
                        Our Beautiful images that capture your life are not seen, nor touched, but are felt in the heart
                        and to be collected forever.
                    </p>
                    <!-- End Social link -->
                </div>
            </div>
            <!-- End Col -->
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-us">
                            <div class="contact-icon">
                                <i class="fa fa-map-o" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">
                                <h3>Bhopal, India</h3>
                                <p>119, Jyoti Shoping Centre, Mp Nagar</p>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="contact-us contact-us-last">
                            <div class="contact-icon">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">
                                <h3><a href="tel:9303102594">9303102594</a></h3>
                                <p>Give us a call</p>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->

                    <d class="col-md-6">

                        <div class="contact-us">
                            <div class="footer-social">
                                <h3>Follow us</h3>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/truvisionartistry/">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:9303102594">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/truvisionfilms/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </d>
                </div>

            </div>
            <!-- End Col -->
        </div>
        <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->


    <div class="copyright">
        <div class="container">
                    <center>
                        <span>Copyright © Truvision<sup>®</sup> | All Right Reserved</span>
                    </center>
                <!-- End col -->
            <!-- End Row -->
        </div>
        <!-- End Copyright Container -->
    </div>
    <!-- End Copyright -->
    <!-- Back to top -->
    <div id="back-to-top" class="back-to-top">
        <button class="btn btn-dark" title="Back to Top" style="display: block;">
            <i class="fa fa-angle-up"></i>
        </button>
    </div>
    <!-- End Back to top -->
</footer>
