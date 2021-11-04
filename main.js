addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method: "POST", 
        body: JSON.stringify({
            numero: 3
        })
    };
    let peticion = await fetch("api.php", config);
    let json = await peticion.text();
    alert(json);
    console.log(json);
})