
$(function() {
 
    getlogs();
    //getphotogallery();
});

function getlogs() {
 
    $('table#logs').load('getlogs.php');
 
}
//function getphotogallery() {
 
   // $('div#photogallery').load('Photo_Gallery_Dtls.php');
 
//}