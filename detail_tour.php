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

     <main class="detail_tour_page tour_page">
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
           <div class="detail_tour">
                <h2>
                    Khám phá Nam Mỹ - Nơi tận cùng trái đất
                </h2>

                
                <div class="detail_tour_thumbail">
                    <div class="tour_thumbail div1">
                        <img src="assets/images/touring.png" alt="">
                    </div>
                    <div class="tour_thumbail div2">
                        <img src="assets/images/touring.png" alt="">
                    </div>
                    <div class="tour_thumbail div3">
                        <img src="assets/images/touring.png" alt="">
                    </div>
                    <div class="tour_thumbail div4">
                        <img src="assets/images/touring.png" alt="">
                    </div>
                    <div class="tour_thumbail div5">
                        <img src="assets/images/touring.png" alt="">
                    </div>
                </div>

                <div class="detail_tour_content">
                    <div class="content">
                        <h2>Giới thiệu</h2>
                        <div class="text">
                            <p>Nơi tận cùng trái đất theo đúng nghĩa đen và nghĩa bóng của nó, hành trình này sẽ đưa bạn đến với vùng Patagonia. Nơi khởi nguồn của những truyền thuyết với vẻ đẹp tưởng chừng chỉ có trong những câu chuyện cổ tích. Nơi tận cùng của trái đất này có hầu như mọi thứ mà không nơi nào trên hành tinh này có được, từ thiên nhiên, con người, văn hóa…chạy qua những ngọn núi lửa hung vĩ, phủ đầy tuyết trắng, giữa thiên nhiên bao la chúng ta bỗng có cảm giác mẹ thiên nhiên thật lớn và con người trở nên bé nhỏ vô cùng. Patagonia cũng ẩn chứa vẻ đẹp lãng mạn mà không nơi nào có được khi mùa thu thay lá, những điều bí ẩn không có lời giải thích như chính những câu chuyện huyền thoại. Đó là núi El Chaltén, thác nước Santa Ana và sông bang Perito Moreno.</p>
                            <p>Một điều đặc biệt ở đây là mặc dù vẻ đẹp không phải nơi nào cũng có nhưng vùng đất này còn thực sự hoang sơ, vắng vẻ và nó chưa bị ảnh hưởng bởi các nền văn minh đến mức bạn có thể có cảm giác mình chính là người đầu tiên được sinh ra trên trái đất khi lạc vào nơi đây.</p>
                            <p>Chúng ta sẽ đi qua một số tuyến đường đẹp nhất của Patagonia bao gồm Ruta 40 nổi tiếng và Carreterra Austral, nghỉ tại các trang trại “hacienda” truyền thống và trải nghiệm văn hóa gaucho – cao bồi bán du mục, gắn liền với hình tượng anh hung dân gian, sức mạnh của tự do ở Argentina. Hành trình của chúng ta sẽ đến Ushuaia, còn được gọi là “Nơi tận cùng thế giới”. Ushuaia là thành phố cực nam của hành tinh, từ lâu đã là đỉnh cao tuyệt đối của trong các điểm đến của các biker.</p>
                            <p>Trên đường đi, chúng ta sẽ đi ngoằn ngoèo giữa Chile và Argentina, băng qua cảnh quan Patagonia kỳ thú, băng qua Công viên quốc gia Torres del Paine, ngắm các hang động đá cẩm thạch tự nhiên, sông băng Perito Moreno và thưởng thức món bít tết Argentina nổi tiếng.</p>
                        </div>

                        <div class="options">
                            <h2>Tour trọn gói bao gồm</h2>
                            <div class="option_grid">
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Vé máy bay
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Bữa ăn
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    GPS tracking
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Visa
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Xe moto đến 650cc
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Khách sạn 4-5*
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Hướng dẫn viên
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Bảo hiểm du lịch
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.21228 0.333252C2.07009 0.333252 0.333496 2.06984 0.333496 4.21204V17.7878C0.333496 19.93 2.07009 21.6666 4.21228 21.6666H17.788C19.9302 21.6666 21.6668 19.93 21.6668 17.7878V4.21204C21.6668 2.06984 19.9302 0.333252 17.788 0.333252H4.21228ZM17.788 2.27265H4.21228C3.14119 2.27265 2.27289 3.14094 2.27289 4.21204V17.7878C2.27289 18.8589 3.14119 19.7272 4.21228 19.7272H17.788C18.8592 19.7272 19.7274 18.8589 19.7274 17.7878V4.21204C19.7274 3.14094 18.8592 2.27265 17.788 2.27265ZM5.86765 10.3831C5.48896 10.7618 5.48896 11.3758 5.86764 11.7544L8.58891 14.4758C8.97943 14.8663 9.61261 14.8663 10.0031 14.4758L15.4672 9.01177C15.8459 8.63308 15.8459 8.01911 15.4672 7.64042C15.0885 7.26172 14.4745 7.26172 14.0958 7.64041L10.0031 11.7331C9.61261 12.1236 8.97943 12.1236 8.58891 11.7331L7.23901 10.3831C6.86032 10.0044 6.24634 10.0044 5.86765 10.3831Z" fill="#18C005"/>
                                    </svg>
                                    Đồ sơ cứu y tế
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price_date">
                        <h3>$9999</h3>
                        <form>
                            <div class="box_form_parent">
                                <div class="box_form d-flex align-items-center">
                                    <div class="form-group">
                                        <label for="startDate">Ngày bắt đầu</label>
                                        <input type="text" class="form-control" id="startDate" value="2024-12-15">
                                    </div>
                                    <div class="form-group">
                                        <label for="endDate">Ngày bắt đầu</label>
                                        <input type="text" class="form-control" id="endDate" value="2025-01-05">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="numPeople">Số lượng người</label>
                                    <select class="form-control" id="numPeople">
                                        <option>1 người</option>
                                        <option>2 người</option>
                                        <option>3 người</option>
                                    </select>
                                </div>
                            </div>
                            <div class="box_form_parent">
                                <div class="form-group">
                                    <label>Gói nâng cấp</label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="upgrade1">
                                            Xe KTM 890 Adventure R: $2,391
                                        </label>
                                        <div>
                                            <input class="form-check-input" type="radio" name="upgrade" id="upgrade1" value="xeKTM" checked>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Gói nâng cấp</label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="upgrade2">
                                            Phòng riêng: $1,217
                                        </label>
                                        <div>
                                            <input class="form-check-input" type="radio" name="upgrade" id="upgrade2" value="phongRieng">   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box_form_parent">
                                <div class="form-group">
                                    <label for="fullName">Họ tên</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <button type="submit" class="btn-FF8A15 btn-block">Đặt tour ngay</button>
                        </form>
                    </div>
                </div>
           </div>

            <div class="feedback_section">
                <h2 class="text-center">Feedback của khách hàng</h2>
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
                </div>
                <button class="see_more_review">Hiển thị 23 đánh giá</button>
            </div>

            <div class="location text-center">
                <h2>Nơi bạn sẽ đến</h2>
                <p>Chile</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26739996.079141743!2d-109.43910868725624!3d-35.10272347607433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5410425af2f%3A0x505e1131102b91d!2sChile!5e0!3m2!1svi!2s!4v1743316172533!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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