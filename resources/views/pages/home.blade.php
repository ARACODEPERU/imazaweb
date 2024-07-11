@extends('layouts.webpage')

@section('content')
    <x-home.slider />
    <!--Features One Start-->
    <x-features />
    <!--Features One End-->
    <!--About One Start-->
    <x-about />
    <!--About One End-->
    <!--Courses One Start-->
    <x-courses.list-card />
    <!--Courses One End-->
    <!--Registration One Start-->
    <x-register />
    <!--Registration One End-->
    <!--Categories One Start-->
    <x-courses.category-list-card />
    <!--Categories One End-->
    <!--Testimonials One Start-->
    <x-testimonials />
    <!--Testimonials One End-->
    <!--Company Logos One Start-->
    <x-company-clients />
    <!--Company Logos One End-->
    <!--Why Choose One Start-->
    <x-why-choose-one />
    <!--Why Choose One End-->
    <!--Blog One Start-->
    <x-blog.presentation />
    <!--Blog One End-->
    <!--Start Newsletter One-->
    <x-subscription />
    <!--End Newsletter One-->
@stop
