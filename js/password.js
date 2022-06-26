let pass=document.getElementById('password');
let alert=document.getElementById('alert');
let btn=document.getElementById('c_pass');
let form=document.getElementById('form');


pass.addEventListener('input',()=>{
let passVal=pass.value;
let passLen=passVal.length;
console.log("len : "+passLen);
   if(passLen>5){
btn.disabled=false;


   }


});
