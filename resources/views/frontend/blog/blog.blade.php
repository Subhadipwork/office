@extends('frontend.layouts.layout')
@section('content')
<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="assets/images/contactBanner2.jpg" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>Blog</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="{{route('home') }}" >Home <i class="fa-solid fa-angles-right"></i></a>
            <a href="{{route('blog') }}" class="active">Blog</a>
        </div>
    </div>
</section>

<section class="BlogPage">
    <div class="custContain">
        <div class="BlogTitle">
            <h3>Our Blog</h3>
        </div>
        <div class="blogContainSection">
            @foreach ($blogs as $blog)
            <a href="{{route('blogDetails',$blog->id) }}" class="BlogCard">
                <div class="blogImg">
                    <img src="uploads/blogs/{{$blog->blog_image}}" alt="...">
                </div>
                <div class="blogImgTitle">
                    <h5>{{$blog->blog_title}}</h5>
                </div>
                <div class="BlogCardDtls">
                    <p>{!!$blog->blog_description!!}</p>
                </div>
                <div>
                    <button class="readMore">Read More <i class="fa-solid fa-angles-right"></i></button>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>



@endsection