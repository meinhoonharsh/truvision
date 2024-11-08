@php $title = '404 | Page not Found'; @endphp

@extends('layout.app')
@section('content')
    <style>
        .cont-404 {
            font-family: var(--ptext);
            max-width: 768px;
            min-height:80vh;
            display:flex;
            justify-content: center;
            align-items: center;
            margin:auto;
            flex-direction:column;
        }

        .cont-404 img{
            width:90%;
            max-width:500px;
        }


        @media screen and (max-width: 768px) {
            .cont-404 {
                margin: 20px auto;
                width: 95%;
            }
        }
    </style>

    <div class="cont-404">
        <img src="/static/assets/images/404.svg">

        <center>
            @include('mini.anchor', ['name' => 'Back to Home...', 'href'=>'/'])
        </center>
    </div>



@endsection
