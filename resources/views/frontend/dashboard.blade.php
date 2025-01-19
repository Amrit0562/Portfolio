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
    @foreach ($technologies as $technology)
        <div class="col-md-6 d-flex flex-column gap-4" id="work">
            <div class="p-4"
                style="box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;  border-radius: 25px; height: 500px; margin: 0; padding: 0;">
                Project1
            </div>
        </div>
    @endforeach


    <div class="col-md-6 d-flex flex-column mt-0" id="work">
        <div class="p-4"
            style="box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;  border-radius: 25px; height: 400px; margin: 0; padding: 0;">
            Project2
        </div>
    </div>

    <div class="col-md-6 d-flex flex-column" id="work">
        <div class="p-4"
            style="box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;  border-radius: 25px; height: 400px; margin: 0; padding: 0;">
            Project3
        </div>
    </div>
@endsection
