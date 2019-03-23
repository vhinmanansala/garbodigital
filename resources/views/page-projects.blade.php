{{--
  Template Name: Projects
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')

        <div class="page-content">
            <div class="grid-container">
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
    @endwhile
@endsection