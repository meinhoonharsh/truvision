<style>
    .contentdiv p {
        font-family: var(--ptext);
        font-size: 1.5em;
        color: #fffc;
        text-align: justify;
        word-spacing: 0.3;
    }
</style>

<div id="contact"></div>

@include('mini.parallax', ['name' => 'Who we are', 'random' => rand(1, 18)])

<div class="contentdiv container">
    <div class="container-80">

        <div class="row">

            <div class="col-md-6">
                <p>
                    Just drop us the dates, the events included for each day , tentative crowd count , tentative pheras
                    timing ,
                    the style of wedding (maharashtrian, gujrati etc. ) location and property name . This helps us in
                    forming
                    the team structure and giving you a reasonable quote accordingly.
                    <br>
                    <br>
                    We typically drop the quotation mail within 48 hrs of any enquiry.
                </p>

                {{-- <center>
                    @include('mini.anchor', ['name' => 'Contact Us'])
                </center> --}}
            </div>
            <div class="col-md-6">
                <img src="/static/assets/images/pics/6.jpg" alt="" class="img-responsive img-fluid rounded">
            </div>

        </div>
    </div>
</div>
