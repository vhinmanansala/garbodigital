{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
    <div id="slider-container">
        <div class="flexslider">
            <ul class="slides">
                @while($projects->have_posts()) @php($projects->the_post())
                    <li style="background: url({{ get_the_post_thumbnail_url()  }});" class="slide">
                        <div class="slider-content-container">
                            <div class="slider-content">
                                <div>
                                    <h2>{{ get_the_title() }}</h2>
                                    <p>{{ get_the_excerpt() }}</p>
                                    <a href="{{ get_permalink() }}" class="button">View project</a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endwhile @php(wp_reset_postdata())
            </ul>
        </div>
    </div>

    <div id="services-section-container" class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12 large-5">
                <div id="services-title-container">
                    <img src="@asset('images/dotted.png')">
                    
                    <h3>
                        <?php
                            $shortcode = get_post_meta($post->ID,'services_title',true);
                            echo do_shortcode($shortcode);
                        ?>
                    </h3>
                </div>
            </div>

            <div class="cell medium-12 large-5 large-offset-2">
                <div id="services-list">
                    @foreach ($services as $service)
                        <div class="service grid-x">
                            <div class="cell small-3 medium-2 large-2">
                                {!! $service['icon'] !!}
                            </div>

                            <div class="cell small-9 medium-10 large-10">
                                <h6>{{ $service['title'] }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="about-section-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-12 large-4">
                    <h3>{{ $about_title }}</h3>
                </div>

                <div class="cell medium-12 large-6 large-offset-2">
                    <p>{{ $about_content }}</p>

                    <a href="{{ $about_link }}" class="button">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    @include('partials.customers')
@endsection