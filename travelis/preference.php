<?php
session_start();
// if(isset($_SESSION["userid"]) == ""){

//     header("Location: login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>トップページ</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/formdesign.css">
  
    <!-- Custom CSS -->

    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php include (dirname(__FILE__).'/navbar.php'); ?>
    <!-- Page Content -->
    <div class="container2">
        <div class="wrapper">
          <ul class="steps">
            <li class="is-active">Step 1</li>
            <li>Step 2</li>
            <li>Step 3</li>
          </ul>
          <form class="form-wrapper" method="post" action="select.php">
            <fieldset class="section is-active">
              <h3>Your Details</h3>
              <input type="text" name="name" id="name" placeholder="Name">
              <input type="text" name="email" id="email" placeholder="Email">
              <h3>Travel Destination</h3>
              <!-- <input type="text" name="destination"> -->
            <!-- サーチボックス -->
                <div id="search-box">
                    <!-- <div id="container">
                    </div> -->
                    <div type="text" id="autocomp">
                    </div>
                    <script id="simpleTemplate" type="text/ractive">
                      <tp-autocomplete query="{{query}}" class="my-input"
                        value="{{value}}" placeholder="Pick city" name="destination"></tp-autocomplete>
                      <!-- <pre>{{JSON.stringify(value, null, 2)}}</pre> -->
                    </script>
                    <script src="http://cdn.ractivejs.org/latest/ractive.js"></script>
                    <script src="autocomplete-master/dist/teleport-autocomplete-ractive.js"></script>
                    <script>
                      window.view = new Ractive({
                        el: '#autocomp',
                        template: '#simpleTemplate',

                        components: {
                          'tp-autocomplete': TeleportAutocomplete,
                        },
                      });
                    </script>
                </div>
            <!-- /サーチボックス -->
                <h3>The Address You Stay</h3>
                <input type="text" name="address">
              <h3>Schedule</h3>
              <input type="date" name="arrival">
              <h4>To</h4>
              <input type="date" name="departure">
              <div class="button">Next</div>
            </fieldset>
            <fieldset class="section">
              <h3>Your Purpose to stay</h3>
              <div class="row cf">
                <div class="four col">
                  <input type="radio" name="r1" id="r1" checked value="Leisure">
                  <label for="r1">
                    <h4>Leisure</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="r1" id="r2" value="business"><label for="r2">
                    <h4>Business</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="r1" id="r3"><label for="r3">
                    <h4>Both</h4>
                  </label>
                </div>
              </div>
              <div class="button">Next</div>
            </fieldset>
            <!-- <fieldset class="section">
              <h3>Choose a Password</h3>
              <input type="password" name="password" id="password" placeholder="Password">
              <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
              <input class="submit button" type="submit" value="Sign Up">
            </fieldset> -->
            <fieldset class="section">
              <h3>Your Clothes Size</h3>
              <div class="row cf">
                <!-- <div class="four col">
                  <input type="radio" name="s1" id="s0" value="xs">
                  <label for="s0">
                    <h4>XS</h4>
                  </label>
                </div> -->
                <div class="four col">
                  <input type="radio" name="s1" id="s1" checked value="s">
                  <label for="s1">
                    <h4>S</h4>
                  </label>
                  <input type="radio" name="s1" id="s2" value="m">
                  <label for="s2">
                    <h4>M</h4>
                  </label>
                </div>
                <div class="four col">
                  
                </div>
                <div class="four col">
                  <input type="radio" name="s1" id="s3" value="l">
                  <label for="s3">
                    <h4>L</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="s1" id="s4" value="xl">
                  <label for="s4">
                    <h4>XL</h4>
                  </label>
                </div>
                <!-- <div class="four col">
                  <input type="radio" name="s1" id="s5" value="xxl">
                  <label for="s5">
                    <h4>XXL</h4>
                  </label>
                </div> -->
              </div>

              <h3>Preference of Clothes Type</h3>
              <div class="row cf">
                <div class="four col">
                  <input type="radio" name="p1" id="p3" value="new">
                  <label for="p3">
                    <h4>New<br>(Just like you bought)</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="p1" id="p4" value="used" checked>
                  <label for="p4">
                    <h4>Used<br>(Eco friendly, not expensive,and clean)</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="p1" id="p5" value="either">
                  <label for="p5">
                    <h4>Either Way<br>(we will customize based on stock and your preference)</h4>
                  </label>
                </div>
              </div>

              <!-- <div class="submit">Find Your Right Fit!</div> -->
              <input type="submit" value="Find Your Right Fit!" id="submit_button">
            </fieldset>
           <!--  <fieldset class="section">
              <h3>Account Created!</h3>
              <p>Your account has now been created.</p>
              <div class="button">Reset Form</div>
            </fieldset> -->
          </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>