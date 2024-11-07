document.addEventListener("DOMContentLoaded",function(){
    const loginForm=document.getElementById("registerForm");
    const nom=document.getElementById("nom");
    const password=document.getElementById("password");
    nom.addEventListener("input", () => validateInput(nom, "nameError", "Nom d'utilisateur requis"));
    password.addEventListener("input", () => validateInput(password, "passwordError", "Mot de passe requis (longueur>=8)", 8));
    loginForm.addEventListener("submit",function(event){
   event.preventDefault();
   const users = JSON.parse(localStorage.getItem("users")) || [];
   const nomValide=validateInput(nom,"nameError","Nom d'utilisateur requis");
   const passwordValide=validateInput(password,"passwordError","Mot de passe requis (longueur>=8)",8);
   if(nomValide && passwordValide)
   {
    const nomValue=nom.value;
    const passwordValue=password.value;
    
     const userExist=users.find(user=>user.nom===nomValue && user.password===passwordValue);
     if(userExist)
     {
        alert("Connexion réussie !");
        loginForm.reset();
        resetIcons(loginForm);
     }
     else{
        alert("Nom d'utilisateur ou mot de passe incorrect");

     }
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
}function resetIcons(registerForm){
    const inputs=registerForm.querySelectorAll('input');
    inputs.forEach(input=>{
        const parentDiv=input.parentNode;
        parentDiv.querySelector(".iconSuccess").style.display = "none";
        parentDiv.querySelector(".iconFailure").style.display = "none";
        input.style.borderColor = "";
    })
}