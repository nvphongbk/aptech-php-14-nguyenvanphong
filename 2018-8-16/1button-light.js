var image_tracker ='f';
var f= src="pic_bulboff.gif"
var t= src="pic_bulbon.gif"
function batTatDen() {
    var image = document.getElementById('js-img');
    if (image_tracker =='f') {
        image.src = "pic_bulbon.gif";
        image_change ='t';
    }else{
        image.src = "pic_bulboff.gif";
        image_tracker ='f';
    }
}

