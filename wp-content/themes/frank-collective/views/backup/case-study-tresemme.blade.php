@layout('layouts/master', ['headerCaseStudy' => true])
<?php /* Template Name: Case Study - Tresemme */ ?>
@section('content')
<?php 
    $intro = [
        'pagetitle' => 'TRESemmé',
        'subtitle' => 'www.tresemme.com',
        'h1' => 'Style Setters',
        'content' => '<p>Concepting through execution of the TRESemmé Style Setters series, produced twice a year at New York Fashion Week.</p>',
        'dark' => true,
    ];

    $subintro1 = [
        'h2' => 'Love is in the Hair',
        'textrow' => [
            [
                'subtitle' => 'Positioning',
                'content' => '<p>Offering runway quality at street style prices, TRESemmé is ever-present at the biggest fashion event of the season–both backstage and in the limelight.</p>'
            ]
        ],
        'section_id' => 'section-1'
    ];

    $subintro2 = [
        'h2' => 'Latest Trends',
        'textrow' => [
            [
                'subtitle' => 'Concept',
                'content' => '<p>Hosted by style expert Louise Roe, Style Setters shows you how to translate the latest trends from the runway for yourself with TRESemmé with step by step tutorials with TRESemmé stylists Jeanie Syfu and Tyler Laswell.</p>'
            ]
        ],
        'section_id' => 'section-2'
    ];

    $subintro3 = [
        'h2' => 'No Cookie Cutter Content',
        'textrow' => [
            [
                'subtitle' => 'Content',
                'content' => '<p>We diversified content to create a series is an all-access pass to the hottest shows at New York Fashion, as well as the latest looks strutting down the sidewalk.</p>'
            ]
        ],
        'section_id' => 'section-3'
    ];

    $subintro4 = [
        'h2' => 'Cross Platform',
        'textrow' => [
            [
                'subtitle' => 'Social',
                'content' => '<p>Produced within 24 hours of live runway events, the Style Setters series lived across platforms, and was as pervasive across the city as Fashion Week itself.  From Taxi TV spots, to YouTube features with over a million views, to Snapchat stories hosted by the models of the moment, Style Setters helped TRESemmé bring professional, affordable style to everyone.</p>'
            ]
        ],
        'section_id' => 'section-4'
    ];

    $slideshow = [
        'title' => 'Tutorials',
        'slides' => [
            ['title' => '', 'image' => asset('images/video-placeholder03.jpg')],
            ['title' => '', 'image' => asset('images/video-placeholder03.jpg')],
            ['title' => '', 'image' => asset('images/video-placeholder03.jpg')],
        ]
    ];

    $nav = [
    	'title' => 'TRESemmé',
        'sections' => [
        	'Overview',
	        'Positioning',
        	'Concept',
            'Content',
            'Social',
            'Cross Platform',
        ]
    ]
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="root barba-container" data-namespace="case_study" data-page-id="Case_study" data-transition-in="case_study_in" data-transition-out="case_study_out" data-page-init="case_study_init">
    @include('partials/case-study/case-nav', $nav)
    <div class="case-hero-banner" style="background-image: url('{{ asset('images/case-banner38.jpg') }}');" id="section-0" data-nav-section="section-0" data-dark></div>

    @include('partials/case-study/case-intro', $intro)

    <div class="case-banner ch-lg" style="background-image: url('{{ asset('images/case-banner35.jpg') }}');" data-appear-fade-in></div>

    @include('partials/case-study/case-subintro', $subintro1)

    <div class="case-video" data-appear-block="fade-in">
        <div class="container">
            <img src="{{ asset('images/video-placeholder01.jpg') }}" alt="">
        </div>
    </div>

    <div class="case-banner-wrap" data-appear-block="fade-in">
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img87.jpg') }}');"></div>
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img88.jpg') }}');"></div>
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img89.jpg') }}');"></div>
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img90.jpg') }}');"></div>
    </div>

    @include('partials/case-study/case-subintro', $subintro2)

    <div class="container case-slideshow" data-appear-fade-in>
        @include('partials/slideshow')
    </div>

    @include('partials/case-study/case-subintro', $subintro3)

    <div class="case-banner-wrap" data-appear-block="fade-in">
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img91.jpg') }}');"></div>
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img92.jpg') }}');"></div>
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img93.jpg') }}');"></div>
        <div class="case-banner ch-sm cw-half" style="background-image: url('{{ asset('images/img94.jpg') }}');"></div>
    </div>

    @include('partials/case-study/case-subintro', $subintro4)


    <div class="case-banner" style="background-color: #000;">
        <img src="{{ asset('images/case-banner36.jpg') }}" width="1440" alt="" data-appear-fade-in>
    </div>

    <div class="case-banner ch-lg" style="background-image: url('{{ asset('images/case-banner37.jpg') }}');"  >
        <a href="#" class="tag">OOH mock up to billboard?</a>
    </div>

    <div class="case-video" data-appear-block="fade-in">
        <div class="container">
            <span class="title">Spanish Language Videos</span>
            <img src="{{ asset('images/video-placeholder02.jpg') }}" alt="">
        </div>
    </div>

    @include('partials/case-study/case-related')
</div>
<?php endwhile ?>
@endsection