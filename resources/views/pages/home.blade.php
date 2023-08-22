

@extends('layout.app')
@php
    $title = 'Home';
    $page = 'index';
@endphp

@section('content')
    Hello dosto
    @include('sections.videocontainer')
    @include('sections.botocarousel')
    @include('sections.homeabout')
    @include('sections.homegallery')
    @include('sections.homeservices')
    @include('sections.testimonial')
    @include('sections.homefaqs')
    @include('sections.homecontact')
@endsection
