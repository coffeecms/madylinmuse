<!-- hero-section area start here  -->
<div class="hero-section">
    <div class="hero-slider">
        @foreach ($sliders as $slider)
            <div class="signle-slide"
                style="background-image: url('{{ asset(SliderImage() . $slider->Background_Image) }}');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    {{ langConverter($slider->en_Sub_Title, $slider->fr_Sub_Title) }}</h2>
                                <h1 class="slider-title">
                                    {{ langConverter($slider->en_Title, $slider->fr_Title) }}
                                </h1>
                                <p class="slider-text">
                                    {{ langConverter($slider->en_Description, $slider->fr_Description) }}</p>
                                <div class="slider-btn">
                                    <a href="{{ route('all.product') }}"
                                        class="secondary-btn">{{ langConverter($slider->en_Button_Text, $slider->fr_Button_Text) }}
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- hero-section area end here  -->


<!-- Featured Products area start here  -->
<div class="featured-productss-area section-top pb-100">
    <div class="container">
        <div class="section-header-area">
            <div class="row">
                <div class="col-md-6">
               
                    <h2 class="section-title">
                    New Arrival
                    </h2>
                </div>
                <div class="col-md-6 align-self-end text-md-end">
                    <a href="{{ route('all.product') }}" class="see-btn">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="{{ route('single.product', $product->en_Product_Slug) }}"><img
                                    class="product-thumbnal"
                                    src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                    alt="{{ __('product') }}" /></a>
                     
                        </div>
                        <div class="product-info">
                     
                            <input type="hidden" name="quantity" value="1" id="product_quantity">
                            <!-- This is server side code. User can not modify it. -->
                            <div class="product-price">
                                <!-- <span class="regular-price">{{ currencyConverter($product->Price) }}</span> -->
                                <span class="price">{{ currencyConverter($product->Discount_Price) }}</span>
                            </div>                            
                            <h3 class="product-name"><a class="product-link"
                                    href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                            </h3>

                            <!-- <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                    class="icon fas fa-plus-circle"></i></a> -->
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Featured Products area end here  -->


<!-- Image Gallery area start here  -->
<x-frontend.image-gallery></x-frontend.image-gallery>
<!-- Image Gallery area end here  -->

