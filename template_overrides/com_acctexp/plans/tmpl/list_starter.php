<?php
/**
 * @version $Id: list.php
 * @package AEC - Account Control Expiration - Membership Manager
 * @subpackage Main Frontend
 * @copyright 2012 Copyright (C) David Deutsch
 * @author David Deutsch <skore@valanx.org> & Team AEC - http://www.valanx.org
 * @license GNU/GPL v.3 http://www.gnu.org/licenses/gpl.html or, at your option, any later version
 */

// Dont allow direct linking
( defined('_JEXEC') || defined( '_VALID_MOS' ) ) or die( 'Direct Access to this location is not allowed.' ) ?>
<div class="aec-planlist">
	<div class="aec-planlist-explanation">
		<ul class="plan-details-custom">
			<li class="details-length">Site Access<br /><small>(for Updates &amp; Support)</small></li>
			<li class="details-support">Support Time<br /><small>(Hands-On Support by our Staff)</small></li>
			<li class="details-price price-highlight">Up to 20€ Off:<br />Only in March!</li>
		</ul>
	</div>
	<?php foreach ( $list as $litem ) { ?>
		<div class="aec-planlist-<?php echo $litem['type'] ?>" id="aec-<?php echo $litem['type'] . '-' . $litem['id'] ?>">
			<h2><?php echo $litem['name'] ?></h2>
			<ul class="plan-details-custom">
				<li class="details-length"><?php echo $litem['meta']['length'] ?></li>
				<li class="details-support"><?php echo $litem['meta']['support'] ?></li>
				<li class="details-price price-highlight">
					<span class="price-strikethrough"><?php echo $litem['meta']['regular_price'] ?></span>
					<br /><?php echo $litem['meta']['price'] ?>
				</li>
			</ul>
			<?php if ( $litem['type'] == 'group' ) {
				@include( $tmpl->tmpl( 'groupbtn' ) );
			} else { ?>
				<div class="aec-processor-buttons">
					<?php foreach ( $litem['gw'] as $gwitem ) { ?>
						<?php @include( $tmpl->tmpl( 'planbtn' ) ); ?>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	<?php } ?>
</div>
