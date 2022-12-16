(()=>{

     'use strict'
    const java=document.querySelector('#javas');
    const relato=document.querySelector('#relato');
    const titulo=document.querySelector('#titulo');
    const enlace1=document.querySelector('#enlace1');
    const enlace2=document.querySelector('#enlace2');
    const enlace3=document.querySelector('#enlace3');
    const correo=document.querySelector('#correo');

    
    const velocidad=120;
    let i=0;
    
    
    let str=titulo.innerHTML;
    titulo.innerHTML="";
    
    const escrituraAutomatica=()=>{
    if(i<str.length){
    titulo.innerHTML+=str.charAt(i); //cada tecla
    i++;
    setTimeout(escrituraAutomatica,velocidad);
    
    }
    };
    setTimeout(escrituraAutomatica,velocidad);
    
    
    
    
    //CARRUSEL 
    
    let j=0;
    var cfotos=document.querySelector('#fotosc');
    var imgf=document.createElement('img'); 
    const fotos=()=>{
    
    if(j<4){
    j++;
    imgf.src=`/img/foto${j}.png`;
    cfotos.style.opacity = 1;
    cfotos.append(imgf);
    setTimeout(fotos,5000);
    
    if(j==4){
    j=0;
    }
    
    }
    
    }
    
    setTimeout(fotos,1);
    
    
    
    
    
    
    
    ////////validar input
    const validarNumero=(event)=>{
    
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
             }
             
             return true;
    }
    


    


    
    
    

})();




