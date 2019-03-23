@extends('layouts.app')

@section('content')
    <?php
        $page = new WP_Query(array('page_id' => 26));
    ?>

    @while($page->have_posts()) @php($page->the_post())
        @include('partials.page-header')
    @endwhile  @php(wp_reset_postdata())

    <div class="page-content">
        <div class="grid-container">
            <?php 
                $category = get_queried_object();

                $current_page = get_query_var('paged');
                $current_page = max( 1, $current_page );

                $args = array(
                    'post_type' => 'project', 
                    'paged' => $current_page,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'project_type',
                            'field' => 'slug',
                            'terms' => $category->slug
                        )
                    )
                );

                $projects = new WP_Query($args);
            ?>

            @include('partials.project-filter')

            <div class="grid-x grid-padding-x">
                <div class="cell large-12">
                    <div id="portfolio-container" class="clearfix">
                        @while($projects->have_posts()) @php($projects->the_post())
                            @php($params = array( 'width' => 300, 'height' => 300 ))
                            @php($thumbnail = get_field('header_background', get_the_ID()))

                            <div class="portfolio">
                                <img src="{{ bfi_thumb($thumbnail['url'], $params) }}">

                                <div class="portfolio-content-container">
                                    <div class="portfolio-content">
                                        <div>
                                            <h6>{{ get_the_title() }}</h6>
                                            <a href="{{ get_permalink() }}">
                                                View work

                                                <i class="fal fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endwhile @php(wp_reset_postdata())
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection