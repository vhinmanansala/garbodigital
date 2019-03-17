<div id="page-header" style="background: url('{{ $header_background['url'] }}') no-repeat center scroll;">
    <div class="grid-container">
        <div class="grid-x grid-padding-x justified-center">
            <div class="cell medium-6 large-6 text-center">
                @if (! is_singular('project'))
                    <h1>{!! App::title() !!}</h1>
                    <p>{{ $sub_heading }}</p>
                @endif
            </div>
        </div>
    </div>
</div>