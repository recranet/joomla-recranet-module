<div id="recranet-container" data-eq-pts="small: 720, medium: 940, large: 1140">
    <ng-view autoscroll="true"></ng-view>
</div>

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
