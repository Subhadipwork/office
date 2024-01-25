@extends('frontend.layouts.layout')
@section('content')

<section class="aboutBanner">
    <div class="aboutBannerImg">
        <img src="{{ asset('front_assets/images/projectBanner1.webp') }}" alt="img" />
    </div>
    <div class="aboutBannerOverflow"></div>
    <div class="aboutBannerContain">
        <div class="bannerTitle">
            <h2>Project</h2>
        </div>
        <div class="bannerBradeCome">
            <a href="index.php">Home <i class="fa-solid fa-angles-right"></i></a>
            <a href="project.php">Project</a>
        </div>
    </div>
</section>

<section class="projectTab">
    <div class="custContain">
        <div class="homeAboutTitle">
            <h3>Our Project</h3>
        </div>
        <div class="recommendTabs">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

            @if(!empty($categorys))
                @foreach($categorys as $category)
                <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="pills-{{$category->category_name}}-tab" data-toggle="pill" href="#pills-{{$category->category_name}}" role="tab" aria-controls="pills-{{$category->category_name}}" aria-selected="true">{{$category->category_name}}</a>
                </li>
                @endforeach
            @endif
            </ul>

            <div class="tab-content" id="pills-tabContent">
            @if(!empty($categorys))
                @foreach($categorys as $category)
                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="pills-{{$category->category_name}}" role="tabpanel" aria-labelledby="pills-{{$category->category_name}}-tab">
                    <div class="OurProject">
                        @if(!empty($category->project))
                            @foreach($category->project as $project)

                        <a href="{{route('frontend.project.details',$project->id)}}" class="ProjectImg">
                        @if(!empty($project->projectimage->first()->image))
                                    <img src="{{asset('uploads/projects/'.$project->projectimage->first()->image)}}" alt="" />
                                @else
                                    <img src="https://images.unsplash.com/photo-1517705008128-361805f42e86?q=80&w=1387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" srcset="">
                                @endif
                            <div class="projectHover">
                                <div class="projectOverLay"></div>
                                <div class="projectIconSec">
                                    <!-- <i class="fa-solid fa-expand"></i> -->
                                    <i class="fa-solid fa-paperclip"></i>
                                </div>
                                <div class="projectName">
                                    <h6>{{$project->title}}</h6>
                                </div>
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
</section>
@endsection