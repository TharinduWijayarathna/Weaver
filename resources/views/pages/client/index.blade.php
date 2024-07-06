<x-app-layout>
    @section('page_title', 'Your Page Title')
    @section('page_description', 'Your Page Description')
    <section class="pt-5 pt-xl-7">

        <div class="swiper overflow-hidden pt-5"
            data-swiper-options='{
        "autoplay":{
            "delay": 4000,
            "disableOnInteraction": false
        },
        "pagination":{
            "el":".swiper-pagination",
            "clickable":"true"
        }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card overflow-hidden h-500px h-xl-750px rounded-0"
                        style="background-image:url({{ asset('assets/client/images/shop/bg/01.jpg') }}); background-position: center left; background-size: cover;">
                        <div class="bg-overlay bg-dark opacity-5 d-lg-none"></div>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-11 col-lg-8 col-xl-5">
                                        <span class="d-inline-block text-bg-dark small rounded-pill px-3 py-2 mb-4">New
                                            release mizz-VR</span>
                                        <h1 class="text-white display-6 mb-4">Dive into Virtual Reality Adventure
                                        </h1>

                                        <p class="text-white mb-4"> Whether you're a gaming enthusiast or simply
                                            seeking an extraordinary escape from reality, our Virtual VR product is
                                            your portal to endless excitement. </p>
                                        <a class="btn btn-lg btn-outline-white icon-link icon-link-hover mb-0"
                                            href="#">Show details<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card overflow-hidden h-500px h-xl-750px rounded-0"
                        style="background-image:url({{ asset('assets/client/images/shop/bg/02.jpg') }}); background-position: center left; background-size: cover;">
                        <div class="bg-overlay bg-dark opacity-5 d-lg-none"></div>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-11 col-lg-8 col-xl-5 ms-auto">

                                        <p class="fs-4 fw-normal text-white mb-3">Festival Collection <span
                                                class="text-bg-dark rounded px-3">2023</span></p>
                                        <h1 class="text-white display-4 mb-3">FLAT 50% OFF</h1>

                                        <p class="text-white mb-4"> Step into a world of quality and craftsmanship –
                                            it's time to put your best foot forward.</p>
                                        <a class="btn btn-lg btn-dark icon-link icon-link-hover mb-0"
                                            href="#">Show
                                            now<i class="bi bi-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination swiper-pagination-line position-absolute bottom-0 mb-3"></div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3>Featured category</h3>
                <a class="icon-link icon-link-hover text-body-secondary text-primary-hover" href="#">View all<i
                        class="bi bi-arrow-right"></i> </a>
            </div>

            <div class="swiper"
                data-swiper-options='{
        "spaceBetween": 30,
        "grabCursor": true,
        "pagination":{
            "el":".swiper-pagination"
        },
        "breakpoints": {
            "576": {"slidesPerView": 3},
            "768": {"slidesPerView": 4},
            "992": {"slidesPerView": 5},
            "1200": {"slidesPerView": 6}
        }}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card card-body border-primary-hover border bg-transparent text-center">

                            <figure class="text-center">
                                <svg class="text-primary" width="60" height="60" viewBox="0 0 50 50"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0048 50C19.007 50 12.8124 48.1297 4.93727 43.939C4.70524 43.8124 4.52945 43.5944 4.46617 43.3413C4.40289 43.0882 4.44508 42.8139 4.5857 42.5889L17.5515 22.5285V19.0831L14.6616 12.4174C14.6335 12.3541 14.6124 12.2838 14.5984 12.2205L12.5241 1.11799C12.4749 0.843763 12.5452 0.555477 12.728 0.337505C12.9038 0.126564 13.171 0 13.4522 0H18.0508C18.4797 0 18.8594 0.295317 18.9648 0.710167L20.0055 4.83054L25.0048 8.71889L29.997 4.83054L31.0377 0.710167C31.1431 0.295317 31.5228 0 31.9518 0H36.5503C36.8315 0 37.0987 0.126564 37.2745 0.337505C37.4573 0.555477 37.5276 0.843763 37.4784 1.11799L35.4042 12.2205C35.3901 12.2838 35.369 12.3541 35.3409 12.4174L32.451 19.0831V22.5285L45.4168 42.5889C45.5574 42.8139 45.6067 43.0882 45.5363 43.3413C45.4731 43.5944 45.2973 43.8124 45.0652 43.939C37.1901 48.1297 31.0025 50 25.0048 50Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.5508 21.7907V19.9062H22.2829C22.8032 19.9062 23.2251 20.3281 23.2251 20.8485C23.2251 21.3688 22.8032 21.7907 22.2829 21.7907H17.5508ZM32.4502 19.9062V21.7907H27.7181C27.1978 21.7907 26.7759 21.3688 26.7759 20.8485C26.7759 20.3281 27.1978 19.9062 27.7181 19.9062H32.4502Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0032 24.5103C22.9782 24.5103 21.3398 22.8649 21.3398 20.8469C21.3398 18.8289 22.9782 17.1836 25.0032 17.1836C27.0212 17.1836 28.6595 18.8289 28.6595 20.8469C28.6595 22.8649 27.0212 24.5103 25.0032 24.5103Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.4512 0C13.17 0 12.9028 0.126564 12.727 0.337505C12.5442 0.555477 12.4739 0.843763 12.5231 1.11799L13.2192 4.83054H20.0044L18.9638 0.710167C18.8583 0.295317 18.4786 0 18.0497 0H13.4512Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.0367 0.710167L29.9961 4.83054H36.7814L37.4775 1.11799C37.5267 0.843763 37.4564 0.555477 37.2736 0.337505C37.0978 0.126564 36.8306 0 36.5493 0H31.9508C31.5219 0 31.1422 0.295317 31.0367 0.710167Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0032 22.7102C23.9695 22.7102 23.1328 21.8735 23.1328 20.8469C23.1328 19.8133 23.9695 18.9766 25.0032 18.9766C26.0297 18.9766 26.8665 19.8133 26.8665 20.8469C26.8665 21.8735 26.0297 22.7102 25.0032 22.7102Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0048 41.5641C19.8367 41.5641 14.5351 40.179 8.12951 37.1133L4.5857 42.5907C4.44508 42.8157 4.40289 43.0899 4.46617 43.3431C4.52945 43.5962 4.70524 43.8142 4.93727 43.9407C12.8124 48.1314 19.007 50.0018 25.0048 50.0018C31.0025 50.0018 37.1901 48.1314 45.0652 43.9407C45.2973 43.8142 45.4731 43.5962 45.5363 43.3431C45.6067 43.0899 45.5574 42.8157 45.4168 42.5907L41.873 37.1133C35.4745 40.179 30.1658 41.5641 25.0048 41.5641Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0042 41.5641C19.8361 41.5641 14.5345 40.179 8.12894 37.1133L6.23047 40.0454C13.5009 43.7649 19.3369 45.4314 25.0042 45.4314C30.6644 45.4314 36.5005 43.7649 43.7709 40.0454L41.8724 37.1133C35.4739 40.179 30.1652 41.5641 25.0042 41.5641Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.8433 24.7854C18.9558 24.6026 19.1879 24.5393 19.3777 24.6448C19.5605 24.7503 19.6238 24.9893 19.5184 25.1792L12.9722 36.5208C12.8667 36.7036 12.6276 36.7669 12.4378 36.6614C12.255 36.5559 12.1917 36.3169 12.2971 36.134L18.8433 24.7854Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M30.4807 25.1792C30.3753 24.9893 30.4386 24.7503 30.6214 24.6448C30.8112 24.5393 31.0503 24.6026 31.1558 24.7854L37.7019 36.134C37.8074 36.3169 37.7441 36.5559 37.5613 36.6614C37.3715 36.7669 37.1394 36.7036 37.0269 36.5208L30.4807 25.1792Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                </svg>
                            </figure>
                            <h6 class="mb-0"><a href="#" class="stretched-link">Fashion</a></h6>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card card-body border-primary-hover border bg-transparent text-center">

                            <figure class="text-center">
                                <svg class="text-primary" width="60" height="60" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M43.875 6C39.6466 6 36.2188 9.42786 36.2188 13.6562V47.3438C36.2188 51.5721 39.6466 55 43.875 55H51.5312C55.7596 55 59.1875 51.5721 59.1875 47.3438V13.6562C59.1875 9.42786 55.7596 6 51.5312 6H43.875Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M8.99129 21.3125C4.59282 21.3125 1 24.7212 1 28.9688V41.2188C1 45.4663 4.59282 48.875 8.99129 48.875H25.165C29.5635 48.875 33.1562 45.4663 33.1562 41.2188V28.9688C33.1562 24.7212 29.5635 21.3125 25.165 21.3125H8.99129Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M43.875 35.0938C43.875 33.4023 45.2461 32.0312 46.9375 32.0312H48.4688C50.1602 32.0312 51.5312 33.4023 51.5312 35.0938V42.75C51.5312 44.4414 50.1602 45.8125 48.4688 45.8125H46.9375C45.2461 45.8125 43.875 44.4414 43.875 42.75V35.0938Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.65625 51.9375C7.81057 51.9375 7.125 52.623 7.125 53.4688C7.125 54.3145 7.81057 55 8.65625 55H25.5C26.3457 55 27.0312 54.3145 27.0312 53.4688C27.0312 52.623 26.3457 51.9375 25.5 51.9375H8.65625Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M23.9688 42.75C23.9688 41.9043 24.6543 41.2188 25.5 41.2188C26.3457 41.2188 27.0312 41.9043 27.0312 42.75C27.0312 43.5957 26.3457 44.2812 25.5 44.2812C24.6543 44.2812 23.9688 43.5957 23.9688 42.75Z"
                                        fill="currentColor" />
                                    <path d="M11.7188 48.875V51.9375H22.4375V48.875H11.7188Z" fill="currentColor" />
                                </svg>
                            </figure>

                            <h6 class="mb-0"><a href="#" class="stretched-link">Electronics</a></h6>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card card-body border-primary-hover border bg-transparent text-center">

                            <figure class="text-center">
                                <svg class="text-primary" width="60" height="60" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M59.8916 48.1009C59.8871 48.0763 59.8823 48.0518 59.877 48.0274L56.1707 31.3146C55.1125 25.4576 50.0265 21.2109 44.0625 21.2109C42.1134 21.2109 40.2485 21.6539 38.5196 22.5275C36.2393 23.6798 33.9724 24.3816 31.7578 24.6266L30 23.7891L28.2422 24.6265C26.0276 24.3814 23.7606 23.6797 21.48 22.5273C19.7511 21.6539 17.8863 21.2109 15.9375 21.2109C9.97348 21.2109 4.88754 25.4576 3.82945 31.3146C3.82945 31.3146 0.112852 48.0763 0.108398 48.1009C0.0364453 48.5064 0 48.9218 0 49.3359C0 53.213 3.15422 56.3672 7.03125 56.3672C9.77672 56.3672 10.4237 55.7916 16.6124 50.285C17.9651 49.0814 19.6241 47.6053 21.6544 45.8203H38.3459C40.4 47.6263 42.072 49.1142 43.4353 50.3276C49.5791 55.7957 50.2214 56.3672 52.9688 56.3672C56.8458 56.3672 60 53.213 60 49.3359C60 48.9218 59.9636 48.5064 59.8916 48.1009Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M22.9688 38.7891C20.061 38.7891 17.6953 41.1547 17.6953 44.0625C17.6953 46.9703 20.061 49.3359 22.9688 49.3359C25.8765 49.3359 28.2422 46.9703 28.2422 44.0625C28.2422 41.1547 25.8765 38.7891 22.9688 38.7891ZM17.6953 35.2734H19.4531C20.4239 35.2734 21.2109 34.4864 21.2109 33.5156C21.2109 32.5448 20.4239 31.7578 19.4531 31.7578H17.6953V30C17.6953 29.0292 16.9083 28.2422 15.9375 28.2422C14.9667 28.2422 14.1797 29.0292 14.1797 30V31.7578H12.4219C11.4511 31.7578 10.6641 32.5448 10.6641 33.5156C10.6641 34.4864 11.4511 35.2734 12.4219 35.2734H14.1797V37.0312C14.1797 38.002 14.9667 38.7891 15.9375 38.7891C16.9083 38.7891 17.6953 38.002 17.6953 37.0312V35.2734ZM26.4844 31.7578C25.5136 31.7578 24.7266 32.5448 24.7266 33.5156C24.7266 34.4864 25.5136 35.2734 26.4844 35.2734C27.4552 35.2734 28.2422 34.4864 28.2422 33.5156C28.2422 32.5448 27.4552 31.7578 26.4844 31.7578ZM37.0312 38.7891C34.1235 38.7891 31.7578 41.1547 31.7578 44.0625C31.7578 46.9703 34.1235 49.3359 37.0312 49.3359C39.939 49.3359 42.3047 46.9703 42.3047 44.0625C42.3047 41.1547 39.939 38.7891 37.0312 38.7891ZM31.7578 19.4531C31.7578 18.4839 32.5464 17.6953 33.5156 17.6953H40.5469C43.4546 17.6953 45.8203 15.3296 45.8203 12.4219C45.8203 9.5141 43.4546 7.14844 40.5469 7.14844H19.4531C18.4839 7.14844 17.6953 6.35988 17.6953 5.39062C17.6953 4.41984 16.9083 3.63281 15.9375 3.63281C14.9667 3.63281 14.1797 4.41984 14.1797 5.39062C14.1797 8.2984 16.5454 10.6641 19.4531 10.6641H40.5469C41.5161 10.6641 42.3047 11.4526 42.3047 12.4219C42.3047 13.3911 41.5161 14.1797 40.5469 14.1797H33.5156C30.6079 14.1797 28.2422 16.5454 28.2422 19.4531V24.6265C28.832 24.6918 29.4183 24.7266 30 24.7266C30.5817 24.7266 31.168 24.6919 31.7578 24.6265V19.4531ZM47.5781 31.7578H45.8203V30C45.8203 29.0292 45.0333 28.2422 44.0625 28.2422C43.0917 28.2422 42.3047 29.0292 42.3047 30V31.7578H40.5469C39.5761 31.7578 38.7891 32.5448 38.7891 33.5156C38.7891 34.4864 39.5761 35.2734 40.5469 35.2734H42.3047V37.0312C42.3047 38.002 43.0917 38.7891 44.0625 38.7891C45.0333 38.7891 45.8203 38.002 45.8203 37.0312V35.2734H47.5781C48.5489 35.2734 49.3359 34.4864 49.3359 33.5156C49.3359 32.5448 48.5489 31.7578 47.5781 31.7578ZM31.7578 33.5156C31.7578 34.4864 32.5448 35.2734 33.5156 35.2734C34.4864 35.2734 35.2734 34.4864 35.2734 33.5156C35.2734 32.5448 34.4864 31.7578 33.5156 31.7578C32.5448 31.7578 31.7578 32.5448 31.7578 33.5156Z"
                                        fill="currentColor" />
                                </svg>
                            </figure>

                            <h6 class="mb-0"><a href="#" class="stretched-link">Games</a></h6>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card card-body border-primary-hover border bg-transparent text-center">

                            <figure class="text-center">
                                <svg class="text-primary" width="60" height="60" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M46.25 3.125H13.75C9.95304 3.125 6.875 6.20304 6.875 10V50C6.875 53.797 9.95304 56.875 13.75 56.875H46.25C50.047 56.875 53.125 53.797 53.125 50V10C53.125 6.20304 50.047 3.125 46.25 3.125Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M18.125 3.125H13.75C11.9266 3.125 10.178 3.84933 8.88864 5.13864C7.59933 6.42795 6.875 8.17664 6.875 10V50C6.875 51.8234 7.59933 53.5721 8.88864 54.8614C10.178 56.1507 11.9266 56.875 13.75 56.875H18.125V3.125Z"
                                        fill="currentColor" />
                                    <path
                                        d="M41.25 46.875H28.75C28.2527 46.875 27.7758 46.6775 27.4242 46.3258C27.0725 45.9742 26.875 45.4973 26.875 45C26.875 44.5027 27.0725 44.0258 27.4242 43.6742C27.7758 43.3225 28.2527 43.125 28.75 43.125H41.25C41.7473 43.125 42.2242 43.3225 42.5758 43.6742C42.9275 44.0258 43.125 44.5027 43.125 45C43.125 45.4973 42.9275 45.9742 42.5758 46.3258C42.2242 46.6775 41.7473 46.875 41.25 46.875Z"
                                        fill="currentColor" />
                                    <path
                                        d="M41.25 39.375H28.75C28.2527 39.375 27.7758 39.1775 27.4242 38.8258C27.0725 38.4742 26.875 37.9973 26.875 37.5C26.875 37.0027 27.0725 36.5258 27.4242 36.1742C27.7758 35.8225 28.2527 35.625 28.75 35.625H41.25C41.7473 35.625 42.2242 35.8225 42.5758 36.1742C42.9275 36.5258 43.125 37.0027 43.125 37.5C43.125 37.9973 42.9275 38.4742 42.5758 38.8258C42.2242 39.1775 41.7473 39.375 41.25 39.375Z"
                                        fill="currentColor" />
                                </svg>
                            </figure>

                            <h6 class="mb-0"><a href="#" class="stretched-link">Books</a></h6>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card card-body border-primary-hover border bg-transparent text-center">

                            <figure class="text-center">
                                <svg class="text-primary" width="60" height="60" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M47 49V56.3334C47 58.35 45.1641 60 42.9201 60H17.0799C14.8359 60 13 58.35 13 56.3334V49H47Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M47 3.5V7H13V3.5C13 1.57497 14.8359 0 17.0799 0H42.9199C45.1639 0 47 1.57497 47 3.5Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M33.6208 4.52562H29.9991C29.4991 4.52562 29.0938 4.12027 29.0938 3.62023C29.0938 3.1202 29.4991 2.71484 29.9991 2.71484H33.6208C34.1209 2.71484 34.5262 3.1202 34.5262 3.62023C34.5262 4.12027 34.1209 4.52562 33.6208 4.52562Z"
                                        fill="currentColor" />
                                    <path
                                        d="M29.9984 56.3796C30.9985 56.3796 31.8093 55.5688 31.8093 54.5687C31.8093 53.5686 30.9985 52.7578 29.9984 52.7578C28.9983 52.7578 28.1875 53.5686 28.1875 54.5687C28.1875 55.5688 28.9983 56.3796 29.9984 56.3796Z"
                                        fill="currentColor" />
                                    <path
                                        d="M26.378 4.52562C26.8781 4.52562 27.2834 4.12027 27.2834 3.62023C27.2834 3.1202 26.8781 2.71484 26.378 2.71484C25.878 2.71484 25.4727 3.1202 25.4727 3.62023C25.4727 4.12027 25.878 4.52562 26.378 4.52562Z"
                                        fill="currentColor" />
                                    <path d="M13 7H47V49H13V7Z" fill="currentColor" />
                                </svg>
                            </figure>

                            <h6 class="mb-0"><a href="#" class="stretched-link">Mobiles</a></h6>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card card-body border-primary-hover border bg-transparent text-center">

                            <figure class="text-center">
                                <svg class="text-primary" width="60" height="60" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M50 51H56.5315C56.5966 50.9994 56.6609 50.9428 56.7204 50.8338C56.7798 50.7249 56.8331 50.5661 56.8767 50.3675C56.9209 50.1701 56.9546 49.9367 56.9755 49.6825C56.9964 49.4283 57.004 49.1588 56.998 48.8917L56.6154 33.1751C56.5806 31.7518 56.4179 30.433 56.1591 29.4761C55.9003 28.5192 55.564 27.9929 55.2158 28.0001H50V51Z"
                                        fill="currentColor" />
                                    <path
                                        d="M10 51H3.46854C3.40344 50.9994 3.33909 50.9428 3.27963 50.8338C3.22017 50.7249 3.16693 50.5661 3.12331 50.3675C3.07907 50.1701 3.04541 49.9367 3.02452 49.6825C3.00362 49.4283 2.99595 49.1588 3.00201 48.8917L3.38457 33.1751C3.41938 31.7518 3.58207 30.433 3.84087 29.4761C4.09967 28.5192 4.43599 27.9929 4.78416 28.0001H10V51Z"
                                        fill="currentColor" />
                                    <path
                                        d="M30 1.875C24.5299 1.875 19.2839 4.04799 15.4159 7.91592C11.548 11.7839 9.375 17.0299 9.375 22.5V48.75C9.375 51.2364 10.3627 53.621 12.1209 55.3791C13.879 57.1373 16.2636 58.125 18.75 58.125H41.25C43.7364 58.125 46.121 57.1373 47.8791 55.3791C49.6373 53.621 50.625 51.2364 50.625 48.75V22.5C50.625 17.0299 48.452 11.7839 44.5841 7.91592C40.7161 4.04799 35.4701 1.875 30 1.875Z"
                                        fill="currentColor" fill-opacity="0.4" />
                                    <path
                                        d="M37.5 31.875H22.5C19.3934 31.875 16.875 34.3934 16.875 37.5V45C16.875 48.1066 19.3934 50.625 22.5 50.625H37.5C40.6066 50.625 43.125 48.1066 43.125 45V37.5C43.125 34.3934 40.6066 31.875 37.5 31.875Z"
                                        fill="currentColor" />
                                    <path
                                        d="M33.75 9.375H26.25C24.1789 9.375 22.5 11.0539 22.5 13.125V16.875C22.5 18.9461 24.1789 20.625 26.25 20.625H33.75C35.8211 20.625 37.5 18.9461 37.5 16.875V13.125C37.5 11.0539 35.8211 9.375 33.75 9.375Z"
                                        fill="currentColor" />
                                </svg>
                            </figure>
                            <h6 class="mb-0"><a href="#" class="stretched-link">Bags</a></h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-primary position-relative mt-4"></div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3>What's trending now</h3>
                <a class="icon-link icon-link-hover text-body-secondary text-primary-hover" href="#">See all
                    products<i class="bi bi-arrow-right"></i> </a>
            </div>

            <div class="row g-4 g-sm-5">
                <div class="col-lg-8 col-xl-6">
                    <div class="card p-0 h-100"
                        style="background-image:url({{ asset('assets/client/images/shop/bg/03.jpg') }}"; background-position:
                        center left; background-size: cover;">
                        <div class="card-body p-5 mb-8">
                            <span class="bg-dark text-white rounded fw-semibold small px-3 py-2">New Arrival</span>
                            <h4 class="text-white my-4">Powerful performance. Versatile design.</h4>
                            <a class="btn btn-lg btn-outline-white icon-link icon-link-hover mb-0" href="#">Shop
                                now<i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card border bg-transparent overflow-hidden p-0 h-100">

                        <div class="position-absolute top-0 start-0 p-3">
                            <span class="badge text-bg-dark">Featured</span>
                        </div>

                        <div class="card-header bg-light rounded m-2">
                            <img src="{{ asset('assets/client/images/shop/02.png') }}" alt="">
                        </div>

                        <div class="card-body pb-0">
                            <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">Classic round
                                    neck t-shirt</a></h6>
                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i
                                        class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                            <p class="fw-bold text-success mb-0">$103.00</p>
                            <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card border bg-transparent overflow-hidden p-0 h-100">
                        <div class="card-header bg-light rounded m-2">
                            <img src="{{ asset('assets/client/images/shop/03.png') }}" alt="">
                        </div>

                        <div class="card-body pb-0">
                            <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">Premium cotton
                                    baseball cap</a></h6>

                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i
                                        class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                        </div>


                        <div class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                            <p class="fw-bold text-success mb-0">$98.00</p>
                            <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card border bg-transparent overflow-hidden p-0 h-100">

                        <div class="position-absolute top-0 start-0 p-3">
                            <span class="badge text-bg-danger">30% off</span>
                        </div>

                        <div class="card-header bg-light rounded m-2">
                            <img src="{{ asset('assets/client/images/shop/04.png') }}" alt="">
                        </div>

                        <div class="card-body pb-0">
                            <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">High
                                    performance headphones with Noise cancellation</a></h6>
                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i
                                        class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                            <div class="d-flex align-items-center gap-2 justify-content-center">
                                <p class="fw-bold text-success mb-0">$150.00</p>
                                <small class="text-decoration-line-through">$180.00</small>
                            </div>
                            <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card border bg-transparent overflow-hidden p-0 h-100">
                        <div class="card-header bg-light rounded m-2">
                            <img src="{{ asset('assets/client/images/shop/01.png') }}" alt="">
                        </div>

                        <div class="card-body pb-0">
                            <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">Premium
                                    stainless steel water bottle</a></h6>
                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i
                                        class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                            <p class="fw-bold text-success mb-0">$40.00</p>
                            <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card border bg-transparent overflow-hidden p-0 h-100">

                        <div class="card-header bg-light rounded m-2">
                            <img src="{{ asset('assets/client/images/shop/05.png') }}" alt="">
                        </div>


                        <div class="card-body pb-0">

                            <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">The ultimate
                                    smartphone for modern lifestyles</a></h6>

                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i
                                        class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                            <p class="fw-bold text-success mb-0">$215.00</p>
                            <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card border bg-transparent overflow-hidden p-0 h-100">
                        <div class="card-header bg-light rounded m-2">
                            <img src="{{ asset('assets/client/images/shop/06.png') }}" alt="">
                        </div>

                        <div class="card-body pb-0">

                            <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">Vintage
                                    inspired bluetooth radio speaker</a></h6>

                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                </li>
                                <li class="list-inline-item me-0 small"><i
                                        class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                            <p class="fw-bold text-success mb-0">$142.00</p>
                            <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row g-4 g-sm-6">

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent p-0">
                        <div class="icon-lg rounded-circle bg-info bg-opacity-10 text-info mb-4">
                            <i class="bi bi-lightning-charge-fill fa-lg"></i>
                        </div>
                        <h6 class="mb-3">Fast and reliable delivery</h6>
                        <p class="mb-0">Ensure timely and dependable delivery services to meet customer
                            expectations.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent p-0">
                        <div class="icon-lg rounded-circle bg-warning bg-opacity-15 text-warning mb-4">
                            <i class="bi bi-radar fa-lg"></i>
                        </div>
                        <h6 class="mb-3">Package tracking</h6>
                        <p class="mb-0">Offer real-time tracking information, so customers can monitor the status of
                            their shipments.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent p-0">
                        <div class="icon-lg rounded-circle bg-danger bg-opacity-10 text-danger mb-4">
                            <i class="bi bi-fire fa-lg"></i>
                        </div>
                        <h6 class="mb-3">Returns and exchanges</h6>
                        <p class="mb-0">Clearly outline your return and exchange policy, making it easy for
                            customers to initiate returns.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent p-0">
                        <div class="icon-lg rounded-circle bg-primary bg-opacity-10 text-primary mb-4">
                            <i class="bi bi-headset fa-lg"></i>
                        </div>
                        <h6 class="mb-3">Customer support</h6>
                        <p class="mb-0">Provide responsive customer support to address shipping-related queries and
                            issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-parallax position-relative" style="background:url({{ asset('assets/client/images/shop/bg/04.jpg') }}"
        no-repeat; background-size:cover; background-position:center;">

        <div class="bg-overlay bg-dark opacity-6"></div>

        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-lg-8 col-xl-5 mb-5 mb-xl-0">
                    <span class="text-primary display-4">20% off</span>
                    <h3 class="text-white my-4">Enhance your style with our latest collections</h3>
                    <p class="text-white">Discover the perfect fusion of modern trends and timeless classics,
                        meticulously curated to complement your unique taste.</p>

                    <div class="d-flex gap-3 position-relative mt-5 mt-md-6">
                        <a href="#"
                            class="btn btn-outline-white btn-icon rounded-circle mb-0 swiper-button-prev"><i
                                class="bi bi-arrow-left"></i></a>
                        <a href="#"
                            class="btn btn-outline-white btn-icon rounded-circle mb-0 swiper-button-next"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-7 col-xxl-6 ms-auto">

                    <div class="swiper"
                        data-swiper-options='{
                "spaceBetween": 30,
                "grabCursor": true,
                "speed":"1000",
                "navigation":{
                    "nextEl":".swiper-button-next",
                    "prevEl":".swiper-button-prev"
                },
                "autoplay":{
                    "delay": 5000,
                    "disableOnInteraction": true,
                    "pauseOnMouseEnter": true
                },
                "breakpoints": {
                    "576": {"slidesPerView": 1},
                    "768": {"slidesPerView": 2},
                    "992": {"slidesPerView": 3},
                    "1200": {"slidesPerView": 2}
                }}'>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card border overflow-hidden p-0 h-100">

                                    <div
                                        class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                        <div class="badge text-bg-dark"><i
                                                class="fas fa-star text-warning me-1"></i>4.5</div>
                                        <a href="#" class="btn btn-light btn-round border mb-0 ms-auto"><i
                                                class="bi bi-heart"></i></a>
                                    </div>

                                    <div class="card-header bg-transparent pb-0">
                                        <img src="{{ asset('assets/client/images/shop/08.png') }}" alt="">
                                    </div>

                                    <div class="card-body pt-0">
                                        <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">Mizz
                                                dunk low</a></h6>
                                        <p class="mb-0">Man's training shoes </p>
                                    </div>


                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                                        <div class="d-flex align-items-center gap-2 justify-content-center">
                                            <p class="fw-bold text-success mb-0">$180.00</p>
                                            <small class="text-decoration-line-through">$130.00</small>
                                        </div>
                                        <a href="#" class="btn btn-dark mb-0 z-index-2">Buy now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card border overflow-hidden p-0 h-100">

                                    <div
                                        class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                        <div class="badge text-bg-dark"><i
                                                class="fas fa-star text-warning me-1"></i>4.5</div>
                                        <a href="#" class="btn btn-light btn-round border mb-0 ms-auto"><i
                                                class="bi bi-heart-fill text-danger"></i></a>
                                    </div>

                                    <div class="card-header bg-transparent pb-0">
                                        <img src="{{ asset('assets/client/images/shop/09.png') }}" alt="">
                                    </div>

                                    <div class="card-body pt-0">
                                        <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">Mizz
                                                metcon russell</a></h6>
                                        <p class="mb-0">Woman's training shoes </p>
                                    </div>

                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                                        <div class="d-flex align-items-center gap-2 justify-content-center">
                                            <p class="fw-bold text-success mb-0">$135.00</p>
                                            <small class="text-decoration-line-through">$160.00</small>
                                        </div>
                                        <a href="#" class="btn btn-dark mb-0 z-index-2">Buy now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card border overflow-hidden p-0 h-100">

                                    <div
                                        class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                        <div class="badge text-bg-dark"><i
                                                class="fas fa-star text-warning me-1"></i>4.5</div>
                                        <a href="#" class="btn btn-light btn-round border mb-0 ms-auto"><i
                                                class="bi bi-heart"></i></a>
                                    </div>


                                    <div class="card-header bg-transparent pb-0">
                                        <img src="{{ asset('assets/client/images/shop/07.png') }}" alt="">
                                    </div>

                                    <div class="card-body pt-0">
                                        <h6 class="card-title"><a href="shop-detail.html" class="stretched-link">Air
                                                Max Pulse Roam</a></h6>
                                        <p class="mb-0">Man's sports and casual were</p>
                                    </div>


                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                                        <p class="fw-bold text-success mb-0">$245</p>
                                        <a href="#" class="btn btn-dark mb-0 z-index-2">Buy now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card border overflow-hidden p-0 h-100">

                                    <div
                                        class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                        <div class="badge text-bg-dark"><i
                                                class="fas fa-star text-warning me-1"></i>4.5</div>
                                        <a href="#" class="btn btn-light btn-round border mb-0 ms-auto"><i
                                                class="bi bi-heart"></i></a>
                                    </div>


                                    <div class="card-header bg-transparent pb-0">
                                        <img src="{{ asset('assets/client/images/shop/10.png') }}" alt="">
                                    </div>


                                    <div class="card-body pt-0">
                                        <h6 class="card-title"><a href="shop-detail.html"
                                                class="stretched-link">Jordan victori once</a></h6>
                                        <p class="mb-0">Man's printed slides </p>
                                    </div>

                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center pt-0">
                                        <div class="d-flex align-items-center gap-2 justify-content-center">
                                            <p class="fw-bold text-success mb-0">$45.00</p>
                                            <small class="text-decoration-line-through">$86.00</small>
                                        </div>
                                        <a href="#" class="btn btn-dark mb-0 z-index-2">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-lg-6">

                <div class="col-lg-6 mb-6 mb-lg-0">

                    <div class="card card-body bg-dark overflow-hidden p-sm-6 mb-6" data-bs-theme="dark">

                        <figure class="text-primary position-absolute top-0 start-0 mt-n3 ms-n4">
                            <svg width="111" height="71" viewBox="0 0 111 71" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M92.4335 8.12935C92.4029 8.01892 92.3733 7.90798 92.3427 7.79755C90.075 8.424 87.8078 9.04993 85.5395 9.67638C85.5762 9.80665 85.6125 9.93744 85.6482 10.0687C87.9103 9.42244 90.1719 8.77564 92.4335 8.12935M15.3001 60.9486C14.1257 60.2652 12.7044 59.8799 13.0538 58.1808C13.2768 57.1004 13.4645 55.963 13.9574 54.9982C15.4792 52.0166 16.8904 48.9301 18.8086 46.2106C21.3559 42.6001 24.9726 40.2261 29.5203 40.048C33.8593 39.8775 38.2167 40.1039 42.5649 40.2144C48.5375 40.3655 54.5352 40.8866 60.0899 37.8445C63.654 35.8924 66.6809 33.5194 68.5935 29.7735C70.7557 25.5375 73.0407 21.3412 75.6013 17.3367C79.1705 11.7552 84.2074 8.11866 90.9418 7.16806C91.6239 7.07188 92.4901 6.78384 92.9687 7.07646C93.7773 7.57161 94.4518 8.39448 94.9538 9.21888C95.1293 9.50641 94.7742 10.4463 94.4079 10.6631C93.6243 11.1277 92.6524 11.2626 91.8014 11.6326C91.1259 11.9257 90.5147 12.3669 89.877 12.7455C89.7592 12.8152 89.6398 12.9755 89.5357 12.9643C87.2639 12.7104 86.2364 14.6976 84.6605 15.6747C81.0188 17.9336 78.8394 21.4399 76.8645 25.0851C74.9993 28.5277 73.2244 32.0192 71.3235 35.4415C70.7817 36.4175 70.0588 37.3656 69.2134 38.0893C66.7595 40.192 64.2479 42.0591 61.1179 43.3451C55.0484 45.8386 48.9523 45.1313 42.7613 44.7669C38.9274 44.541 35.047 44.3303 31.237 44.6702C26.401 45.1013 23.0507 48.1505 20.3718 52.0247C19.6667 53.044 18.5959 53.8104 17.8827 54.8251C17.4102 55.4979 17.3128 56.4225 16.9817 57.2067C16.4649 58.4342 15.893 59.6382 15.3001 60.9486"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.2538 29.9021C14.3216 30.0239 14.3899 30.1462 14.4571 30.268C15.6065 29.6346 16.7563 29.0011 17.9061 28.3677C17.8297 28.2296 17.7532 28.0915 17.6768 27.9534C16.5361 28.6031 15.3944 29.2524 14.2538 29.9021M47.9832 29.8797C48.0133 29.9918 48.0434 30.104 48.0734 30.2161C49.474 29.8369 50.8741 29.4583 52.2747 29.0791C52.2446 28.9685 52.2151 28.8585 52.1855 28.7479C50.7849 29.1255 49.3843 29.5026 47.9832 29.8797M78.1082 0.896364C77.8503 1.11448 77.5924 1.3331 77.1938 1.67047H78.4716C79.3809 3.33742 78.806 4.55693 77.5613 5.62916C76.4767 6.56329 75.4727 7.62736 73.8672 7.57691C73.7015 7.57182 73.4253 7.63959 73.3794 7.74916C72.7693 9.19953 71.7005 9.13888 70.5461 8.61755C70.4794 9.30502 70.567 10.0047 70.3163 10.549C70.0466 11.135 69.4773 11.5927 69.0089 12.0773C66.299 14.8792 65.2419 18.5041 63.8831 22.0164C62.6334 25.2458 60.8913 28.2352 57.7925 30.1248C57.3873 30.3715 56.8608 30.4199 56.0912 30.6492C55.5917 31.4651 54.8552 32.4747 53.2701 32.624C52.3481 32.7111 51.499 33.5168 50.5734 33.6264C48.025 33.9276 45.4246 34.3501 42.8992 34.1223C40.5572 33.9108 38.226 33.0811 35.9956 32.2423C31.1445 30.4184 26.1848 30.1396 21.2114 31.2292C18.4494 31.8346 15.8888 33.1515 14.0091 35.4768C13.4403 36.1806 12.6636 36.7121 12.0117 37.3527C8.83693 40.4716 6.33646 44.0577 4.58266 48.1545C4.04189 49.4189 3.5266 50.6945 2.98788 51.9603C2.73355 52.5556 2.44456 52.8511 1.73509 52.3731C-0.0110662 51.1964 -0.275079 50.4269 0.224405 48.2605C2.22897 39.5619 7.51075 33.2325 14.6865 28.3137C17.8659 26.134 21.5952 25.6897 25.3133 25.7931C27.8214 25.8634 30.3433 26.341 32.805 26.8817C35.1006 27.3857 37.3126 28.2561 39.5822 28.8895C42.3406 29.6591 45.0939 29.1474 47.8303 28.6847C54.7329 27.5171 59.004 23.4193 61.1095 16.8331C63.4438 9.52976 68.1343 4.24607 75.0894 1.02173C75.9513 0.6227 76.9772 0.579383 77.9273 0.37146C77.9879 0.546258 78.0481 0.721056 78.1082 0.896364"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M90.5433 31.653C90.0089 32.2353 89.4658 32.81 88.9435 33.4024C88.7191 33.6568 88.3095 34.1157 88.3694 34.1961C89.1835 35.2898 88.3278 36.2024 87.7359 36.6203C86.2178 37.6933 86.7147 39.2165 86.5046 40.5702C86.3792 41.3751 85.3706 42.6368 84.6306 42.7754C84.5702 42.4081 84.5113 42.0494 84.4529 41.6908C84.1281 41.8496 83.7459 41.9467 83.4911 42.181C83.0525 42.5846 82.6927 43.0738 82.1826 43.6617C82.714 43.7654 83.0769 43.8362 83.4586 43.9101C83.5322 44.3719 83.6033 44.8166 83.6738 45.2562C82.2856 45.7677 80.8872 46.0135 79.8238 47.2018C79.2457 47.8484 78.4453 48.1509 78.9026 49.2183C78.9417 49.3088 78.3889 49.8193 78.2991 49.7727C76.1353 48.6517 74.9592 50.6489 74.3009 51.6946C73.7578 52.5561 73.1244 53.018 72.4249 53.3468C71.8884 53.5987 71.0758 53.2552 70.3834 53.1986C70.2109 53.1844 70.0317 53.2547 69.7647 53.3018C69.7962 53.713 69.8246 54.0854 69.8515 54.4486C68.612 54.9742 68.612 54.9742 65.7985 54.1957C65.5488 55.7457 64.287 56.2678 62.6536 55.4244C62.5612 55.733 62.4739 56.0264 62.4617 56.0669C60.773 56.03 59.0072 54.3363 57.554 56.8182C56.2754 55.4118 54.9491 56.0153 53.4984 56.7514C52.8183 57.0959 51.8986 57.0423 51.0869 57.0478C47.7725 57.0701 44.5133 57.2906 41.2892 58.2498C39.7096 58.7198 38.3712 59.6769 36.8814 60.1114C33.6639 61.0504 32.1879 63.896 29.9322 65.8573C28.8739 66.7775 28.3349 68.284 27.5354 69.5087C27.0476 70.2554 26.838 71.4341 25.4224 70.7355C24.3265 70.1952 23.9134 69.5037 24.4209 68.1767C26.7796 62.0126 30.5941 57.2239 36.8809 54.528C41.6146 52.4994 46.5467 52.4731 51.5194 52.3386C54.7334 52.2516 57.9428 52.0254 61.1562 51.8818C61.6531 51.86 62.5003 51.4098 62.2749 52.5839L62.2805 52.5612L61.6592 52.7964C61.6542 52.8687 61.6496 52.9411 61.6445 53.0134C61.9557 53.0417 62.2739 53.1237 62.5754 53.0842C62.9302 53.0382 63.2743 52.7837 63.617 52.7964C66.3843 52.8971 68.7161 51.561 71.0321 50.398C73.4929 49.1621 75.7881 47.5873 78.1042 46.0823C78.8097 45.6245 79.3467 44.9087 79.9609 44.3107L79.9203 44.3446C80.3746 43.9854 80.8278 43.6258 81.5684 43.0394C80.7319 42.9873 80.3071 42.961 79.635 42.9195C80.5446 41.8147 81.3024 40.765 82.1998 39.8509C82.7942 39.2448 83.2043 39.5094 83.6276 40.5859C84.3052 40.5389 84.958 40.4938 85.7402 40.4392C85.3645 39.9338 85.0478 39.5069 84.824 39.2069C84.2301 39.1583 83.4941 39.2721 83.3733 39.0511C83.1505 38.6443 83.2048 38.0251 83.2972 37.5223C83.4276 36.813 83.6469 36.1073 83.9281 35.4421C84.0971 35.0424 84.4555 34.7227 84.8641 34.191C84.5976 33.0938 85.0595 31.9642 87.0147 29.4575C87.2817 29.5895 87.5634 29.7282 87.9116 29.9002C87.737 28.2029 87.9105 27.9297 88.745 27.999V29.7378L88.7166 29.6988C89.0089 30.2958 89.3008 30.8922 89.6262 31.5584C89.7038 31.5372 89.9921 31.4573 90.2809 31.3768C90.3682 31.4689 90.456 31.561 90.5433 31.653"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M91.05 30.6099C90.964 30.5189 90.8775 30.4279 90.7915 30.3369C90.9735 28.4059 90.893 28.3199 89.2505 28.6784L89.2785 28.7169C89.874 28.1504 90.4695 27.5834 91.1385 26.9459C90.717 26.6759 90.314 26.4179 89.698 26.0234C90.224 25.7174 90.6 25.4874 90.9885 25.2804C91.117 25.2119 91.3395 25.2544 91.4145 25.1614C94.349 21.5449 98.2415 19.3599 102.545 17.8789C104.536 17.1939 106.637 16.8294 108.692 16.3369C108.986 16.2664 109.304 16.2954 109.61 16.2784L109.739 16.7114C107.162 17.4684 104.584 18.2254 102.007 18.9824C102.04 19.1079 102.073 19.2334 102.106 19.3594C104.782 18.6204 107.457 17.8809 110.107 17.1489C111.038 19.2034 110.894 19.4559 108.979 20.2784C106.467 21.3584 103.996 22.5329 101.497 23.6449C101 23.8659 100.529 24.2159 99.9335 23.6049C99.691 23.3574 98.983 23.5644 98.3565 23.5644V22.6369C97.762 23.0134 97.2515 23.3364 96.4335 23.8544C97.1575 23.9409 97.5115 23.9829 97.852 24.0239C97.852 24.1599 97.8865 24.2669 97.8475 24.3164C97.4145 24.8639 96.7665 25.1309 96.822 26.1504C96.86 26.8489 95.937 26.8254 95.5255 26.1679C95.154 26.5799 94.7805 26.9944 94.222 27.6134C94.3215 28.8909 93.3995 29.6384 91.681 29.1314C91.745 29.5474 91.8975 29.9319 91.815 30.2559C91.7715 30.4279 91.3185 30.4954 91.05 30.6099"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M74 47.3765C72.0934 48.234 70.1858 49.0911 68.2787 49.9486C68.1856 49.82 68.0931 49.6914 68 49.5629C68.2614 49.3936 68.5055 49.1993 68.7858 49.0587C70.1138 48.3931 71.4413 47.7261 72.7943 47.0989C73.0854 46.9643 73.4799 46.9944 73.8274 46.9486C73.8847 47.0911 73.9426 47.234 74 47.3765"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M62 51.9486C62.9157 50.1567 64.5931 50.4906 66 49.9486C65.9333 50.9163 64.7375 51.4739 62.0101 51.9147C62.0058 51.9236 62 51.9486 62 51.9486"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M80 43.8445C79.4723 43.9225 78.9099 43.9279 78.4273 44.0993C77.9537 44.2675 77.5613 44.6045 77 44.9486C77.1311 43.9131 78.3455 42.8058 79.1308 42.9637C79.4702 43.0315 79.6842 43.5573 79.9565 43.875C79.958 43.8745 80 43.8445 80 43.8445"
                                    fill="currentColor"></path>
                            </svg>
                        </figure>

                        <h4 class="mb-3 position-relative">Subscribe to our email and get 20% off</h4>
                        <p class="mb-4">Elevate Your Look with Our Latest Trendsetting Collections.</p>

                        <form class="input-group mb-2">
                            <input class="form-control form-control-lg rounded border bg-light me-3" type="email"
                                placeholder="Enter your email">
                            <button type="button" class="btn btn-primary rounded-2 mb-0"><i
                                    class="bi bi-send-fill"></i></button>
                        </form>
                    </div>


                    <div class="card bg-light border overflow-hidden p-xl-0">
                        <div class="row align-items-center">

                            <div class="col-sm-4">
                                <img src="{{ asset('assets/client/images/shop/game.png') }}" class="ms-n5" alt="">
                            </div>

                            <div class="col-sm-8">
                                <div class="card-body">
                                    <h4 class="mb-3">Touch motion controller at $35 USD</h4>
                                    <p class="mb-3">Elevate Your Look with Our Latest Trendsetting Collections.</p>
                                    <a class="btn btn-dark icon-link icon-link-hover mb-0"
                                        href="shop-grid.html">Browse products<i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="card bg-light overflow-hidden h-100 p-0">

                        <div class="card-body text-center pt-5 px-sm-7 pb-0">
                            <h3 class="fw-semibold mb-3">Hurricane smart watch pro at $89 USD</h3>
                            <p class="mb-3">Offer real-time tracking information, so customers can monitor the
                                status of their shipments.</p>
                            <a class="btn btn-dark icon-link icon-link-hover mb-0" href="shop-grid.html">Browse
                                products<i class="bi bi-arrow-right"></i> </a>
                        </div>

                        <div class="card-footer bg-light px-sm-8 px-md-9 px-lg-7 px-xl-8 pt-0">
                            <img class="mb-n7" src="{{ asset('assets/client/images/shop/watch-01.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-app-layout>
