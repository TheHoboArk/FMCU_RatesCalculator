<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs
 ================================================== -->
<meta charset="utf-8">
<title>Loan Rates</title>
<meta name="description" content="Firstmark Credit Union is a member-owned, locally controlled not-for-profit financial cooperative. We offer a full array of products and services to fit all your financial needs.">
<link rel="shortcut icon" href="https://www.firstmarkcu.org/images/FMCUlogo.ico">
<link rel="apple-touch-icon" href="https://www.firstmarkcu.org/images/apple-touch-icon_fmcu.png" />

<script src="https://www.firstmarkcu.org/_js/jquery.min.js"></script>

<!-- Mobile Specific
 ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-itunes-app" content="app-id=435999457">


<!-- CSS
 ================================================== -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/w3.css">

<!-- Java Script
 ================================================== -->
<?php include ('../_js/code.php'); ?>
<?php include ('../includes/rates-Copy.php'); ?>
<?php include ('../includes/disclosures.php'); ?>
</head>

<body>
<!-- TnT -->


<div class="page">
  <?php include ('../header.php'); ?>
  
  <!-- 960 Container Start -->
  <?php include ('../sub-header.php'); ?>
  <!-- 960 Container End -->
  
  <!-- 960 Container -->
  <div class="container">

	<div class="two-thirds column">
		<h1 class="headline">Current Loan Rates - Upgrade</h1>
	</div>
	
	<div class="one-third column">
		<div class="search">
        <?php include ('../_content/search.php'); ?>
	</div>
    </div>
	
</div>
<!-- 960 Container End -->

        <!-- 960 Container -->
<div class="container">

	<!-- 1/3 Columns -->
	<div class="two-thirds column">
    <div class="pricing-container">
  
    <h4><a id="secured"></a>Secured Loans - Rates as low as</h4>

<table class="standard-rates">
  <tr>
    <th width="18%">Term</th>
    <th class="right" width="18%">as low as APR<sup>1</sup></th>
    <th class="right" width="18%">Payment per $10,000<sup>4</sup></th>
    </tr>
  <tr>
    <td colspan="3"><h4>NEW Auto Loans  (2017 and newer)</h4>  </td>
    </tr>
  <tr>
	<td>36</td>
	<td class="right"><?php print percent($secured_36moNew_APR, 2); ?></td>
	<td class="right"><?php print asDollars($secured_36moNew_Payment); ?></td>
	</tr>
  <tr>
	<td>48</td>
	<td class="right"><?php print percent($secured_48moNew_APR, 2 ); ?></td>
	<td class="right"><?php print asDollars($secured_48moNew_Payment); ?></td>
	</tr>
  <tr>
	<td>66 ($10,000 Minimum)</td>
	<td class="right"><?php print percent($secured_66moNew_APR, 2 ); ?></td>
	<td class="right"><?php print asDollars($secured_66moNew_Payment); ?></td>
	</tr>
  <tr>
	<td>75 ($20,000 Minimum)</td>
	<td class="right"><?php print percent($secured_75moNew_APR, 2 ); ?></td>
	<td class="right"><?php print asDollars($secured_75moNew_Payment); ?></td>
	</tr>
  <tr>
	<td>84 ($30,000 Minimum)</td>
	<td class="right"><?php print percent($secured_84moNew_APR, 2 ); ?></td>
	<td class="right"><?php print asDollars($secured_84moNew_Payment); ?></td>
	</tr>
  <tr>
    <td colspan="3"><h4>Used Auto Loans - Up to 6 model years (Greater than 6 years old, add 2.00%)</h4></td>
    </tr>
  <tr>
    <td>36</td>
    <td class="right"><?php print percent($secured_36mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($secured_36mo_Payment); ?></td>
    </tr>
  <tr>
    <td>48</td>
    <td class="right"><?php print percent($secured_48mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($secured_48mo_Payment); ?></td>
    </tr>
  <tr>
    <td>66 ($10,000 Minimum)</td>
    <td class="right"><?php print percent($secured_66mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($secured_66mo_Payment); ?></td>
    </tr>
  <tr>
    <td>75 ($20,000 Minimum)</td>
    <td class="right"><?php print percent($secured_75mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($secured_75mo_Payment); ?></td>
    </tr>
  <tr>
    <td>84 ($30,000 Minimum)</td>
    <td class="right"><?php print percent($secured_84mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($secured_84mo_Payment); ?></td>
    </tr>
  <tr>
    <td colspan="3"><button onclick="document.getElementById('Auto').style.display='block'" class="button small orange">Apply For a New or Used Auto Loan</button></td>
  </tr>
  <tr>
    <td colspan="3"><h4>New Boats</h4>To apply for a Boat or Jet Ski Loan, visit us at any <a href="https://www.firstmarkcu.org/contact-us/branch-locations.php">Financial Centers</a> or call (210) 442-0199.</td>
    </tr>
  <tr>
    <td>36</td>
    <td class="right"><?php print percent($boat_36moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_36moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>48</td>
    <td class="right"><?php print percent($boat_48moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_48moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>60 ($10,000 Minimum)</td>
    <td class="right"><?php print percent($boat_60moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_60moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>72 ($15,000 Minimum)</td>
    <td class="right"><?php print percent($boat_72moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_72moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>84 ($30,000 Minimum)</td>
    <td class="right"><?php print percent($boat_84moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_84moNew_Payment); ?></td>
    </tr>
      <tr>
    <td colspan="3"><h4>Used Boat - Up to 10 model years </h4></td>
    </tr>
  <tr>
    <td>36</td>
    <td class="right"><?php print percent($boat_36mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_36mo_Payment); ?></td>
    </tr>
  <tr>
    <td>48</td>
    <td class="right"><?php print percent($boat_48mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_48mo_Payment); ?></td>
    </tr>
  <tr>
    <td>60 ($10,000 Minimum)</td>
    <td class="right"><?php print percent($boat_60mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_60mo_Payment); ?></td>
    </tr>
  <tr>
    <td>72 ($15,000 Minimum)</td>
    <td class="right"><?php print percent($boat_72mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_72mo_Payment); ?></td>
    </tr>
  <tr>
    <td>84 ($30,000 Minimum)</td>
    <td class="right"><?php print percent($boat_84mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($boat_84mo_Payment); ?></td>
    </tr>
  <tr>
    <td colspan="3"><h4>New Recreational Vehicles </h4>To apply for a RV Loan, visit us at any <a href="https://www.firstmarkcu.org/contact-us/branch-locations.php">Financial Centers</a> or call (210) 442-0199.</td>
    </tr>
  <tr>
    <td>60 ($10,000 Minimum)</td>
    <td class="right"><?php print percent($rv_60moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($rv_60moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>84 ($30,000 Minimum)</td>
    <td class="right"><?php print percent($rv_84moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($rv_84moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>120 ($60,000 Minimum)</td>
    <td class="right"><?php print percent($rv_120moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($rv_120moNew_Payment); ?></td>
    </tr>
      <tr>
    <td colspan="3"><h4>Used Recreational Vehicles - Up to 10 model years </h4></td>
    </tr>
  <tr>
    <td>60 ($10,000 Minimum)</td>
    <td class="right"><?php print percent($rv_60mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($rv_60mo_Payment); ?></td>
    </tr>
  <tr>
    <td>84 ($30,000 Minimum)</td>
    <td class="right"><?php print percent($rv_84mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($rv_84mo_Payment); ?></td>
    </tr>
  <tr>
    <td>120 ($60,000 Minimum)</td>
    <td class="right"><?php print percent($rv_120mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($rv_120mo_Payment); ?></td>
    </tr>
  <tr>
    <td colspan="3"><h4>New Motorcycles</h4>To apply for a Motorcyle Loan, visit us at any <a href="https://www.firstmarkcu.org/contact-us/branch-locations.php">Financial Centers</a> or call (210) 442-0199.</td>
    </tr>
  <tr>
    <td>36</td>
    <td class="right"><?php print percent($motorcycle_36moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($motorcycle_36moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>48</td>
    <td class="right"><?php print percent($motorcycle_48moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($motorcycle_48moNew_Payment); ?></td>
    </tr>
  <tr>
    <td>60 ($10,000 Minimum)</td>
    <td class="right"><?php print percent($motorcycle_60moNew_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($motorcycle_60moNew_Payment); ?></td>
    </tr>
      <tr>
    <td colspan="3"><h4>Used Motorcycles - Up to 10 model years </h4></td>
    </tr>
  <tr>
    <td>36</td>
    <td class="right"><?php print percent($motorcycle_36mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($motorcycle_36mo_Payment); ?></td>
    </tr>
  <tr>
    <td>48</td>
    <td class="right"><?php print percent($motorcycle_48mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($motorcycle_48mo_Payment); ?></td>
    </tr>
  <tr>
    <td>60 ($10,000 Minimum)</td>
    <td class="right"><?php print percent($motorcycle_60mo_APR, 2 ); ?></td>
    <td class="right"><?php print asDollars($motorcycle_60mo_Payment); ?></td>
    </tr>
</table>
    
</div>
    

<div class="pricing-container">
  
      <h4><a id="unsecured"></a>Unsecured Loans</h4>

  <table class="standard-rates">
    <tr>
      <th width="18%">Term</th>
      <th class="right" width="18%">as low as APR<sup>2</sup></th>
      <th class="right" width="18%">Payment per $10,000<sup>4</sup></th>
      </tr>
    <tr>
      <td colspan="3"><h4>Personal Unsecured</h4></td>
      </tr>
    <tr>
      <td>12</td>
      <td class="right"><?php print percent($unsecured_12mo_APR, 2 ); ?></td>
      <td class="right"><?php print asDollars($unsecured_12mo_Payment); ?></td>
      </tr>
    <tr>
      <td>24</td>
      <td class="right"><?php print percent($unsecured_24mo_APR, 2 ); ?></td>
      <td class="right"><?php print asDollars($unsecured_24mo_Payment); ?></td>
      </tr>
    <tr>
      <td>36</td>
      <td class="right"><?php print percent($unsecured_36mo_APR, 2 ); ?></td>
      <td class="right"><?php print asDollars($unsecured_36mo_Payment); ?></td>
      </tr>
    <tr>
      <td>48</td>
      <td class="right"><?php print percent($unsecured_48mo_APR, 2 ); ?></td>
      <td class="right"><?php print asDollars($unsecured_48mo_Payment); ?></td>
      </tr>
    <tr>
      <td>60</td>
      <td class="right"><?php print percent($unsecured_60mo_APR, 2 ); ?></td>
      <td class="right"><?php print asDollars($unsecured_60mo_Payment); ?></td>
      </tr>
      <tr>
        <td colspan="3"><h4>Small Dollar Loan</h4></td>
        </tr>
    
    <td>6</td>
      <td class="right"><?php print percent($small_dollar_6mo_APR, 2 ); ?></td>
      <td class="right"><?php print asDollars($small_dollar_6mo_Payment); ?></td>
      </tr>
    <td colspan="3"><h4>Line-of-Credit</h4></td>
      </tr>
    <tr>
      <td>New Advances</td>
      <td class="right"><?php print "$loc_APR"; ?></td>
      <td class="right">&mdash;</td>
      </tr>
    <tr>
      <td colspan="3"><h4>Educators First Loans</h4></td>
      </tr>
    <tr>
      <td>Pre-Graduation Student Teaching Loan</td>
      <td class="right"><?php print percent($edu_pregrad, 2 ); ?></td>
      <td class="right">&mdash;</td>
      </tr>
    <tr>
      <td>Post-Graduation Bridge Loan</td>
      <td class="right"><?php print percent($edu_postgrad, 2 ); ?></td>
      <td class="right">&mdash;</td>
      </tr>
    <tr>
      <td>Teachers Certification Loan</td>
      <td class="right"><?php print percent($edu_cert_loan, 2 ); ?></td>
      <td class="right">&mdash;</td>
      </tr>
    <tr>
      <td>Zero% Classroom Supply Loan</td>
      <td class="right"><?php print percent($edu_class_supply, 2 ); ?></td>
      <td class="right">&mdash;</td>
      </tr>
    <tr>
      <td colspan="3"><h4>Teacher's Retirement Buy-Back Loan</h4></td>
      </tr>
    <tr>
      <td>24</td>
      <td class="right"><?php print percent($teacher_buyback_24mo, 2 ); ?></td>
      <td class="right"><?php print asDollars($teacher_buyback_24mo_Payment); ?></td>
      </tr>
    <tr>
      <td>36</td>
      <td class="right"><?php print percent($teacher_buyback_36mo, 2 ); ?></td>
      <td class="right"><?php print asDollars($teacher_buyback_36mo_Payment); ?></td>
      </tr>
    <tr>
      <td>48</td>
      <td class="right"><?php print percent($teacher_buyback_48mo, 2 ); ?></td>
      <td class="right"><?php print asDollars($teacher_buyback_48mo_Payment); ?></td>
      </tr>
    <tr>
      <td>60</td>
      <td class="right"><?php print percent($teacher_buyback_60mo, 2 ); ?></td>
      <td class="right"><?php print asDollars($teacher_buyback_60mo_Payment); ?></td>
      </tr>
  </table>
<p>
  <button onclick="document.getElementById('Personal').style.display='block'" class="button small orange">Apply For A Unsecured Loan</button></p>
</div>

<div class="pricing-container">

      <h4><a id="mortgage"></a>Mortgage Loans</h4>
  <table class="standard-rates">
    <tr>
      <th width="18%">Term</th>
      <th class="right" width="18%">Interest Rate</th>
      <th class="right" width="18%">APR<sup>3</sup></th>
      <th class="right" width="18%">Payment per $10,000<sup>4</sup></th>
      </tr>
    <tr>
      <td colspan="4"><h4>Conventional</h4></td>
      </tr>
          <tr>
      <td>10</td>
      <td class="right"><?php print percent($conventional_10yrIR, 3); ?></td>
      <td class="right"><?php print percent($conventional_10yr, 3); ?></td>
      <td class="right"><?php print asDollars($conventional_10yr_Payment); ?></td>
      </tr>
    <tr>
      <td>15</td>
      <td class="right"><?php print percent($conventional_15yrIR, 3); ?></td>
      <td class="right"><?php print percent($conventional_15yr, 3); ?></td>
      <td class="right"><?php print asDollars($conventional_15yr_Payment); ?></td>
      </tr>
    <tr>
      <td>30</td>
      <td class="right"><?php print percent($conventional_30yrIR, 3); ?></td>
      <td class="right"><?php print percent($conventional_30yr, 3); ?></td>
      <td class="right"><?php print asDollars($conventional_30yr_Payment); ?></td>
      </tr>
    <tr>
      <td colspan="4"><h4>FHA</h4></td>
      </tr>
    <tr>
      <td>15</td>
      <td class="right"><?php print percent($fha_15yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($fha_15yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($fha_15yr_Payment); ?></td>
      </tr>
    <tr>
      <td>30</td>
      <td class="right"><?php print percent($fha_30yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($fha_30yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($fha_30yr_Payment); ?></td>
      </tr>
    <tr>
      <td colspan="4"><h4>VA</h4></td>
      </tr>
    <tr>
      <td>15</td>
      <td class="right"><?php print percent($va_15yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($va_15yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($va_15yr_Payment); ?></td>
      </tr>
    <tr>
      <td>30</td>
      <td class="right"><?php print percent($va_30yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($va_30yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($va_30yr_Payment); ?></td>
      </tr>
    <tr>
      <td colspan="4"><h4>5/5 ARM LIBOR (2/2/5 CAPS)</h4></td>
      </tr>
    <tr>
      <td>15</td>
      <td class="right"><?php print "$arm51_15yrIR"; ?></td>
      <td class="right"><?php print "$arm51_15yr"; ?></td>
      <td class="right"><?php print "$arm51_15yr_Payment"; ?></td>
      </tr>
    <tr>
      <td>30</td>
      <td class="right"><?php print percent($arm51_30yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($arm51_30yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($arm51_30yr_Payment); ?></td>
      </tr>
    <tr>
      <td colspan="4"><h4>Jumbo $453,100 - $1,000,000 (Rates Reflect 20% Down Payment)</h4></td>
      </tr>
    <tr>
      <td>15</td>
      <td class="right"><?php print percent($jumbo_15yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($jumbo_15yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($jumbo_15yr_Payment); ?></td>
      </tr>
    <tr>
      <td>30</td>
      <td class="right"><?php print percent($jumbo_30yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($jumbo_30yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($jumbo_30yr_Payment); ?></td>
      </tr>
         <td colspan="4"><h4>5/5 Jumbo ARM LIBOR (2/2/5 CAPS)</h4></td>
      </tr>
    <tr>
      <td>15</td>
      <td class="right"><?php print "$arm5jumbo1_15yrIR"; ?></td>
      <td class="right"><?php print "$arm5jumbo1_15yr"; ?></td>
      <td class="right"><?php print "$arm5jumbo1_15yr_Payment"; ?></td>
      </tr>
    <tr>
      <td>30</td>
      <td class="right"><?php print percent($arm5jumbo1_30yrIR, 3 ); ?></td>
      <td class="right"><?php print percent($arm5jumbo1_30yr, 3 ); ?></td>
      <td class="right"><?php print asDollars($arm5jumbo1_30yr_Payment); ?></td>
      </tr>
    <tr>
  </table>
      <p><a href="../outbound/rd_mortgage_application_full.php" class="button small orange">Online Mortgage Application</a>
      </p>
</div>

<div class="pricing-container">
  
      <h4><a id="home-equity"></a>Home Equity</h4>

  <table class="standard-rates">
    <tr>
      <th width="18%">Term</th>
      <th class="right" width="18%">APR<sup>5</sup></th>
      <th class="right" width="18%">Payment per $10,000<sup>4</sup></th>
      </tr>
    <tr>
      <td>36</td>
      <td class="right"><?php print percent($he_36mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_36mo_Payment); ?></td>
      </tr>
    <tr>
      <td>48</td>
      <td class="right"><?php print percent($he_48mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_48mo_Payment); ?></td>
      </tr>
    <tr>
      <td>60</td>
      <td class="right"><?php print percent($he_60mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_60mo_Payment); ?></td>
      </tr>
    <tr>
      <td>84</td>
      <td class="right"><?php print percent($he_84mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_84mo_Payment); ?></td>
      </tr>
    <tr>
      <td>120</td>
      <td class="right"><?php print percent($he_120mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_120mo_Payment); ?></td>
      </tr>
    <tr>
      <td>180</td>
      <td class="right"><?php print percent($he_180mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_180mo_Payment); ?></td>
      </tr>
    <tr>
      <td>240</td>
      <td class="right"><?php print percent($he_240mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_240mo_Payment); ?></td>
      </tr>
    <tr>
      <td>300<sup>10</sup></td>
      <td class="right"><?php print percent($he_300mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($he_300mo_Payment); ?></td>
      </tr>
  </table>

      <p>
        <button onclick="document.getElementById('HomeEquity').style.display='block'" class="button small orange">Apply For A Home Equity Loan</button>
      </p>
</div>

<div class="pricing-container">
  
 
      <h4><a id="home-improvement"></a>Home Improvement</h4>

  <table class="standard-rates">
    <tr>
      <th width="18%">Term ($10,000 Minimum)</th>
      <th class="right" width="18%">APR<sup>5</sup></th>
      <th class="right" width="18%">Payment per $10,000<sup>4</sup></th>
      </tr>
    <tr>
      <td>36</td>
      <td class="right"><?php print percent($hi_36mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($hi_36mo_Payment); ?></td>
      </tr>
    <tr>
      <td>48</td>
      <td class="right"><?php print percent($hi_48mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($hi_48mo_Payment); ?></td>
      </tr>
    <tr>
      <td>60</td>
      <td class="right"><?php print percent($hi_60mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($hi_60mo_Payment); ?></td>
      </tr>
    <tr>
      <td>84</td>
      <td class="right"><?php print percent($hi_84mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($hi_84mo_Payment); ?></td>
      </tr>
    <tr>
      <td>120</td>
      <td class="right"><?php print percent($hi_120mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($hi_120mo_Payment); ?></td>
      </tr>
    <tr>
      <td>180</td>
      <td class="right"><?php print percent($hi_180mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($hi_180mo_Payment); ?></td>
      </tr>
    <tr>
      <td>240</td>
      <td class="right"><?php print percent($hi_240mo_APR, 2); ?></td>
      <td class="right"><?php print asDollars($hi_240mo_Payment); ?></td>
      </tr>
  </table>

      <p>
        <button onclick="document.getElementById('HomeImprovement').style.display='block'" class="button small orange">Apply For A Home Improvement Loan</button>
      </p>

</div>

<div class="pricing-container">
  

      <h4><a id="credit-card"></a>Credit Card</h4>
 
  <table class="standard-rates">
    <tr>
      <th width="18%">&nbsp;</th>
      <th class="right" width="18%">as low as APR<sup>6</sup></th>
      </tr>
    <tr>
      <td colspan="2"><h4>VISA Platinum</h4></td>
      </tr>
    <tr>
      <td>VISA Platinum low rate</td>
      <td class="right"><?php print "$new_visa_platinum_APR"; ?></td>
      </tr>
    <tr>
      <td colspan="2"><h4>VISA Platinum Rewards</h4></td>
      </tr>
    <tr>
      <td>VISA Platinum  with rewards</td>
      <td class="right"><?php print "$new_visa_platinum_rewards_APR"; ?></td>
      </tr>
    <tr>
      <td colspan="2"><h4>VISA Signature</h4></td>
      </tr>
    <tr>
      <td>VISA Signature with 1.5% cash back</td>
      <td class="right"><?php print "$new_visa_signature_APR"; ?></td>
      </tr>
  </table>
  <p>
    <button onclick="document.getElementById('CreditCard').style.display='block'" class="button small orange">Apply For A Credit Card</button>
      </p>
</div>
<ol class="legal">


        <li><?php print "$disclosure_auto"; ?></li>
        <li><?php print "$disclosure_unsecured"; ?></li>
        <li><?php print "$disclosure_mortgage"; ?></li>
        <li><?php print "$disclosure_payment"; ?></li>
        <li><?php print "$disclosure_home_equity"; ?></li>
        <li><?php print "$disclosure_credit_cards"; ?></li>
</ol>
<?php include ('../includes/modal-windows.php'); ?>
	</div>
    
    
	<div class="one-third column">

                <!-- Categories -->
		<?php include ('rates-list.php'); ?>
				
        
	</div>
	<!-- 1/3 Columns End -->

</div>
<!-- 960 Container End -->

        
      
    <?php include ('../footer.php'); ?>
    <!-- Back To Top Button -->
    
</div>
    <!-- Back To Top Button -->

    <div id="backtotop">
        <a href="#"></a>
    </div>
</div>

</body>
</html>
