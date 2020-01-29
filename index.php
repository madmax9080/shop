<?php include "includes/header.php" ?>
	<!-- showcase-->
	<section id="showcase">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active" id="image-1">
		      <img src="images/image-1.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		      </div>
		    </div>
		    <div class="carousel-item" id="image-2">
		      <img src="images/image-2.png" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5 class="main-heading">Deals in variety of products</h5>
		      </div>
		    </div>
		    <div class="carousel-item" id="image-3">
		      <img src="images/image-3.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		      </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>

	<!--products-->
	<section id="products">
		<div class="container text-center">
			<p class="main-heading font-weight-light">Featured Product</p>
			<div class="underline"></div>
		</div>
		<div class="container mt-5 mb-5">
			<div class="row row-cols-1 row-cols-md-3">
				<div class="col mb-4">
				    <div class="card" id="chair">
				      <a href="products.php"><img src="images/leather-chair.jpg" class="card-img-top" alt="..."></a>
				      <div class="card-body">
				        <h5 class="card-title text-center" id="chair_name">Leather chair</h5>
				        <p class="card-text text-center" id="chair_price">$23</p>
				      </div>
				    </div>
			  	</div>
			  <div class="col mb-5">
			    <div class="card" id="sofa">
			      <a href="products.php"><img src="images/leather-chair.jpg" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <h5 class="card-title text-center" id="sofa_name">Leather Sofa</h5>
			        <p class="card-text text-center" id="sofa_price">$12</p>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-5">
			    <div class="card" id="jacket">
			      <a href="products.php"><img src="images/leather-chair.jpg" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <h5 class="card-title text-center" id="jacket_name">jacket</h5>
			        <p class="card-text text-center" id="jacket_price">$23</p>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-5">
			    <div class="card" id="wallet">
			      <a href="products.php"><img src="images/wallet.jpg" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <h5 class="card-title text-center" id="wallet_name">wallet</h5>
			        <p class="card-text text-center" id="wallet_price">$23</p>
			      </div>
			    </div>
			  </div>
			  <div class="col mb-5">
			    <div class="card" id="pock_wallet">
			      <a href="products.php"><img src="images/wallet-2.jpg" class="card-img-top" alt="..."></a>
			      <div class="card-body">
			        <h5 class="card-title text-center" id="pock_wallet_name">pocket wallet</h5>
			        <p class="card-text text-center" id="pock_wallet_price">$23</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</section>

	<?php include "includes/footer.php" ?>