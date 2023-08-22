<style>
    .videocontainer {
        position: relative;
        width: 100vw;
        height: 100vh;
        overflow: hidden;
    }

    video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .videomask {

        width: 100%;
        height: 100%;
        background: var(--primary);
        opacity: 0.4;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .videocontent {
        opacity: 0.7;
        width: 100%;
        height: 100%;
        font-size: 6em;
        display: flex;
        align-items: center;
        justify-content: center;
        /*position: absolute;*/
        color: white;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .centerlogo {
        max-width: 300px;
        position: fixed;
        top: 30%;
    }
</style>

{{-- {% set video = [
  "/static/assets/videos/1.mp4",
  "/static/assets/videos/2.mp4",
  "/static/assets/videos/3.mp4",
  "/static/assets/videos/4.mp4",
  "/static/assets/videos/5.mp4",
    
    ] %} --}}

@php
    $video = ['/static/assets/videos/1.mp4', '/static/assets/videos/2.mp4', '/static/assets/videos/3.mp4', '/static/assets/videos/4.mp4', '/static/assets/videos/5.mp4'];
    
    $randomvideo = $video[rand(0, 4)];
@endphp


<div class="videocontainer">
    <video poster="screenshot.jpg" autoplay playsinline muted loop>
        <!-- <source src="https://file-examples-com.github.io/uploads/2020/03/file_example_WEBM_1280_3_6MB.webm" type="video/webm"> -->
        <source src="{{ $randomvideo }}" type="video/mp4">
    </video>
    <div class="videomask"></div>
    <div class="videocontent">
        <img src="/static/assets/images/logowhite.png" id="logoimg" class="centerlogo" alt="">
    </div>


</div>

<script type="text/javascript">
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        var cond1 = document.documentElement.scrollTop < 500;
        var cond2 = document.documentElement.scrollTop < '100vh';
        if (cond1) {
            showTransNav()

            if (cond1) {
                var logowidth = 300 - (document.documentElement.scrollTop / 2);
                var logotop = 30 - (document.documentElement.scrollTop / 13);
                var margin = document.documentElement.scrollTop * (90 / 300)
                logowidth = logowidth < 70 ? 70 : logowidth;
                logotop = logotop < 0 ? 0 : logotop;
                margin = margin > 70 ? 70 : margin;
                document.getElementById("logoimg").style.width = logowidth + "px";
                document.getElementById("logoimg").style.top = logotop + "%";
                document.getElementsByClassName('leftul')[0].style.marginRight = margin + 'px';
                document.getElementsByClassName('rightul')[0].style.marginLeft = margin + 'px';
                //console.log(document.getElementById("logoimg").style.width);
                console.log(margin);
            } else {

                document.getElementById("logoimg").style.width = 100 + "px";
                document.getElementById("logoimg").style.top = 0 + "%";
                document.getElementsByClassName('leftul')[0].style.marginRight = 90 + 'px';
                document.getElementsByClassName('rightul')[0].style.marginLeft = 90 + 'px';
            }


        } else {
            showSolidNav()
        }

        function showSolidNav() {
            console.log('solid');

            $('.transheader').slideUp();
            $('#logoimg').hide()
            if (window.innerWidth > 767) {

                $('.solidheader').slideDown();
            }

        }

        function showTransNav() {
            console.log('Trans');
            $('.solidheader').slideUp();
            $('#logoimg').show()
            $('.transheader').slideDown();
        }
    }
</script>
