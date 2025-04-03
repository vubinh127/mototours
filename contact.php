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
        <div class="contact_page">
            <div class="container">
                <h2>Liên hệ</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <label for="name">Họ và tên*</label>
                                <input type="text" class="form-control" id="name"  placeholder="Nhập họ và tên">
                            </div>
                            <div class="form-group">
                                <label for="email">Số điện thoại*</label>
                                <input type="text" class="form-control" id="email" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <label for="message">Lời nhắn*</label>
                                <textarea class="form-control" name="" id="message"></textarea>
                            </div>
                            <button class="btn-FF8A15">Gửi tin nhắn</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="location text-center mt-5 mt-lg-0">
                            <div class="address">
                                <a href="">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/location.svg" alt="">
                                        9th floor, Sport Hotel 15, Le Van Thiem St, Hai Ba Trung Dis, Hanoi
                                    </div>
                                </a>
                                <a href="tel:84979900800">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/phone.svg" alt="">
                                        +84979900800
                                    </div>
                                </a>
                                <a href="mailto:info@MotoToursAsia.com">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/mail.svg" alt="">
                                        info@MotoToursAsia.com
                                    </div>
                                </a>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26739996.079141743!2d-109.43910868725624!3d-35.10272347607433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5410425af2f%3A0x505e1131102b91d!2sChile!5e0!3m2!1svi!2s!4v1743316172533!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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