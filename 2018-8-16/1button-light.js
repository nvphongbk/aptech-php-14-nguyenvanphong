function changeImage() {
    var img = document.getElementById('myImage');
    //console.log(img.src.includes('bulbon'))
    if (img.src.includes('bulbon')) {
        //console.log('dung roi');
        img.src = "./pic_bulboff.gif";
    } else {
        img.src = "./pic_bulbon.gif";
    }
}