@extends('layouts.front')

@section('title', 'About Me')

@section('styles')
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <style>
        
    </style>

@endsection

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <!-- About Sections -->
    <div class="space-y-16">
        @foreach ($contents as $content)
            <div class="home-section p-6 bg-white shadow-lg rounded-lg">
                <div class="relative flex flex-col items-stretch bg-white rounded-lg shadow overflow-hidden">
                    <div class="flex-1 overflow-y-auto">
                        <img src="{{ asset('storage/' . $content->image) }}" class="object-cover w-full h-full" alt="{{ $content->section_title }}">
                    </div>
                    <div class="absolute inset-0 z-10 bg-gradient-to-t from-black"></div>
                    <div class="absolute inset-x-0 bottom-0 z-20 p-4 overflow-y-auto">
                        <div class="bg-gray-900/40 rounded-lg p-4">
                            <p class="mb-1 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl text-white text-opacity-80">Isaac Talb • <time>{{ $content->created_at->format('M d, Y') }}</time></p>
                            <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-medium text-white">{!! $content->section_title !!}</h3>
                            <div class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white mt-2">
                                {!! Str::limit($content->section_content, 400) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- amp ads -->
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-3157572406863018">
    </amp-auto-ads>
    <!-- amp ads end -->

    
</div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sliderInner = document.getElementById('team-slider-inner');
            const dots = document.querySelectorAll('[data-slide]');
            const totalSlides = dots.length;

            let currentSlide = 0;
            let slideDirection = 1; // 1 for forward, -1 for backward

            // Function to move to a specific slide
            function goToSlide(slideIndex) {
                sliderInner.style.transform = `translateX(-${slideIndex * 100}%)`;
                dots.forEach(d => d.classList.remove('bg-teal-500'));
                dots[slideIndex].classList.add('bg-teal-500');
            }

            // Event listener for dots
            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    currentSlide = parseInt(dot.getAttribute('data-slide'));
                    slideDirection = 1; // Reset direction to forward on manual change
                    goToSlide(currentSlide);
                });
            });

            // Auto-slide functionality
            function autoSlide() {
                currentSlide += slideDirection;

                if (currentSlide === totalSlides) {
                    slideDirection = -1; // Switch to backward
                    currentSlide = totalSlides - 2; // Step back one slide
                } else if (currentSlide < 0) {
                    slideDirection = 1; // Switch to forward
                    currentSlide = 1; // Step forward one slide
                }

                goToSlide(currentSlide);
            }

            // Initialize auto-slide
            let autoSlideInterval = setInterval(autoSlide, 2000);

            // Default to the first slide
            goToSlide(0);
        });
    </script>
@endpush