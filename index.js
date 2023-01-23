function validateform(){ 
var email=document.myform.email.value;  
var phone=document.myform.phone.value;

console.log(email)
console.log(phone);
    if (email==null || phone==""){  
    alert("Email & phone number can't be blank");  
    return false;  
    }else if(phone.length!=10){
    alert("Mobile number must me 10 digits");  
    return false;  
    } 
}