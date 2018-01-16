<?php
function website_wetter()
            {

                $api = simplexml_load_string(utf8_encode(file_get_contents("feed://weather.yahooapis.com/forecastrss?w=641148&u=c")));

                $wetter = array();

                $wetter['stadt'] = $api->rss->channel->item->title->data;
            }

            $wetter = website_wetter();

            echo "<h1>".$wetter['stadt'].":</h1>\n";
?>
