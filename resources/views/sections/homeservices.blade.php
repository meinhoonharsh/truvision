<style>
    /* 12columns.css | Created by Katherine Kato | Released under the MIT license */
    /* GitHub: https://kathykato.github.io/12columns/ */
    @import url("https://fonts.googleapis.com/css?family=Barlow:400,500,700");

    .container {
        margin: auto;
        padding: 0 1rem;
        max-width: 71.25rem;
        width: 100%;
    }

    .grid {
        display: flex;
        flex-direction: column;
        flex-flow: row wrap;
    }

    .grid>[class*=column-] {
        display: block;
    }

    .first {
        order: -1;
    }

    .last {
        order: 12;
    }

    .align-top {
        align-items: start;
    }

    .align-center {
        align-items: center;
    }

    .align-bottom {
        align-items: end;
    }

    @supports (display: grid) {
        .grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: auto;
        }

        .grid>[class*=column-] {
            margin: 0;
            max-width: 100%;
        }

        .column-xs-1 {
            grid-column-start: span 1;
            grid-column-end: span 1;
        }

        .column-xs-2 {
            grid-column-start: span 2;
            grid-column-end: span 2;
        }

        .column-xs-3 {
            grid-column-start: span 3;
            grid-column-end: span 3;
        }

        .column-xs-4 {
            grid-column-start: span 4;
            grid-column-end: span 4;
        }

        .column-xs-5 {
            grid-column-start: span 5;
            grid-column-end: span 5;
        }

        .column-xs-6 {
            grid-column-start: span 6;
            grid-column-end: span 6;
        }

        .column-xs-7 {
            grid-column-start: span 7;
            grid-column-end: span 7;
        }

        .column-xs-8 {
            grid-column-start: span 8;
            grid-column-end: span 8;
        }

        .column-xs-9 {
            grid-column-start: span 9;
            grid-column-end: span 9;
        }

        .column-xs-10 {
            grid-column-start: span 10;
            grid-column-end: span 10;
        }

        .column-xs-11 {
            grid-column-start: span 11;
            grid-column-end: span 11;
        }

        .column-xs-12 {
            grid-column-start: span 12;
            grid-column-end: span 12;
        }

        @media (min-width: 48rem) {
            .column-sm-1 {
                grid-column-start: span 1;
                grid-column-end: span 1;
            }

            .column-sm-2 {
                grid-column-start: span 2;
                grid-column-end: span 2;
            }

            .column-sm-3 {
                grid-column-start: span 3;
                grid-column-end: span 3;
            }

            .column-sm-4 {
                grid-column-start: span 4;
                grid-column-end: span 4;
            }

            .column-sm-5 {
                grid-column-start: span 5;
                grid-column-end: span 5;
            }

            .column-sm-6 {
                grid-column-start: span 6;
                grid-column-end: span 6;
            }

            .column-sm-7 {
                grid-column-start: span 7;
                grid-column-end: span 7;
            }

            .column-sm-8 {
                grid-column-start: span 8;
                grid-column-end: span 8;
            }

            .column-sm-9 {
                grid-column-start: span 9;
                grid-column-end: span 9;
            }

            .column-sm-10 {
                grid-column-start: span 10;
                grid-column-end: span 10;
            }

            .column-sm-11 {
                grid-column-start: span 11;
                grid-column-end: span 11;
            }

            .column-sm-12 {
                grid-column-start: span 12;
                grid-column-end: span 12;
            }
        }

        @media (min-width: 62rem) {
            .column-md-1 {
                grid-column-start: span 1;
                grid-column-end: span 1;
            }

            .column-md-2 {
                grid-column-start: span 2;
                grid-column-end: span 2;
            }

            .column-md-3 {
                grid-column-start: span 3;
                grid-column-end: span 3;
            }

            .column-md-4 {
                grid-column-start: span 4;
                grid-column-end: span 4;
            }

            .column-md-5 {
                grid-column-start: span 5;
                grid-column-end: span 5;
            }

            .column-md-6 {
                grid-column-start: span 6;
                grid-column-end: span 6;
            }

            .column-md-7 {
                grid-column-start: span 7;
                grid-column-end: span 7;
            }

            .column-md-8 {
                grid-column-start: span 8;
                grid-column-end: span 8;
            }

            .column-md-9 {
                grid-column-start: span 9;
                grid-column-end: span 9;
            }

            .column-md-10 {
                grid-column-start: span 10;
                grid-column-end: span 10;
            }

            .column-md-11 {
                grid-column-start: span 11;
                grid-column-end: span 11;
            }

            .column-md-12 {
                grid-column-start: span 12;
                grid-column-end: span 12;
            }
        }

        @media (min-width: 75rem) {
            .column-lg-1 {
                grid-column-start: span 1;
                grid-column-end: span 1;
            }

            .column-lg-2 {
                grid-column-start: span 2;
                grid-column-end: span 2;
            }

            .column-lg-3 {
                grid-column-start: span 3;
                grid-column-end: span 3;
            }

            .column-lg-4 {
                grid-column-start: span 4;
                grid-column-end: span 4;
            }

            .column-lg-5 {
                grid-column-start: span 5;
                grid-column-end: span 5;
            }

            .column-lg-6 {
                grid-column-start: span 6;
                grid-column-end: span 6;
            }

            .column-lg-7 {
                grid-column-start: span 7;
                grid-column-end: span 7;
            }

            .column-lg-8 {
                grid-column-start: span 8;
                grid-column-end: span 8;
            }

            .column-lg-9 {
                grid-column-start: span 9;
                grid-column-end: span 9;
            }

            .column-lg-10 {
                grid-column-start: span 10;
                grid-column-end: span 10;
            }

            .column-lg-11 {
                grid-column-start: span 11;
                grid-column-end: span 11;
            }

            .column-lg-12 {
                grid-column-start: span 12;
                grid-column-end: span 12;
            }
        }
    }

    * {
        box-sizing: border-box;
    }

    *::before,
    *::after {
        box-sizing: border-box;
    }






    .gallery {
        padding: 0 0 4rem 0;
    }

    .img-container {
        width: 100%;
        height: 500px;
        cursor: pointer;
        overflow: hidden;
    }

    .img-container:hover .img-content-hover {
        display: block;
    }

    .serviceimg {
        width: 100%;
        height: 500px;
        -o-object-fit: cover;
        object-fit: cover;
        transform: scale(1);
        transition: all 0.3s ease-in-out;
    }

    .serviceimg:hover {
        transform: scale(1.15);
    }

    .img-content-hover {
        z-index: 1;
        position: absolute;
        top: 0;
        left: 0;
        white-space: nowrap;
        display: none;
        padding: 1rem;
        background: var(--primary);
        font-weight: 400;
        margin-top: 1.25rem;
        margin-left: -2rem;
    }

    .title {
        color: var(--orange);
        font-family: var(--philosopher);
        font-size: 1.5rem;
        font-weight: 700;
    }

    .category {
        font-family: var(--ptext);
        font-size: 1rem;
        color: #fff8;
    }

    .img-content {
        display: none;
    }



    @supports (display: grid) {
        .gallery .grid {
            grid-gap: 1rem;
        }
    }

    @media (min-width: 62rem) {
        nav ul {
            justify-content: flex-end;
        }
    }

    @media screen and (max-width: 1024px) {
        img:hover {
            transform: none;
        }

        .img-container {
            height: 100%;
        }

        .img-container:hover .img-content-hover {
            display: none;
        }

        .img-content {
            display: block;
            padding: 1rem 0;
        }
    }
</style>
@include('mini.parallax', ['name' => 'Services', 'random' => rand(1, 18)])

<div class="contentdiv">
    <section class="gallery">
        <div class="container">
            <div class="grid">

                {{-- {% set services = [
      [1,"Wedding Photography","someline"],
      [3,"Wedding Photography","someline"],
      [4,"Wedding Photography","someline"],
      [7,"Wedding Photography","someline"],
      [8,"Wedding Photography","someline"],
      ] %} --}}

                @php
                    $services = [
                        [1, 'Wedding Photography', 'someline'],
                        [3, 'Wedding Photography', 'someline'],
                        [4, 'Wedding Photography', 'someline'],
                        [7, 'Wedding Photography', 'someline'],
                        [8, 'Wedding Photography', 'someline'],
                        // fs
                    ];
                @endphp ?> ?>



                {{-- {% for i in services[:3] %} --}}
                {{-- trim array --}}
                @foreach (array_slice($services, 0, 3) as $i)
                    <div class="column-xs-12 column-md-4">
                        <figure class="img-container">
                            <img class="serviceimg" src="/static/assets/images/pics/{{ $i[0] }}.jpg" />
                            <figcaption class="img-content">
                                <h2 class="title">{{ $i[1] }}</h2>
                                <h3 class="category">{{ $i[2] }}</h3>
                            </figcaption>
                            <span class="img-content-hover">
                                <h2 class="title">{{ $i[1] }}</h2>
                                <h3 class="category">{{ $i[2] }}</h3>
                            </span>
                        </figure>
                    </div>
                @endforeach
                @foreach (array_slice($services, -2) as $i)
                    <div class="column-xs-12 column-md-6">
                        <figure class="img-container">
                            <img class="serviceimg" src="/static/assets/images/pics/{{ $i[0] }}.jpg" />
                            <figcaption class="img-content">
                                <h2 class="title">{{ $i[1] }}</h2>
                                <h3 class="category">{{ $i[2] }}</h3>
                            </figcaption>
                            <span class="img-content-hover">
                                <h2 class="title">{{ $i[1] }}</h2>
                                <h3 class="category">{{ $i[2] }}</h3>
                            </span>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <center>
        @include('mini.anchor', ['name' => 'View More...'])
    </center>
</div>

<script>
    const imgContent = document.querySelectorAll('.img-content-hover');

    function showImgContent(e) {
        for (var i = 0; i < imgContent.length; i++) {
            x = e.pageX;
            y = e.pageY;
            imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
        }
    };

    document.addEventListener('mousemove', showImgContent);
</script>
