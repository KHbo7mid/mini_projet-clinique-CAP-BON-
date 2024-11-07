document.addEventListener("DOMContentLoaded", function () {
   let users=JSON.parse(localStorage.getItem("users"))||[];
   const registerForm=document.getElementById("registerForm");
   const nom=document.getElementById("nom");
   const email=document.getElementById("email");
   const password=document.getElementById("password");
   nom.addEventListener("input", () => validateInput(nom, "nameError", "Nom d'utilisateur requis"));
   email.addEventListener("input", () => validateEmail(email, "emailError"));
   password.addEventListener("input", () => validateInput(password, "passwordError", "Mot de passe requis (longueur>=8)", 8));
   registerForm.addEventListener("submit",function(event){
    event.preventDefault();
   
    const nomValide=validateInput(nom,"nameError","Nom d'utilisateur requis");
    const emailValide=validateEmail(email,"emailError");
    const passwordValide=validateInput(password,"passwordError","Mot de passe requis (longueur>=8)",8);
    if(nomValide && emailValide && passwordValide)
    {
        users.push({
            nom:nom.value,
            email:email.value,
            password:password.value
        });
        localStorage.setItem("users",JSON.stringify(users));
        alert("Inscription reussie!");
        registerForm.reset();
        resetIcons(registerForm);
        
    }

   })

});
function validateInput(input,errorId,errorMessage,minLength=1)
{
    const errorSpan=document.getElementById(errorId);
    const parentDiv=input.parentNode;
    if(input.value.trim()==='' || input.value.length<minLength){
        errorSpan.textContent=errorMessage;
        input.style.borderColor="red";
        parentDiv.querySelector(".iconSuccess").style.display="none";
        parentDiv.querySelector(".iconFailure").style.display="block";
        return false;
    }else{
        errorSpan.textContent="";
        input.style.borderColor="green";
        parentDiv.querySelector(".iconSuccess").style.display="block";
        parentDiv.querySelector(".iconFailure").style.display="none";
        return true;
    }
}
function validateEmail(email,errorId)
{
const errorSpan=document.getElementById(errorId);
const parentDiv=email.parentNode;
const formatEmail=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!formatEmail.test(email.value))
    {
        errorSpan.textContent="Email invalide";
        email.style.borderColor="red";
        parentDiv.querySelector(".iconSuccess").style.display="none";
        parentDiv.querySelector(".iconFailure").style.display="block";
        return false;

    }else{
        errorSpan.textContent="";
        email.style.borderColor="green";
        parentDiv.querySelector(".iconSuccess").style.display="block";
        parentDiv.querySelector(".iconFailure").style.display="none";
        return true;
    }
}
function resetIcons(registerForm){
    const inputs=registerForm.querySelectorAll('input');
    inputs.forEach(input=>{
        const parentDiv=input.parentNode;
        parentDiv.querySelector(".iconSuccess").style.display = "none";
        parentDiv.querySelector(".iconFailure").style.display = "none";
        input.style.borderColor = "";
    })
}