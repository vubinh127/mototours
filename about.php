<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kumbh+Sans:wght@100..900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/css/style.css?v=1.0" />
    </head>
    <body>

    <?php include 'header.php';?>

    <main>
        <div class="about_us_page">
            <div class="banner">
                <div class="container">
                    <div class="banner-content">
                        <h1 class="banner-title">
                            Mỗi hành trình của chúng tôi không chỉ là những <span>khám phá, trải nghiệm</span> mà còn để lại những <span>cảm xúc</span> theo bạn suốt cuộc đời
                        </h1>
                    </div>
                </div>
            </div>
            <div class="container">
               <div class="about_us_text">
                   <div class="row">
                       <div class="col-lg-6 mb-5 mb-lg-0">
                           <div class="image">
                               <img src="assets/images/image_about.png" alt="">
                           </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="d-flex flex-column justify-content-between h-100">
                               <div class="text">
                                   <h2>Về chúng tôi</h2>
                                   <p>MotoTours Asia hoạt động trong lĩnh vực du lịch quốc tế, chuyên về loại hình tour du lịch khám phá. Với những tour xe máy, tour xe mô tô phân khối lớn, tour bằng xe Honda CRF 250, xe Honda CB500X, tou du lịch bằng xe BMW F800 GS, BMW R1200 GS, du lịch trải nghiệm bằng xe máy, đến những vùng hoang sơ.</p>
                                   <p>Tham gia tour du lịch cùng chúng tôi là chung tay góp sức thể thiện trách nhiệm với cộng đồng nhằm mục đích bảo vệ, giữ gìn và phát huy những giá trị tại điểm đến và hướng tới mục đích phát triển bền vững. Đánh thức những tiềm năng du lịch tại những vùng hoang sơ để phát triển sinh kế cho cộng đồng các dân tộc thiểu số.</p>
                               </div>
                               <div class="exp d-flex flex-column flex-md-row align-items-center align-items-md-start">
                                   <div class="d-flex flex-column align-items-start">
                                       <h3>30+</h3>
                                       <p>Năm kinh nghiệm</p>
                                   </div>
                                   <div class="d-flex flex-column align-items-start">
                                       <h3>100+</h3>
                                       <p>Địa điểm đã đến</p>
                                   </div>
                                   <div class="d-flex flex-column align-items-start">
                                       <h3>16+</h3>
                                       <p>TOUR ĐANG Diễn ra</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

                <div class="our_team">
                    <h2>Thành viên của chúng tôi</h2>
                    <div class="list_member swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="member">
                                        <div class="image">
                                            <img src="assets/images/teams.png" alt="">
                                            <div class="bg-cover"></div>
                                            <div class="social">
                                                <a href="">
                                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="18" cy="18" r="18" fill="#ACACAC"/>
                                                        <path d="M26.3337 18C26.3337 13.4 22.6003 9.66663 18.0003 9.66663C13.4003 9.66663 9.66699 13.4 9.66699 18C9.66699 22.0333 12.5337 25.3916 16.3337 26.1666V20.5H14.667V18H16.3337V15.9166C16.3337 14.3083 17.642 13 19.2503 13H21.3337V15.5H19.667C19.2087 15.5 18.8337 15.875 18.8337 16.3333V18H21.3337V20.5H18.8337V26.2916C23.042 25.875 26.3337 22.325 26.3337 18Z" fill="white"/>
                                                    </svg>
                                                </a>
                                                <a href="">
                                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="18" cy="18" r="18" fill="#ACACAC"/>
                                                        <path d="M23.8333 10.5C24.2754 10.5 24.6993 10.6756 25.0118 10.9882C25.3244 11.3007 25.5 11.7246 25.5 12.1667V23.8333C25.5 24.2754 25.3244 24.6993 25.0118 25.0118C24.6993 25.3244 24.2754 25.5 23.8333 25.5H12.1667C11.7246 25.5 11.3007 25.3244 10.9882 25.0118C10.6756 24.6993 10.5 24.2754 10.5 23.8333V12.1667C10.5 11.7246 10.6756 11.3007 10.9882 10.9882C11.3007 10.6756 11.7246 10.5 12.1667 10.5H23.8333ZM23.4167 23.4167V19C23.4167 18.2795 23.1304 17.5885 22.621 17.079C22.1115 16.5696 21.4205 16.2833 20.7 16.2833C19.9917 16.2833 19.1667 16.7167 18.7667 17.3667V16.4417H16.4417V23.4167H18.7667V19.3083C18.7667 18.6667 19.2833 18.1417 19.925 18.1417C20.2344 18.1417 20.5312 18.2646 20.75 18.4834C20.9688 18.7022 21.0917 18.9989 21.0917 19.3083V23.4167H23.4167ZM13.7333 15.1333C14.1046 15.1333 14.4607 14.9858 14.7233 14.7233C14.9858 14.4607 15.1333 14.1046 15.1333 13.7333C15.1333 12.9583 14.5083 12.325 13.7333 12.325C13.3598 12.325 13.0016 12.4734 12.7375 12.7375C12.4734 13.0016 12.325 13.3598 12.325 13.7333C12.325 14.5083 12.9583 15.1333 13.7333 15.1333ZM14.8917 23.4167V16.4417H12.5833V23.4167H14.8917Z" fill="white"/>
                                                    </svg>
                                                </a>
                                                <a href="">
                                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="18" cy="18" r="18" fill="#ACACAC"/>
                                                        <path d="M25.5 16.8V14.4H24.25V16.8H21.75V18H24.25V20.4H25.5V18H28V16.8H25.5ZM14.25 16.8V19.2H17.786C17.5262 19.9012 17.047 20.5081 16.414 20.9378C15.7811 21.3674 15.0252 21.5987 14.25 21.6C13.2558 21.5987 12.3028 21.219 11.5998 20.5442C10.8968 19.8693 10.5013 18.9544 10.5 18C10.5013 17.0456 10.8968 16.1307 11.5998 15.4558C12.3028 14.781 13.2558 14.4013 14.25 14.4C15.146 14.4 16.009 14.7082 16.679 15.2688L18.32 13.4592C17.1911 12.5175 15.7456 11.9992 14.25 12C12.593 12.0018 11.0043 12.6345 9.83263 13.7593C8.66093 14.8842 8.00185 16.4092 8 18C8.00185 19.5908 8.66093 21.1158 9.83263 22.2407C11.0043 23.3655 12.593 23.9982 14.25 24C15.907 23.9982 17.4957 23.3655 18.6674 22.2407C19.8391 21.1158 20.4981 19.5908 20.5 18V16.8H14.25Z" fill="white"/>
                                                    </svg>
                                                </a>
                                                <a href="">
                                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="18" cy="18" r="18" fill="#ACACAC"/>
                                                        <mask id="mask0_151_1519" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="10" y="10" width="16" height="16">
                                                            <path d="M10 10H26V26H10V10Z" fill="white"/>
                                                        </mask>
                                                        <g mask="url(#mask0_151_1519)">
                                                            <path d="M22.6 10.7498H25.0537L19.6937 16.8915L26 25.2503H21.0629L17.1931 20.1818L12.7703 25.2503H10.3143L16.0469 18.6789L10 10.7509H15.0629L18.5554 15.3829L22.6 10.7498ZM21.7371 23.7783H23.0971L14.32 12.1452H12.8617L21.7371 23.7783Z" fill="white"/>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>Tuấn Nguyễn</p>
                                            <span>President - Founder</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="member">
                                        <div class="image">
                                            <img src="assets/images/teams.png" alt="">
                                        </div>
                                        <div class="info">
                                            <p>Lindsay Lohan</p>
                                            <span>Leading Programmer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="member">
                                        <div class="image">
                                            <img src="assets/images/teams.png" alt="">
                                        </div>
                                        <div class="info">
                                            <p>Daniel Craig</p>
                                            <span>Marketing</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="member">
                                        <div class="image">
                                            <img src="assets/images/teams.png" alt="">
                                        </div>
                                        <div class="info">
                                            <p>James Gandolfini</p>
                                            <span>Manager</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feedback_section">
                    <h2 class="text-center">Khách hàng nói gì về chúng tôi</h2>
                    <div class="grid_feedback">
                        <div class="detail_feedback">
                            <div class="reviewer d-flex align-items-center">
                                <img src="assets/images/reviewer.png" class="avatar" alt="">
                                <div class="reviewer_name">
                                    <p>Alexander Doe</p>
                                    <span>Telecom@AirtelCom</span>
                                </div>
                            </div>
                            <div class="content">
                                “Vivamus facilisis mi a mauris ultrices fermentum. Aliquam porta eleifend mi non laoreet. Donec ornare vitae nulla pulvinar tristique. Sed vulputate in sapien eu eleifend. Donec id rhoncus mauris. Cras adipiscing at magna in volutpat. Nullam eleifend elit dui, quis vulputate magna mattis ut. Vestibulum ornare arcu mauris, sed”
                            </div>
                            <div class="star-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <div class="detail_feedback">
                            <div class="reviewer d-flex align-items-center">
                                <img src="assets/images/reviewer.png" class="avatar" alt="">
                                <div class="reviewer_name">
                                    <p>Alexander Doe</p>
                                    <span>Telecom@AirtelCom</span>
                                </div>
                            </div>
                            <div class="content">
                                “Vivamus facilisis mi a mauris ultrices fermentum. Aliquam porta eleifend mi non laoreet. Donec ornare vitae nulla pulvinar tristique. Sed vulputate in sapien eu eleifend. Donec id rhoncus mauris. Cras adipiscing at magna in volutpat. Nullam eleifend elit dui, quis vulputate magna mattis ut. Vestibulum ornare arcu mauris, sed”
                            </div>
                            <div class="star-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <div class="detail_feedback">
                            <div class="reviewer d-flex align-items-center">
                                <img src="assets/images/reviewer.png" class="avatar" alt="">
                                <div class="reviewer_name">
                                    <p>Alexander Doe</p>
                                    <span>Telecom@AirtelCom</span>
                                </div>
                            </div>
                            <div class="content">
                                “Vivamus facilisis mi a mauris ultrices fermentum. Aliquam porta eleifend mi non laoreet. Donec ornare vitae nulla pulvinar tristique. Sed vulputate in sapien eu eleifend. Donec id rhoncus mauris. Cras adipiscing at magna in volutpat. Nullam eleifend elit dui, quis vulputate magna mattis ut. Vestibulum ornare arcu mauris, sed”
                            </div>
                            <div class="star-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <div class="detail_feedback">
                            <div class="reviewer d-flex align-items-center">
                                <img src="assets/images/reviewer.png" class="avatar" alt="">
                                <div class="reviewer_name">
                                    <p>Alexander Doe</p>
                                    <span>Telecom@AirtelCom</span>
                                </div>
                            </div>
                            <div class="content">
                                “Vivamus facilisis mi a mauris ultrices fermentum. Aliquam porta eleifend mi non laoreet. Donec ornare vitae nulla pulvinar tristique. Sed vulputate in sapien eu eleifend. Donec id rhoncus mauris. Cras adipiscing at magna in volutpat. Nullam eleifend elit dui, quis vulputate magna mattis ut. Vestibulum ornare arcu mauris, sed”
                            </div>
                            <div class="star-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>

    <?php include 'footer.php';?>

        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
            integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>