{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')

        <div class="page-content">
            <div class="grid-container">
                <div class="grid-x grid-padding-x justified-center">
                    <div class="cell medium-8 large-8">
                        @php(the_content())
                    </div>
                </div>
            </div>
        </div>

        <div class="acf-map">
            <pre>
                {{ print_r($map) }}
            </pre>
            <div class="marker" data-lat="{{ $map['lat'] }}" data-lng="{{ $map['lng'] }}"></div>
        </div>
    @endwhile
@endsection