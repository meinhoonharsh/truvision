<style>
    .text-item h2 {
        color: var(--orange);
        font-family: 'blackchancery';
    }
</style>
<!-- Stylesheets -->
<!-- <link rel="stylesheet" href="/static/boto/css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="/static/boto/css/font-awesome.min.css" />
<link rel="stylesheet" href="/static/boto/css/slicknav.min.css" />
<link rel="stylesheet" href="/static/boto/css/fresco.css" />
<link rel="stylesheet" href="/static/boto/css/slick.css" />

<!-- Main Stylesheets -->
<link rel="stylesheet" href="/static/boto/css/style.css" />

{{-- <!-- {{ parallax('About') }} -->
<!-- Hero Section -->
<section class="hero__section">
    <div class="hero-slider">
        {% for img in range(1,5) %}
        <div class="slide-item">
            <a class="fresco" href="/static/assets/images/location/'~img~'.jpg" data-fresco-group="projects">
                <img src="/static/assets/images/location/'~img~'.jpg" alt="">
            </a>

        </div>
        {% endfor %}

    </div>
    <div class="hero-text-slider">

        {% set locations = [
"Bhopal",
"Indore",
"Gwalior",
"Chattarpur",
"Bhopal",
  ] %}
        {% for l in locations %}
        <div class="text-item">
            <h2>{{ l }}</h2>
            <!-- <p>Madhya Pradesh</p>  -->
        </div>
        {% endfor %}
    </div>
</section> --}}
<!-- Hero Section end -->



<!--====== Javascripts & Jquery ======-->
<script src="/static/boto/js/jquery.slicknav.min.js"></script>
<script src="/static/boto/js/slick.min.js"></script>
<script src="/static/boto/js/fresco.min.js"></script>
<script src="/static/boto/js/main.js"></script>
