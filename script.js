let slideleft= document.getElementById("slide-btn-left")
let slideright=document.getElementById("slide-btn-right")
const imgitem=document.querySelectorAll(".image-item")


let startslider=0
let endslider=(imgitem.length-1)*100
slideleft.addEventListener("click",()=>{
    if(startslider < 0){
        startslider=startslider+100;
    }
    console.log(startslider)
    imgitem.forEach(element =>{
        element.style.transform=`translateX(${startslider}%)`;
    })
})
slideright.addEventListener("click",()=>{
    if(startslider >= -endslider+100){
        startslider=startslider-100;
    }
    console.log(startslider)
    imgitem.forEach(element =>{
        element.style.transform=`translateX(${startslider}%)`;
    })
})