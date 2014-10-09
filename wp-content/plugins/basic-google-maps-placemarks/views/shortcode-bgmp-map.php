<script type="text/javascript">
	var bgmpData = {
		options: <?php echo json_encode($this->getMapOptions($attributes)); ?>,
		markers: <?php echo json_encode($this->getMapPlacemarks($attributes)); ?>
	};
</script>

<!--
<input id="<?php echo self::PREFIX; ?>map-input" class="controls" type="text" placeholder="Keresés" />
-->
<div id="<?php echo self::PREFIX; ?>map-city-select-container">
    <select id="<?php echo self::PREFIX; ?>map-city-select" class="controls">
        <option selected="selected" value="">Város kiválasztása</option>
    </select>
</div>
<div id="<?php echo self::PREFIX; ?>map-canvas-container">
<div id="<?php echo self::PREFIX; ?>map-canvas">
	<p><?php _e( 'Loading map...', 'bgmp' ); ?></p>
	<p><img src="<?php echo plugins_url( 'images/loading.gif', dirname( __FILE__ ) ); ?>" alt="<?php _e( 'Loading', 'bgmp' ); ?>" /></p>
</div>
<a id="<?php echo self::PREFIX; ?>map-partner" href="http://smilepartner.hu">Legyen a partnerünk!</a>
</div>