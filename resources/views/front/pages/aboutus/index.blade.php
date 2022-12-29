@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('About Us') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('About Us') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="about-us-area section">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-12">
                    <div class="about-us-content">
                        <div class="section-header-area">
                            <h3 class="sub-title">
                                {{ langConverter(siteContentAboutPage('about_us')->en_Subtitle, siteContentAboutPage('about_us')->fr_Subtitle) }}
                            </h3>
                            <h2 class="section-title">{!! langConverter(
                                siteContentAboutPage('about_us')->en_Title_One,
                                siteContentAboutPage('about_us')->fr_Title_One,
                            ) !!}</h2>
                        </div>
                        {!! langConverter(
                            siteContentAboutPage('about_us')->en_Description_One,
                            siteContentAboutPage('about_us')->fr_Description_One,
                        ) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end here  -->


    <!-- Image Gallery area start here  -->
    <x-frontend.image-gallery></x-frontend.image-gallery>
    <!-- Image Gallery area end here  -->
@endsection
