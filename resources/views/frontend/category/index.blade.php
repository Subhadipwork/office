@extends('frontend.layouts.layout')
@section('content')
<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="assets/images/furnicharBanner.jpg" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>Furniture</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="inden.php">Home <i class="fa-solid fa-angles-right"></i></a>
            <a href="furniture.php">Furniture</a>
        </div>
    </div>
</section>


<section class="FurnitureSection">
    <div class="custContain">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="sortingSection">
                    <div class="sortingSection">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Sort</h3>
                        </div>
                        <div class="sortOptopn mb-5">
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="">
                                    <input type="radio" value="newest" name="sort" class="sortbtn" checked="">
                                    <label class="sortRadio">Default sorting</label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="">
                                    <input type="radio" name="sort" value="lowtohigh" class="sortbtn">
                                    <label class="sortRadio">Popularity</label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="">
                                    <input type="radio" name="sort" value="hightolow" class="sortbtn">
                                    <label class="sortRadio">Latest</label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="">
                                    <input type="radio" name="sort" value="hightolow" class="sortbtn">
                                    <label class="sortRadio">Price: Ascending</label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                <div class="">
                                    <input type="radio" name="sort" value="hightolow" class="sortbtn">
                                    <label class="sortRadio">Price: Decrease</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-color-1 mb-4">
                        <h3 class="section-title section-title__sm mb-0 pb-2">Filters</h3>
                    </div>
                    <div class="CatagoryTitle">
                        <h5> Sub Categories</h5>
                    </div>
                    <div class="sortOptopn mb-5">
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn" checked="">
                                <label class="sortRadio">Outdoor Sofa Sets</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn">
                                <label class="sortRadio">Outdoor Seating </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn">
                                <label class="sortRadio">Outdoor Chair Table</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn" checked="">
                                <label class="sortRadio">Balcony Chair Table</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn">
                                <label class="sortRadio">Outdoor Swing</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn">
                                <label class="sortRadio">Outdoor Dining</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn" checked="">
                                <label class="sortRadio">Outdoor gazebo</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn">
                                <label class="sortRadio">Outdoor Umbrella</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                            <div class="">
                                <input type="radio" name="sort" class="sortbtn">
                                <label class="sortRadio">Outdoor Pergola</label>
                            </div>
                        </div>
                    </div>
                    <div class="furbtn">
                        <button class="filterBtn">Filter</button>
                    </div>
                </div>
                <div class="MobshortSection">
                    <p>
                        <a class="MobFilterBtn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Filter & Sort
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Sort</h3>
                            </div>
                            <div class="sortOptopn mb-5">
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" value="newest" name="sort" class="sortbtn" checked="">
                                        <label class="sortRadio">Default sorting</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" value="lowtohigh" class="sortbtn">
                                        <label class="sortRadio">Popularity</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" value="hightolow" class="sortbtn">
                                        <label class="sortRadio">Latest</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" value="hightolow" class="sortbtn">
                                        <label class="sortRadio">Price: Ascending</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" value="hightolow" class="sortbtn">
                                        <label class="sortRadio">Price: Decrease</label>
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom border-color-1 mb-4">
                                <h3 class="section-title section-title__sm mb-0 pb-2">Filters</h3>
                            </div>
                            <div class="CatagoryTitle">
                                <h5>Categories</h5>
                            </div>
                            <div class="sortOptopn">
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn" checked="">
                                        <label class="sortRadio">Outdoor Sofa Sets</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn">
                                        <label class="sortRadio">Outdoor Seating </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn">
                                        <label class="sortRadio">Outdoor Chair Table</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn" checked="">
                                        <label class="sortRadio">Balcony Chair Table</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn">
                                        <label class="sortRadio">Outdoor Swing</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn">
                                        <label class="sortRadio">Outdoor Dining</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn" checked="">
                                        <label class="sortRadio">Outdoor gazebo</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn">
                                        <label class="sortRadio">Outdoor Umbrella</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="">
                                        <input type="radio" name="sort" class="sortbtn">
                                        <label class="sortRadio">Outdoor Pergola</label>
                                    </div>
                                </div>
                            </div>
                            <div class="furbtn">
                                <button class="filterBtn">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="border-bottom border-color-1 mb-4">
                    <h3 class="section-title section-title__sm mb-0 pb-2">Outdoor Furniture</h3>
                </div>
                <div class="recommendTabSection">
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg1.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Coffee table Sets</h6>
                        </div>
                    </a>

                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg2.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Gazebo / Cabana</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg3.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Garden Furniture</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg4.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Cane /Rattan Furniture</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg5.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Coffee table Sets</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg3.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Garden Furniture</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg1.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Coffee table Sets</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg2.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Gazebo / Cabana</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg1.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Coffee table Sets</h6>
                        </div>
                    </a>

                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg2.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Gazebo / Cabana</h6>
                        </div>
                    </a>
                    <a href="FurnitureDtls.php" class="recommendCard">
                        <div class="recommendImg">
                            <img src="assets/images/tabimg3.jpg" alt="..." />
                        </div>
                        <div class="recommendItem">
                            <h6>Garden Furniture</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection