<?php

$db=new PDO('mysql:host=localhost;dbname=vclassroom','root', '');
$sel=$db->query("SELECT * from video_material where week='Week 1'");
$sel1=$db->query("SELECT * from pdf_material where week='Week 1'");
$sel2=$db->query("SELECT * from document_material where week='Week 1'");
$sel3=$db->query("SELECT * from assignment where week='Week 1'");
?>
<div>
<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="700" height="300"
      poster="http://video-js.zencoder.com/oceans-clip.png"
      data-setup="{}">
    <source src="../server/<?php
	while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		echo $rows['e_path'];
	}
	
	 ?>" type='video/mp4' />
    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>

</div>