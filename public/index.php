<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/main.min.css">
  <title>Parkside Pool Apartments</title>
  <link href="https://fonts.googleapis.com/css?family=Halant:400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>

<!-- HEADER -->
<div class="jumbotron">
  <div id="transparent-box">
    <div class="container" >
      <div class="row">

        <div class="col">
          <h1 class="text-capitalize">Parkside Pool Apartments</h1>
          <div class="text-uppercase">
            <a href="#section5" class="contact-us" id="seperator">Contact Us</a>
            <a href="#" class="office-hours" data-toggle="modal" data-target="#officeHoursModal">Office Hours</a>
          </div>
          <ul class="list-inline" id="header-links">
            <li class="list-inline-item" id="list-line"><a href="#section1">Apartments & Pricing</a></li>
            <li class="list-inline-item" id="list-line"><a href="#section2">Features</a></li>
            <li class="list-inline-item" id="list-line"><a href="#section3">Photos</a></li>
            <li class="list-inline-item"><a href="#section4">Location</a></li>
          </ul>
        </div>

        <div class="col" id="contact-box">
          <div class="text-right text-nowrap">
            <h5 class="font-italic">Schedule my tour:</h5>
            <br/>
            <div>
              <button class="btn btn-default" id="book-btn"><a href="#section5">BOOK ONLINE</a></button>
            </div>
            <br/>
              <div>(414) 259-9690</div>
            <br/>
              <span class="text-uppercase">315 N 95th St, Milwaukee, WI 53226</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- STICKY NAV -->
<nav class="navbar-nav mr-auto sticky-top" id="sticky-nav">
  <div class="container">
    <div class="row">

      <div class="col">
        <h3 class="text-capitalize">Parkside Pool Apartments</h3>
        <ul class="list-inline">
          <li class="list-inline-item" id="list-line"><a href="#section1">Apartments & Pricing</a></li>
          <li class="list-inline-item" id="list-line"><a href="#section2">Features</a></li>
          <li class="list-inline-item" id="list-line"><a href="#section3">Photos</a></li>
          <li class="list-inline-item"><a href="#section4">Location</a></li>
        </ul>
      </div>

      <div class="col text-right">
        <ul class="list-inline" id="push-up">
          <li class="list-inline-item"><a href="#section5" class="text-uppercase" id="list-line">Contact Us</a></li>
          <li class="list-inline-item"><a href="#" class="text-uppercase" data-toggle="modal" data-target="#officeHoursModal">Office Hours</a></li>
        </ul>
        <div class="text-right text-nowrap" >
          <div id="nav-tour">
            <p class="font-italic" id="nav-schedule">Schedule my tour: </p>
            <button class="btn btn-default" id="book-btn"><a href="#section5">BOOK ONLINE</a></button>
            <br/>
            <div class="font-italic" id="phone">(414) 259-9690</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</nav>

<!-- Office Hours Modal -->
<div class="modal fade" id="officeHoursModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="officeHoursLabel">Office Hours</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <span>Monday - Friday: 8:00am - 7:00pm</span>
          <br/>
          <span>Weekend: Please call for appointment</span>
          <br />
          <span>Phone: (414) 259-9690</span>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- FLOOR PLANS -->
<span class="anchor" id="section1"></span>
<div class="container" id="floor-plans">

  <h2 class="text-center">Floorplans</h2>

<!-- STUDIO CARD -->
  <div class="card-deck">
    <div class="card mx-auto" >
      <h5 class="card-title text-center list-group-item">STUDIO</h5>
      <img class="card-img-top" src="./img/floor-plans/studio.svg" alt="Card image cap">
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">1 Bath // 365 Sq. Ft.</li>
        <li class="list-group-item text-center">$555-$595</li>
      </ul>
      <div class="card-body">
        <a href="#" class="btn btn-primary" id="view" data-toggle="modal" data-target="#studioModal">View</a>
      </div>
    </div>

    <!-- Studio Modal -->
    <div class="modal fade" id="studioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="studioLabel">STUDIO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- CAROUSEL -->
            <div id="studioIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./img/parkside/0br/entry_0381.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/0br/livingRoom_0389.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/0br/livingRoom_0383.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/0br/kitchen_0388.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/0br/bathroom_0386.jpg" alt="Fifth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#studioIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#studioIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- END CAROUSEL -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

<!-- ONE BEDROOM CARD -->
    <div class="card mx-auto" >
      <h5 class="card-title text-center list-group-item">1 BEDROOM</h5>
      <img class="card-img-top" src="./img/floor-plans/one-bedroom.svg" alt="Card image cap">
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">1 Bath // 585 Sq. Ft.</li>
        <li class="list-group-item text-center">$665-$695</li>
      </ul>
      <div class="card-body">
        <a href="#" class="btn btn-primary" id="view" data-toggle="modal" data-target="#oneBedroomModal">View</a>
      </div>
    </div>

    <!-- 1br Modal -->
    <div class="modal fade" id="oneBedroomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="oneBedroomLabel">ONE BEDROOM</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- CAROUSEL -->
            <div id="oneBedroomIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./img/parkside/1br/livingRoom_0391.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/1br/bedroom_0351.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/1br/bedroom_0352.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/1br/closet_0353.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/1br/kitchen_0350.jpg" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/1br/bathroom_0355.jpg" alt="Fifth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#oneBedroomIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#oneBedroomIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- END CAROUSEL -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

<!-- TWO BEDROOM CARD -->
    <div class="card mx-auto" >
      <h5 class="card-title text-center list-group-item">2 BEDROOM</h5>
      <img class="card-img-top" src="./img/floor-plans/two-bedroom.svg" alt="Card image cap">
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">1 Bath // 865 Sq. Ft.</li>
        <li class="list-group-item text-center">$765-$795</li>
      </ul>
      <div class="card-body">
        <a href="#" class="btn btn-primary" id="view" data-toggle="modal"  data-target="#twoBedroomModal">View</a>
      </div>
    </div>

    <!-- TWO BEDROOM Modal -->
    <div class="modal fade" id="twoBedroomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="twoBedroomLabel">TWO BEDROOM</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- CAROUSEL -->
            <div id="twoBedroomIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./img/parkside/2br/livingRoom_0402.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/2br/kitchen_0377.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/2br/bedroom2_0394.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/2br/closet_0396.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/parkside/2br/bathroom_0380.jpg" alt="Fifth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#twoBedroomIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#twoBedroomIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- END CAROUSEL -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <p id="disclaimer">
    Room dimensions, square footage, and features shown on the floor plan drawings are approximate and may vary between individual apartments that have similar layouts. Furniture shown on the floor plan drawings is representative and individual apartments come unfurnished unless specified otherwise. Quoted rent is per month for new move-ins to the community, based on the move-in date selected. Pricing may vary based on lease term. Quoted rent does not include other fees and charges that may be a part of your lease (i.e. utilities, parking, etc.). Please contact the community for details. Prior to signing a lease, quoted rent, specials, availability, and other terms and conditions are subject to change without notice.
  </p>
</div>

<!-- FEATURES AND AMENITIES -->
<span class="anchor" id="section2"></span>
<div class="container-fluid" id="features-amenities">
  <div class="container">

  <div class="features-amenities text-uppercase">

      <h4>Features & Amenities</h4>

      <div class="row">
        <div class="col">
          <h1>Apartment Features</h1>
          <ul>
            <li>&bull; Two laundry rooms on either side of the building</li>
            <li>&bull; Plush wall to wall carpeting</li>
            <li>&bull; Spacious walk-in closets in most units</li>
            <li>&bull; Electric A/C units installed</li>
            <li>&bull; Heat included</li>
            <li>&bull; ENERGY STAR ® appliances</li>
            <li>&bull; Sustainable apartment fixtures and HVAC equipment</li>
            <li>&bull; Disposal</li>
            <li>&bull; Refrigerator</li>
            <li>&bull; Range</li>
          </ul>
        </div>

        <div class="col">
          <h1>Community Amenities</h1>
          <ul>
            <li>&bull; Fitness center with cardio and strength equipment</li>
            <li>&bull; Sparkling swimming pool and sauna</li>
            <li>&bull; Sustainable lighting techniques to reduce energy consumption</li>
            <li>&bull; Short distance to Mayfair Mall, great dining choices, and the AMC movie theater</li>
            <li>&bull; Walking distance to Cannon Park</li>
            <li>&bull; Easy access to I-94, 45, 100, and Bluemound Rd</li>
            <li>&bull; Minutes from Miller Park, Wisconsin State Fair, and the Milwaukee County Zoo</li>
            <li>&bull; Located near public transportation</li>
            <li>&bull; On-site maintenance & management</li>
            <li>&bull; Storage</li>
            <li>&bull; Off-street parking</li>
            <li>&bull; Flexible lease terms</li>
            <li>&bull; Internet and cable ready</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- PHOTO BOXES -->
<span class="anchor" id="section3"></span>
<div id="photo-boxes" class="container-fluid">

  <div class="row">
    <div class="col-sm-6">
      <img src="./img/amenities/pool.jpg" id="box-photo" class="img-responsive" alt="apartment building front" style="width: 100%; height: 100%;"/>
    </div>
    <div class="col-sm-6" id="box-info">
      <h1 id="hop-in">HOP IN!</h1>
      <h2>The Water's Warm!</h2>
      <p>Our indoor swimming pool is heated and specially cared for. Open all year round!</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6 order-md-2 order-xl-2">
      <img src="./img/amenities/fitness-room.jpg" id="box-photo" class="img-responsive" alt="apartment building front" style="width: 100%; height: 100%;"/>
    </div>
    <div class="col-sm-6 order-md-1 order-xl-1" id="box-info">
      <h1 id="healthy">HEALTHY LIFESTYLE</h1>
      <h2>More Than a Fitness Center!</h2>
      <p>Everyone has their own definition of a healthy lifestyle, so we offer a variety of equipment including treadmills, bikes, and machines.</p>
    </div>
  </div>

</div>

<!-- GOOGLE MAP -->
<span class="anchor" id="section4"></span>

<div class="container-fluid" id="mapSection">
  <h1>MAP & NEIGHBORHOOD</h1>
  <div class="map-container">
    <div id="map"></div>
  </div>
</div>

<!-- CONTACT US -->
<span class="anchor" id="section5"></span>
<div id="contact-us">
  <div class="container">

    <div class="row">

      <div class="col-sm-6">

        <?php
        	if (isset($_POST["submit"])) {
        		$name = $_POST['name'];
        		$email = $_POST['email'];
        		$message = $_POST['message'];
        		$human = intval($_POST['human']);
        		$from = 'Demo Contact Form';
        		$to = 'example@domain.com';
        		$subject = 'Message from Contact Demo ';
        		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
        		// Check if name has been entered
        		if (!$_POST['name']) {
        			$errName = 'Please enter your name';
        		}
        		// Check if email has been entered and is valid
        		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        			$errEmail = 'Please enter a valid email address';
        		}
        		//Check if message has been entered
        		if (!$_POST['message']) {
        			$errMessage = 'Please enter your message';
        		}
        		//Check if simple anti-bot test is correct
        		if ($human !== 5) {
        			$errHuman = 'Your anti-spam is incorrect';
        		}
        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        	if (mail ($to, $subject, $body, $from)) {
        		$result='<div class="alert alert-success">Contact form successfully submitted. Thank you, we will get back to you soon!</div>';
        	} else {
        		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        	}
        }
        	}
        ?>

        <form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-6 control-label">Spam Prevention: 2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>
						</div>
					</div>
				</form>

      </div>

      <div class="col-sm-6 text-center">
        <div id="contact-info">
          <div id="info">
            <span>315 N 95th St</span>
            <br/>
            <span>Milwaukee, WI 53226</span>
          </div>
          <div id="info-spacer">
            <span>Phone: (414) 259-9690</span>
          </div>
          <div id="info">
            <span>OFFICE HOURS</span>
            <br/>
            <span>Monday - Friday: 8:00am - 7:00pm</span>
            <br/>
            <span>Weekend: Please call for appointment</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="row">

      <div class="col-sm-6" id="footer-info">
        <ul class="list-inline" id="center-left">
          <li class="list-inline-item">
            <a href="#section1">Apartments & Pricing</a>
          </li>
          <li class="list-inline-item">//</li>
          <li class="list-inline-item">
            <a href="#section2">Features</a>
          </li>
          <li class="list-inline-item">//</li>
          <li class="list-inline-item">
            <a href="#section3">Photos</a>
          </li>
          <li class="list-inline-item">//</li>
          <li class="list-inline-item">
            <a href="#section4">Location</a>
          </li>
        </ul>
        <ul class="list-inline" id="center-left">
          <li class="list-inline-item">
            <span id="ppa-logo">PPA</span>
          </li>
          <li class="list-inline-item">
            <span>© 2018 Parkside Pool Apartments. All Rights Reserved.</span>
          </li>
        </ul>
      </div>

      <div class="col-sm-6" id="footer-icons">
        <ul class="list-inline" id="center-right">
          <li class="list-inline-item">
            <a href="https://www.hud.gov/topics/information_for_disabled_persons">
              <img src="./img/icons/wheelchair" class="img-responsive" id="icon" alt="wheelchair icon" />
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" data-toggle="modal" data-target="#fairHousingModal">
              <img src="./img/icons/fair_housing" class="img-responsive" id="icon" alt="fair housing" />
            </a>
          </li>
          <!-- Modal -->
            <div class="modal fade" id="fairHousingModal" tabindex="-1" role="dialog" aria-labelledby="fairHousingLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="fairHousingLabel">Fair Housing Statement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Parkside Pool Apartments is committed to compliance with all federal, state, and local fair housing laws.  Parkside Pool Apartments will not discriminate against any person because of race, color, religion, national origin, sex, familial status, disability, or any other specific classes protected by applicable laws. Parkside Pool Apartments will allow any reasonable accommodation or reasonable modification based upon a disability-related need. The person requesting any reasonable modification may be responsible for the related expenses.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

          <li class="list-inline-item">
              <img src="./img/icons/cigarette" class="img-responsive" id="icon" alt="no smoking" />
          </li>
          <li class="list-inline-item text-uppercase col-xs-3" id="my-logo">
            <span>Created by</span>
              <br />
            <a href="#">Casey</a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9Ld0WFCqu9BOGvFzkHxevC-QYsU6SHqo"></script>
<!-- <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9Ld0WFCqu9BOGvFzkHxevC-QYsU6SHqo&callback=initMap">
</script> -->
<script src="/js/map.js"></script>
<script src="/js/contact.js"></script>

</body>
</html>
