<?php
    $json = json_decode(file_get_contents('php://input'),true);
 
    $name = $json["name"]; //within square bracket should be same as Utils.imageName & Utils.image
    $image = $json["image"];
 
    $response = array();
 
    $decodedImage = base64_decode("$image");
 
    $return = file_put_contents("uploads/".$name.".JPG", $decodedImage);
 
    if($return !== false){
        $response['success'] = 1;
        $response['message'] = "Image Uploaded Successfully";
	//$command = shell_exec();
	$output = shell_exec('python C:\Users\chede\Desktop\models\tutorials\image\imagenet\classify_image.py --image_file=C:\xampp\htdocs\uploads\\'.$name.'.JPG');
	// $output = exec('python ');
	$response['data'] = $output;
    }else{
        $response['success'] = 0;
        $response['message'] = "Image Uploaded Failed";
    }
 
    echo json_encode($response);
?>
