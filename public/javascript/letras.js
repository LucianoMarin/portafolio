
let texto=[];
let letras=[];
let indice=[];



for(i=0; i<=5; i++){
    texto[i]="texto"+i;
    letras[i]="letras"+i;

    texto[i]=document.querySelector(`#texto${i}`);
    letras[i]=texto[i].innerText;
    texto[i].innerText="";
    indice[i]=0;


}

automatico=()=>{

if(indice[0]<=letras[0].length){
    
texto[0].innerHTML+=letras[0].charAt(indice[0]);
indice[0]++;

}
else if(indice[1]<=letras[1].length){
texto[1].innerHTML+=letras[1].charAt(indice[1]);
indice[1]++;

}

else if(indice[2]<=letras[2].length){

texto[2].innerHTML+=letras[2].charAt(indice[2]);
indice[2]++;

}
else if(indice[3]<=letras[3].length){
texto[3].innerHTML+=letras[3].charAt(indice[3]);
indice[3]++;

}
else if(indice[4]<=letras[4].length){
texto[4].innerHTML+=letras[4].charAt(indice[4]);
indice[4]++;

}
else if(indice[5]<=letras[5].length){
texto[5].innerHTML+=letras[5].charAt(indice[5]);
indice[5]++;

}
setTimeout(automatico,60);
}
setTimeout(automatico,60);

botonSalir.addEventListener('click',function(){

    for(i=0; i<=5; i++){
    texto[i].innerHTML="";
    indice[i]=letras[i].length;
    texto[i].innerHTML+=letras[i];

  

    
    }
});


