@layout('layouts/master')
<?php /* Template Name: About 2019 */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<div class="root barba-container about-v2-page" data-namespace="about" data-page-id="About" data-transition-in="about_in" data-transition-out="about_out" data-page-init="about_init">
    <div class="default-content {{ (get_field('hero_dynamic_background') !== 'none') ? ' has-dynamic-bg' : false }}">
        @if(get_field('hero_dynamic_background') !== 'none')
            <div class="work-animated-background {{ (get_field('hero_dynamic_background') !== 'none') ? ' dynamic-bg '.get_field('hero_dynamic_background') : false }}" {{ (get_field('hero_dynamic_background') !== 'none') ? ' style="background-color: #CBEEF4"' : false }}></div>
        @endif
        
        <section id="about-section-1" class="about-section">
            <div class="container">
                <div class="row about-section-wrapper">
                    <div class="col-md-8 col-sm-12 about-section__title">
                        <?php if (get_field('section_1_title')): ?>
                            <?php the_field('section_1_title'); ?>
                        <?php endif; ?>
                    </div>
            
                    <div class="col-md-4 col-sm-12 about-section__text">
                        <?php if (get_field('section_1_text')): ?>
                            <?php the_field('section_1_text'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-section-2" class="about-section">
            <div class="container about-section-wrapper">
                <div class="col-md-12">
                    <div class="about-section__title">
                        <?php if (get_field('section_2_title')): ?>
                            <?php the_field('section_2_title'); ?>
                        <?php endif; ?>
                    </div>
            
                    <div class="about-section__text">
                        <?php if (get_field('section_2_text')): ?>
                            <?php the_field('section_2_text'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-section-3" class="about-section">
            <div class="container">
                <div class="row about-section-wrapper">
                    <div class="col-md-7 about-section__title">
                        <?php if (get_field('section_3_title')): ?>
                            <?php the_field('section_3_title'); ?>
                        <?php endif; ?>
                    </div>
            
                    <div class="col-md-5 about-section__text">
                        <?php if (get_field('section_3_text')): ?>
                            <?php the_field('section_3_text'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-section-4" class="about-section">
            <div class="container">
                <div class="row about-section-wrapper">
                    <div class="col-md-7">
                        <div class="about-section__title">
                            <?php if (get_field('section_4_title')): ?>
                                <?php the_field('section_4_title'); ?>
                            <?php endif; ?>
                        </div>
                
                        <div class="about-section__text">
                            <?php if (get_field('section_4_text')): ?>
                                <?php the_field('section_4_text'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-section-5" class="about-section">
            <div id="change-slider">
                <div class="container">
                    <h1>YOU NEED TO CHANGE.</h1>
                </div>
            </div>
            <div class="container">
                <div class="row about-section-wrapper">
                    <div class="col-md-8 about-section__title">
                        <?php if (get_field('section_5_title')): ?>
                            <?php the_field('section_5_title'); ?>
                        <?php endif; ?>
                    </div>
            
                    <div class="col-md-4 about-section__text" >
                        <?php if (get_field('section_5_text')): ?>
                            <?php the_field('section_5_text'); ?>
                        <?php endif; ?>       
                    </div>
                </div>
            </div>
        </section>

        <section id="about-section-6" class="about-section">
            <div class="wwd-section-wrapper">
                <div class="wrap">
                    <div class="about-section__title">
                        <?php if (get_field('section_6_title')): ?>
                            <?php the_field('section_6_title'); ?>
                        <?php endif; ?>
                    </div>
            
                    <div class="about-section__text">
                        <?php if (get_field('section_6_text')): ?>
                            <?php the_field('section_6_text'); ?>
                        <?php endif; ?>
                    </div>           
                </div>
                <div class="container wwd-capabilities">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="capability">
                                <div class="title">Strategy</div>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ullam soluta exercitationem est laboriosam nostrum dolorem assumenda id et earum odit in minus tempora magni animi, asperiores deleniti. Error, sapiente?
                                </div>
                            </div>
                            <div class="capability">
                                <div class="title">Strategy</div>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ullam soluta exercitationem est laboriosam nostrum dolorem assumenda id et earum odit in minus tempora magni animi, asperiores deleniti. Error, sapiente?
                                </div>
                            </div>                    
                        </div>


                        <div class="col-md-6">
                            <div class="capability">
                                <div class="title">Strategy</div>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ullam soluta exercitationem est laboriosam nostrum dolorem assumenda id et earum odit in minus tempora magni animi, asperiores deleniti. Error, sapiente?
                                </div>
                            </div>
                            <div class="capability">
                                <div class="title">Strategy</div>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ullam soluta exercitationem est laboriosam nostrum dolorem assumenda id et earum odit in minus tempora magni animi, asperiores deleniti. Error, sapiente?
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
                
            </div>
        </section>        
                      
        <article class="page-about">
        </article>
        <div class="about-content">
            @if(!empty(get_field('flexible_content_sections')))
                @foreach(get_field('flexible_content_sections') as $section_index => $section)
                    @include('components/about/' . $section['acf_fc_layout'], ['section_index' => $section_index])
                @endforeach
            @endif
        </div>
    </div>
    @include('partials/cta/getstarted')
</div>
<?php endwhile; ?>

<script>
    jQuery(document).ready(function(){
        jQuery('#about-section-3 .about-section__title p').html(function(){	
            var text= jQuery(this).text().split(' ');
            var last = text.pop();
            return text.join(" ") + (text.length > 0 ? ' <span class="last">'+last+'<span></span><span></span><span></span></span>' : last);   
        });
        var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 100}});

        var scrollSection = new ScrollMagic.Scene({
            triggerElement: jQuery('#about-section-5'),
            triggerHook: 'onEnter',            
        })
        .on("enter", function (event) {
            jQuery('#about-section-5').addClass('animate');
        })
        .addTo(controller);

        
    })
</script>
@endsection