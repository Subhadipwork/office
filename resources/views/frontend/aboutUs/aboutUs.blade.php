@extends('frontend.layouts.layout')
@section('content')
<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="assets/images/contactBanner2.jpg" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>About Us</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="{{route('home') }}">Home <i class="fa-solid fa-angles-right"></i></a>
            <a href="{{route('aboutUs') }}">About Us</a>
        </div>
    </div>
</section>


<section class="aboutMainSection">
    <div class="custContain">
        <div class="aboutMainTitle">
            <h3>{{$aboutUs->title}}</h3>
        </div>
        <div class="aboutContain">
            {!!$aboutUs->description!!}
            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, minima. Nesciunt dolor architecto voluptatibus, quasi maxime tempora tempore cupiditate placeat vitae perspiciatis porro sunt perferendis ipsa mollitia numquam quis dolorum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus facilis nam sint aliquam esse enim quibusdam quo dolorem voluptate nulla. Alias eum architecto praesentium fugiat obcaecati. Est commodi veniam maiores.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex delectus, eaque omnis doloribus dolor enim, amet beatae cum veritatis minus quas dicta debitis fugiat fuga quam excepturi, exercitationem vel asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto consequatur maiores modi saepe neque, beatae eaque fugiat ipsam repellendus sed rerum, voluptatem, cum hic aliquam. Officia voluptatum incidunt sit. Nam?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore provident dolores corrupti ipsum deleniti sequi natus dolorum voluptates veniam, in, amet ipsam similique ex earum? Placeat praesentium explicabo laudantium distinctio?</p> -->
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="aboutTimeSection">
                    <div class="aboutMainTitle">
                        <h3>Hour Of Operation</h3>
                    </div>
                    <div class="timingSection">
                        <p>Monday:</p>
                        <p>12 - 6 PM</p>
                    </div>
                    <div class="timingSection">
                        <p>Tuesday:</p>
                        <p>12 - 6 PM</p>
                    </div>
                    <div class="timingSection">
                        <p>Wednesday:</p>
                        <p>12 - PM</p>
                    </div>
                    <div class="timingSection">
                        <p>Thursday:</p>
                        <p>12 - 6PM</p>
                    </div>
                    <div class="timingSection">
                        <p>Friday:</p>
                        <p>12 - 6PM</p>
                    </div>
                    <div class="timingSection">
                        <p>Saturday:</p>
                        <p>12 - 6PM</p>
                    </div>
                    <div class="timingSection">
                        <p>Sunday:</p>
                        <p>Close</p>
                    </div>
                </div>
                <div class="careerSection">
                    <div class="aboutMainTitle">
                        <h3>Career</h3>
                    </div>
                    <div class="aboutContain">
                        <p>{{$aboutUs->career}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="aboutImg">
                    <img src="{{asset('uploads/aboutus/'.$aboutUs->image)}}" alt="..." />
                </div>
            </div>
        </div>
    </div>
</section>



@endsection