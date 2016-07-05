<div id="recranet<?php echo ($params->get('view') !== 'default' ? '-' . $params->get('view') : ''); ?>-container" data-eq-pts="small: <?php echo $params->get('breakpointSmall'); ?>, medium: <?php echo $params->get('breakpointMedium'); ?>, large: <?php echo $params->get('breakpointLarge'); ?>">
    <ng-view autoscroll="true"></ng-view>
</div>

<?php if ($params->get('sdk')) : ?>
    <script type="text/javascript">
        var recranetConfig = <?php echo json_encode($recranetConfig); ?>;

        (function(d, random) {
            var l = d.createElement('link'); l.rel = 'stylesheet'; l.type = 'text/css';
            l.href = 'https://recranet.com/sdk/sdk.css?' + random + '=' + random + '&organization=' + recranetConfig.organization;
            var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = 'https://recranet.com/sdk/sdk.js?' + random + '=' + random;
            var h = d.getElementsByTagName('head')[0]; h.appendChild(l); h.appendChild(s);
        })(document, (new Date()).getTime());
    </script>
<?php endif; ?>
