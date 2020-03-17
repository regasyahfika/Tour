<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-size: 14px;
        }

        .breadcrumb {
            background-color: #f8f9fa !important;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: ">";
        }

        .card {
            border-radius: 0.50rem;
        }

        .card>.card-header {
            border-top-left-radius: 0.50rem;
            border-top-right-radius: 0.50rem;
        }

        img {
            margin: 1rem;
            border-radius: 0.50rem;
        }

        .fa.fa-check-circle {
            color: #d2a92e;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="color: black; text-decoration: none">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tour Package</li>
                    </ol>
                </nav>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <h6 class="card-header bg-white">Filter
                        <span type="reset" onclick="uncheck()" class="float-right"
                            style="font-size: 14px;font-weight: 200;">Reset</span>
                    </h6>
                    <div class="card-body">
                        <form action="" class="all-form" id="duration">
                            <h6 class="card-title">Duration
                                <span type="reset" id="reset-duration" class="float-right"
                                    style="font-size: 14px;font-weight: 200;">Clear</span>
                            </h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="day1">
                                <label class="form-check-label" for="day1">0 to 5 days</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="day2">
                                <label class="form-check-label" for="day2">5 to 12 days</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="day3">
                                <label class="form-check-label" for="day3">12 to 21 days</label>
                            </div>
                        </form>
                    </div>
                    <hr class="mb-1">
                    <div class="card-body">
                        <form action="" class="all-form" id="price">
                            <h6 class="card-title">Price
                                <span type="reset" class="float-right"
                                    style="font-size: 14px;font-weight: 200;">Clear</span>
                            </h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="price1">
                                <label class="form-check-label" for="price1">Rp. 1.000.000 - Rp.
                                    10.000.000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="price2">
                                <label class="form-check-label" for="price2">Rp. 2.000.000 - Rp.
                                    10.000.000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="price3">
                                <label class="form-check-label" for="price3">Rp. 3.000.000 - Rp.
                                    10.000.000</label>
                            </div>
                        </form>
                    </div>
                    <hr class="mb-1">
                    <div class="card-body">
                        <form action="" class="all-form" id="category">
                            <h6 class="card-title">Category
                                <span class="float-right" style="font-size: 14px;font-weight: 200;">Clear</span>
                            </h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category1">
                                <label class="form-check-label" for="category1">Open Trip</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category2">
                                <label class="form-check-label" for="category2">Super Sale</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category3">
                                <label class="form-check-label" for="category3">Viesta</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category4">
                                <label class="form-check-label" for="category4">Experience</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="category5">
                                <label class="form-check-label" for="category5">Premium</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-9">
                <span>List of tour Packages</span>
                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sort By</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Lowest Price</option>
                        <option value="1">High Price</option>
                        <option value="2">Midle Price</option>
                    </select>
                </form>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <img width="250" height="180" alt="" src="http://placehold.it/270x160">
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">7D Jepang Sakura</h6>
                                <p class="card-title">
                                    <small class="text-muted text-red">7 days & 5 night</small>
                                </p>
                                <p>
                                    <small class="text-muted text-danger">include in package</small><br>
                                    <i class="fa fa-check-circle mr-1"> <span class="text-dark font-weight-bold ml-1">
                                            Flight</span></i>
                                    <i class="fa fa-check-circle mr-1"> <span class="text-dark font-weight-bold ml-1">
                                            Hotel</span></i>
                                </p>

                                <small class="text-muted text-red">Starting from</small>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h3 class="text-danger">Rp. 5.000.000</h3>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 3rem;">
                                        <button class="btn btn-danger btn-sm">View Package</button>
                                        <button type="button" id="test">Test</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function uncheck() {
        // document.getElementById('duration', 'price', 'category').reset();
        $(document).find('.all-form').trigger('reset');
    }
    // $(document).on('click', '#reset-duration', function(){
    //     $('#duration').prop('checked', false);
    // });
    // getApi();

    let token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHBpcmVkQXQiOjE1ODQ0MTExMjYsImV4cGlyZWQiOiIyMDIwLTAzLTE3VDAyOjEyOjA2LjIxMDYyODUwMVoiLCJhZ2VudElEIjo1LCJhZ2VudENvZGUiOiJ0ZXN0IiwiYWdlbnROYW1lIjoiVEVTVCIsImFnZW50UGhvbmVOdW1iZXIiOiI2MjIxMjM0NTY3OCIsImFnZW50RW1haWwiOiJ0ZXN0QGFudGF2YXlhLmNvbSIsImRpc3RyaWJ1dGlvblR5cGVJRCI6Miwicm9sZXMiOlsiL3RvdXIvc2VyaWVzL2F2YWlsYWJpbGl0eSIsIi90b3VyL3Nlcmllcy9jYXRlZ29yeSIsIi90b3VyL21hc3Rlci9zZWFzb24iLCIvdG91ci9tYXN0ZXIvY291bnRyeSIsIi90b3VyL21hc3Rlci9yZWdpb24iLCIvdG91ci9tYXN0ZXIvdHlwZSIsIi90b3VyL21hc3Rlci9jYXRlZ29yeSJdfQ.a-1MYLUr343UBrlUKuXnIsB7spZFQQsvbNNaAEm-VQU';
    let proxyurl = "https://cors-anywhere.herokuapp.com/";
    let url = 'https://sandbox.antavaya.com/tour/series/availability';

    $.ajax({
        url: proxyurl+url,
        headers: {
            'Authorization': `Bearer ${token}`,
        },
        method: 'POST',
        data: {},
        success: function(data){
        console.log('succes: '+data);
        }
    });
    $(document).on('click', '#test', function(){
    })




</script>


</html>
