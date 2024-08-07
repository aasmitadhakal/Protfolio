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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Document</title>
</head>

<body>
    {{-- nav section --}}
    <section class="nav-section"id="home">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light " id="header">
                <div class="container-fluid container bg-white ">
                    <a class="navbar-brand name" href="#">˜”°•✩•°”˜ 𝚁𝚎𝚜𝚑𝚖𝚊 ˜”°•✩•°”˜</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="ri-menu-line header-menu-icon"></i></span>

                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-text">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home"
                                    onclick="showSection('home')">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#protfolio" onclick="showSection('protfolio')">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutme" onclick="showSection('aboutme')">About me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experience" onclick="showSection('experience')">Experience
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#gallery" onclick="showSection('gallery')">Skill</a>
                            </li>
                        </ul>
                        {{-- <form class="d-flex"> --}}
                        <a class="darksoul-hover-fill-button3" type="button" href="#contact"
                            onclick="showSection('contact')">
                            <div class="color-fill-3"></div>
                            <p>Contact Us</p>
                        </a>
                        {{-- </form> --}}
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

                        <h5>{{ $settings['banner_user_name'] }}</h5>
                        <h1>Crafting Seamless <span class="text-span"> Digital Experiences </span>Building Innovative
                            Solutions</h1>

                        <p class="bodypart-css py-2">{{ $settings['banner_description'] }}</p>
                        <button class="get-in-touch">Get In Touch</button>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="img-container">
                        <img src="{{ asset($settings['banner_image']) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about us section --}}
    <section class=" py-5" id='aboutme'>
        <div class="container">
            <div class="heading-part-css text-center mb-2">
                {{-- @dd($settings); --}}
                <h4 class="small-text">{{ $settings['about_me_title'] }}</h4>
                <h2 class="heading-title">{{ $settings['about_me_slogan'] }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 my-5 design d-flex justify-content-end align-items-end">
                    <div class="img-wrapper rounded-3">
                        <span>
                            <img class="photo-box shadow-sm pb-lg-0 pb-3 rounded"
                                src="{{ asset($settings['about_image']) }}" /></span>
                    </div>
                </div>
                <div class="col-md-8 d-flex justify-center align-items-center">
                    <div class="banner-content my-5">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="experience  border rounded p-2">
                                    <i class="ri-user-fill about-icon"></i>
                                    <h3>{{ $settings['experience_title'] }}</h3>
                                    <h6 class=" text-center bodypart-css "> {{ $settings['experience'] }} </h6>
                                    <span class="bodypart-css ">{{ $settings['experience_field'] }}</span>
                                </div>
                            </div>
                            <div class=" col-md-6 text-center">
                                <div class="education rounded  border p-2">
                                    <i class="ri-graduation-cap-fill about-icon"></i>
                                    <h3 class="">Education</h3>
                                    <h6 class=" text-center bodypart-css"> {{ $settings['education'] }} </h6>
                                    <span class="bodypart-css ">{{ $settings['faculty'] }}</span>
                                </div>
                            </div>
                        </div>
                        <p class="bodypart-css line-clamp-14 pt-3">
                            {{ $settings['about_me_description'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Experience --}}
    <section id="experience">
        <div class="container">
            <div class="heading-part-css text-center mb-2">
                <h4 class="small-text">{{ $settings['experience_slogan'] }}</h4>
                <h2 class="heading-title">{{ $settings['experience_title'] }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-2 d-flex justify-items-center justify-content-center">
                    <div class="border rounded experience-box p-4">
                        <h3 class="text-center py-2">Frontend Development</h3>
                        <div class="row">
                            @foreach ($frontend as $experience)
                                <div class="col-lg-6 d-flex justify-items-center justify-content-center">
                                    <div class="d-flex gap-2">
                                        <i class="ri-verified-badge-fill py-2 experience-icon"></i>
                                        <div>
                                            <span>{{ $experience->name }}</span>
                                            <p>{{ $experience->level }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-2 d-flex justify-items-center justify-content-center">
                    <div class="border rounded p-4 experience-box">
                        <h3 class="text-center py-2">Backend Development</h3>
                        <div class="row">

                            @foreach ($backend as $experience)
                                <div class="col-lg-6 d-flex justify-items-center justify-content-center">
                                    <div class="d-flex gap-2">
                                        <i class="ri-verified-badge-fill py-2 experience-icon"></i>
                                        <div>
                                            <span>{{ $experience->name }}</span>
                                            <p>{{ $experience->level }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- portfoili --}}
    {{-- @if ($project->isNotEmpty())
        <section class="py-5  trekking-section " id="protfolio">
            <div class="container">
                <div class="heading-part-css text-center mb-2">
                    <h4 class="small-text"> {{ $settings['project_slogan'] }}</h4>
                    <h2 class="heading-title">Project </h2>
                </div>
                <div class="trekking-container">
                    <div class="card-container row justify-content-center gap-x-4">
                        @foreach ($project as $item)
                            <div class=" col-lg-4 col-md-6 position-relative  ">
                                <div class=" shadow blog-card">
                                    <div class="my-3">
                                        <div class=" blog-media-wrapper ">
                                            <img class="study-card-img" src="{{ asset($item->image) }}">
                                            <div class="blog-icon">
                                                <span class="icons"><i class="ri-heart-line"></i></span>
                                            </div>
                                        </div>
                                        <h4 class="text-center py-2">{{ $item->title_type }} : {{ $item->title }}
                                        </h4>
                                        <div class="py-2 d-flex justify-content-end">
                                            <button class="demo-btn"><a href="{{ $item->link }}">Live
                                                    Demo</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            </div>
        </section>
    @endif --}}
    {{-- slider portfoili --}}
    @if ($project->isNotEmpty())
        <section id="protfolio">
            <div class="container py-5">
                <div class="heading-part-css text-center mb-2">
                    <h4 class="small-text"> {{ $settings['project_slogan'] }}</h4>
                    <h2 class="heading-title">Project </h2>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper ">
                        @foreach ($project as $item)
                            {{-- <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/img3.jpg') }}" alt="">
                    </div> --}}
                            <div class="swiper-slide py-5">
                                <div class=" position-relative col-md-12 container">
                                    <div class=" shadow blog-card ">
                                        <div class="my-3">
                                            <div class=" blog-media-wrapper ">
                                                <img class="study-card-img" src="{{ asset($item->image) }}">
                                                <div class="blog-icon">
                                                    <span class="icons"><i class="ri-heart-line"></i></span>
                                                </div>
                                            </div>
                                            <h4 class="text-center py-2">{{ $item->title_type }} :
                                                {{ $item->title }}
                                            </h4>
                                            <div class="py-2 d-flex justify-content-end">
                                                <button class="demo-btn"><a href="{{ $item->link }}">Live
                                                        Demo</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination pt-5"></div>
                </div>
            </div>
        </section>

    @endif
    {{-- skills part --}}
    @if ($project->isNotEmpty())
        <section class="py-5"id="gallery">
            <div class="container">
                <div class="heading-part-css text-center mb-4">
                    <h4 class="small-text">{{ $settings['skill_title'] }}</h4>
                    <h1 class="heading-title">{{ $settings['skill_slogan'] }}</h1>
                </div>
                <div class="row">
                    @foreach ($skill as $item)
                        {{-- card 1 --}}
                        <div class="col-lg-4 col-md-6 position-relative ">
                            <div class="service-card   shadow p-4 ltr-effect my-2">
                                <div class="service-img">
                                    <button class="service-icon-container ">
                                        <img src="{{ asset($item->image) }}" alt="">
                                    </button>
                                </div>
                                <div class="  my-1 ">
                                    <h3 class="subheadings">{{ $item->title }}</h3>
                                </div>
                                <div class="bodypart-css line-clamp-3 text-center  mb-2">
                                    <p>
                                        {{ $item->short_description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- portfolio part --}}

    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-wrapper">
                        <img class="study-card-img" src="{{ asset('frontend/assets/images/img3.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section> --}}
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
    <section class="py-5" id="contact">
        <div class="container">
            <div class="heading-part-css text-center mb-4">
                <h4 class="small-text">{{ $settings['contact_slogan'] }}</h4>
                <h1 class="heading-title">With Me</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex justify-content-center align-item-center">
                    <div class="py-5">
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-map-pin-line contact-icon ri-5x"></i>
                            <p class="bodypart-css mb-2">{{ $settings['site_location'] }}</p>
                        </div>
                        <div class="d-flex align-items-center   gap-2">
                            <i class="ri-mail-line contact-icon ri-5x"></i>
                            <p class="bodypart-css mb-2">{{ $settings['site_email'] }}</p>
                        </div>
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-phone-line contact-icon ri-5x"></i>
                            <p class="bodypart-css mb-2">{{ $settings['site_phone'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="{{ route('contact.store') }}" class="bg-white contact-form shadow p-5"
                        method="post" id="contactForm">
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
                            <button class="darksoul-hover-fill-button3" type="submit">
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
            <div class="container mb-4">
                <div class="row">
                    <h1 class="text-span">Reshma Dhakal</h1>
                    <h4>Full Stack Developer</h4>
                </div>
                <div class="fotter-section  border-t-2 mt-3 ">
                    <a href="https://www.facebook.com/"> <i class="ri-facebook-line social-icon"></i></a>
                    <a href="https://www.instagram.com/"> <i class="ri-instagram-fill social-icon"></i></a>
                    <a href="https://www.linkedin.com/feed/"> <i class="ri-linkedin-fill social-icon"></i></a>
                    <a href="https://github.com/aasmitadhakal"> <i class="ri-github-fill social-icon"></i></a>
                </div>

            </div>
            <div class="primary-color my-2 mt-2 p-2 border-top  page-bg-color">
                <div
                    class="d-md-flex text-center justify-content-between justify-content-md-between align-items-center container ">
                    Made with love
                </div>
            </div>
    </section>
    {{-- for blog --}}
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
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        // spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 1500,
            disableOnInteraction: false
        },
        // on: {
        //     autoplayTimeLeft(s, time, progress) {
        //         progressCircle.style.setProperty("--progress", 1 - progress);
        //         progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        //     }
        // }
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                // spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                // spaceBetween: 20,
            },
            "@1.00": {
                slidesPerView: 3,
                // spaceBetween: 10,
            },
            "@1.50": {
                slidesPerView: 3,
                // spaceBetween: 50,
            },
        },
    });
</script>
