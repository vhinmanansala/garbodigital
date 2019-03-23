@if (get_the_ID() == 26)
    @php ($header_background = get_field('header_background', get_the_ID()))
@endif

<div id="page-header" style="background: url('{{ $header_background['url'] }}') no-repeat center scroll;">
    <div class="grid-container">
        <div class="grid-x grid-padding-x justified-center">
            <div class="cell medium-6 large-6 text-center">
                @if (! is_singular('project'))
                    <h1>{!! get_the_title() !!}</h1>

                    @if ($sub_heading)
                        <p>{{ $sub_heading }}</p>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>