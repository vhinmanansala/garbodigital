{{--
  Template Name: Services
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')

        <div class="page-content">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-5 large-5">
                        <div id="services-title-container">
                            <h2>{{ $title }}</h2>
                        </div>
                    </div>

                    <div class="cell medium-6 large-6 medium-offset-1 large-offset-1">
                        <div class="main-content">
                            {!! $content !!}
                        </div>

                        <ul class="accordion">
                            @foreach ($services as $service)
                                <li>
                                    <a href="#">
                                        <h6>
                                            {!! $service['icon'] !!}
                                            {{ $service['title'] }}
                                        </h6>
                                    </a>

                                    {!! $service['content'] !!}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.call-to-action')
    @endwhile
@endsection