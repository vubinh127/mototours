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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/css/style.css?v=1.0" />
    </head>
    <body>

    <?php include 'header.php';?>

     <main class="tour_page">
        <div class="banner">
            <form>
                <div class="booking-form d-flex align-items-end">
                    <div class="form-group">
                        <label for="find_location">Tìm điểm đến*</label>
                        <input type="text" class="form-control" placeholder="Nhập điểm đến" id="find_location" />
                    </div>
                    <div class="form-group">
                        <label for="checkin">Ngày check in</label>
                        <input type="date" class="form-control" placeholder="mm/dd/yy" id="checkin" />
                    </div>
                    <div class="form-group">
                        <label for="checkout">Ngày check out</label>
                        <input type="date" class="form-control" placeholder="mm/dd/yy" id="checkout" />
                    </div>
                    <div class="form-group">
                        <label for="inputState">Khoảng giá tiền</label>
                        <select id="inputState" class="form-control">
                            <option selected>Chọn giá</option>
                            <option>...</option>
                        </select>
                    </div>
                    <button class="btn-FF8A15 search_btn">Tìm kiếm</button>
                </div>
            </form>
        </div>


        <div class="container">
            <div class="list_touring">
                <div class="solf">
                    <div class="form-group">
                        <label for="inputState">Sắp xếp</label>
                        <select id="inputState" class="form-control">
                            <option selected>Thứ tự từ A - Z</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="discover_tour_list">
                    <div class="discover_tour">
                        <div class="discover_tour_thumbnail swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">    
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="tour_text">
                            <p class="d-flex align-items-start justify-content-between">
                                Khám phá Tây Bắc Mông Cổ

                                <span class="d-flex align-items-center rating_percent"> 
                                    <img src="assets/images/rating.svg" alt="">
                                    4.9
                                </span>
                            </p>
                            <div class="date d-flex align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                </svg>
                                4/3/2025
                            </div>
                            <div class="price">
                                $1999,999
                            </div>
                        </div>
                    </div>

                    <div class="discover_tour">
                        <div class="discover_tour_thumbnail swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">    
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="tour_text">
                            <p class="d-flex align-items-start justify-content-between">
                                Khám phá Tây Bắc Mông Cổ

                                <span class="d-flex align-items-center rating_percent"> 
                                    <img src="assets/images/rating.svg" alt="">
                                    4.9
                                </span>
                            </p>
                            <div class="date d-flex align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                </svg>
                                4/3/2025
                            </div>
                            <div class="price">
                                $1999,999
                            </div>
                        </div>
                    </div>

                    <div class="discover_tour">
                        <div class="discover_tour_thumbnail swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">    
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="tour_text">
                            <p class="d-flex align-items-start justify-content-between">
                                Khám phá Tây Bắc Mông Cổ

                                <span class="d-flex align-items-center rating_percent"> 
                                    <img src="assets/images/rating.svg" alt="">
                                    4.9
                                </span>
                            </p>
                            <div class="date d-flex align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                </svg>
                                4/3/2025
                            </div>
                            <div class="price">
                                $1999,999
                            </div>
                        </div>
                    </div>

                    <div class="discover_tour">
                        <div class="discover_tour_thumbnail swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/touring.png" alt="">    
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="tour_text">
                            <p class="d-flex align-items-start justify-content-between">
                                Khám phá Tây Bắc Mông Cổ

                                <span class="d-flex align-items-center rating_percent"> 
                                    <img src="assets/images/rating.svg" alt="">
                                    4.9
                                </span>
                            </p>
                            <div class="date d-flex align-items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.66667C0 1.19391 1.19391 0 2.66667 0H13.3333C14.8061 0 16 1.19391 16 2.66667V13.3333C16 14.8061 14.8061 16 13.3333 16H2.66667C1.19391 16 0 14.8061 0 13.3333V2.66667ZM1.7778 3.55555V13.3333C1.7778 13.8243 2.17578 14.2222 2.66669 14.2222H13.3334C13.8243 14.2222 14.2222 13.8243 14.2222 13.3333V3.55555H1.7778ZM3.55561 6.22223C3.55561 5.7313 3.95358 5.33334 4.4445 5.33334H11.5556C12.0465 5.33334 12.4445 5.7313 12.4445 6.22223C12.4445 6.71316 12.0465 7.11112 11.5556 7.11112H4.4445C3.95358 7.11112 3.55561 6.71316 3.55561 6.22223Z" fill="#8B8B8B"/>
                                </svg>
                                4/3/2025
                            </div>
                            <div class="price d-flex align-items-center">
                                <p class="sale"><span class="sale_percent">15%</span><span class="sale_price"> $1999,999</span></p> $1999,999
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
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>