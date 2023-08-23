@php $title = 'About'; @endphp

@extends('layout.app')
@section('content')
    <style>
        #gallery {
            -webkit-column-count: 4;
            -moz-column-count: 4;
            column-count: 4;

            -webkit-column-gap: 20px;
            -moz-column-gap: 20px;
            column-gap: 20px;
        }

        @media (max-width:1200px) {
            #gallery {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;

                -webkit-column-gap: 20px;
                -moz-column-gap: 20px;
                column-gap: 20px;
            }
        }

        @media (max-width:800px) {
            #gallery {
                -webkit-column-count: 2;
                -moz-column-count: 2;
                column-count: 2;

                -webkit-column-gap: 20px;
                -moz-column-gap: 20px;
                column-gap: 20px;
            }
        }

        @media (max-width:600px) {
            #gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
            }
        }

        #gallery img,
        #gallery video {
            width: 100%;
            height: auto;
            margin: 4% auto;
            box-shadow: -3px 5px 15px #000;
            cursor: pointer;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .modal-img,
        .model-vid {
            width: 100%;
            height: auto;
        }

        .modal-body {
            padding: 0px;
        }
    </style>



    <div style="width:100%;height: 100px;display:flex;justify-content:center;align-items:center">

        <img src="/static/assets/images/logowhite.png') }}" alt="" style="width:70px">
    </div>

    @include('mini.parallax', ['name' => 'About', 'random' => rand(1, 18)])
    <div class="contentdiv">
        <div id="gallery" class="container-fluid">
            @for ($img = 1; $img < 18; $img++)
                <img class="galleryimg" src="/static/assets/images/pics/{{ $img }}.jpg" class="img-responsive">
            @endfor
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $(".galleryimg").click(function() {
                console.log("Img is clicked")
                var t = $(this).attr("src");
                console.log(t)
                $(".modal-body").html("<img style='' src='" + t + "' class='modal-img'>");
                var myModal = new bootstrap.Modal(document.getElementById('myModal'))
                myModal.show();
            });

        }); //EOF Document.ready
    </script>
@endsection
