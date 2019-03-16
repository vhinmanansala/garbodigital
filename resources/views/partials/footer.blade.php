<footer id="footer-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div id="footer-sidebar-1" class="footer-sidebar cell medium-4 large-4">
                @php dynamic_sidebar('sidebar-footer') @endphp
            </div>

            <div id="footer-sidebar-2" class="footer-sidebar cell medium-4 large-4">
                @php dynamic_sidebar('footer_sidebar_2') @endphp
            </div>

            <div id="footer-sidebar-3" class="footer-sidebar cell medium-4 large-4">
                <h4 class="widget-title"><span>Follow Us</span></h4>

                <ul class="social-media clearfix">
                    @foreach ($social_medias as $social_media => $url)
                        @if ($social_media == 'facebook')
                            @php($class = 'facebook')
                        @elseif ($social_media == 'instagram')
                            @php($class = 'instagram')
                        @elseif ($social_media == 'twitter')
                            @php($class = 'twitter')
                        @elseif ($social_media == 'pinterest')
                            @php($class = 'pinterest')
                        @endif

                        <li>
                            <a href="{{ $url }}" class="{{ $class }}">
                                @if ($social_media == 'facebook')
                                    <i class="fab fa-facebook-f"></i>
                                @elseif ($social_media == 'pinterest')
                                    <i class="fab fa-pinterest-p"></i>
                                @elseif ($social_media == 'twitter')
                                    <i class="fab fa-twitter"></i>
                                 @elseif ($social_media == 'instagram')
                                    <i class="fab fa-instagram"></i>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>