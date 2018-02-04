install xampp


android : class utils.java    
    public static final String urlUpload = "http://**yourPCIP**/savetofile.php";

add savetofile to ".../xampp/htdocs"
add new folder "uploads to ".../xampp/htdocs"

download "https://github.com/tensorflow/models"

in php file:
$output = shell_exec('python **modelsPATH**\models\tutorials\image\imagenet\classify_image.py --image_file=**xamppPATH**\htdocs\uploads\\'.$name.'.JPG')


PS : Python and xampp shall be in C:/
all the **words** must be in replaced
replace **yourPCIP** AFTER  connecting to the phone's hotspot and execute "ipconfig" in cmd to know it 
