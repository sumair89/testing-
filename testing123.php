 <?php
 ob_start();
 passthru("ffmpeg -i working_copy.flv  2>&1");
 $duration = ob_get_contents();
 $full = ob_get_contents();
 ob_end_clean();
 $search = "/duration.*?([0-9]{1,})/";
 print_r($duration);
 $duration = preg_match($search, $duration, $matches, PREG_OFFSET_CAPTURE, 3);
 print_r('<pre>');
 print_r($matches[1][0]);
 print_r($full);
 ?>
 
