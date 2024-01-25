@extends('frontend.layouts.layout')
@section('content')
<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="assets/images/faqbanner2.webp" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>FAQ</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="index.php">Home <i class="fa-solid fa-angles-right"></i></a>
            <a href="faq.php">FAQ</a>
        </div>
    </div>
</section>


<section class="faqSection">
    <div class="custContain">
        <div class="aboutMainTitle">
            <h3>FAQs</h3>
        </div>
        <div class="faqContain">
            <div class="accs">
                @if(!empty($faqs))
                    @foreach($faqs as $faq)
                <div class="acc-item">
                    <h3>
                        <span>{{$faq->question}}</span>
                        <img class="acc-chevron" src="https://svgshare.com/i/zQr.svg"></img>
                    </h3>
                    <p>
                        {{$faq->answer}}
                    </p>
                </div>
                @endforeach
                @endif
          
            </div>
        </div>
    </div>
</section>

@endsection