<?php
// include composer autoload
require 'vendor/autoload.php';
//
// // import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;
//
// // configure with favored image driver (gd by default)
Image::configure(array('driver' => 'gd'));
//
// open an image file
//
for ($i=0; $i<50; $i++){
$img = Image::make('foo.jpg');
//
// // resize image instance
$img->resize(320, 240);
//
// // insert a watermark
// $img->insert('public/watermark.png');
//
// // save image in desired format
$img->save("TEST_RESIZE/bar$i.jpg");
}
?>
