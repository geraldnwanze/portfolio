@extends('layouts.main')

@section('content')

@php 
$professions = json_decode($hero->professions)
@endphp 
        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">{{ $hero->welcome }}</span>
                                    <h1 class="title">{{ $hero->intro }} <span>{{ config('app.name') }}</span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                            @for ($i = 0; $i < count($professions); $i++)
                                            <b class="{{ $i == 0 ? 'is-visible' : 'is-hidden' }}">{{ $professions[$i] }}</b>
                                            @endfor
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">{{ $hero->bio }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">connect with me on</span>
                                            <ul class="social-share d-flex liststyle">
                                                @forelse ($socials as $social)
                                                    <li class="{{ $social->name }}"><a href="{{ $social->url }}" rel="noreferrer" target="_blank"><i data-feather="{{ $social->name }}"></i></a></li>
                                                    
                                                @empty
                                                    <li>no socials</li>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="{{ asset('nwanze-gerald.png') }}" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    @forelse ($features as $feature)
                        <!-- Start Single Service -->
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                            <div class="rn-service">
                                <div class="inner">
                                    <div class="icon">
                                        <i data-feather="{{ $feature->icon }}"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{ $feature->title }}</a></h4>
                                        <p class="description">{{ $feature->description }}</p>
                                        {{-- <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a> --}}
                                    </div>
                                </div>
                                <a class="over-link" href="#"></a>
                            </div>
                        </div>
                        <!-- End SIngle Service -->
                    @empty
                        <h2>No Data Found</h2>
                    @endforelse

                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('main/images/portfolio/portfolio-01.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">nest js</a>
                                        </div>
                                        <div class="meta">
                                            <span class="mr--5"><a href="javascript:void(0)"><i class="feather-thumbs-up"></i></a>600 </span>
                                            <span class="mr--5"><a href="javascript:void(0)"><i class="feather-thumbs-down"></i></a>90 </span>
                                            <span><a href="javascript:void(0)"><i class="feather-message-square"></i></a>500 </span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Rest API development for mobile and web apps <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                </div>
            </div>
        </div>
        <!-- End portfolio Area -->
        
        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">3+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-bs-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li>
                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHOTOSHOT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">100%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">FIGMA</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">95%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE XD</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE ILLUSTRATOR</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">DESIGN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">SOFTWARE</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PLUGIN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Company Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
        
        <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">Visit my blog and keep your feedback</span>
                            <h2 class="title">My Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('main/images/blog/blog-01.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Canada</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">T-shirt design is the part of design
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('main/images/blog/blog-02.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Development</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 hour read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">The services provide for design <i
                                        class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('main/images/blog/blog-03.jpg') }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Application</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 5 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                            maintain<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->


                <!-- Start Contact section -->
                <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center">
                                    <span class="subtitle">Contact</span>
                                    <h2 class="title">Contact Me</h2>
                                </div>
                            </div>
                        </div>
        
                        <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                            <div class="col-lg-5">
                                <div class="contact-about-area">
                                    <div class="thumbnail">
                                        <img src="{{ asset('main/images/contact/contact1.png') }}" alt="contact-img">
                                    </div>
                                    <div class="title-area">
                                        <h4 class="title">{{ config('app.name') }}</h4>
                                        <span>Chief Operating Officer</span>
                                    </div>
                                    <div class="description">
                                        <p>I am available for freelance work. Connect with me via the channels below.
                                        </p>
                                        <span class="phone">Whatsapp: <a href="tel:01941043264"> +01234567890</a></span>
                                        <span class="mail">Email: <a href="mailto:{{ contact_email() }}">{{ contact_email() }}</a></span>
                                    </div>
                                    <div class="social-area">
                                        <div class="name">CONNECT WITH ME ON</div>
                                        <div class="social-icone">
                                            @forelse ($socials as $social)
                                                <a href="{{ $social->url }}" rel="noreferrer" target="_blank"><i data-feather="{{ $social->name }}"></i></a>
                                            @empty
                                                no socials
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-aos-delay="600" class="col-lg-7 contact-input">
                                <div class="contact-form-wrapper">
                                    <div class="introduce">
        
                                        <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="https://rainbowit.net/html/inbio/mail.php">
        
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="contact-name">Your Name</label>
                                                    <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                                </div>
                                            </div>
        
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="contact-phone">Phone Number</label>
                                                    <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                                </div>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="contact-email">Email</label>
                                                    <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                                </div>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="subject">subject</label>
                                                    <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                                </div>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="contact-message">Your Message</label>
                                                    <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
        
                                            <div class="col-lg-12">
                                                <button name="submit" type="submit" id="submit" class="rn-btn">
                                                    <span>SEND MESSAGE</span>
                                                    <i data-feather="arrow-right"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contuct section -->
@endsection