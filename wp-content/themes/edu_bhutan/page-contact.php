<table width="100%" border="0" align="center">
	<tr>
		<td>
			<?php get_header(); ?>
				
			<div class="linkpage">
				<div class="container">
					<?php get_sidebar(LinkLeft); ?>
					<div class="col-lg-9 linkinfo">
<div class="breadcrumbs">
	<?php

	// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
	function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
		// This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
		$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

		// This will build our "base URL" ... Also accounts for HTTPS :)
		$base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

		// Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
		$breadcrumbs = Array("<a href=\"$base\">$home</a>");

		// Find out the index for the last value in our path array
		$last = end(array_keys($path));

		// Build the rest of the breadcrumbs
		foreach ($path AS $x => $crumb) {
			// Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
			$title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

			// If we are not on the last index, then display an <a> tag
			if ($x != $last)
				$breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
			// Otherwise, just display the title (minus)
			else
				$breadcrumbs[] = $title;
		}

		// Build our temporary array (pieces of bread) into one big string :)
		return implode($separator, $breadcrumbs);
	}

	?>

	<?= breadcrumbs() ?>
<!--
	<p><?= breadcrumbs(' > ') ?></p>
	<p><?= breadcrumbs(' ^^ ', 'Index') ?></p>
-->					
</div>
						
						<h1><?=the_title()?></h1>
						
						<div class="contactpage">
							<form>
								<div class="col-lg-6 contact">
									<input placeholder="First Name" name="first-name" style="font-size:14px;">
								</div>
								<div class="col-lg-6 contact">
									<input placeholder="Last Name" name="last-name" style="font-size:14px;">
								</div>
								<div class="col-lg-12 contact">
									<input placeholder="E-mail Address" name="email" style="font-size:14px;">
								</div>
								<div class="col-lg-12 contact">
									Comments/Feedback
									<textarea  placeholder="Comments/Feedback">
									</textarea>
								</div>
								<div class="col-lg-2 contact">
									<button>Submit</button>
								</div>
							</form>
						</div>
						
						<div class="col-lg-4 contactaddrs">
							<h4>Secretariat</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Division</th>
										<th>Contact</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Secretariat’s office</td>
										<td>325146/324827</td>
									</tr>
									<tr>
										<td>Policy and Planning Division (PPD)</td>
										<td>321659</td>
									</tr>
									<tr>
										<td>NatComm UNESCO</td>
										<td>334322</td>
									</tr>
									<tr>
										<td>Internal Audit</td>
										<td>331927</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-lg-4 contactaddrs">
							<h4>Directorate of Services (DoS)</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Division</th>
										<th>Contact</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Director’s office</td>
										<td>331780</td>
									</tr>
									<tr>
										<td>Human and Resource Division (HRD)</td>
										<td>321242</td>
									</tr>
									<tr>
										<td>Administrative and Finance Division (AFD)</td>
										<td>331980/325420</td>
									</tr>
									<tr>
										<td>School Planning and Building Division (SPBD)</td>
										<td>325085/325142</td>
									</tr>
									<tr>
										<td>Information and Communication Technology Division (ICTD)</td>
										<td>323551</td>
									</tr>
									<tr>
										<td>Legal Services</td>
										<td>328214</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-lg-4 contactaddrs">
							<h4>Department of School Education (DSE)</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Division</th>
										<th>Contact</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Director General’s office</td>
										<td>325325</td>
									</tr>
									<tr>
										<td>ECCD and SEN Division</td>
										<td>331903</td>
									</tr>
									<tr>
										<td>Education Monitoring Division (EMD)</td>
										<td>325141</td>
									</tr>
									<tr>
										<td>School Health and Nutrition Division (SHND)</td>
										<td>331378</td>
									</tr>
									<tr>
										<td>School Planning and Coordination Division (SPCD)</td>
										<td>321794</td>
									</tr>
									<tr>
										<td>Private School</td>
										<td>323237</td>
									</tr>
									<tr>
										<td>Teacher Professional Service Division (TPSD)</td>
										<td>338573/338572</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-lg-4 contactaddrs">
							<h4>Department of Youth and Sports (DYS)</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Division</th>
										<th>Contact</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Director General’s office</td>
										<td>325084</td>
									</tr>
									<tr>
										<td>Career Education and Counselling Division (CECD)</td>
										<td>332251</td>
									</tr>
									<tr>
										<td>Games and Sports Division (GSD)</td>
										<td>328377</td>
									</tr>
									<tr>
										<td>Scouts and Culture Education Division SCED)</td>
										<td>332148</td>
									</tr>
									<tr>
										<td>Youth Center Division</td>
										<td>324506</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-lg-4 contactaddrs">
							<h4>Department of Adult and Higher Education (DAHE)</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Division</th>
										<th>Contact</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Director General’s office</td>
										<td>325648</td>
									</tr>
									<tr>
										<td>Scholarship and Student Support Division (SSSD)</td>
										<td>346848/332248</td>
									</tr>
									<tr>
										<td>Quality Assurance and Accreditation Division (QAAD)</td>
										<td>330587/332068</td>
									</tr>
									<tr>
										<td>Higher Education Planning Division (HEPD)</td>
										<td>337176</td>
									</tr>
									<tr>
										<td>Non-formal and Continuing Education Division (NFCED)</td>
										<td>324712/333253</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-lg-4 contactaddrs">
							<h4>Education Staff Welfare Scheme (ESWS)</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Division</th>
										<th>Contact</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>ESWS</td>
										<td>322578</td>
									</tr>
								</tbody>
							</table>
						</div>
											
					</div>
				</div>
			</div>
			<?php get_footer(); ?>
		</td>
	</tr>
</table>