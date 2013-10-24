<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Persistent toolbars - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../js/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<script>
		$(function() {
			$( "[data-role='navbar']" ).navbar();
			$( "[data-role='header'], [data-role='footer']" ).toolbar();
		});
		// Update the contents of the toolbars
		$( document ).on( "pageshow", "[data-role='page']", function() {
			// Each of the four pages in this demo has a data-title attribute
			// which value is equal to the text of the nav button
			// For example, on first page: <div data-role="page" data-title="Info">
			var current = $( this ).jqmData( "title" );
			// Change the heading
			$( "[data-role='header'] h1" ).text( current );
			// Remove active class from nav buttons
			$( "[data-role='navbar'] a.ui-btn-active" ).removeClass( "ui-btn-active" );
			// Add active class to current nav button
			$( "[data-role='navbar'] a" ).each(function() {
				if ( $( this ).text() === current ) {
					$( this ).addClass( "ui-btn-active" );
				}
			});
		});
	</script>
</head>
<body>
    <div data-role="header" data-position="fixed" data-theme="a">
		<a href="../toolbar/" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">Back</a>
        <h1>Emails</h1>
    </div><!-- /header -->

	<div data-role="page" data-title="Emails">

	    <div class="ui-content" role="main">

			<ul data-role="listview" data-theme="a" data-dividertheme="a" data-filter="true" data-filter-theme="a" data-filter-placeholder="Search messages...">
				<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
				<li><a href="#">
					<h3>Stephen Weber</h3>
				<p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
				<p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
					<p class="ui-li-aside"><strong>6:24</strong>PM</p>
				</a></li>
				<li><a href="#">
					<h3>jQuery Team</h3>
				<p><strong>Boston Conference Planning</strong></p>
				<p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
					<p class="ui-li-aside"><strong>9:18</strong>AM</p>
				</a></li>
				<li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
				<li><a href="#">
					<h3>Avery Walker</h3>
				<p><strong>Re: Dinner Tonight</strong></p>
				<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
					<p class="ui-li-aside"><strong>4:48</strong>PM</p>
				</a></li>
				<li data-role="list-divider">Wednesday, October 6, 2010 <span class="ui-li-count">3</span></li>
				<li><a href="#">
					<h3>Amazon.com</h3>
				<p><strong>4-for-3 Books for Kids</strong></p>
				<p>As someone who has purchased children's books from our 4-for-3 Store, you may be interested in these featured books.</p>
					<p class="ui-li-aside"><strong>12:47</strong>PM</p>
				</a></li>
				<li><a href="#">
					<h3>Mike Taylor</h3>
				<p><strong>Re: This weekend in Maine</strong></p>
				<p>Hey little buddy, sorry but I can't make it up to vacationland this weekend. Maybe next weekend?</p>
					<p class="ui-li-aside"><strong>6:24</strong>AM</p>
				</a></li>
				<li><a href="#">
					<h3>Redfin</h3>
				<p><strong>Redfin listing updates for today</strong></p>
				<p>There are 3 updates for the home on your watchlist: 1 updated MLS listing and 2 homes under contract.</p>
					<p class="ui-li-aside"><strong>5:52</strong>AM</p>
				</a></li>
					<li data-role="list-divider">Tuesday, October 5, 2010 <span class="ui-li-count">3</span></li>
					<li><a href="index.html">
						<h3>Angela Smith</h3>
					<p><strong>Link Request</strong></p>
					<p>My name is Angela Smith, SEO Consultant. I've greatly enjoyed looking through your site and I was wondering if you'd be interested in providing a link</p>
						<p class="ui-li-aside"><strong>6:24</strong>AM</p>
					</a></li>
					<li><a href="index.html">
						<h3>Mike Taylor</h3>
					<p><strong>This weekend in Maine</strong></p>
					<p>Sounds good, let me check into our plans.</p>
						<p class="ui-li-aside"><strong>6:24</strong>AM</p>
					</a></li>
			</ul>

		</div><!-- /content -->

	</div><!-- /page -->

	<div data-role="footer" data-position="fixed" data-theme="a">
		<div data-role="navbar">
			<ul>
				<li><a href="index.php" data-prefetch="true" data-transition="fade">Info</a></li>
				<li><a href="page-b.php" data-prefetch="true" data-transition="flip">Friends</a></li>
				<li><a href="page-c.php" data-prefetch="true" data-transition="turn">Albums</a></li>
				<li><a href="page-d.php" data-prefetch="true" data-transition="slide">Emails</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->

</body>
</html>