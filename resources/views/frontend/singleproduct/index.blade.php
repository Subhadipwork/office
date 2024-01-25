@extends('frontend.layouts.layout')
@section('content')

<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="assets/images/aboutBanner.jpg" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>Furniture Details</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="furniture.php">Furniture <i class="fa-solid fa-angles-right"></i></a>
            <a href="FurnitureDtls.php">Furniture Details</a>
        </div>
    </div>
</section>


<section class="FurnitureDtlsSection">
    <div class="custContain">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="projectDtlsleft">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @if(!empty($singleproduct->productimage))
                                @foreach($singleproduct->productimage as $key => $image)
                                <div class="swiper-slide">
                                    <div class="projectDtlsImg">
                                        <img src="{{asset('uploads/products/'.$image->image)}}" alt="..." />
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        @if(!empty($singleproduct->productimage))
                            @foreach($singleproduct->productimage as $key => $image)
                            <div class="swiper-slide">
                                <div class="projectDtlsminImg">
                                    <img src="{{asset('uploads/products/'.$image->image)}}" alt="..." />
                                </div>
                            </div>
                            @endforeach
                        @endif
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="projectDtlsContain">
                    <div class="aboutMainTitle">
                        <h3>{{$singleproduct->title}}</h3>
                    </div>
                    <div class="furniturePrice">
                        <h6>Price: {{$singleproduct->price}}</h6>
                    </div>
                    <div class="productId">
                        <h6>Product ID : {{$singleproduct->sku}}</h6>
                    </div>
                    <div class="ProjectContain">
                        <p style="font-size: 17px; border-bottom:none;">
                            {!!$singleproduct->short_description!!}
                        </p>
                    </div>

                    <button class="FurnitureDtlsBtn" onclick="onenFron()">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="FurnitureDtlsContainSection">
    <div class="custContain">
        <div class="FurnitureDtlsTab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-tab1-tab" data-toggle="pill" href="#pills-tab1" role="tab" aria-controls="pills-tab1" aria-selected="true">
                        Description </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab2-tab" data-toggle="pill" href="#pills-tab2" role="tab" aria-controls="pills-tab2" aria-selected="false">
                        Specifications </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab3-tab" data-toggle="pill" href="#pills-tab3" role="tab" aria-controls="pills-tab3" aria-selected="false">
                        Shipping & Export </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel" aria-labelledby="pills-tab1-tab">
                    <div class="FurnitureTabContain">
                        <div class="swippingPoint">
                            <p>{!!$singleproduct->description!!}</p>
                        </div>
                        <div class="swippingCustomer">
                            <div class="projectClientName">
                                <p><span>Category:</span>{{$singleproduct->category->category_name}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-tab2" role="tabpanel" aria-labelledby="pills-tab2-tab">
                    <div class="FurnitureTabContain">
                        {!!$singleproduct->specification!!}
                        <div class="swippingCustomer">
                            <div class="projectClientName">
                                <p><span>Category:</span>{{$singleproduct->category->category_name}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="ResentSection">
    <div class="custContain">
        <div class="aboutMainTitle">
            <h3>Recent Works</h3>
        </div>
        <div class="RecentProject">
            <div class="swiper myFurnitureSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="FurnitureDtls.php">
                            <div class="recentImg">
                                <img src="assets/images/product2.jpg" alt="..." />
                                <div class="projectHover">
                                    <div class="projectOverLay"></div>
                                    <div class="projectIconSec">
                                        <i class="fa-solid fa-paperclip"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="FurnitureDtls.php">
                            <div class="recentImg">
                                <img src="assets/images/product2.jpg" alt="..." />
                                <div class="projectHover">
                                    <div class="projectOverLay"></div>
                                    <div class="projectIconSec">
                                        <i class="fa-solid fa-paperclip"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="FurnitureDtls.php">
                            <div class="recentImg">
                                <img src="assets/images/product2.jpg" alt="..." />
                                <div class="projectHover">
                                    <div class="projectOverLay"></div>
                                    <div class="projectIconSec">
                                        <i class="fa-solid fa-paperclip"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="FurnitureDtls.php">
                            <div class="recentImg">
                                <img src="assets/images/product2.jpg" alt="..." />
                                <div class="projectHover">
                                    <div class="projectOverLay"></div>
                                    <div class="projectIconSec">
                                        <i class="fa-solid fa-paperclip"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="FurnitureDtls.php">
                            <div class="recentImg">
                                <img src="assets/images/product2.jpg" alt="..." />
                                <div class="projectHover">
                                    <div class="projectOverLay"></div>
                                    <div class="projectIconSec">
                                        <i class="fa-solid fa-paperclip"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<section class="EnquirySection" id="addSection1">
    <div class="EnquiryFrom">
        <div class="EnqrHeader">
            <h5>Enquiry From</h5>
            <button class="CloseBtn" onclick="closeBtn()"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <form>
            <div class="fromInput">
                <label form="name">Name<span>*</span> </label>
                <input type="text" placeholder="Your Name">
            </div>
            <div class="fromInput">
                <label form="name">Phone No.<span>*</span> </label>
                <input type="number" placeholder="Phone No.">
            </div>
            <div class="fromInput">
                <label form="name">Category<span>*</span> </label>
                <select>
                    <option>Product Category</option>
                    <option>Outdoor Sofa Set</option>
                    <option>Outdoor Chair Table Set</option>
                    <option>Outdoor Sofa Set</option>
                    <option>Outdoor Chair Table Set</option>
                    <option>Outdoor Sofa Set</option>
                    <option>Outdoor Chair Table Set</option>
                </select>
            </div>
            <div class="fromInput">
                <label form="name">Comment<span>*</span> </label>
                <textarea type="comment" placeholder="Message"></textarea>
            </div>
            <div class="enqfromSubmit">
                <button class="EnqSubmitbtn" type="button">Submit</button>
            </div>
        </form>
    </div>
</section>

@endsection

@push('scripts')

<script>
    // SINGLE PROJECT 

    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });

    // Recent Work

    var swiper = new Swiper(".myFurnitureSwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            575: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
    });
</script>
@endpush
