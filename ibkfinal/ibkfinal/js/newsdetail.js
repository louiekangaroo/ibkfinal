
$(function() {
 
    getnewsarticles();
    getphotogallery();
});

function getnewsarticles() {
 
    $('div#newsarticles').load('newsdetails.php');
 
}
function getphotogallery() {
 
    $('div#photogallery').load('Photo_Gallery_Dtls.php');
 
}