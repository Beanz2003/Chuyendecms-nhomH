<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/cbeaa37f05.js" crossorigin="anonymous"></script>
	<style>
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover,
.form-control-borderless:active,
.form-control-borderless:focus {
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
}

.form-control-borderless {
    border: none !important;
}

.submit-search {
    background: #28a745 !important;
    color: #fff !important;
}

.submit-search:hover {
    background-color: #1e7e34 !important;
}

.search-one {
    height: 200px;
}

.search-one p {
    text-align: center;
    transform: translateY(40px);
}

.search-one div {
    transform: translateY(30px);
    justify-content: center;
}

@media (min-width: 768px) {
    .search-two {
        background-color: #f5efdf !important;
        padding: 30px 0px 50px 0px;
    }
}
	</style>
</head>

<body>
<div class="row">
<div class="col-md-3">

</div>
<div class="col-md-6 list-new-view">
<div class="container">
		<br />
		<div class="search-one">
			<div style="display: flex;" class="h4-total">
				<h4 style="color: #cb2952">Search:</h4>
				<h4><?php
					printf(
						/* translators: %s: Search term. */
						esc_html__(' "%s"', 'twentytwentyone'),
						'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
					);
					?></h4>
			</div>

			<p>We could not find any results for your search. You can give it </p>
			<p>another try through the search form below.</p>
		</div>
		<div class="search-two">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<form class="card card-sm">
						<div class="card-body row no-gutters align-items-center">
							<div class="col-auto">
								<i class="fas fa-search h4 text-body"></i>
							</div>
							<!--end of col-->
							<div class="col">
								<input name="s" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
							</div>
							<!--end of col-->
							<div class="col-auto">
								<button class="btn btn-lg btn-success submit-search" type="submit">Search</button>
							</div>
							<!--end of col-->
						</div>
					</form>
				</div>
				<!--end of col-->
			</div>
		</div>

	</div>
</div>
<div class="col-md-3">

</div>

</div>
</body>

</html>