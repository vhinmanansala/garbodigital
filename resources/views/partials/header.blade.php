<div id="header-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell small-4 medium-3 large-3">
                <a id="logo" href="{{ $site_url }}">
                    <img src="{{ $logo['url'] }}">
                </a>
            </div>

            <div class="mobile-menu-icon cell small-8 text-right show-for-small-only">
                <i class="fal fa-bars"></i>
            </div>

            <div class="cell medium-9 large-9 text-right hide-for-small-only">
                @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
            </div>
        </div>
    </div>

    <div id="mobile-menu-container" style="display: none;">
        @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
    </div>
</div>