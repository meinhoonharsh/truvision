{{-- {% set title = "Home" %} 
{% set page = "index" %} 
{% extends "layout/app.html" %} 
{% block body %}
{% include 'sections/videocontainer.html' %}
{% include 'sections/botocarousel.html' %}
{% include 'sections/homeabout.html' %}
{% include 'sections/homegallery.html' %}
{% include 'sections/homeservices.html' %}
{% include 'sections/testimonial.html' %}
{% include 'sections/homefaqs.html' %}
{% include 'sections/homecontact.html' %}
{% endblock %} --}}


@extends('layout.app')
@php
    $title = 'Home';
    $page = 'index';
@endphp

@section('content')
    Hello dosto
    {{-- @include('sections.videocontainer')
    @include('sections.botocarousel')
    @include('sections.homeabout')
    @include('sections.homegallery')
    @include('sections.homeservices')
    @include('sections.testimonial')
    @include('sections.homefaqs')
    @include('sections.homecontact') --}}
@endsection
