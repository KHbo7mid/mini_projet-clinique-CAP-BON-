function convertirDevice()
{

    const taux={
        "USD":0.32,
        "EUR":0.30,
        "TND":1
    };
    const list_prix =document.getElementsByClassName("prix");
    
    const selectDevice=document.getElementById("selectDevice");
    for (let i=0;i<list_prix.length;i++)
    {
        const prix=list_prix[i];
        const prix_original=parseFloat(prix.getAttribute("data-price"));
        const prix_Convert=prix_original*taux[selectDevice.value];
        prix.textContent=`${prix_Convert.toFixed(2)} ${selectDevice.value}`
    }
   
    
    
}

document.getElementById("selectDevice").addEventListener("change",convertirDevice);