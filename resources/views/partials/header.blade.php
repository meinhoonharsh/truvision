<style>
    .header {
        position: fixed;
        width: 100vw;
        z-index: 100;
        padding: 20px 0;
        min-height: 70px;

    }

    .solidheader {
        @if ($page ?? '' == 'index')
            display: none;
        @endif

        background: var(--primary);
    }
    .solidheader nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 90%;

    }

    nav {
        margin: auto;
        width: fit-content;
        width: -moz-fit-content;
    }

    nav ul li {
        list-style-type: none;
        display: inline;
        color: white;
        font-family: var(--philosopher);
        padding: 5px 10px;




    }

    nav ul {
        display: inline;
        padding: 0;
    }

    nav img {
        width: 70px;
    }

    .solidheader .leftul {
        margin-right: 20px;
    }

    .solidheader .rightul {
        margin-left: 20px;
    }

    .menubar {
        float: right;
        position: fixed;
        top: 5%;
        right: 10%;
        display: none;
        z-index: 1000;
        color: #fffa;
    }

    @media (max-width: 767px) {
        .solidheader {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .solidheader nav ul li {
            text-align: center;
            display: block;
        }

        .solidheader nav{
            flex-direction: column;
            gap: 1.5em;
        }
        .menubar {
            display: block;
        }

        .transheader {
            display: none !important;
        }

        .solidheader .leftul {
            margin-right: 0px;
        }

        .solidheader .rightul {
            margin-left: 0px;
        }
    }

    .quotebutton {
        padding: 10px 20px;
        border-radius: 15px;
        border: 1px solid var(--orange);
        font-family: var(--philosopher);
        color: #fffc;
        font-size: 0.9em;
        text-decoration: none;
        transition: all 0.3s;
    }

    .quotebutton:hover {
        color: var(--orange);
    }
</style>

<div class="header transheader">

    <nav>
        <ul class="leftul">
            <li><a href="/">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/gallery">Gallery</a></li>
        </ul>
        <ul class="rightul">
            <li><a href="/#services">Services</a></li>
            <li><a href="/faqs">FAQs</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

</div>


<span class="menubar">
    <i class="fa fa-bars"></i>
</span>

<div class="header solidheader">
    <nav>
        <a href="/">
            <img src="/static/assets/images/logowhite.png" alt="">
        </a>
        <ul class="leftul">
            <li><a href="/">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/#services">Services</a></li>
            <li><a href="/faqs">FAQs</a></li>
        </ul>

        <ul class="rightul">

            
            <li>
                <a href="https://www.facebook.com/truvisionartistry/">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/truvisionfilms/">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>

            <a href="https://wa.me/919303102594?text=Hello%20I%20am%20interested%20in%20your%20services" target="_blank" class="quotebutton">
                <i class="fa fa-whatsapp"></i> Request a Quote
            </a>
        </ul>
    </nav>

</div>
<script>
    $('.menubar').click(function() {
        $('.solidheader').slideToggle();
    });

    if (window.innerWidth < 767) {

        $('.solidheader').hide();
    }
</script>
