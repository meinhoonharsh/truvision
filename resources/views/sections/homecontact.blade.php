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

@include('mini.parallax', ['name' => 'Vision Behind Truvision', 'random' => rand(1, 18)])

<div class="contentdiv container">
    <div class="container-80">

        <div class="row">

            <div class="col-md-7">
                
                <div class="servicetitle">
                    <h3>Mr. Pradeep Saxena</h3>
                </div>
                <p>
                    The creative force behind Truvision has been capturing stories since 1985 — constantly evolving with
                    technology, trends, and time. 
                    <br>
                    <br>
                    With over 30 years of hands-on experience and learning under the
                    guidance of the renowned Girish Mistry, our founder brings not just technical expertise but also a
                    deep artistic vision to every frame. From the era of film rolls to today’s digital brilliance, this
                    journey reflects passion, adaptability, and an undying love for storytelling through the lens.
                </p>

                {{-- <center>
                    @include('mini.anchor', ['name' => 'Contact Us'])
                </center> --}}
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/static/assets/images/user/pradeepdada.jpg" alt="" class="img-responsive img-fluid rounded">
                
            </div>

        </div>
    </div>
</div>
