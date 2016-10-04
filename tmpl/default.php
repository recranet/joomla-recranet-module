<?php
/**
 * @copyright Recranet B.V. 2016
 */

defined('_JEXEC') or die;

$initializer = $params->get('enable_initializer', false) ? ' recranet-container-init' : '';
$action = $params->get('action', false) ? ' action="' . $params->get('action', '') . '"' : '';

?>
<div class="recranet-container<?php echo $initializer; ?>"<?php echo $initializer; ?> data-eq-pts="small: <?php echo $params->get('breakpointSmall'); ?>, medium: <?php echo $params->get('breakpointMedium'); ?>, large: <?php echo $params->get('breakpointLarge'); ?>">
    <?php
        echo '<recranet-' . $params->get('view') . $action . '></recranet-' . $params->get('view') . '>';
    ?>
</div>
