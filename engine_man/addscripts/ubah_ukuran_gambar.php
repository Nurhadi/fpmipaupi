<?php
	/**
	 * script php ubah ukuran gambar on the fly (cached) tidak merubah gambar asli dengan constraint ratio.
	 * Copyright (c) 2011 Sukandani - zuka(at)zukatsu(dot)tk | http://www.zukatsu.tk
	 * @author Sukandani
	 * @version 1.0
	 */
	$target_path=$_GET['image'];	
	$lebar=$_GET['lebar'];
	$tinggi=$_GET['tinggi'];
	$posisi_titik=strrpos($target_path,'.');
	$exts=substr($target_path,$posisi_titik+1);
	$exts=strtolower($exts);
	$max_width=$lebar;
	$max_height=$tinggi;
	if(empty($max_width))
	$max_width=320;
	if(empty($max_height))
	$max_height=240;
	$size=getimagesize($target_path);
	$width=$size[0];
	$height=$size[1];
	$x_ratio=$max_width/$width;
	$y_ratio=$max_height/$height;
	if(($width<=$max_width)&&($height<=$max_height)){
		$tn_width=$width;
		$tn_height=$height;
	}
	else if(($x_ratio*$height)<$max_height){
		$tn_height=ceil($x_ratio*$height);
		$tn_width=$max_width;
	}
	else{
		$tn_width=ceil($y_ratio*$width);
		$tn_height=$max_height;
	}
	if(($exts=='jpg')||($exts=='jpeg'))
	$src=imagecreatefromjpeg($target_path);
	else if($exts=='png')
	$src=imagecreatefrompng($target_path);
	else if($exts=='gif')
	$src=imagecreatefromgif($target_path);
	$dst=imagecreatetruecolor($tn_width,$tn_height);
	imagealphablending($dst, false);
	imagesavealpha($dst,true);
	$transparent = imagecolorallocatealpha($dst, 255, 255, 255, 127);
	imagefilledrectangle($dst, 0, 0, $tn_width, $tn_height, $transparent);
	imagecopyresized($dst,$src,0,0,0,0,$tn_width,$tn_height,$width,$height);

	if(($exts=='jpg')||($exts=='jpeg'))
	{
	header("Content-type: image/jpeg");
	imagejpeg($dst);
	}
	else if($exts=='png')
	{
	header("Content-type: image/png");
	imagepng($dst);
	}
	else if($exts=='gif')
	{
	header("Content-type: image/gif");
	imagegif($dst);
	}
	imagedestroy($src);
	imagedestroy($dst);
?>