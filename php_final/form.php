<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Page</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/formdesign.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <!-- .search-section -->
    <div class="container2 search">
        <div class="wrapper" style="margin: 0;">
          <ul class="steps">
            <li class="is-active">Step 1</li>
            <li>Step 2</li>
            <li>Step 3</li>
          </ul>
          <form class="form-wrapper" method="post" action="search.php">
            <fieldset class="section is-active">
              <h3>Your Details</h3>
              <input type="text" name="name" id="name" placeholder="Name" required>
              <input type="text" name="email" id="email" placeholder="Email" required>
              <h3>The Address You Stay</h3>
              <input type="text" name="address" required>
              <h3>Schedule</h3>
              <input type="date" name="arrival" required>
              <h4>To</h4>
              <input type="date" name="departure" required>
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
                <!-- <div class="four col">
                  <input type="radio" name="r1" id="r3"><label for="r3">
                    <h4>Both</h4>
                  </label>
                </div> -->
              </div>
              <div class="button">Next</div>
            </fieldset>
            <fieldset class="section">
              <h3>Cloth Gender</h3>
              <div class="row cf">
                <div class="four col">
                  <input type="radio" name="g1" id="g1" value="mens" />
                  <label for="g1">
                    <h4>Men's</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="g1" id="g2" value="ladys" checked/>
                  <label for="g2">
                    <h4>Ledy's</h4>
                  </label>
                </div>
                <!-- <div class="four col">
                  <input type="radio" name="g1" id="g2" value="kids" />
                  <label for="g2">
                    <h4>kids</h4>
                  </label>
                </div> -->
              </div>
              <h3>Your Clothes Size</h3>
              <div class="row cf">
                <!-- <div class="four col">
                  <input type="radio" name="s1" id="s0" value="xs">
                  <label for="s0">
                    <h4>XS</h4>
                  </label>
                </div> -->
                <div class="four col">
                  <input type="radio" name="s1" id="s1" value="s"/>
                  <label for="s1">
                    <h4>S</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="s1" id="s2" value="m" checked/>
                  <label for="s2">
                    <h4>M</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="s1" id="s3" value="l" />
                  <label for="s3">
                    <h4>L</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="s1" id="s4" value="xl" />
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
                  <input type="radio" name="p1" id="p4" value="used">
                  <label for="p4">
                    <h4>Used<br>(Eco, not expensive, clean)</h4>
                  </label>
                </div>
                <div class="four col">
                  <input type="radio" name="p1" id="p5" value="either" checked>
                  <label for="p5">
                    <h4>Either Way<br>(custmized based on the our stock)</h4>
                  </label>
                </div>
              </div>
              <input id="search-button" type="submit" value="Find Your Right Fit!" name="submit">
            </fieldset>
          </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.search-section -->
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>