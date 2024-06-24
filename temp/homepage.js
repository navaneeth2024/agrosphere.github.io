let text=document.getElementById('text');
let leaf=document.getElementById('leaf');
let hill1=document.getElementById('hill1');
let hill4=document.getElementById('hill4');
let hill5=document.getElementById('hill5');
window.addEventListener('scroll',()=>{
    let value=window.scrollY;
    text.style.marginTop=value*.8+'px';
    leaf.style.top=value*-1.5+'px';
    leaf.style.left=value*1.5+'px';
    hill5.style.left=value*1.5+'px';
    /* hill4.style.left=value*-1.5+'px';
    hill1.style.top=value*.7+'px';  */
});

function toggle(){
    var blur=document.getElementById('blur');
    blur.classList.toggle('active');
    var popup=document.getElementById('popup');
    popup.classList.toggle('active');
} 