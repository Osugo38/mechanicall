<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $companyname =$_REQUEST['companyname'];
    $region = $_REQUEST['region'];
    $phone = $_REQUEST['phone'];
    if(isset($_POST["submit"])){
        $name = $_POST["companyname"];
        if($_FILES["image"]["error"] == 4){
            echo
            "<script> alert('Image Does Not Exist'); </script>"
            ;
        }
        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if ( !in_array($imageExtension, $validImageExtension) ){
                echo
                "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
            }
            else if($fileSize > 1000000){
                echo
                "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'images/' . $newImageName);
                echo
                "
      <script>
        alert('Successfully Added');
        document.location.href = 'pet.php';
      </script>
      ";
            }
        }
    }

    $ins_query="insert into petroleum_services
    (`trn_date`,`companyname`,`region`,`phone`,`image`)values
    ('$trn_date','$companyname','$region','$phone','$newImageName')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
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
<div id="mwanzo3">
    <div class="container">
        <h3>Petrol Services Section</h3>
        <div class="pet" >
            <form action="" method="POST" class="needs-validation" autocomplete="off" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="new" value="1" />
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Company Name</label>
                        <input type="text" name="companyname" class="form-control" id="validationCustom01" placeholder="First name"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please enter your Company name.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Region</label>
                        <select name="region" class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                            <option value="" disabled selected>Choose your region...</option>
                            <option id="ngong" value="Ngong">Ngong Road</option>
                            <option id="thika-road" value="Thika Road">Thika Road</option>
                            <option id="kiambu-road" value="Kiambu Road">Kiambu Road</option>
                            <option id="westland" value="Westlands">Westlands</option>
                            <option id="cbd" value="NRB Cbd">Nairobi CBD</option>
                            <option id="eastlands" value="Eastlands">Eastlands</option>
                            <option id="jogoo" value="Jogoo Road">Jogoo Road</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please enter a valid region.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Phone Number</label>
                        <div class="input-group">

                            <input type="tel" name="phone" class="form-control" id="validationCustomUsername" placeholder="Phone number" aria-describedby="inputGroupPrepend" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter a valid phone number.
                            </div>
                        </div>
                    </div>
                </div>
                <label class="form-label" for="image">Image</label>
                <input type="file" class="form-control" name="image" id = "image" accept=".jpg, .jpeg, .png" value="" /><br>
                <p id="butt"><input class="btn btn-primary" name="submit" type="submit" value="Submit" /></p>

            </form>
        </div>


    </div>
    <h3>All Gas stations</h3>

    <div class="form">
        <table width="100%"  border="1" style="border-collapse:collapse;"class="table table-striped" >
            <thead>
            <tr>
                <th><strong>S.No</strong></th>
                <th><strong>Company Name</strong></th>
                <th><strong>Region </strong></th>
                <th><strong>Phone </strong></th>
                <th><strong>Photo </strong></th>



            </tr>
            </thead>
            <tbody>
            <?php
            $count=1;
            $sel_query="Select * from petroleum_services ORDER BY id desc;";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                <tr class="table table-striped"><td align="center"><?php echo $count; ?></td>
                    <td align="center"><?php echo $row["companyname"]; ?></td>
                    <td align="center"><?php echo $row["region"]; ?></td>
                    <td align="center"><?php echo $row["phone"]; ?></td>
                    <td> <img src="images/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
                </tr>
                <?php $count++; } ?>
            </tbody>
        </table>
    </div>


</div>


</body>
</html>