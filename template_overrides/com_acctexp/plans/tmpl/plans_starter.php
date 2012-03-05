<?
/**
 * @version $Id: plans.php
 * @package AEC - Account Control Expiration - Membership Manager
 * @subpackage Main Frontend
 * @copyright 2012 Copyright (C) David Deutsch
 * @author David Deutsch <skore@valanx.org> & Team AEC - http://www.valanx.org
 * @license GNU/GPL v.3 http://www.gnu.org/licenses/gpl.html or, at your option, any later version
 */

// Dont allow direct linking
( defined('_JEXEC') || defined( '_VALID_MOS' ) ) or die( 'Direct Access to this location is not allowed.' ) ?>
<div id="aec">
	<div id="aec-plans">
		<div class="starter-headline">
			<h1>Every Account includes Software, Setup and Support</h1>
			<h3>Five years in business. 40,000 Sites and counting.</h3>
		</div>
		<?php if ( !empty( $cart ) ) { @include( $tmpl->tmpl( 'backtocart' ) ); } ?>
		<div class="subscriptions subscriptions-starter">
			<?php @include( $tmpl->tmpl( 'list_starter' ) ); ?>
			<div class="subscriptions-explanation">
				<h3>What do I get?</h3>
				<p>With your membership, you can get the <strong>latest Software and Updates</strong> as well as <strong>Support</strong> through our <strong>Ticket System, Software Manual, Video Tutorials and our Community Forums</strong>.</p>
				<p><strong>A membership is not required to run our software</strong> - you can <strong>install it as many times as you want and use it forever</strong>.</p>
				<h3>30 minutes of support? What does that mean?</h3>
				<p>With every membership, you get at least 30 minutes of support - <strong>enough to have us  set up the component on your site</strong> and still have time left for further questions.</p>
				<p><strong>Our Hands-On Support</strong> (in our Ticket System) is pre-paid and available for an <strong>unlimited number of domains</strong>. We only "charge" you the ticket time we used on your request - the only requirement is an active account. You can add ticket time to your account with us independently of your membership.</p>
				<div class="halfblock">
					<h3>How will I be billed?</h3>
					<p>Here at Valanx, there are <strong>no recurring charges or hidden costs</strong>.</p>
					<p>You are only billed when you choose to purchase Access or Support time, so they are paid in advance and then used as you go along.</p>
					<h3>How can I pay?</h3>
					<p>At the moment, we <strong>only accept payments through PayPal</strong>.</p>
					<p><strong>Don't have a PayPal Account?</strong> Just use the "Account Optional" feature and pay with your Credit Card directly.</p>
					<p>You can also pay via eCheck, but please note that they take a while to process and we hold our services until they are fully cleared.</p>
				</div>
				<div class="halfblock">
					<h3>14 day money back</h3>
					<p>If you're not happy with AEC, we offer a <strong>14 day money-back policy on your signup</strong>.</p>
					<p>The only two exceptions are: <strong>support time</strong> - if you have used support time, we will have to deduct that from your refund - and <strong>existing customers</strong>.</p>
					<h3>Reduced Prices on Renewing</h3>
					<p>Existing members at Valanx get reduced prices when they renew their account:</p>
					<table class="table table-striped">
						<thead>
							<tr>
								<th colspan="2">Access</th>
								<th colspan="2">Support</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>4 months</td>
								<td>24 €</td>
								<td>1 hour</td>
								<td>35 €</td>
							</tr>
							<tr>
								<td>8 months</td>
								<td>40 €</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>1 year</td>
								<td>54 €</td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
