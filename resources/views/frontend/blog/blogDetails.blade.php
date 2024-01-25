@extends('frontend.layouts.layout')
@section('content')
<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="{{asset('uploads/blogs/flat-lay-home-office-desktop-600nw-1869950761.webp')}}" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>Blog Details</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="{{route('blog') }}">Blog <i class="fa-solid fa-angles-right"></i></a>
            <a href="">Blog Details</a>
        </div>
    </div>
</section>


<section class="BlogDtlsSection">
    <div class="custContain">
        <div class="aboutMainTitle">
            <h3>{{$SingleBlog->blog_title}}</h3>
        </div>
        <div class="blogDtlsImg">
            <img src="{{asset('uploads/blogs/'.$SingleBlog->blog_image)}}" alt="img">
        </div>
        <div class="userDtlsSection">
            <div class="blogUserDtls">
                <div class="userImg">
                    <!-- {{--<img src="assets/images/user.jpg" alt="img" />--}} -->
                    <img src="https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659652_1280.png" alt="img" />
                </div>
                <div class="userName">
                    <h6>{{$SingleBlog->blog_author}}</h6>
                </div>
            </div>
            <div class="blogUserdate">
                <div class="blogDateSection">
                    <p><i class="fa-regular fa-calendar-days"></i> {{$SingleBlog->created_at}}</p>
                </div>
            </div>
        </div>
        <div class="BlogDtlsContnSection">
            <!-- <div class="BlogSubTitle">
                <h3>Design</h3>
            </div> -->
            <div class="clogDtlsContain">
                <p>{!!$SingleBlog->blog_description!!}</p>
            </div>
            <!-- <div class="blogdtlsNotes">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat deleniti, amet adipisci quod enim autem architecto labore distinctio omnis soluta aperiam asperiores id quas rem fuga, quis beatae! Ex, id! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod laborum, ab praesentium esse quam quae sint enim similique excepturi dignissimos perferendis recusandae magnam mollitia molestias! Ut, quas reprehenderit. Perspiciatis, earum.
                </p>
            </div> -->
        </div>
        <!-- <div class="BlogDtlsContnSection">
            <div class="BlogSubTitle">
                <h3>Quality</h3>
            </div>
            <div class="clogDtlsContain">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, quas tenetur amet numquam facilis, quo eligendi necessitatibus natus iure nam odio, minima corporis maxime cum nisi modi quod ab alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consequuntur recusandae, eveniet optio praesentium amet nostrum sapiente obcaecati, ex impedit sed molestias, rem dolor repellendus dicta totam voluptas vel voluptatibus.</p>
            </div>
        </div> -->
        <div class="blogUserSocal">
            <div class="BlogsocalLink">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <div class="BlogsocalLink">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="BlogsocalLink">
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="BlogsocalLink">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>



@endsection