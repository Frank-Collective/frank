@layout('layouts/master')
<?php /* Template Name: Work 2019 */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<div class="root barba-container" data-namespace="works" data-page-id="Works" data-transition-in="works_2_in" data-transition-out="works_2_out" data-page-init="works_2_init">
    <div class="main default-content no-padding">
        <div class="work-animated-background"></div>
        <div class="work-section">
            <div class="container">
                @if(get_field('works'))
                <div class="work-list">
                    <?php
                    $options = array(
                        'post_type' => 'work',
                        'orderby' => 'post__in',
                        'post__in' => get_field('works')
                    );
                    $work_idx = 0;
                    $team = new WP_Query( $options );
                    while( $team->have_posts() ) : $team->the_post();
                    ?>
                    <div class="work-wrap col-md-6">
                        <div class="work-item position-{{ ($work_idx % 2 === 0) ? 'left' : 'right' }}" data-background-color="{{ (get_field('theme_color')) ? get_field('theme_color') : '#ffffff' }}">
                            <div class="work view-case-study ajax-load" data-position="{{ ($work_idx % 2 === 0) ? 'left' : 'right' }}" data-link="{{ get_permalink() }}" data-work-item data-appear-offset="0.2">

                                @if(get_field('main_image') || get_field('hero_section_image') || get_field('featured_project_video'))
                                    @if(get_field('featured_project_video'))
                                        <div class="featured-project work-video-wrap ajax-preload-assets">
                                            <video autoplay muted loop playsinline class="work-video">
                                                <source src="{{ get_field('featured_project_video') }}" type="video/mp4">
                                            </video>
                                        </div>
                                    @else
                                        <div class="featured-project img" data-image="{{ helper::imageURL(get_field('main_image'), 'full') }}">
                                            <div class="bg-img" style='background-image: url({{ helper::imageURL(get_field('main_image'), 'full') }});'></div>
                                        </div>
                                    @endif
                                @endif
                                <div class="desc">
                                    <h5 class="work-cat">{{ get_field('brand_name') }}</h5>
                                    @if(get_field('tagline') || get_field('tagline_short'))
                                        <h5>{{ (get_field('tagline_short')) ? get_field('tagline_short') : get_field('tagline') }}</h5>
                                    @endif
                                    <?php
                                    $term_obj_list = get_the_terms( get_the_ID(), 'service' );
                                    ?>
                                    @if(!empty($term_obj_list))
                                        <?php
                                        $services = array_chunk($term_obj_list, 3);
                                        ?>
                                        <ul class="service-list">
                                        @foreach($services as $items)
                                            @foreach($items as $item)
                                                <li>{{ $item->name }}</li>
                                            @endforeach
                                        @endforeach
                                        </ul>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                    $work_idx++;
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                @endif
                <div class="full-btn">
                    <div class="btn-wrap">
                        @include('partials/link', ['button' => get_field('works_link'), 'classes' => 'btn btn-primary'])
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials/cta/contact')
</div>
<?php endwhile; ?>
@endsection
