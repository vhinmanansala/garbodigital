<div id="header-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-3 large-3">
                <a id="logo" href="{{ $site_url }}">
                    <img src="{{ $logo['url'] }}">
                </a>
            </div>

            <div class="cell medium-9 large-9 text-right">
                @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
            </div>
        </div>
    </div>
</div>