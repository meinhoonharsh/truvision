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

        .solidheader img {
            position: absolute;
            top: 5%;
            transform: translateX(-10%)
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
</style>

<div class="header transheader">

    <nav>
        <ul class="leftul">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
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
        <ul class="leftul">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/gallery">Gallery</a></li>
        </ul>
        <img src="/static/assets/images/logowhite.png" alt="">

        <ul class="rightul">
            <li><a href="/#services">Services</a></li>
            <li><a href="/faqs">FAQs</a></li>
            <li><a href="/contact">Contact</a></li>
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
