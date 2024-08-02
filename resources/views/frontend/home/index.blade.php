<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('frontend/assets/js/script.js') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    {{-- Remixicon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    {{-- nav section --}}
    <section class="nav-section"id="home">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light " id="header">
                <div class="container-fluid container">
                    <a class="navbar-brand name" href="#">˜”°•✩•°”˜ 𝚁𝚎𝚜𝚑𝚖𝚊 ˜”°•✩•°”˜</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-text">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home"
                                    onclick="showSection('home')">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About me</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#gallery" onclick="showSection('gallery')">Testimonial</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="darksoul-hover-fill-button3" type="button">
                                <div class="color-fill-3"></div>
                                <p>Contact Us</p>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </section>
    {{-- banner section --}}
    <section class="page-bg-color banner-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-item-center">
                    <div class="text-part-banner">
                        <h5>Hey, i am Reshma</h5>
                        <h1>Crafting Seamless <span class="text-span"> Digital Experiences </span>Building Innovative
                            Solutions</h1>

                        <p class="bodypart-css py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum
                            nisi
                            blanditiis dolor
                            soluta?
                            Molestiae, fuga vel amet laborum similique et aliquam nobis! Deleniti veniam autem dolorem
                            facere exercitationem totam cumque!</p>
                        <button class="get-in-touch">Get In Touch</button>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="img-container">
                        <img src="{{ asset('frontend/assets/images/bannerimg.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- skills part --}}
    <section class="py-5" id="skill"id="gallery">
        <div class="container">
            <div class="heading-part-css">
                <h4 class="small-text">My Skills</h4>
                <h1 class="heading-title">My Expertise</h1>
            </div>
            <div class="row">
                {{-- card 1 --}}
                <div class="col-lg-3 col-md-6 position-relative ">
                    <div class="service-card page-bg-color  shadow p-4 ltr-effect my-2">
                        <div class="service-img">
                            <button class="service-icon-container">
                                <img src="{{ asset('frontend/assets/images/coding.png') }}" alt="">
                            </button>
                        </div>
                        <div class="  my-1 ">
                            <h3 class="subheadings">Strategic & Direction</h3>
                        </div>
                        <div class="bodypart-css line-clamp-3 text-center  mb-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores, blanditiis nequesit
                                amet consectetursit amet consectetur
                            </p>
                        </div>
                    </div>
                </div>
                {{-- card 2 --}}
                <div class="col-lg-3 col-md-6 position-relative ">

                    <div class="service-card page-bg-color  shadow p-4 ltr-effect my-2">
                        <div class="service-img">
                            <button class="service-icon-container">
                                <img src="{{ asset('frontend/assets/images/coding.png') }}" alt="">
                            </button>
                        </div>
                        <div class="  my-1 ">
                            <h3 class="subheadings">Strategic & Direction</h3>
                        </div>
                        <div class="bodypart-css line-clamp-3 text-center  mb-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores, blanditiis nequesit
                                amet consectetursit amet consectetur
                            </p>
                        </div>
                    </div>

                </div>
                {{-- card3 --}}
                <div class="col-lg-3 col-md-6 position-relative ">

                    <div class="service-card page-bg-color  shadow p-4 ltr-effect my-2">
                        <div class="service-img">
                            <button class="service-icon-container">
                                <img src="{{ asset('frontend/assets/images/coding.png') }}" alt="">
                            </button>
                        </div>
                        <div class="  my-1 ">
                            <h3 class="subheadings">Strategic & Direction</h3>
                        </div>
                        <div class="bodypart-css line-clamp-3 text-center  mb-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores, blanditiis nequesit
                                amet consectetursit amet consectetur
                            </p>
                        </div>
                    </div>

                </div>
                {{-- card4 --}}
                <div class="col-lg-3 col-md-6 position-relative ">
                    <div class="service-card page-bg-color  shadow p-4 ltr-effect my-2">
                        <div class="service-img">
                            <button class="service-icon-container">
                                <img src="{{ asset('frontend/assets/images/coding.png') }}" alt="">
                            </button>
                        </div>
                        <div class="  my-1 ">
                            <h3 class="subheadings">Strategic & Direction</h3>
                        </div>
                        <div class="bodypart-css line-clamp-3 text-center  mb-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores, blanditiis nequesit
                                amet consectetursit amet consectetur
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- about us section --}}
    <section class=" py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 my-5 design d-flex justify-content-end align-items-end">

                    <div class="img-wrapper rounded-3">
                        <span>
                            <img class="photo-box shadow-sm pb-lg-0 pb-3"
                                src="{{ asset('frontend/assets/images/img3.jpg') }}" /></span>

                    </div>
                </div>
                <div class="col-md-6 d-flex justify-center align-items-center">
                    <div class="banner-content my-5">
                        <div class="d-flex heading-css  align-items-center">
                            <p class="small-text">About me</p>
                        </div>
                        <div class=" subheadings ">
                            <p>Lorem, ipsum dolor sit amet consectetur
                            </p>
                        </div>
                        <p class="bodypart-css line-clamp-14">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis aut et veritatis
                            incidunt labore fugiat veniam error itaque delectus, quam illum odit! Maiores ipsam maxime
                            dolor ad ipsum ratione corrupti!\
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis aut et veritatis
                            incidunt labore fugiat veniam error itaque delectus, quam illum odit! Maiores ipsam maxime
                            dolor ad ipsum ratione corrupti!\
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- portfolio part --}}
    <section class="py-5">
        <div class="container">
            <div class="heading-part-css">
                <h4 class="small-text">Recent Project</h4>
                <h1 class="heading-title">My Portfolio</h1>
            </div>
            <div class="row">
                {{-- card1 --}}
                <div class="col-lg-4 col-md-6 position-relative ">
                    <div class="service-card   shadow p-4 ltr-effect my-2">
                        <div class="portfolio-img">
                            {{-- <img src="{{ asset('frontend/assets/images/new.jpg') }}" alt=""> --}}
                        </div>
                        <div class="  my-2 ">
                            <h3 class="subheadings">Strategic & Direction</h3>
                        </div>
                        <div class="bodypart-css line-clamp-3 text-center  mb-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores, blanditiis nequesit
                                amet consectetursit amet consectetur
                                amet consectetursit amet consectetur
                            </p>
                        </div>
                    </div>

                </div>
                {{-- card1 --}}
                <div class="col-lg-4 col-md-6 position-relative ">
                    <div class="service-card   shadow p-4 ltr-effect my-2">
                        <div class="portfolio-img">
                            {{-- <img src="{{ asset('frontend/assets/images/bannerimg.webp') }}" alt=""> --}}
                        </div>
                        <div class="  my-2 ">
                            <h3 class="subheadings">Strategic & Direction</h3>
                        </div>
                        <div class="bodypart-css line-clamp-3 text-center  mb-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores, blanditiis nequesit
                                amet consectetursit amet consectetur
                                amet consectetursit amet consectetur
                            </p>
                        </div>
                    </div>

                </div>
                {{-- card1 --}}
                <div class="col-lg-4 col-md-6 position-relative ">
                    <div class="service-card   shadow p-4 ltr-effect my-2">
                        <div class="portfolio-img">
                            {{-- <img src="{{ asset('frontend/assets/images/bannerimg.webp') }}" alt=""> --}}
                        </div>
                        <div class="  my-2 ">
                            <h3 class="subheadings">Strategic & Direction</h3>
                        </div>
                        <div class="bodypart-css line-clamp-3 text-center  mb-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In maiores, blanditiis nequesit
                                amet consectetursit amet consectetur
                                amet consectetursit amet consectetur
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- technologies --}}
    {{-- <section class="py-5">
        <div class="container">
            <div class="heading-part-css mb-4">
                <h4 class="small-text">Skill</h4>
                <h1 class="heading-title">Technologies </h1>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">Html</div>
                    <div>Advanced</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 95%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>

            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">css</div>
                    <div>Advanced</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 95%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">javascript</div>
                    <div>Regular</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 80%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">React</div>
                    <div>Regular</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 80%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">Next js</div>
                    <div>Regular</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 80%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">Laravel</div>
                    <div>Regular</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 80%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">Bootstrap</div>
                    <div>Regular</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 80%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">Tailwind css</div>
                    <div>Regular</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 80%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>
            <div class="col-md-8 py-2">
                <div class="d-flex justify-content-between pb-2">
                    <div class="small-text-gray">Git</div>
                    <div>Regular</div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info " role="progressbar" style="width: 80%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="50"></div>
                </div>
            </div>

        </div>
    </section> --}}
    {{-- contact us section --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-item-center">
                    <div class="py-5">
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-map-pin-line contact-icon ri-5x"></i>
                            <p class="bodypart-css">ktm,nepal</p>
                        </div>
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-mail-line contact-icon ri-5x"></i>
                            <p class="bodypart-css">email,nepal</p>
                        </div>
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-phone-line contact-icon ri-5x"></i>
                            <p class="bodypart-css">contact</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="bg-white contact-form shadow p-5" action="" method="post" id="contactForm">
                        @csrf
                        <div class="form-group form-group-flex">
                            <div class="form-group-half me-2 mb-3">
                                <input type="text" id="name" name="name"
                                    placeholder="Enter Your Full Name" class="form-control" />
                                <span class="text-danger" id="nameError"></span>
                            </div>
                        </div>
                        <div class="form-group form-group-flex">
                            <div class="d-md-flex">
                                <div class="form-group-half me-2">
                                    <input type="email" id="email" name="email"
                                        placeholder="Enter Your Email Address" class="form-control" />
                                    <span class="text-danger" id="emailError"></span>
                                </div>
                                <div class="form-group-half">
                                    <input type="text" id="phone" name="phone"
                                        placeholder="Enter Your Phone No." class="form-control" />
                                    <span class="text-danger" id="phoneError"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <textarea id="query" name="message" style="height: 100px" placeholder="Your Message" class="form-control"></textarea>
                            <span class="text-danger" id="messageError"></span>
                        </div>
                        <div class="d-flex justify-start">
                            <button class="darksoul-hover-fill-button3" type="button">
                                <div class="color-fill-3"></div>
                                <p>Contact Us</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- fotter --}}
    <section>
        <div class="fotter py-5 page-bg-color">

        </div>
    </section>
    {{-- for blog --}}
    <section class="py-5  trekking-section ">
        <div class="container">
            <div class="trekking-container">
                <div class="card-container row justify-content-center gap-x-4">
                    {{-- card1 --}}
                    {{-- @foreach ($blogs as $item) --}}
                    <div class=" col-lg-4 col-md-6 position-relative  ">
                        <div class=" shadow blog-card">
                            <div class="my-3">
                                <div class=" blog-media-wrapper ">
                                    <img class="study-card-img" src="{{ asset('frontend/assets/images/new.jpg') }}">
                                    <div class="blog-icon">
                                        <span class="icons"><i class="ri-heart-line"></i></span>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="bodypart-css"><span><i
                                                    class="ri-calendar-line offer-icon"></i></span>
                                        </p>
                                        <p class="book-text">By Flyeast Nepal</p>
                                    </div>
                                    <div class="subheadings  my-1">
                                        <h3 class="line-clamp-2">hkhk</h3>
                                    </div>
                                    <div class="bodypart-css line-clamp-3   mb-2">
                                        <p>lorem</p>
                                    </div>
                                    <div class="reviw-part d-flex justify-content-start">
                                        {{-- <div class="bodypart-css"><span><i
                                                        class="ri-eye-line offer-icon"></i></span>{{ $item->views }}
                                            </div> --}}
                                        <div class="bodypart-css"><span><i
                                                    class="ri-star-fill rating-blog"></i></span>5
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </section>
</body>

</html>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector("#header");
        const handleScroll = () => {
            const scrollTop = window.scrollY;
            if (scrollTop > 100) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        };

        window.addEventListener("scroll", handleScroll);

        return () => {
            window.removeEventListener("scroll", handleScroll);
        };
    });

    function showSection(sectionId) {
        // Hide all sections
        var sections = document.querySelectorAll(".section");
        sections.forEach(function(section) {
            section.classList.remove("active");
        });

        // Show the selected section
        var activeSection = document.getElementById(sectionId);
        activeSection.classList.add("active");
    }
</script>
