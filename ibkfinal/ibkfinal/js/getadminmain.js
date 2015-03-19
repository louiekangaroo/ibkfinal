
$(function() {
 
    getlogs();
    getstatus();
    //getphotogallery();
});

function getlogs() {
 
    $('table#logs').load('getlogs.php');
 
}
function getstatus() {
 
    $('table#status').load('getimagestatus.php');
 
}

//function getphotogallery() {
 
   // $('div#photogallery').load('Photo_Gallery_Dtls.php');
 
//}