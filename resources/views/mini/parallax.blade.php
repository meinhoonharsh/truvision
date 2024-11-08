@php
    
    // if $random is not defined:
    $random = $random ?? rand(1, 18);
    
@endphp

<style>
    .parallaxdiv {
        width: 100%;
        min-height: 200px;
        position: relative;
        background-size: cover;
        /* background-attachment: fixed; */
    }

    .parallaxdiv-{{ $name }} {

        /* background-image: url("/static/assets/images/pics/{{ $random }}.jpg"); */
        background-image: url("https://r4.wallpaperflare.com/wallpaper/124/246/465/dark-blue-ornament-texture-wallpaper-70403559af566e8368efd756eb8604b8.jpg");
        background-image: url("https://r4.wallpaperflare.com/wallpaper/913/752/910/digital-art-blue-leaves-pattern-wallpaper-29b0f8ed811a8d3b1687089f90d1367d.jpg");
    }

    .parallaxdiv div {

        width: 100%;
        height: 100%;
        position: absolute;
        /* background: #631A5190;*/
        background: #06162190;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .parallaxdiv h2 {
        font-size: 4rem;
        color: var(--orange);
        font-family: blackchancery;
    }

    /* effect-shine */
    .effect-shine:hover {
        -webkit-mask-image: linear-gradient(-75deg, rgba(0, 0, 0, .6) 30%, #000 50%, rgba(0, 0, 0, .6) 70%);
        -webkit-mask-size: 200%;
        animation: shine 2s infinite;
        cursor: pointer;
    }

    @-webkit-keyframes shine {
        from {
            -webkit-mask-position: 150%;
        }

        to {
            -webkit-mask-position: -50%;
        }
    }
</style>
<div class="parallaxdiv parallaxdiv-{{ $name }} ">
    <div>

        <h2 class="effect-shine">{{ $name }}</h2>
    </div>
</div>
