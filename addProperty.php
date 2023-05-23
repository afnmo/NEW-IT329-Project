<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userID']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'Homeowner') 
{ 

header('Location: homepage.html');
exit(); 

}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Add Property </title>
        <!-- -- -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"> 
        <!-- -- -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="addProperty.css">
        <link rel="stylesheet" href="base.css"> 
        <script src="https://kit.fontawesome.com/5ccf46ed5e.js" crossorigin="anonymous"></script>
    </head>


    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="homepage.html"><img id="logo" src="images/Nuzl logo.png" alt="Nuzl logo" width="150"
                                                                  height="90" class="d-inline-block align-text-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="homepage.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#prop">Properties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Account">Account</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link link-danger" href="logout.php">Log Out</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav> 

        <h1 id="addText"> Add A Property </h1>


        <form class="form_Add" action="add_Property.php" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="property_id" value="<?php echo $property["id"]; ?>">
         <input type="hidden" name="category_id" value="<?php echo $property['property_category_id']; ?>">
            <fieldset>
                <legend> Property Details </legend>
                <i class="fa fa-home"></i> <label for="name"> Property Name: </label><br>
                <input type="text" id="name" name="name" required><br>

                <p> <i class="fa fa-home"></i> Category:

                    <input type="radio" name="category" value="apartment" required> Apartment
                    <input type="radio" name="category" value="villa"> Villa
                    <input type="radio" name="category" value="duplex"> Duplex 
                </p>



                <i class="fa fa-home"></i> <label for="location"> Location: </label><br>
                <input type="text" id="location" name="location" required><br>

                <i class="fa fa-home"></i> <label for="Rooms"> Number of rooms:</label><br>
                <input type="number" id="Rooms" name="Rooms" value="" required><br>

                <i class="fa fa-home"></i> <label for="rent"> Rent:</label><br>
                <input type="number" id="rent" name="rent" value="" placeholder="Rent per month" required min="50"> <br>


                <i class="fa fa-home"></i> <label for="tenants"> Maximum Number Of Tenants:</label><br>
                <input type="number" id="tenants" name="tenants" value="" required> <br>

                <p><i class="fa fa-home"></i> Description: </p>
                <textarea name="description" rows="5" cols="64" id="description"
                          placeholder="Add a decription of the property" required></textarea>
                <br>

                <p> <i class="fa fa-home"></i> Upload Pictures Of The Property:</P> 
                 <input type="file" id="pic1" name="images[]" accept="image/jpeg, image/png, image/jpg" required multiple>
                <br>
            </fieldset>
            <br>
            <div id="submit">
                <input type="hidden" name="application_id" value="<?php echo $application['id']; ?>">
                <input type="submit" id="addP" class="submit" value="Add">
            </div>




        </form>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <p>&copy;2023 All Rights Reserved</p>
                </div>
            </div>
        </footer> 


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script> 

    </body>