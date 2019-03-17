<div id="customer-section-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x justified-center">
            <div class="cell medium-6 large-6 text-center">
                <h2>{{ $customers_title }}</h2>
                <p>{{ $customers_content }}</p>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="cell medium-12 large-12">
                <div id="customer-carousel" class="owl-carousel owl-theme">
                    @foreach ($customer_logos as $customer_logo)
                        <div class="item">
                            <img src="{{ $customer_logo['logo']['url'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <img src="{{ $customers_background['url'] }}" class="image-background">
</div>