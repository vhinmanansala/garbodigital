{{--
  Template Name: About
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')

        <div class="page-content">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-12 large-6">
                        <img src="@asset('images/dotted.png')">
                        {!! get_the_content() !!}
                    </div>
                </div>
            </div>
        </div>
        @include('partials.customers')
    @endwhile
@endsection