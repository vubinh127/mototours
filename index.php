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
        <div class="banner">
            <div class="banner-content">
                <h1 class="banner-title">EXPERIENCE AN <span>AMAZING MOTORCYCLE RIDE</span> WITH US!</h1>
                <p class="banner-description">
                    We design and develop various types of exploration and experiential tours, both domestically and internationally, combined with community development
                    projects to support ethnic minority communities in these areas.
                </p>
                <a href="/mototours/tour.php" class="btn-FF8A15 booking_btn">Book now</a>
            </div>
        </div>

        <form>
            <div class="booking-form d-flex align-items-end">
                <div class="form-group">
                    <label for="find_location">Tìm điểm đến*</label>
                    <input type="text" class="form-control" placeholder="Nhập điểm đến" id="find_location" />
                </div>
                <div class="form-group position-relative">
                    <label for="checkin">Ngày check in</label>
                    <input type="text" class="form-control" placeholder="mm/dd/yy" id="checkin" />
                    <span class="calendar-icon" data-target="checkin">
                        <img src="assets/images/calendar.svg" alt="">
                    </span>
                </div>
                <div class="form-group position-relative">
                    <label for="checkout">Ngày check out</label>
                    <input type="text" class="form-control" placeholder="mm/dd/yy" id="checkout" />
                    <span class="calendar-icon" data-target="checkout">
                        <img src="assets/images/calendar.svg" alt="">
                    </span>
                </div>
                <button class="btn-FF8A15 search_btn">Tìm kiếm</button>
            </div>
        </form>

        <div class="container">
            <div class="special-tour-section">
                <div class="title-orange">
                    <span>TOUR ĐẶC BIỆT</span>
                </div>
                <p class="description">Trải nghiệm những tour đặc biệt sắp diễn ra</p>
                <div class="box-special-tour">
                    <div class="box_tour">
                        <a href="">
                            <img src="assets/images/special_img.jpg" alt="" />
                            <div class="tag_location btn-FF8A15">Mỹ</div>
                            <div class="title_tour">
                                <p>Nam Mỹ</p>
                                <span>Nơi tận cùng trái đất theo đúng nghĩa đen và nghĩa bóng của nó, hành trình này sẽ đưa bạn đến với vùng Patagonia,...</span>
                                <div class="star-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="box_tour">
                        <a href="">
                            <img src="assets/images/special_img_2.jpg" alt="" />
                            <div class="tag_location btn-FF8A15">Mỹ</div>
                            <div class="title_tour">
                                <p>Nam Mỹ</p>
                                <span>Nơi tận cùng trái đất theo đúng nghĩa đen và nghĩa bóng của nó, hành trình này sẽ đưa bạn đến với vùng Patagonia,...</span>
                                <div class="star-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="small_grid">
                        <div class="box_tour">
                            <a href="">
                                <img src="assets/images/special_img_3.jpg" alt="" />
                                <div class="tag_location btn-FF8A15">Mỹ</div>
                                <div class="title_tour">
                                    <p>Nam Mỹ</p>
                                    <span>Nơi tận cùng trái đất theo đúng nghĩa đen và nghĩa bóng của nó, hành trình này sẽ đưa bạn đến với vùng Patagonia,...</span>
                                    <div class="star-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box_tour">
                            <a href="">
                                <img src="assets/images/special_img_3.jpg" alt="" />
                                <div class="tag_location btn-FF8A15">Mỹ</div>
                                <div class="title_tour">
                                    <p>Nam Mỹ</p>
                                    <span>Nơi tận cùng trái đất theo đúng nghĩa đen và nghĩa bóng của nó, hành trình này sẽ đưa bạn đến với vùng Patagonia,...</span>
                                    <div class="star-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about_us">
                <div class="title-orange">
                    <span>GIỚI THIỆU MOTOTOURS ASIA</span>
                </div>
                <p class="description">Vì sao nên chọn Mototours Asia</p>

                <div class="box_about">
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img class="icon" src="assets/images/reputation.png" alt="" />
                        <p class="title">Uy tín & Kinh nghiệm</p>
                        <p class="text">
                            Với bề dày kinh nghiệm hơn ba thập kỷ tiên phong trong lĩnh vực tổ chức tour xe máy, chúng tôi tự hào sở hữu sự am hiểu sâu sắc về nhu cầu đa dạng
                            của du khách. Mỗi hành trình đều được thiết kế tỉ mỉ, chú trọng đến từng chi tiết nhỏ, tối ưu hóa trải nghiệm và đảm bảo an toàn tuyệt đối, mang đến
                            sự an tâm tuyệt đối cho du khách trên mọi cung đường.
                        </p>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img class="icon" src="assets/images/value-proposition.png" alt="" />
                        <p class="title">Độc đáo & Khác biệt</p>
                        <p class="text">
                            Chúng tôi không ngừng sáng tạo và đổi mới, không ngừng tìm kiếm và xây dựng những tuyến đường mới lạ, khai phá những vùng đất hoang sơ, tránh xa những điểm đến quá tải quen thuộc
                        </p>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img class="icon" src="assets/images/image.png" alt="" />
                        <p class="title">Trải nghiệm văn hóa chân thực </p>
                        <p class="text">
                            Hơn cả một chuyến đi, chúng tôi kiến tạo nên hành trình văn hóa đắm chìm, nơi du khách được hòa mình vào vẻ đẹp thiên nhiên hùng vĩ, khám phá nét đẹp văn hóa bản địa độc đáo thông qua những hoạt động trải nghiệm chân thực và ý nghĩa
                        </p>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img class="icon" src="assets/images/everonment.png" alt="" />
                        <p class="title">Trách nhiệm với môi trường</p>
                        <p class="text">
                            Chúng tôi luôn nỗ lực thực hành du lịch có trách nhiệm, lan tỏa thông điệp bảo vệ môi trường xanh đến cộng đồng, góp phần bảo vệ hành tinh xanh cho thế hệ mai sau. Mỗi hành động của chúng tôi, dù là nhỏ nhất, đều hướng đến mục tiêu phát triển du lịch bền vững, hài hòa giữa con người và thiên nhiên.
                        </p>
                    </div>
                </div>
            </div>

            <div class="block_list_tour">
                <div class="title-orange title-orange-left">
                    <span>TOUR NƯỚC NGOÀI</span>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title">
                        Du lịch xuyên lục địa tận hưởng cuộc sống
                    </div>

                    <a href="" class="btn-FF8A15 see-more">
                        Xem thêm
                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                
                <div class="list_card">
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="block_list_tour">
                <div class="title-orange title-orange-left">
                    <span>TOUR TRONG NƯỚC</span>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title">
                        Khám phá những cung đường đẹp nhất Việt Nam
                    </div>

                    <a href="" class="btn-FF8A15 see-more">
                        Xem thêm
                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                
                <div class="list_card">
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="assets/images/special_img.jpg" alt="Mountain View" class="card-image">
                            <div class="card-content">
                                <h3 class="card-title">Khám phá Tây Bắc Móng Cổ</h3>
                                <p class="card-subtitle">Móng Cổ</p>
                                <div class="card-bottom">
                                    <div>
                                        <span class="card-rating">4.8</span>
                                        <span class="card-review">Xuất sắc • 2,000 Reviews</span>
                                    </div>

                                    <div class="btn-FF8A15 card-button">
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6713 6.9998C1.11902 6.9998 0.671304 6.55208 0.671304 5.9998C0.671304 5.44752 1.11902 4.9998 1.6713 4.9998L13.4996 4.9998L10.9642 2.46429C10.5737 2.07377 10.5737 1.44063 10.9642 1.05011C11.3547 0.659587 11.9879 0.659585 12.3784 1.05011L16.621 5.29279C17.0115 5.68332 17.0115 6.31648 16.621 6.707L12.3784 10.9496C11.9879 11.3402 11.3547 11.3402 10.9642 10.9496C10.5737 10.5591 10.5737 9.92596 10.9642 9.53544L13.4998 6.9998L1.6713 6.9998Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="feedback_section">
                <div class="title-orange">
                    <span>FEEDBACK</span>
                </div>
                <p class="description">Cảm nhận của khách hàng sau những chuyến đi đáng nhớ</p>
                <div class="slide_rating swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="blogs_and_news">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="blogs">
                            <div class="title-orange title-orange-left">
                                <span>BLOGS</span>
                            </div>
                            <p class="description">Cẩm nang du lịch</p>
                            <div class="blog_list">
                                <a href="">
                                    <div class="blog_thumbnail blog_top">
                                        <img src="assets/images/blog_Top.png" alt="">
                                        <div class="content">
                                            <p>Khám phá Tây Bắc Mông Cổ</p>
                                            <span>11 ngày 10 đêm</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="blog_list_bottom">
                                    <a href="">
                                        <div class="blog_thumbnail blog_bottom">
                                            <img src="assets/images/blog_bottom.png" alt="">
                                            <div class="content">
                                                <p>11 ngày 10 đêm</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="blog_thumbnail blog_bottom">
                                            <img src="assets/images/blog_bottom.png" alt="">
                                            <div class="content">
                                                <p>11 ngày 10 đêm</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="blog_thumbnail blog_bottom">
                                            <img src="assets/images/blog_bottom.png" alt="">
                                            <div class="content">
                                                <p>11 ngày 10 đêm</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="news">
                            <div class="title-orange title-orange-left">
                                <span>TIN TỨC</span>
                            </div>
                            <p class="description">Tin du lịch mới nhất</p>
                            <div class="news_list">
                                <a href="">
                                    <div class="news_thumbnail d-flex align-items-center">
                                        <img src="assets/images/blog_bottom.png" alt="">
                                        <div class="content">
                                            <div>
                                                <p>Du lịch Tân Cương ngắm thiên nhiên tươi đẹp vùng viễn Tây Trung Quốc</p>
                                                <span>Bạn ngại đi du lịch vì thấy người ta thường có đôi có cặp hoặc đi cùng gia đình con cái,....</span>
                                            </div>
                                            <div class="date d-flex align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                                </svg>
                                                4/3/2025
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="news_thumbnail d-flex align-items-center">
                                        <img src="assets/images/blog_bottom.png" alt="">
                                        <div class="content">
                                            <div>
                                                <p>Du lịch Tân Cương ngắm thiên nhiên tươi đẹp vùng viễn Tây Trung Quốc</p>
                                                <span>Bạn ngại đi du lịch vì thấy người ta thường có đôi có cặp hoặc đi cùng gia đình con cái,....</span>
                                            </div>
                                            <div class="date d-flex align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                                </svg>
                                                4/3/2025
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="news_thumbnail d-flex align-items-center">
                                        <img src="assets/images/blog_bottom.png" alt="">
                                        <div class="content">
                                            <div>
                                                <p>Du lịch Tân Cương ngắm thiên nhiên tươi đẹp vùng viễn Tây Trung Quốc</p>
                                                <span>Bạn ngại đi du lịch vì thấy người ta thường có đôi có cặp hoặc đi cùng gia đình con cái,....</span>
                                            </div>
                                            <div class="date d-flex align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                                </svg>
                                                4/3/2025
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="news_thumbnail d-flex align-items-center">
                                        <img src="assets/images/blog_bottom.png" alt="">
                                        <div class="content">
                                            <div>
                                                <p>Du lịch Tân Cương ngắm thiên nhiên tươi đẹp vùng viễn Tây Trung Quốc</p>
                                                <span>Bạn ngại đi du lịch vì thấy người ta thường có đôi có cặp hoặc đi cùng gia đình con cái,....</span>
                                            </div>
                                            <div class="date d-flex align-items-center">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                                </svg>
                                                4/3/2025
                                            </div>
                                        </div>
                                    </div>
                                </a>
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