<?php 
/* php sandbox */
/* phpinfo(); */

print "hello csi-280<br>"; 

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://raw.github.com/abthefish/sphp/master/readme.txt");


        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);     

print "$output";

print "good-bye csi-280<br>"; 

?>
