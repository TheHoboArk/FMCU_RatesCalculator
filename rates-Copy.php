<?php
// Enables all errors to be shown. With PHP 5 and higher it’s a good idea to turn on the E_STRICT level of error reporting. E_STRICT is useful for ensuring you’re coding using the best possible standards. 
//ini_set( 'display_errors', 'On' );
///error_reporting( E_ALL | E_STRICT );

// prints e.g. 'Current PHP version: 7.9.1'
echo 'Current PHP version: ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion( 'tidy' );

// Formula for Amortizing Loan Payment
/*This formula works for most amortizing loans, which covers most loans—except credit cards and interest-only loans.

Loan Payment = Amount / Discount Factor
or
P = A / D

You need the following values:
Number of Periodic Payments (n) = Payments per year times number of years
Periodic Interest Rate (i) = Annual rate divided by number of payment periods
Discount Factor (D) = {[(1 + i) ^n] - 1} / [i(1 + i)^n]

Example: Loan Payment Calculation

Assume you borrow $100,000 at 6 percent for 30 years, to be repaid monthly. What is the monthly payment?
($term) n = 360 (30 years times 12 monthly payments per year)
($z) i = .005 (6 percent annually expressed as .06, divided by 12 monthly payments per year—learn how to convert percentages to decimal format)
($y) D = 166.7916 ({[(1+.005)^360] - 1} / [.005(1+.005)^360])
($payment) P = A / D = 100,000 / 166.7916 = 599.55
*/

function p_formula( $rate, $term, $amount ) {
	$decrate = $rate / 100;
	$z = $decrate / 12;
	$y = ( ( pow( ( 1 + $z ), $term ) - 1 ) / ( $z * pow( ( 1 + $z ), $term ) ) );
	$payment = $amount / $y;
	return $payment;
}

// Replicates the money_format() formula not available on windows computers. Rounds up to the nearest whole dollar.
function asDollars( $value ) {
	return '$' . number_format( $value, 0 );
}

// Replicates the sprintf() formula not available on windows. Rounds to the nearest 2 decimals.
function percent($number, $decrounding){
    return number_format($number, $decrounding, '.', '') . "%";
}

// 231 Total Rates

// Prime Plus 1:
$prime_plus1 = "3.25%";

// New Auto Secured Rates:
$secured_rates_for = "November 1,2018";
$secured_24moNew_APR = 3.84;
$secured_24moNew_Payment = p_formula( $secured_24moNew_APR, 24, 10000 );
$secured_36moNew_APR = 3.84;
$secured_36moNew_Payment = p_formula( $secured_36moNew_APR, 36, 10000 );
$secured_48moNew_APR = 3.84;
$secured_48moNew_Payment = p_formula( $secured_48moNew_APR, 48, 10000 );
$secured_66moNew_APR = 4.10;
$secured_66moNew_Payment = p_formula( $secured_66moNew_APR, 66, 10000 );
$secured_75moNew_APR = 4.10;
$secured_75moNew_Payment = p_formula( $secured_75moNew_APR, 75, 10000 ); //$20K
$secured_84moNew_APR = 5.60;
$secured_84moNew_Payment = p_formula( $secured_84moNew_APR, 84, 10000 ); //$25K

// Used Auto Secured Rates:
$secured_24mo_APR = 4.04;
$secured_24mo_Payment = p_formula( $secured_24mo_APR, 24, 10000 );
$secured_36mo_APR = 4.04;
$secured_36mo_Payment = p_formula( $secured_36mo_APR, 36, 10000 );
$secured_48mo_APR = 4.04;
$secured_48mo_Payment = p_formula( $secured_48mo_APR, 48, 10000 );
$secured_66mo_APR = 4.24;
$secured_66mo_Payment = p_formula( $secured_66mo_APR, 66, 10000 );
$secured_75mo_APR = 4.24;
$secured_75mo_Payment = p_formula( $secured_75mo_APR, 75, 10000 ); //$20K
$secured_84mo_APR = 5.79;
$secured_84mo_Payment = p_formula( $secured_84mo_APR, 84, 10000 ); //$25K

// Motorcycle Rates:
$motorcycle_36moNew_APR = 6.10;
$motorcycle_36moNew_Payment = p_formula( $motorcycle_36moNew_APR, 36, 10000 );
$motorcycle_48moNew_APR = 6.10;
$motorcycle_48moNew_Payment = p_formula( $motorcycle_48moNew_APR, 48, 10000 );
$motorcycle_60moNew_APR = 6.10;
$motorcycle_60moNew_Payment = p_formula( $motorcycle_60moNew_APR, 60, 10000 );

$motorcycle_36mo_APR = 7.10;
$motorcycle_36mo_Payment = p_formula( $motorcycle_36mo_APR, 36, 10000 );
$motorcycle_48mo_APR = 7.10;
$motorcycle_48mo_Payment = p_formula( $motorcycle_48mo_APR, 48, 10000 );
$motorcycle_60mo_APR = 7.10;
$motorcycle_60mo_Payment = p_formula( $motorcycle_60mo_APR, 60, 10000 );

// Boat Rates:
$boat_36moNew_APR = 6.10;
$boat_36moNew_Payment = p_formula( $boat_36moNew_APR, 36, 10000 );
$boat_48moNew_APR = 6.10;
$boat_48moNew_Payment = p_formula( $boat_48moNew_APR, 48, 10000 );
$boat_60moNew_APR = 6.10;
$boat_60moNew_Payment = p_formula( $boat_60moNew_APR, 60, 10000 );
$boat_72moNew_APR = 7.10;
$boat_72moNew_Payment = p_formula( $boat_72moNew_APR, 72, 10000 );
$boat_84moNew_APR = 8.10;
$boat_84moNew_Payment = p_formula( $boat_84moNew_APR, 84, 10000 );

$boat_36mo_APR = 7.10;
$boat_36mo_Payment = p_formula( $boat_36mo_APR, 36, 10000 );
$boat_48mo_APR = 7.10;
$boat_48mo_Payment = p_formula( $boat_48mo_APR, 48, 10000 );
$boat_60mo_APR = 7.10;
$boat_60mo_Payment = p_formula( $boat_60mo_APR, 60, 10000 );
$boat_72mo_APR = 8.10;
$boat_72mo_Payment = p_formula( $boat_72mo_APR, 72, 10000 );
$boat_84mo_APR = 9.10;
$boat_84mo_Payment = p_formula( $boat_84mo_APR, 84, 10000 );

// RV Rates:
$rv_60moNew_APR = 6.10;
$rv_60moNew_Payment = p_formula( $rv_60moNew_APR, 60, 10000 );
$rv_84moNew_APR = 7.10;
$rv_84moNew_Payment = p_formula( $rv_84moNew_APR, 84, 10000 );
$rv_120moNew_APR = 9.10;
$rv_120moNew_Payment = p_formula( $rv_120moNew_APR, 120, 10000 );

$rv_60mo_APR = 7.10;
$rv_60mo_Payment = p_formula( $rv_60mo_APR, 60, 10000 );
$rv_84mo_APR = 8.10;
$rv_84mo_Payment = p_formula( $rv_84mo_APR, 84, 10000 );
$rv_120mo_APR = 10.10;
$rv_120mo_Payment = p_formula( $rv_120mo_APR, 120, 10000 );

// Other Loan Rates:
$loan_rates_for = "November 1, 2018";

// Unsecured Rates:
$unsecured_12mo_APR = 9.10;
$unsecured_12mo_Payment = p_formula( $unsecured_12mo_APR, 12, 10000 );
$unsecured_24mo_APR = 9.10;
$unsecured_24mo_Payment = p_formula( $unsecured_24mo_APR, 24, 10000 );
$unsecured_36mo_APR = 9.35;
$unsecured_36mo_Payment = p_formula( $unsecured_36mo_APR, 36, 10000 );
$unsecured_48mo_APR = 9.85;
$unsecured_48mo_Payment = p_formula( $unsecured_48mo_APR, 48, 10000 );
$unsecured_60mo_APR = 10.35;
$unsecured_60mo_Payment = p_formula( $unsecured_60mo_APR, 60, 10000 );

//Unsecured Promo Rates:
$unsecured_24mo_promo_APR = 6.60;
$unsecured_24mo_promo_Payment = "$446";
$unsecured_48mo_promo_APR = 7.34;
$unsecured_48mo_promo_Payment = "$241";
$unsecured_60mo_promo_APR = 5.99;
$unsecured_60mo_promo_Payment = "$195";

// Small Dollar:
$small_dollar_6mo_APR = 16.10;
$small_dollar_6mo_Payment = p_formula( $small_dollar_6mo_APR, 6, 500 ); //$500

// Line of Credit Rates:
$loc_APR = "9.60%";

// Educators First Loans:
$edu_pregrad = 6.60;
$edu_postgrad = 9.60;
$edu_cert_loan = 5.00;
$edu_class_supply = 0.00;
$teacher_buyback_24mo = 8.35;
$teacher_buyback_24mo_Payment = p_formula($teacher_buyback_24mo, 24, 10000 );
$teacher_buyback_36mo = 8.60;
$teacher_buyback_36mo_Payment = p_formula($teacher_buyback_36mo, 36, 10000 );
$teacher_buyback_48mo = 9.10;
$teacher_buyback_48mo_Payment = p_formula($teacher_buyback_48mo, 48, 10000 );
$teacher_buyback_60mo = 9.60;
$teacher_buyback_60mo_Payment = p_formula($teacher_buyback_60mo, 60, 10000 );

// Federal Family Education Loan Rates:
$stafford_student_APR = "6.80%";
$stafford_graduate_APR = "6.80%";
$graduate_plus_APR = "8.50%";

// Home Equity Rates:
$he_rates_for = "November 1, 2018";

// Home Equity Rates Member pays fee:
$he_36mo_APR = 4.05;
$he_36mo_Payment = p_formula($he_36mo_APR, 36, 10000 );
$he_48mo_APR = 4.05;
$he_48mo_Payment = p_formula($he_48mo_APR, 48, 10000 );
$he_60mo_APR = 4.40;
$he_60mo_Payment = p_formula($he_60mo_APR, 60, 10000 );
$he_84mo_APR = 4.65;
$he_84mo_Payment = p_formula($he_84mo_APR, 84, 10000 );
$he_120mo_APR = 5.20;
$he_120mo_Payment = p_formula($he_120mo_APR, 120, 10000 );
$he_180mo_APR = 5.45;
$he_180mo_Payment = p_formula($he_180mo_APR, 180, 10000 );
$he_240mo_APR = 6.35;
$he_240mo_Payment = p_formula($he_240mo_APR, 240, 10000 );
$he_300mo_APR = 6.85;
$he_300mo_Payment = p_formula($he_300mo_APR, 300, 10000 );

// Home Improvement Rates Member pays fee:
$hi_rates_for = "November 1, 2018";
$hi_36mo_APR = 5.75;
$hi_36mo_Payment = p_formula($hi_36mo_APR, 36, 10000 );
$hi_48mo_APR = 5.75;
$hi_48mo_Payment = p_formula($hi_48mo_APR, 48, 10000 );
$hi_60mo_APR = 6.60;
$hi_60mo_Payment = p_formula($hi_60mo_APR, 60, 10000 );
$hi_84mo_APR = 6.60;
$hi_84mo_Payment = p_formula($hi_84mo_APR, 84, 10000 );
$hi_120mo_APR = 6.90;
$hi_120mo_Payment = p_formula($hi_120mo_APR, 120, 10000 );
$hi_180mo_APR = 7.35;
$hi_180mo_Payment = p_formula($hi_180mo_APR, 180, 10000 );
$hi_240mo_APR = 7.95;
$hi_240mo_Payment = p_formula($hi_240mo_APR, 240, 10000 );

// Mortgage Rates:
$mortgage_rates_for = "October 16, 2018";

$conventional_10yrIR = 3.500;
$conventional_10yr = 4.100;
$conventional_10yr_Payment = p_formula($conventional_10yrIR, 120, 10000 );
$conventional_15yrIR = 3.750;
$conventional_15yr = 4.145;
$conventional_15yr_Payment = p_formula($conventional_15yrIR, 180, 10000 );
$conventional_30yrIR = 4.875;
$conventional_30yr = 5.129;
$conventional_30yr_Payment = p_formula($conventional_30yrIR, 360, 10000 );

$fha_15yrIR = 4.500;
$fha_15yr = 5.700;
$fha_15yr_Payment = p_formula( $fha_15yrIR, 180, 10000 );
$fha_30yrIR = 4.875;
$fha_30yr = 6.022;
$fha_30yr_Payment = p_formula( $fha_30yrIR, 360, 10000 );

$va_15yrIR = 4.625;
$va_15yr = 5.170;
$va_15yr_Payment = p_formula( $va_15yrIR, 180, 10000 );
$va_30yrIR = 4.500;
$va_30yr = 4.809;
$va_30yr_Payment = p_formula( $va_30yrIR, 360, 10000 );

$arm31_15yrIR = "N/A";
$arm31_15yr = "N/A";
$arm31_15yr_Payment = "N/A";
$arm31_30yrIR = "N/A";
$arm31_30yr = "N/A";
$arm31_30yr_Payment = "N/A";

$arm51_15yrIR = "N/A";
$arm51_15yr = "N/A";
$arm51_15yr_Payment = "N/A";
$arm51_30yrIR = 3.375;
$arm51_30yr = 4.967;
$arm51_30yr_Payment = p_formula( $arm51_30yrIR, 360, 10000 );

$jumbo_15yrIR = 4.375;
$jumbo_15yr = 4.580;
$jumbo_15yr_Payment = p_formula( $jumbo_15yrIR, 180, 10000 );
$jumbo_30yrIR = 4.750;
$jumbo_30yr = 4.921;
$jumbo_30yr_Payment = p_formula( $jumbo_30yrIR, 360, 10000 );

$arm5jumbo1_15yrIR = "N/A";
$arm5jumbo1_15yr = "N/A";
$arm5jumbo1_15yr_Payment = "N/A";
$arm5jumbo1_30yrIR = 3.625;
$arm5jumbo1_30yr = 4.998;
$arm5jumbo1_30yr_Payment = p_formula( $arm5jumbo1_30yrIR, 360, 10000 );

//Investment Rates:
$investment_15yrIR = "4.500%";
$investment_15yr = "4.893%";
$investment_15yr_Payment = "$77.78";
$investment_30yrIR = "5.000%";
$investment_30yr = "5.482%";
$investment_30yr_Payment = "$53.68";

// Credit Card Rates:
$creditcard_rates_for = "October 1, 2018";

// New Platinum VISA Rates:
$new_visa_platinum_APR = "9.75%";
$new_visa_platinum_max_APR = "17.50%";
$new_visa_platinum_share_secured_APR = "9.75%";
$new_visa_platinum_rewards_APR = "11.75%";
$new_visa_platinum_rewards_max_APR = "18.00%";
$new_visa_signature_APR = "13.25%";
$new_visa_signature_max_APR = "18.00%";

// Platinum VISA Business Rates:
$business_creditcard_rates_for = "September 29, 2017";
$visa_platinum_business_APR = "9.99%";
$visa_platinum_business2_APR = "13.99%";
$visa_business_balance_transfer_cash_advance_APR = "18%";
$visa_business_delinquency_APR = "18%";

// 6 Month CD Rates:
$cd_rates_for = "June 1, 2018";
$cd500_6moAPY = ".85%";
$cd500_6moIR = ".85%";
$cd50000_6moAPY = ".90%";
$cd50000_6moIR = ".90%";
$cd100000_6moAPY = ".95%";
$cd100000_6moIR = ".95%";
// 1 Year CD Rates:
$cd500_1yrAPY = "1.55%";
$cd500_1yrIR = "1.54%";
$cd50000_1yrAPY = "1.60%";
$cd50000_1yrIR = "1.59%";
$cd100000_1yrAPY = "1.65%";
$cd100000_1yrIR = "1.64%";
// 18 Month CD Rates:
$cd500_18moAPY = "1.70%";
$cd500_18moIR = "1.69%";
$cd50000_18moAPY = "1.75%";
$cd50000_18moIR = "1.74%";
$cd100000_18moAPY = "1.80%";
$cd100000_18moIR = "1.79%";
// 18 Month PROMO CD Rates:
$cd500_18mo_promoAPY = "1.75%";
$cd500_18mo_promoIR = "1.74%";
$cd50000_18mo_promoAPY = "1.80%";
$cd50000_18mo_promoIR = "1.79%";
$cd100000_18mo_promoAPY = "1.85%";
$cd100000_18mo_promoIR = "1.83%";
// 2 Year CD Rates:
$cd500_2yrAPY = "1.80%";
$cd500_2yrIR = "1.79%";
$cd50000_2yrAPY = "1.85%";
$cd50000_2yrIR = "1.83%";
$cd100000_2yrAPY = "1.90%";
$cd100000_2yrIR = "1.88%";
// 30 Month CD Rates:
$cd500_30moAPY = "2.10%";
$cd500_30moIR = "2.08%";
$cd50000_30moAPY = "2.15%";
$cd50000_30moIR = "2.13%";
$cd100000_30moAPY = "2.20%";
$cd100000_30moIR = "2.18%";
// 3 Year CD Rates:
$cd500_3yrAPY = "1.95%";
$cd500_3yrIR = "1.93%";
$cd50000_3yrAPY = "2.00%";
$cd50000_3yrIR = "1.98%";
$cd100000_3yrAPY = "2.05%";
$cd100000_3yrIR = "2.03%";
// 5 Year CD Rates:
$cd500_5yrAPY = "2.40%";
$cd500_5yrIR = "2.37%";
$cd50000_5yrAPY = "2.45%";
$cd50000_5yrIR = "2.42%";
$cd100000_5yrAPY = "2.50%";
$cd100000_5yrIR = "2.47%";

// Flex CD Rates:
$cd_flex_APY = "1.40%";
$cd_flex_IR = "1.39%";

// Youth CD Rates:
$cd100_6moAPY = ".85%";
$cd100_6moIR = ".85%";
$cd100_12moAPY = "1.55%";
$cd100_12moIR = "1.54%";

// Money Market Rates:
$moneymarket_rates_for = "June 28, 2018";
$mm150000_over_APY = ".45%";
$mm150000_over_IR = ".45%";
$mm75000_149999_APY = ".35%";
$mm75000_149999_IR = ".35%";
$mm25000_74999_APY = ".30%";
$mm25000_74999_IR = ".30%";
$mm2000_24999_APY = ".20%";
$mm2000_24999_IR = ".20%";
$mm0_2000_APY = ".00%";
$mm0_2000_IR = ".00%";

// Checking Accounts:
$checking_rates_for = "January 1, 2015";
$checkSmart_APY = ".01%";
$checkSmart_IR = ".01%";
$checkPremierClub_APY = ".10%";
$checkPremierClub_IR = ".10%";
$checkBusinessPlus_APY = ".10%";
$checkBusinessPlus_IR = ".10%";
$checkOrganization_APY = ".10%";
$checkOrganization_IR = ".10%";

// Smart Savings and IRA Share Accounts:
$savings_rates_for = "January 1, 2015";
$saveAll_Balances_APY = ".15%";
$saveAll_Balances_IR = ".15%";
$holidayClub_APY = ".50%";
$holidayClub_IR = ".50%";
$summerClub_APY = ".50%";
$summerClub_IR = ".50%";

// Health Savings Accounts:
$hsa_rates_for = "January 1, 2015";
$hsa15000_Over_APY = ".90%";
$hsa15000_Over_IR = ".90%";
$hsa5000_14999_APY = ".65%";
$hsa5000_14999_IR = ".65%";
$hsa1000_4999_APY = ".40%";
$hsa1000_4999_IR = ".40%";
$hsa0_999_APY = ".15%";
$hsa0_999_IR = ".15%";

// Business Savings Share Accounts:
$business_savings_rates_for = "January 1, 2015";
$business_save50000_plus_APY = ".40%";
$business_save50000_plus_IR = ".40%";
$business_save25000_50000_APY = ".30%";
$business_save25000_50000_IR = ".30%";
$business_save10000_25000_APY = ".20%";
$business_save10000_25000_IR = ".20%";
$business_save1500_10000_APY = ".10%";
$business_save1500_10000_IR = ".10%";
$business_save100_1500_APY = ".00%";
$business_save100_1500_IR = ".00%";



?>