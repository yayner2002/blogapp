<!DOCTYPE html5>
<html>
<head>
	<title>home</title>
</head>
<body>
	<h2><?= $title ?></h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	          <div class="row row-content">
           <div class="col">
            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                src="<?php echo base_url(); ?>assets/images/i11.jpg" alt="Iphone 11" width="200px" height="105px">
                            <div class="carousel-caption d-none d-md-block">
                             <h2>Iphne 11<span class="badge badge-danger">NEW</span><span class="badge badge-pill badge-secondary">$4.99</span></h2>
                            <p>smasung new, topped with Cerignola olives, ripe vine
                            cherry tomatoes, Vidalia onion, Guntur chillies and
                            Buffalo Paneer.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                                 <img class="d-block img-fluid"
                                src="<?php echo base_url(); ?>assets/images/samsung.jpg" alt="samsung" width="200px" height="105px">
                            <div class="carousel-caption d-none d-md-block">
                               <h2>Samsung A 20<span class="badge badge-danger">NEW</span><span class="badge badge-pill badge-secondary">$4.99</span></h2>
                              <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and
                            Italian pizza, topped with Cerignola olives, ripe vine
                            cherry tomatoes, Vidalia onion, Guntur chillies and
                            Buffalo Paneer.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                             <img class="d-block img-fluid"
                                src="<?php echo base_url(); ?>assets/images/profile.jpg" alt="Yaynshet" width ="200px" height="105px">
                            <div class="carousel-caption d-none d-md-block">
                               <h2>Yaynshet Medhin</h2>
                               <h4>ICT,Networking,Database,Mobile Software and Web Designer</h4>
                              <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and
                            Italian pizza, topped with Cerignola olives, ripe vine
                            cherry tomatoes, Vidalia onion, Guntur chillies and
                            Buffalo Paneer.</p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

            </div>

            </div>
       </div>
</body>
</html>