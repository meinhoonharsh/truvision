@php $title = 'About'; @endphp

@extends('layout.app')
@section('content')
    <style>
        .containergallery {
            font-family: var(--ptext);
            max-width: 768px;
            position: relative;
            margin: 0 auto;
            word-spacing: 0.4em;
            font-size: 1.2em;
            color: #fff9;
        }


        @media screen and (max-width: 768px) {
            .containergallery {
                margin: 20px auto;
                width: 95%;
            }
        }
    </style>



    <div style="width:100%;height: 100px;display:flex;justify-content:center;align-items:center">

        <img src="/static/assets/images/logowhite.png" alt="" style="width:70px">
    </div>
    @include('mini.parallax', ['name' => 'About', 'random' => rand(1, 18)])
    <div class="contentdiv">

        <div class="containergallery" style="border:none">
            <center style=" margin-bottom:20px;"><span
                    style="font-family:var(--philosopher);font-size:1.2em !important;color:#fff">

                    Thank you for Trusting us with your most precious Memories <br>
                    <span style="color:var(--orange)">"Quality is Never an Accident"</span> <br>
                    It is always the result of High Intention, Sincere Efforts, Intelligent Direction and Skillful
                    Execution, It represents the Wise Choice of many Alternatives
                </span></center>

            <hr class="type_1"
                style="
                border: 0;
                height: 55px;
                width: 100%;
                background-size: contain;
                aspect-ratio: 452/28;
                margin:6% 0;
                background-repeat: no-repeat;
                background-image: url('/static/assets/images/hrules/1.png') ;
                ">
            <div class="row my-3">
                <div class="col-md-6 pr-2">
                    lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at elit eget odio semper euismod. Nulla
                    facilisi.q
                </div>
                <div class="col-md-6">
                    lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at elit eget odio semper euismod. Nulla
                    facilisi.q
                </div>
            </div>
        </div>



    </div>
@endsection
