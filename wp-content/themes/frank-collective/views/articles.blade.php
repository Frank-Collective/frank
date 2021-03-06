@layout('layouts/master')
<?php /* Template Name: Articles */ ?>
@section('content')

<div class="root barba-container" data-namespace="articles" data-page-id="Articles" data-transition-in="articles_in" data-transition-out="articles_out" data-page-init="articles_init">
    <div class="main default-content">
        <div class="articles container">
            <div class="grid">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="head" data-appear-block>
                        <h1>Let's be frank.</h1>
                        <p>A series of frank articles.</p>
                    </div>


                        <div class="articles-list append-posts-from-load-more" data-load-more-list="articles" data-appear-block>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="article-row">
                                    <div class="img-holder">
                                        <div class="img">
                                            {{ helper::image(get_field('image_thumb'), 'full') }}
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="left">
                                            <h3>{{ get_the_title() }}</h3>
                                            <p>This is a subheader preview of the article...</p>
                                        </div>
                                        <div class="right">
                                            <a href="{{ get_permalink() }}" class="link-u">Read Article</a>
                                        </div>
                                    </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    

                        <div class="full-btn">
                            <div
                                    data-appear-text
                                    data-target=".append-posts-from-load-more .article-row"
                                    data-append-to=".append-posts-from-load-more"
                                    data-load-more=".btn-load-more-ajax a"
                                    class="btn-load-more-ajax">
                                {{ next_posts_link('Load More') }} 
            
                            </div>
                        </div>
               
                </div>
            </div>
        </div>
    </div>
    @include('partials/cta/contact')
</div>

@endsection