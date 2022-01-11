var imgs = document.getElementById('imgs');
var cantImgs = document.getElementById('imgs').children;
var triggPrev = document.getElementById('triggPrev');
var triggNext = document.getElementById('triggNext');
var pos = 0;

function dezIzq(p){
    if(p != (cantImgs.length - 1)){
        imgs.style.transform = `translateX(-${(p + 1) * 100}%)`;
        pos += 1;
    }else{
        imgs.style.transform = `translateX(-0%)`;
        pos = 0;
    }
}
function dezDer(p){
    if(p != 0){
        imgs.style.transform = `translateX(-${p * 100 - 100}%)`;
        pos -= 1;
    }else{
        imgs.style.transform = `translateX(-${(cantImgs.length - 1) * 100}%)`;
        pos = cantImgs.length - 1;
    }
}

triggPrev.addEventListener('click',()=>{dezDer(pos);});
triggNext.addEventListener('click',()=>{dezIzq(pos);});
