@extends('frontend.app')
@section('title', 'Dashboard')

@section('content')
    <!-- Section (Profile) -->
    <div class="col-md-4" id="about">
        @include('frontend.components.aboutme')
    </div>

    <!-- Section (My Information) -->
    <div class="col-md-8">
        <div class="row g-4">
            <div class="col-12" id="portfolio">
                @include('frontend.components.portfolio')
            </div>
            <div class="col-md-5" id="map">
                @include('frontend.components.map')
            </div>
            <div class="col-md-7">
                <div class="row g-4">
                    <div class="col-12" id="resume">
                        @include('frontend.components.resume')
                    </div>
                    <div class="col-12" id="display">
                        @include('frontend.components.display')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SocialIcons Column of Boxes -->
    <div class="col-md-2 d-flex flex-column gap-4 flex-md-column flex-sm-row flex-wrap" id="social-icons">
        @include('frontend.components.socialicons')
    </div>

    <!-- Technology Column of Boxes -->
    <div class="col-md-4 d-flex flex-column gap-4" id="technology">
        @include('frontend.components.tehnology')
    </div>

    <!-- Experience Block -->
    <div class="col-md-6" id="experience">
        @include('frontend.components.experience')
    </div>

    <!-- Projects Block -->
    @include('frontend.components.project')

    <!-- Footer Block -->
    @include('frontend.layouts.footer')

@endsection
