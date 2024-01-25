@extends('frontend.layouts.layout')

@section('content')
<section class="Homebanner">
    <div class="swiper myHomeSwiper">
        <div class="swiper-wrapper">
            @if(!empty($bannerdata))
            @foreach($bannerdata as $banner)
            <div class="swiper-slide">
                <div class="bannerImg">
                    <img src="{{asset('uploads/banner/'.$banner->image)}}" alt="img" />
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="HomeAbout" data-aos="fade-up" data-aos-duration="3000">
    <div class="custContain">
        <div class="homeAboutTitle">
            <h3>About Company</h3>
        </div>
        <div class="HomeAboutProductSection">
            @if(!empty($categorys))
            @foreach($categorys as $category)
            <a href="furniture.php" class="aboutProductCard">
                <div class="HomeAboutCARDimg">
                    <img src=https://picsum.photos/200/300 alt="img" />
                </div>
                <div class="aboutProductTitle">
                    <p>{{$category->category_name}}</p>
                </div>
            </a>
            @endforeach
            @endif
            <a href="furniture.php" class="aboutProductCard">
                <div class="HomeAboutCARDimg">
                    <img src="assets/images/product2.jpg" alt="img" />
                </div>
                <div class="aboutProductTitle">
                    <p>Outdoor Sofa Sets</p>
                </div>
            </a>


        </div>
    </div>
</section>


<section class="newProduct" data-aos="zoom-in-right" data-aos-duration="2000">
    <div class="custContain">
        <div class="homeAboutTitle">
            <h3>New Collection</h3>
        </div>
        <div class="newProductSection">

            <div class="swiper newCollectionSwiper">
                <div class="swiper-wrapper">
                    @if(!empty($newarrival))
                    @foreach($newarrival as $new)
                    <div class="swiper-slide">
                        <a href="furniture.php" class="newProductCard">
                            <div class="newProductImg">
                                <img src="https://picsum.photos/200/300" alt="..." />
                            </div>
                            <div class="newProductTitle">
                                <h5>{{$new->category_name}}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="sliderBtn">
                    <div class="prevbtn"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="nextbtn"><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newCollection" data-aos="zoom-in" data-aos-duration="3000">
    <div class="custContain">
        <div class="newcollectionSection">
            <div class="newCollectionImg">
                <img src="{{asset('uploads/banner/'.$offerbanner->image)}}" alt="img" />
            </div>
            <div class="imgOverlay"></div>
            <div class="collectionTitle">
                <h6>New Design</h6>
                <h3>Up to <span> 50% off </span></h3>
                <h3>All Patio furniture</h3>
                <button class="newCollectionShopBtn">Shop Now</button>
            </div>
        </div>
    </div>
</section>

<section class="recommendSection" data-aos="fade-up" data-aos-duration="3000">
    <div class="custContain">
        <div class="homeAboutTitle">
            <h3>Recommend For You</h3>
        </div>
        <div class="recommendTabs">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @if(!empty($recommended))
                @foreach($recommended as $recommend)
                <li class="nav-item">
                    <a class="nav-link {{($loop->first) ? 'active' : ''}}" id="pills-{{$recommend->category_name}}-tab" data-toggle="pill" href="#pills-{{$recommend->category_name}}" role="tab" aria-controls="pills-{{$recommend->category_name}}" aria-selected="true">{{$recommend->category_name}}</a>
                </li>
                @endforeach
                @endif
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @if(!empty($recommended))
                @foreach($recommended as $recommend)
                <div class="tab-pane {{($loop->first) ? 'active' : ''}} fade {{($loop->first) ? 'show' : ''}}" id="pills-{{$recommend->category_name}}" role="tabpanel" aria-labelledby="pills-{{$recommend->category_name}}-tab">
                    <div class="recommendTabSection">
                        @if(!empty($recommend->subcategory))
                        @foreach($recommend->subcategory as $subcategory)
                        <a href="{{route('category',$subcategory->id)}}" class="recommendCard">
                            <div class="recommendImg">
                                <img src="assets/images/tabimg1.jpg" alt="..." />
                            </div>
                            <div class="recommendItem">
                                <h6>{{$subcategory->subcategory_name}}</h6>
                            </div>
                        </a>
                        @endforeach
                        @endif

                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    </div>
</section>

<section class="ClientReviewSection">
    <div class="reviewOverlay"></div>
    <div class="custContain">
        <div class="clientTitle">
            <h3>What our clients say</h3>
        </div>
        <div class="ClientReviewCardSection" data-aos="zoom-in" data-aos-duration="3000">

            <div class="swiper myReviewSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="reviewCard">
                            <div class="reviewHeader">
                                <div class="clientImg">
                                    <img src="assets/images/clientImg.jpg" alt="..." />
                                </div>
                                <div>
                                    <div class="clientName">
                                        <h6>Furkan Giray</h6>
                                    </div>
                                    <div class="clientRate">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="clientComment">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias soluta aperiam, temporibus sit numquam aliquam facere itaque veritatis dolore saepe iusto ab hic ea magnam, accusamus excepturi eligendi voluptatum minus.</p>
                            </div>
                            <div class="iconDsg">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviewCard">
                            <div class="reviewHeader">
                                <div class="clientImg">
                                    <img src="assets/images/clientImg1.jpg" alt="..." />
                                </div>
                                <div>
                                    <div class="clientName">
                                        <h6>Faiz Akram</h6>
                                    </div>
                                    <div class="clientRate">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="clientComment">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias soluta aperiam, temporibus sit numquam aliquam facere itaque veritatis dolore saepe iusto ab hic ea magnam, accusamus excepturi eligendi voluptatum minus.</p>
                            </div>
                            <div class="iconDsg">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviewCard">
                            <div class="reviewHeader">
                                <div class="clientImg">
                                    <img src="assets/images/clientImg.jpg" alt="..." />
                                </div>
                                <div>
                                    <div class="clientName">
                                        <h6>Furkan Giray</h6>
                                    </div>
                                    <div class="clientRate">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="clientComment">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias soluta aperiam, temporibus sit numquam aliquam facere itaque veritatis dolore saepe iusto ab hic ea magnam, accusamus excepturi eligendi voluptatum minus.</p>
                            </div>
                            <div class="iconDsg">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviewCard">
                            <div class="reviewHeader">
                                <div class="clientImg">
                                    <img src="assets/images/clientImg1.jpg" alt="..." />
                                </div>
                                <div>
                                    <div class="clientName">
                                        <h6>Faiz Akram</h6>
                                    </div>
                                    <div class="clientRate">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="clientComment">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias soluta aperiam, temporibus sit numquam aliquam facere itaque veritatis dolore saepe iusto ab hic ea magnam, accusamus excepturi eligendi voluptatum minus.</p>
                            </div>
                            <div class="iconDsg">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviewCard">
                            <div class="reviewHeader">
                                <div class="clientImg">
                                    <img src="assets/images/clientImg.jpg" alt="..." />
                                </div>
                                <div>
                                    <div class="clientName">
                                        <h6>Furkan Giray</h6>
                                    </div>
                                    <div class="clientRate">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="clientComment">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias soluta aperiam, temporibus sit numquam aliquam facere itaque veritatis dolore saepe iusto ab hic ea magnam, accusamus excepturi eligendi voluptatum minus.</p>
                            </div>
                            <div class="iconDsg">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="sliderBtn">
                    <div class="prevbtn"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="nextbtn"><i class="fa-solid fa-angle-right"></i></div>
                </div> -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
@endsection