const name=document.getElementById('name');
const sem=document.getElementById('semester');
const phone=document.getElementById('phone');
const mail=document.getElementById('email');
const story=document.getElementById('area');
const btn=document.getElementById('btn');
const form=document.getElementById('myForm');

form.addEventListener('submit',function(e){
    checkInputs(e);
    //e.preventDefault();
});
function checkInputs(e){
    const user=name.value.trim();
    const semValue=parseInt(sem.value);
    const phn=parseInt(phone.value);
    
    if(user.length<6){
        alert("User Name should be atleast 6 characters long");
        e.preventDefault();
    }
    if(semValue<1 || semValue>8){
        alert("Invalid Semester");
        e.preventDefault();
    }
    if(phn.toString().length!=10){
        alert("Invalid Number");
        e.preventDefault();
    }

}