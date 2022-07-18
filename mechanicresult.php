<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mechanics solution</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h3>Help us understand your problem</h3>
                            <small><em>Kindly apply the necessary filters on the form to suite your needs</em></small>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>First Name</strong></th>
                            <th><strong>Last Name</strong></th>
                            <th><strong>Phone</strong></th>
                            <th><strong>

                                    <form action="" method="GET" autocomplete="off">
                                        <div class="input-group">
                                            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon"
                                                    name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
                                                <option value="" disabled selected>Choose your Location...</option>
                                                <option id="ngong" value="Ngong">Ngong Road</option>
                                                <option id="thika-road" value="Thika Road">Thika Road</option>
                                                <option id="kiambu-road" value="Kiambu Road">Kiambu Road</option>
                                                <option id="westland" value="Westlands">Westlands</option>
                                                <option id="cbd" value="NRB Cbd">Nairobi CBD</option>
                                                <option id="eastlands" value="Eastlands">Eastlands</option>
                                                <option id="jogoo" value="Jogoo Road">Jogoo Road</option>
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="submit">Filter</button>
                                            </div>
                                        </div>
                                        </form>


                                </strong></th>

                            <th><strong>

                                    <form action="" method="GET" autocomplete="off">
                                        <div class="input-group">
                                            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon"
                                                    name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
                                            <option value="" disabled selected>Choose the car you deal in...</option>
                                            <option id="ford" value="Ford">Ford</option>
                                            <option id="toyota" value="Toyota">Toyota</option>
                                            <option id="nissan" value="Nissan">Nissan</option>
                                            <option id="subaru" value="Subaru">Subaru</option>
                                            <option id="mazda" value="Mazda">Mazda</option>
                                            <option id="volvo" value="Volvo">Volvo</option>
                                            <option id="MercedesBenz" value="Mercedes Benz">Mercedes Benz</option>
                                            <option id="rover" value="Land Rover">Land Rover</option>
                                            <option id="jeep" value="Jeep">Jeep</option>
                                            <option id="bmw" value="BMW">BMW</option>
                                            <option id="hyundai" value="Hyundai">Hyundai</option>
                                        </select>
                                        <div class="">
                                            <button class="btn btn-outline-primary" type="submit">Filter</button>
                                        </div>
                                    </div>
                                    </form>

                                </strong></th>

                            <th><strong>

                                    <form action="" method="GET" autocomplete="off">
                                        <div class="input-group">
                                            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon"
                                                    name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
                                                <option selected>part causing breakdown...</option>
                                                <option id="Engine" value="Engine">Engine</option>
                                                <option id="Transmission" value="Transmission">Transmission</option>
                                                <option id="Brakes" value="Brakes">Brakes</option>
                                                <option id="Tyre" value="Tyre">Tyre</option>
                                            </select>
                                            <div class="">
                                                <button class="btn btn-outline-primary" type="submit">Filter</button>
                                            </div>
                                        </div>
                                    </form>

                                </strong></th>
                            <th><strong>Photo</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        require('db.php');
                        if(isset($_GET['search']))
                        {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM mechanics WHERE CONCAT(region,carmodel,carpart) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $items)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $items['id']; ?></td>
                                        <td><?= $items['firstname']; ?></td>
                                        <td><?= $items['lastname']; ?></td>
                                        <td><?= $items['phone']; ?></td>
                                        <td><?= $items['region']; ?></td>
                                        <td><?= $items['carmodel']; ?></td>
                                        <td><?= $items['carpart']; ?></td>
                                        <td><?= $items['photo']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>