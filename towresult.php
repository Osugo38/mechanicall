
<?php
require('db.php');
include("auth.php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>Mechanics</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/admin.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Neucha|Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                    <table class="table table-bordered w-auto">
                        <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>Company Name</strong></th>
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
                            <th><strong>Tel.No</strong></th>
                            <th><strong>Photo</strong></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        require('db.php');
                        if(isset($_GET['search']))
                        {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM tow_truck WHERE CONCAT(companyname,region,phone) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $items)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $items['id']; ?></td>
                                        <td><?= $items['companyname']; ?></td>
                                        <td><?= $items['region']; ?></td>
                                        <td><?= $items['phone']; ?></td>
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