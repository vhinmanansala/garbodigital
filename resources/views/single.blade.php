@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @if ($header_background)
            @include('partials.page-header')
        @endif

        <div class="page-content">
            <div class="grid-container">
                <div class="grid-x grid-padding-x justified-center">
                    <div class="cell medium-10 large-10">
                        <h1>{!! App::title() !!}</h1>
                        
                        <div class="meta-container">
                            <div class="grid-x grid-padding-x">
                                @if ($client)
                                    <div class="cell medium-4 large-3">
                                        <strong>Client:</strong><br>
                                        <span>{{ $client }}</span>
                                    </div>
                                @endif

                                @if ($roles)
                                    <div class="cell medium-4 large-3">
                                        <strong>Role:</strong><br>
                                        <span>{{ implode($roles, ', ') }}</span>
                                    </div>
                                @endif
                                
                                @if ($completion_date)
                                    <div class="cell medium-4 large-3">
                                        <strong>Date:</strong><br>
                                        <span>{{ $completion_date }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        {!! get_the_content() !!}
                    </div>
                </div>
            </div>
        </div>
    
        @if ($images)
            <div id="project-gallery-container">
                <div id="project-carousel" class="owl-carousel project-carousel owl-theme">
                    @foreach ($images as $image)
                        @php($params = array('height' => 450 ))
                        <div class="item">
                            <img src="{{ bfi_thumb($image['url'], $params) }}" alt="{{ $image['title'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div id="pagination-container">
            <div class="grid-container">
                <div class="grid-x grid-padding-x justified-center">
                    <div class="cell medium-10 large-10">
                        <div class="grid-x grid-padding-x">
                            <div class="cell small-6 medium-6 large-6 text-left">
                                @if (get_previous_post())
                                    {{ previous_post_link('<strong>Previous project</strong><h4>%link</h4>') }}
                                @endif
                            </div>

                            <div class="cell small-6 medium-6 large-6 text-right">
                                @if (get_next_post())
                                    {{ next_post_link('<strong>Next project</strong><h4>%link</h4>') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.call-to-action')
    @endwhile
@endsection
