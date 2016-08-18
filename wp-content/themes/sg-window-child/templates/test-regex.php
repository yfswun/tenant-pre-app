<?php
/**
 * Template Name: Test Regex
 */

$before = '
<article>
	<header class="entry-header">
		<div class="FormLinks">
			<a class="FormAction" href="javascript:window.print()">
				<span class="fa-stack fa-2x">
					<i class="fa fa-square fa-stack-2x" aria-hidden="true"></i>
					<i class="fa fa-print fa-stack-1x fa-inverse" aria-hidden="true"></i>
				</span>
				<span class="LinkText">Print This Page</span>
			</a>
			<a id="email-link"
				class="FormAction"
				href=""
				data-sub_id=""
				data-resultHTML=""
			>
				<span class="fa-stack fa-2x">
					<i class="fa fa-square fa-stack-2x" aria-hidden="true"></i>
					<i class="fa fa-envelope fa-stack-1x fa-inverse" aria-hidden="true"></i>
				</span>
				<span class="LinkText">Send Confirmation Email</span>
			</a>
		</div>
		<div class="clear"></div>
		<h1 class="entry-title">Tenant Pre-Application Submission Result</h1>
	</header>
	<div class="entry-content">
		<div class="TPASubForm"><p class="TPASubForm">Thank you for submitting to the ASIAN, Inc. Tenant Pre-Application.</p><p class="TPASubForm">Based on the information that you have submitted, here are the units for which you are pre-qualified.</p></div><h2 class="TPASubForm">Applicant Contact</h2><div class="TPATableWrapper">
		<table class="TPASubForm"><thead class="TPASubForm"><tr class="TPASubForm"><th class="TPASubForm TPACol4">First Name</th><th class="TPASubForm TPACol4">Last Name</th><th class="TPASubForm TPACol4">Email Address</th><th class="TPASubForm TPACol4">Phone Number</th></tr></thead><tbody class="TPASubForm"><tr class="TPASubForm">
		<td class="TPASubForm TPACol4 AlignCenter" id="first_name">Sylvia</td>
		<td class="TPASubForm TPACol4 AlignCenter" id="last_name">Wun</td>
		<td class="TPASubForm TPACol4 AlignCenter" id="email_add">swun@asianinc.org</td>
		<td class="TPASubForm TPACol4 AlignCenter" id="phone_no"></td></tr></tbody></table>
		</div><h2 class="TPASubForm">Household Information</h2><div class="TPATableWrapper"><table class="TPASubForm"><thead class="TPASubForm"><tr class="TPASubForm"><th class="TPASubForm TPACol4">Number of Household Members</th><th class="TPASubForm TPACol4">Annual Gross Income</th><th class="TPASubForm TPACol4">Annual Asset Amount</th><th class="TPASubForm TPACol4">Total Annual Income</th></tr></thead><tbody class="TPASubForm"><tr class="TPASubForm"><td class="TPASubForm TPACol4 AlignCenter">1</td><td class="TPASubForm TPACol4 AlignCenter">$ 18,000.00</td><td class="TPASubForm TPACol4 AlignCenter">$ 0.00</td><td class="TPASubForm TPACol4 AlignCenter">$ 18,000.00</td></tr></tbody></table></div><h2 class="TPASubForm">Your Pre-Qualified Units</h2><div class="TPATableWrapper"><table class="TPASubForm"><thead class="TPASubForm"><tr class="TPASubForm"><th class="TPASubForm TPACol7">Building Name</th><th class="TPASubForm TPACol7">Unit Name</th><th class="TPASubForm TPACol7">Number of Bedrooms</th><th class="TPASubForm TPACol7">Occupancy</th><th class="TPASubForm TPACol7">Monthly Rent</th><th class="TPASubForm TPACol7">Required<br />Minimum Income</th><th class="TPASubForm TPACol7">Required<br />Maximum Income</th></tr></thead><tbody class="TPASubForm"><tr class="TPASubForm"><td class="TPASubForm TPACol7 AlignCenter"><a href="http://test.asianinc.org/tenantapp/properties/450-ellis/" target="_blank">450 Ellis</a></td><td class="TPASubForm TPACol7 AlignCenter" style="white-space:nowrap;">Studio A</td><td class="TPASubForm TPACol7 AlignCenter">0</td><td class="TPASubForm TPACol7 AlignCenter">1</td><td class="TPASubForm TPACol7 AlignCenter">$ 687.00</td><td class="TPASubForm TPACol7 AlignCenter">$ 16,488.00</td><td class="TPASubForm TPACol7 AlignCenter">$ 28,550.00</td></tr><tr class="TPASubForm"><td class="TPASubForm TPACol7 AlignCenter"><a href="http://test.asianinc.org/tenantapp/properties/735-ellis/" target="_blank">735 Ellis</a></td><td class="TPASubForm TPACol7 AlignCenter" style="white-space:nowrap;">Studio A</td><td class="TPASubForm TPACol7 AlignCenter">0</td><td class="TPASubForm TPACol7 AlignCenter">1</td><td class="TPASubForm TPACol7 AlignCenter">$ 687.00</td><td class="TPASubForm TPACol7 AlignCenter">$ 16,488.00</td><td class="TPASubForm TPACol7 AlignCenter">$ 28,550.00</td></tr></tbody></table></div><div class="TPASubForm" style="margin-top:20px;"><p class="TPASubForm">If you are interested in applying for any of the pre-qualified rental units, please download and fill out the <a target="_blank" href="https://docs.google.com/uc?export=download&#038;id=0Bxp9hNGllyo3MlN3T3Bia1Z6dTQ">property application</a>. Completed and signed applications must either be mailed to or dropped off at our <a target="_blank" href="https://www.google.com/maps/place/1167+Mission+St,+San+Francisco,+CA+94103">San Francisco headquarters</a>.</p></div><div class="TPASubForm" style="margin-top:20px; margin-bottom:20px;"><p class="TPASubForm">For further assistance, please <a href="http://test.asianinc.org/tenantapp/contact-us/" target="_blank">contact us</a>.</p></div><div style="display:none"><p id="email" data-email="&#115;wu&#110;&#64;as&#105;a&#110;&#105;nc&#46;&#111;&#114;&#103;"></p><p id="pre-app-sub" data-sub-id="923"></p></div>						</div><!-- #entry-content -->
</article>';

// $before = '<table class="TPASubForm"><thead class="TPASubForm"><tr class="TPASubForm"><th class="TPASubForm TPACol4">First Name</th><th class="TPASubForm TPACol4">Last Name</th><th class="TPASubForm TPACol4">Email Address</th><th class="TPASubForm TPACol4">Phone Number</th></tr></thead><tbody class="TPASubForm"><tr class="TPASubForm"><td class="TPASubForm TPACol4 AlignCenter" id="first_name">Sylvia</td><td class="TPASubForm TPACol4 AlignCenter" id="last_name">Wun</td><td class="TPASubForm TPACol4 AlignCenter" id="email_add">swun@asianinc.org</td><td class="TPASubForm TPACol4 AlignCenter" id="phone_no"></td></tr></tbody></table>';

echo '<!DOCTYPE html><head></head><body>';
echo '<h1>Before</h1>';
echo '<pre>';
echo $before;
echo '</pre>';
$after = test_replace_css( $before );
echo '<h1>After</h1>';
echo '<pre>';
echo $after;
echo '</pre>';
echo '</body></html>';

function test_replace_css( $str ) {

	$line_spacing = 'line-height:120%; padding:5px;';
	$table_styling = 'border-collapse:collapse; border:1px solid #999999;';
	$align_center = 'text-align:center;';
	$align_right = 'text-align:right;';
	$th_color = 'color:#b20000;';
	$td_color = 'color:#303030;';
	
	$classes = array(
		'/<table\b[^>]*>/',
		'/<thead\b[^>]*>/',
		'/<tbody\b[^>]*>/',
		'/<tr\b[^>]*>/',
		'/<th\b[^>]*>/',
		'/<td(?=[^>]*?class="[^>]*?AlignCenter[^>]*?")[^>]*?>/',
		'/<td(?=[^>]*?class="[^>]*?AlignRight[^>]*")[^>]*?>/',
		'/<p class="TPASubForm">/',
		'/ class="TPASubForm"/',
		'/class="TPATableWrapper"/',
		);

	$inline_css = array(
		'<table style="' . $table_styling . '">',
		'<thead>',
		'<tbody>',
		'<tr>',
		"<th style='$th_color $align_center $table_styling $line_spacing'>",
		"<td style='$td_color $align_center $table_styling $line_spacing'>",
		"<td style='$td_color $align_right $table_styling $line_spacing'>",
		'<p style="' . $line_spacing . '">',
		'',
		'style="overflow:auto;"',
	);
	
	// $out = str_replace($classes, $inline_css, $str);
	$out = preg_replace($classes, $inline_css, $str);

	return $out;
}
?>