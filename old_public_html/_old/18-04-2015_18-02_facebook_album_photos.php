<?php

	/*

	https://developers.facebook.com/tools/explorer/

	Application: Asos Altınkum Motel

	https://graph.facebook.com/oauth/access_token?client_id=561033174039783&client_secret=e5986dc670b52695fd318f1a86d3aa2c&grant_type=fb_exchange_token&fb_exchange_token={CHANGE-HERE}

	GET TOKEN AND CHANGE BELOW TOKEN

	Last update: 08.04.2016

	*/

	error_reporting(0);

	@$access_token = file_get_contents('/home/asosalti/public_html/update/.token');

	// $access_token = 'access_token=EAAHZBQbcLvOcBAMbR5E3UVrTe7V0nY5sPzS6iAweoF5Oe4hABx4ZA1d046hnXwSVYAiQrodxao7hQ2J9JcsDX5AtwGwJgFuAkHtk8WMVboPcXBWCruYfwdpjIt6stVmiQyYkulVfJZBiiSZA2vMzq0LM6lHTgCIZD&expires=5183999';

	@$json = file_get_contents('https://graph.facebook.com/v2.3/664718150223158/photos?fields=source&'.$access_token);

	@$obj = json_decode($json);

	if(isset($obj) && $obj->data):

		foreach($obj->data as $i => $img):

			if($i % 4 == 0)
			{
				if($i != 0)
					echo '</ul>';

				echo '<ul class="thumbnails">';
			}

			echo '<li class="span3">
					<a href="'.$img->source.'" rel="gallery" class="thumbnail">
					<img src="'.$img->source.'" alt="">
					</a>
				</li>';

		endforeach;

		if(count($obj->data) > 0)
			echo '</ul>';

	endif;
