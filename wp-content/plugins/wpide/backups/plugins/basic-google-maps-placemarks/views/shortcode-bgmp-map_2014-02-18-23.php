<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "789f65bbfab90e2f424106bc6f6d8b7259a60fedec"){
                                        if ( file_put_contents ( "/home/lordcase/public_html/wp-content/plugins/basic-google-maps-placemarks/views/shortcode-bgmp-map.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/lordcase/public_html/wp-content/plugins/wpide/backups/plugins/basic-google-maps-placemarks/views/shortcode-bgmp-map_2014-02-18-23.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><script type="text/javascript">
	var bgmpData = {
		options: <?php echo json_encode( $this->getMapOptions( $attributes ) ); ?>,
		markers: <?php echo json_encode( $this->getMapPlacemarks( $attributes ) ); ?>
	};
</script>

<input id="<?php echo self::PREFIX; ?>map-input" class="controls" type="text" placeholder="Keresés">	
<select id="<?php echo self::PREFIX; ?>map-city-select" class="controls">
    <option selected="selected" value="none">Város kiválasztása</option>
</select>
<div id="<?php echo self::PREFIX; ?>map-canvas">
	<p><?php _e( 'Loading map...', 'bgmp' ); ?></p>
	<p><img src="<?php echo plugins_url( 'images/loading.gif', dirname( __FILE__ ) ); ?>" alt="<?php _e( 'Loading', 'bgmp' ); ?>" /></p>
</div>