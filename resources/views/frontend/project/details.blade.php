@extends('frontend.layouts.layout')
@section('content')
<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="assets/images/contactBanner2.jpg" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>Project Details</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="project.php">Project <i class="fa-solid fa-angles-right"></i></a>
            <a href="projectDtls.php">Project Details</a>
        </div>
    </div>
</section>


<section class="projectDtlsPage">
    <div class="custContain">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="projectDtlsleft">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                           
                            @if(!empty($project->projectimage))
                                @foreach($project->projectimage as $key => $image)
                                <div class="swiper-slide">
                                    <div class="projectDtlsImg">
                                        <img src="{{asset('uploads/projects/'.$image->image)}}" alt="..." />
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
                           
                            @if(!empty($project->projectimage))
                            @foreach($project->projectimage as $key => $image)
                            <div class="swiper-slide">
                                <div class="projectDtlsminImg">
                                    <img src="{{asset('uploads/projects/'.$image->image)}}" alt="..." />
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
                        <h3>{{$project->title}}</h3>
                    </div>
                    <div class="ProjectContain">
                        <p>
                            {!!$project->description!!}
                        </p>
                    </div>
                    <div class="projectClientName">
                        <p><span>Client Name:</span>{{$project->client_name}}</p>
                    </div>
                    <div class="projectClientName">
                        <p><span>Date:</span>{{$project->created_at}}</p>
                    </div>
                    <div class="projectClientName">
                        <p><span>Category:</span>{{$project->category->category_name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="projectFrom">
    <div class="custContain">
        <div class="aboutMainTitle">
            <h3>GOT ANY QUESTIONS</h3>
        </div>
        <form class="projectForm" action="{{route('frontend.contact.store')}}" method="post">
            @csrf
            <input type="hidden" name="project_id" value="{{$project->id}}">
            <div class="fromInput">
                <label form="name">Name<span>*</span> </label>
                <input type="text" name="name" placeholder="Your Name">
            </div>
            <div class="fromInput">
                <label form="name">Email<span>*</span> </label>
                <input type="email" name="email" placeholder="Email ID">
            </div>
            <div class="fromInput">
                <label form="name">Website<span>*</span> </label>
                <input type="text" name="website" placeholder="Website">
            </div>
            <div class="fromInput">
                <label form="name">Comment<span>*</span> </label>
                <textarea type="comment" name="comment" placeholder="Message"></textarea>
            </div>
            <div class="fromCheckbox">
                <input type="checkbox" id="vehicle1">
                <label for="vehicle1"> Save my name, email, and website in this browser for the next time I comment.</label>
            </div>
            <div class="fromSubmit">
                <button class="projectSubmitbtn" type="button" id="projectSubmit">Submit</button>
            </div>
        </form>
    </div>
</section>

<section class="ResentSection">
    <div class="custContain">
        <div class="aboutMainTitle">
            <h3>Recent Works</h3>
        </div>
        <div class="RecentProject">
            <div class="swiper myResentSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="projectDtls.php">
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
                        <a href="projectDtls.php">
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
                        <a href="projectDtls.php">
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
                        <a href="projectDtls.php">
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
                        <a href="projectDtls.php">
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
@endsection

@push('scripts')

<script>
 $(document).ready(function(){
    $('#projectSubmit').click(function(){
        $('.projectForm').submit();

    })
 })
</script>
@endpush