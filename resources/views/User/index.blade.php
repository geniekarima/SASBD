@extends('User.layouts.master')

@section('title')

@endsection

@section('custom_css')

@endsection

@section('content')
<div class="slider containr-fluid">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/slider/slide-02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none pb-5 mb-5 d-md-block">
                    <h5 class="text-white fw-bold fs-1 bounceInDown">Support Child for Education</h5>
                    <p class=" bounceInLeft mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                        justo neque, <br>
                        aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                        sed sagittis at, sagittis quis neque. Praesent.</p>
                    <div class="row text-center mt-3 vbh">
                        <div class="btn mx-auto w-auto  px-5 py-3 btn-primary fs-5  bounceInUp"> Donate Now </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider/slide-03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none pb-5 mb-5 d-md-block">
                    <h5 class="text-white fw-bold fs-1 bounceInDown">Support Child for Education</h5>
                    <p class=" bounceInLeft mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                        justo neque, <br>
                        aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                        sed sagittis at, sagittis quis neque. Praesent.</p>
                    <div class="row text-center mt-3 vbh">
                        <div class="btn mx-auto w-auto  px-5 py-3 btn-primary fs-5  bounceInUp"> Donate Now </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="what-we-do big-padding container-fluid">
    <div class="container">
        <div class="section-title row">
            <h2>What we do?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac accumsan ante. Proin ac lectus
                porttitor, pharetra lorem sit amet, euismod tortor. Donec blandit accumsan elit</p>
        </div>
        <div class="row mt-4 whd">
            <div class="col-md-4 text-center mb-5">
                <i class="bi text-primary fs-1 bi-egg-fried"></i>
                <h4 class="fs-6 fw-bold mt-3">RAISE FUND FOR HEALTHY FOOD</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla consectetur adipiscing elit. Sed
                    ac accumsan hic deserunt facere et animi</p>
            </div>
            <div class="col-md-4 text-center mb-5">
                <i class="bi fs-1 text-primary bi-house-door"></i>
                <h4 class="fs-6 fw-bold mt-3">HUGE HELP TO HOMELESS PUPIL</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla consectetur adipiscing elit. Sed
                    ac accumsan hic deserunt facere et animi</p>
            </div>
            <div class="col-md-4 text-center mb-5">
                <i class="bi fs-1 text-primary bi-book-half"></i>
                <h4 class="fs-6 fw-bold mt-3">EDUCATION FOR POOR CHILDREN</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla consectetur adipiscing elit. Sed
                    ac accumsan hic deserunt facere et animi</p>
            </div>
            <div class="col-md-4 text-center mb-5">
                <i class="bi fs-1 text-primary bi-currency-dollar"></i>
                <h4 class="fs-6 fw-bold mt-3">MASSIVE DONATION TO POOR</h4>
                <p>Lorem ipsum dolor sit amet consectetur, consectetur adipiscing elit. Sed ac accumsan adipisicing
                    elit. Nulla hic deserunt facere et animi</p>
            </div>
            <div class="col-md-4 text-center mb-5">
                <i class="bi fs-1 text-primary bi-building"></i>
                <h4 class="fs-6 fw-bold mt-3">LET’S BUILD SOME HOMES</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla consectetur adipiscing elit. Sed
                    ac accumsan hic deserunt facere et animi</p>
            </div>
            <div class="col-md-4 text-center mb-5">
                <i class="bi fs-1 text-primary bi-heart-pulse"></i>
                <h4 class="fs-6 fw-bold mt-3">MEDICAL FACILITIES</h4>
                <p>Lorem ipsum dolor sit amet consectetur, consectetur adipiscing elit. Sed ac accumsan adipisicing
                    elit. Nulla hic deserunt facere et animi</p>
            </div>


        </div>
    </div>
</div>


<section class="container-fluid causes bg-gray">
    <div class="container">
        <div class="section-title row">
            <p>Learn more about our</p>
            <h2>RECENT CAUSES</h2>
        </div>
        <div class="cuses-row row">
            <div class="col-md-4">
                <div class="causen-ccover">


                    <div class="caus-img">
                        <img src="assets/images/causes/c1.jpg" alt="">
                    </div>
                    <div class="caus-info row no-margin">
                        <span class="left-info col-6">
                            RAISED: $764
                        </span>
                        <span class="rit-info text-right col-6">
                            TARGET: $1500
                        </span>
                    </div>
                    <div class="caus-detail">
                        <h4>CONNECTING THE PEOPLE</h4>
                        <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters, as opposed to using 'Content here, content here', making it look like readable
                            English.</p>
                    </div>

                    <div class="donat-btn">
                        <button class="btn btn-danger"><i class="fas fa-hand-holding-usd"></i> Donate</button>
                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <div class="causen-ccover">


                    <div class="caus-img">
                        <img src="assets/images/causes/c2.jpg" alt="">
                    </div>
                    <div class="caus-info row no-margin">
                        <span class="left-info col-6">
                            RAISED: $764
                        </span>
                        <span class="rit-info text-right col-6">
                            TARGET: $1500
                        </span>
                    </div>
                    <div class="caus-detail">
                        <h4>CONNECTING THE PEOPLE</h4>
                        <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters, as opposed to using 'Content here, content here', making it look like readable
                            English.</p>
                    </div>

                    <div class="donat-btn">
                        <button class="btn btn-danger"><i class="fas fa-hand-holding-usd"></i> Donate</button>
                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <div class="causen-ccover">


                    <div class="caus-img">
                        <img src="assets/images/causes/c3.jpg" alt="">
                    </div>
                    <div class="caus-info row no-margin">
                        <span class="left-info col-6">
                            RAISED: $764
                        </span>
                        <span class="rit-info text-right col-6">
                            TARGET: $1500
                        </span>
                    </div>
                    <div class="caus-detail">
                        <h4>CONNECTING THE PEOPLE</h4>
                        <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters, as opposed to using 'Content here, content here', making it look like readable
                            English.</p>
                    </div>

                    <div class="donat-btn">
                        <button class="btn btn-danger"><i class="fas fa-hand-holding-usd"></i> Donate</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<!-- ******************** About US Starts Here ******************* -->

<div class="about-us">
    <div class="container">
        <div class="session-title">
            <p>Help us to Achieve our Goal</p>
            <h2>About Our Charity</h2>
        </div>
        <div class="about-row row">
            <div class="col-md-8">
                <div class="abut-detail">
                    <h4>BUILDING SCHOOL IN AFRICAN COMMUNITIES.</h4>
                    <p>Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien, eget tempor
                        justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et . Fusce egestas
                        volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit </p>
                    <p> Amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at dapibus
                        elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in, dapibus sapien.
                        Praesent nec ornare risus. Etiam iaculis, ligula vel gravida vestibulum, urna justo posuere
                        ante, id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus</p>
                </div>


                <div class="row diag-ro">
                    <div class="about-diag">
                        <div class="icon"><i class="fas fa-arrow-right"></i></div>
                        <div class="tex">
                            <h5>$500</h5>
                            <p>Raised by your help</p>
                        </div>
                    </div>
                    <div class="about-diag">
                        <div class="icon"><i class="fas fa-arrow-right"></i></div>
                        <div class="tex">
                            <h5>$1000</h5>
                            <p>Immediate Need</p>
                        </div>
                    </div>
                    <div class="about-diag">
                        <div class="icon"><i class="fas fa-arrow-right"></i></div>
                        <div class="tex">
                            <h5>$5000</h5>
                            <p>Our initial target</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="assets/images/about_img.png" alt="">
            </div>
        </div>
    </div>
</div>


<div id="testimonial" class="service bg-gray container-fluid px-4 py-5">
    <div class="container">


        <div class="section-title row mb-3">
            <h2 class="fw-bolder">Testimonial</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.
            </p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="serv-cove shadow-md rounded bg-white p-3">
                    <div class="prf row mb-3">
                        <div class="col-3">
                            <img class="rounded-pill" src="assets/images/testimonial/member-01.jpg"
                                alt="">
                        </div>
                        <div class="col-9 align-self-center">
                            <h6 class="mb-0 fw-bolder">Vinoth Parkash</h6>
                            <span>CEO Fabric Nation</span>
                        </div>
                    </div>
                    <div class="det text-center">
                        <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit.
                            Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut
                            arcu tristique luctus. Curabitur </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="serv-cove shadow-md rounded bg-white p-3">
                    <div class="prf row mb-3">
                        <div class="col-3">
                            <img class="rounded-pill" src="assets/images/testimonial/member-03.jpg"
                                alt="">
                        </div>
                        <div class="col-9 align-self-center">
                            <h6 class="mb-0 fw-bolder">Jackson Daniel</h6>
                            <span>CEO Notitech</span>
                        </div>
                    </div>
                    <div class="det text-center">
                        <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit.
                            Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut
                            arcu tristique luctus. Curabitur </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="serv-cove shadow-md rounded bg-white p-3">
                    <div class="prf row mb-3">
                        <div class="col-3">
                            <img class="rounded-pill" src="assets/images/testimonial/member-02.jpg"
                                alt="">
                        </div>
                        <div class="col-9 align-self-center">
                            <h6 class="mb-0 fw-bolder">Praveen Thaney</h6>
                            <span>Admin Vintech</span>
                        </div>
                    </div>
                    <div class="det text-center">
                        <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit.
                            Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut
                            arcu tristique luctus. Curabitur </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--########################## Blog Starts Here ############################# -->

<div id="blog" class="service container-fluid px-4 bg-white py-5">
    <div class="container">
        <div class="section-title row mb-3">
            <h2 class="fw-bolder">Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.
            </p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="serv-cove rounded bg-white p-2">
                    <img src="assets/images/blog/blog_01.jpg" alt="">
                    <div class="p-2">
                        <h5 class="mt-3 fs-7 fw-bold">Top 10 Trends in Webdesign sit nibh amet Mauris ipsum sit
                            nibh</h5>
                        <span class="fs-8">22 May 2015</span>
                        <span class="float-end fs-8"><i class="bi bi-person"></i> Sam Anderson</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="serv-cove rounded bg-white p-2">
                    <img src="assets/images/blog/blog_02.jpg" alt="">
                    <div class="p-2">
                        <h5 class="mt-3 fs-7 fw-bold">Top 10 Trends in Webdesign sit nibh amet Mauris ipsum sit
                            nibh</h5>
                        <span class="fs-8">22 May 2015</span>
                        <span class="float-end fs-8"><i class="bi bi-person"></i> Sam Anderson</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="serv-cove rounded bg-white p-2">
                    <img src="assets/images/blog/blog_03.jpg" alt="">
                    <div class="p-2">
                        <h5 class="mt-3 fs-7 fw-bold">Top 10 Trends in Webdesign sit nibh amet Mauris ipsum sit
                            nibh</h5>
                        <span class="fs-8">22 May 2015</span>
                        <span class="float-end fs-8"><i class="bi bi-person"></i> Sam Anderson</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom_js')


@endsection
