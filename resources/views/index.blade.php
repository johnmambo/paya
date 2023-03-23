<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Paya </title>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-p-square-fill" viewBox="0 0 16 16">
                    <path d="M8.27 8.074c.893 0 1.419-.545 1.419-1.488s-.526-1.482-1.42-1.482H6.778v2.97H8.27Z" />
                    <path
                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm3.5 4.002h2.962C10.045 4.002 11 5.104 11 6.586c0 1.494-.967 2.578-2.55 2.578H6.784V12H5.5V4.002Z" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h2>
                            <a class="nav-link active" style="text-color:rgb(197, 99, 99)" aria-current="page"
                                href="#">Paya</a>
                        </h2>
                    </li>
                </ul>
                <form class="d-flex">

                    <button class="btn btn-sm btn-brown" type="btn">login</button>
                </form>
            </div>
        </div>
    </nav>
</head>

<body>
    <section class="container-fluid pb-4 bg-light">
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 pt-5">
                    <h1>Better mobile banking for everyday needs</h1>
                    <p>Manage and save money in an easy-to-use mobile banking app. Make payments and borrow money with a
                        trusted financial institution.</p><a class="btn  mt-2"
                        style="background-color: #d96354;
                        border-color: #d96354;
                        color: #fff"
                        href="/">Get Started</a>
                </div>
                <div class="col-md-6">
                    <div class="img-wrapper mt-3"><img src="{{ asset('assets/spaces.png') }}" width="90"
                            height="40" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent;width:100%;height:auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                        </svg>
                    </div>
                    <div class="content">
                        <h6>Easy access</h6>
                        <p>Get easy access to a real bank and manage all your apps from your mobile device.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            fill="currentColor" class="bi bi-infinity" viewBox="0 0 16 16">
                            <path
                                d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015L8 6.978Zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916L8.656 7.75Z" />
                        </svg>
                    </div>
                    <div class="content">
                        <h6>Trustful</h6>
                        <p>Feeel safe knowing you money is with a trusted financial institution regulated with the
                            Central Bank of Kenya.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
                        </svg>
                    </div>
                    <div class="content">
                        <h6>No fees</h6>
                        <p>Pay zero fees for using your bank accounts to make payments.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                    </div>
                    <div class="content">
                        <h6>Join in minutes</h6>
                        <p>Create an account and grow your funds in less than 2 minutes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-12">
                    <h3>Paya Checking Account</h3>
                    <p>Open an account in minutes. Use it for everyday purchases without transfer fees.</p>
                </div>
                <div class="col-md-4">
                    <div class="card"
                        style="border: black; border-top: 4px solid #efb669; box-shadow: 0 0 0 1px rgba(0,0,0,.05)">
                        <div class="card-body">
                            <h5 class="card-title">Paya Checking Account</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path
                                    d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                            </svg>
                            <p>Use your checking account to make everyday payments, and save money on transfer fees.
                            </p>
                            <h6 class="text-muted">Access</h6>
                            <h5>Mobile bank services</h5>
                            <h6 class="text-muted">Fees</h6>
                            <h5>$0</h5><a class="btn btn-primary bg-brown"
                                style="background-color: #d96354;
                                border-color: #d96354;
                                color: #fff"
                                href="/">Open Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark">
        <div class="container-fluid  m-4">
            <div class="row d-flex">
                <div class="col-md-6">
                    <ul class="d-flex" style="list-style: none; text-color: brown; text-underline: none; !important">
                        <li class="m-2"><a href="#">Contact us</a></li>
                        <li class="m-2"><a href="#">Privacy Policy</a></li>
                        <li class="m-2"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-12 text-center">
                    <p>©
                        2023
                        <a class="text-white" href="#">Paya Ventures Limited.</a> All Rights
                        Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
