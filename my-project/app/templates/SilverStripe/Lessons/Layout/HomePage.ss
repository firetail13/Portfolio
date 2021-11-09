<!-- BEGIN HOME SLIDER SECTION -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators 
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol> -->

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active"id="slide1" style="background: url(http://placehold.it/1920x605) no-repeat left center; background-size: cover;"> <!-- Ready for JS Injection -->
		      <div class="carousel-caption">
				<div class="caption sfr slider-title">Breathtaking views</div>
				<div class="caption sfl slider-subtitle">Relaxation in the Bay of Belfalas</div>
				<a href="#" class="caption sfb btn btn-default btn-lg">Learn More</a>
		      </div>
		    </div>
		    <div class="item" id="slide2" style="background: url(http://placehold.it/1920x605) no-repeat left center; background-size: cover;"> 
		      <div class="carousel-caption">
				<div class="caption sfr slider-title">The simple life</div>
				<div class="caption sfl slider-subtitle">Lush gardens in Mordor</div>
				<a href="#" class="caption sfb btn btn-default btn-lg">Learn More</a>
		      </div>
		    </div>
		  </div>
		  <!-- Blue Filter -->
		  <div id="home-search-section"></div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>



		</div>		
		<!-- END HOME SLIDER SECTION -->
		
		<!-- BEGIN HOME ADVANCED SEARCH -->
		<div id="home-advanced-search" class="open">
			<div id="opensearch"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<form>
							<div class="form-group">
								<div class="form-control-small">
									<div class='input-group date chzn-container' data-datepicker>
										<input placeholder="Arrive on..." type='text' class="form-control" data-date-format="DD/MM/YYYY"/>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
								
								<div class="form-control-small">
									<select id="search_status" name="search_status" data-placeholder="Stay...">
										<option value=""> </option>
										<option value="1">1 Night</option>
										<option value="2">2 Nights</option>
										<option value="3">3 Nights</option>
										<option value="4">4 Nights</option>
										<option value="5">5 Nights</option>
										<option value="6">6 Nights</option>
										<option value="7">7 Nights</option>
										<option value="8">8 Nights</option>
										<option value="9">9 Nights</option>
										<option value="10">10 Nights</option>
										<option value="11">11 Nights</option>
										<option value="12">12 Nights</option>
										<option value="13">13 Nights</option>
										<option value="14">14 Nights</option>
									</select>
								</div>
								
								<div class="form-control-small">
									<select id="search_bedrooms" name="search_bedrooms" data-placeholder="Bedrooms">
										<option value=""> </option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="5plus">5+</option>
									</select>
								</div>
								<div class="form-control-large">
									<input type="text" class="form-control" name="location" placeholder="City, State, Country, etc...">
								</div>
								<button type="submit" class="btn btn-fullcolor">Search</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- END HOME ADVANCED SEARCH -->
	
		<div id="wrapper">
	
		<header id="header">
			<% include TopBar %>

			<% include MainNav %>
						
		</header>
		
		$Layout

		<% include Footer %>
	
	</div>
		