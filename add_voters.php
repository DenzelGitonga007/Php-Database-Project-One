<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Voter</title>
<!--    Link the bootstrap-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</head>
<body>
    <h1 class="text-info text-center">Add Voters Here</h1> <!-- Pre-defined styles from bootstrap in the class names -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="add_voters_handler.php">
                <input class="form-control" name="v_name" placeholder="Voter name" type="text"> <br><br>
                <input class="form-control" name="v_id_number" placeholder="Voter ID number" type="number"> <br><br>
                <select class="form-control" name="v_county" id=""> <!-- Voter County --> <!-- Form control sets it center and appealing to the eyes -->
                    <!-- Select creates the dropdown -->
                    <option value="">Select County</option>
                    <option value="Bungoma">Bungoma</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kisii">Nairobi</option>
                    <option value="Nyamira">Nyamira</option>
                </select> <br><br>
                <select class="form-control" name="v_gender" id=""> <!-- Voter gender -->
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select> <br><br>
                <input class="form-control" name="v_phone_number" placeholder="Phone Number" type="tel"> <br><br>
                <input class="btn btn-outline-info btn-block" name="btn add" value="Add" type="submit">
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>
