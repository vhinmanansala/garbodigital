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

        <div id="our-team-section">
            <div class="grid-container">
                <div class="grid-x grid-padding-x justified-center">
                    <div class="medium-6 large-6 text-center">
                        <h3>{{ $meet_our_team_title }}</h3>
                    </div>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-x grid-padding-x medium-up-4 large-up-4">
                    @foreach ($members as $member)
                        <div class="team-member cell">
                            <img src="{{ $member['picture']['url'] }}" alt="{{ $member['picture']['title'] }}">
                            <h6>{{ $member['name'] }}</h6>
                            <span>{{ $member['position'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @include('partials.customers')
    @endwhile
@endsection