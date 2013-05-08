<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="<?=base_url('twd-theme/videojs/video-js.css');?>" rel="stylesheet">
    <script src="<?=base_url('twd-theme/videojs/video.js');?>"></script>
    <link rel="stylesheet" href="<?=base_url('twd-theme/style.css');?>">
</head>
<body>
    <div class="container">
        <h2><a href="http://www.tutorial-webdesign.com/upload-file-video-codeigniter">Tutorial-webdesign.com</a></h2>
        <small>Demo upload file using codeigniter | &rarr; <a href="http://www.tutorial-webdesign.com/upload-file-video-codeigniter">Back to tutorial</a></small>
        <hr>
    	<strong>File Name:</strong> <?php echo $video_detail['file_name'];?><br>
        <small>Click to play</small>
        <video id="video1" class="video-js vjs-default-skin" width="480" height="320" poster="http://www.tutorial-webdesign.com/wp-content/themes/nurumah/img/logo-bg.png"
            data-setup='{"controls" : true, "autoplay" : false, "preload" : "auto"}'>
            <source src="http://localhost/ci-mvc/video/<?=$video_detail['file_name'];?>" type="video/x-flv">
            <source src="http://localhost/ci-mvc/video/<?=$video_detail['file_name'];?>" type='video/mp4'>
        </video>

        <pre>
            <?php print_r($video_detail);?>
    	</pre>
        <hr>
        FILE NAME: <?php echo $video_detail['file_name'];?>
    </div>
</body>
</html>