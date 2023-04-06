<?Php 
$File = "convertjson.json";// File Json Yang Akan Dibaca
$DataAPI = File_get_contents($File);// Mendapatkan File Json
$data = file_get_contents($File); // mengambil data dari API
$response = json_decode($data, true); // mengubah data JSON menjadi array PHP

// mengambil data HotelResult
$hotelResults = $response['Envelope']['Body']['HotelSearchResponse']['HotelResultList']['HotelResult'];
 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Api</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/46630ae913.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="navbar ">
            <ul>
                <li><a href="#" class="a_parent mt-2">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span class="text">Area</span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-caret-down"></i>
                            </span>
                        </div>
                    </a>
                    <div class="dd_menu">
                        <ul>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <span class="text">Bali</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <span class="text">Bandung</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <span class="text">Surabaya</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" class="a_parent mt-2">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span class="text">Bintang Hotel</span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-caret-down"></i>
                            </span>
                        </div>
                    </a>
                    <div class="dd_menu">
                        <ul>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="text">⭐</span>

                                </a>
                            </li>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="text">⭐⭐</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="text">⭐⭐⭐</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="text">⭐⭐⭐⭐</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dd_menu_a">
                                    <span class="text">⭐⭐⭐⭐⭐</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                </li>
                <li><a href="#" class="a_parent mt-2">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-solid fa-list"></i>
                            </span>
                            <span class="text">Filter Lainnya</span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-caret-down"></i>
                            </span>
                        </div>
                    </a></li>
            </ul>
        </div>
    </div>

    <section class="main-content">
        <div class="container">
            <h6 class="text-uppercase mt-3">Menampilkan 2000+ akomodasi terbaik dengan harga terbaik</h6>
            <br>
            <br>
            <div class="row">
                <?php foreach ($hotelResults as $row) {
					?>
                <div class="col-sm-9 col-md-9 col-lg-12 mb-4">
                    <div class="hotel-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                        <div class="hotel-card_images">
                            <div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item h-100 active">
                                        <img src="assets/img/hotel1.jpg" class="d-block w-100" alt="Hotel Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotel-card_info p-4">
                            <div class="d-flex align-items-center mb-2">
                                <h5 class="mb-0 mr-2">Vasa Hotel Surabaya</h5>
                                <div>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <a href="#!" class="text-dark ml-auto"><i class="far fa-heart fa-lg"></i></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="hotel-card_details">
                                    <div class="text-muted mb-2"><i class="fas fa-map-marker-alt"></i> Surabaya,
                                        Sukamanunggal</div>
                                    <div class="mb-2"><span class="badge badge-primary">4.5</span> <a href="#!"
                                            class="text-muted">Good</a></div>
                                    <div class="amnities d-flex mb-3">
                                        <img class="mr-2" src="assets/img/icons/desk-bell.svg" data-toggle="tooltip"
                                            data-placement="top" title="Desk bell" alt="Desk bell">
                                        <img class="mr-2" src="assets/img/icons/single-bed.svg" data-toggle="tooltip"
                                            data-placement="top" title="Single Bed" alt="Single Bed">
                                        <img class="mr-2" src="assets/img/icons/towels.svg" data-toggle="tooltip"
                                            data-placement="top" title="Towels" alt="Towels">
                                        <img class="mr-2" src="assets/img/icons/wifi.svg" data-toggle="tooltip"
                                            data-placement="top" title="Wifi" alt="Wifi">
                                    </div>
                                    <ul class="hotel-checklist pl-0 mb-0">
                                        <li><i class="fa fa-check text-success"></i> Lorem ipsum dolor</li>
                                        <li><i class="fa fa-check text-success"></i> Cras lectus purus, </li>
                                        <li><i class="fa fa-check text-success"></i> ornare eget congue</li>
                                    </ul>
                                </div>
                                <div class="hotel-card_pricing text-center">
                                    <h3>Rp 499.000</h3>
                                    <div class="d-flex">
                                        <h6 class="text-striked text-muted mr-2">Rp.700.000</h6>
                                        <h6 class="text-success">32% off</h6>
                                    </div>
                                    <button class="btn btn-primary">Check Rooms</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>

        </div>

        </div>

    </section>

    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>

</body>


<script src="assets/js/main.js"></script>

</html>