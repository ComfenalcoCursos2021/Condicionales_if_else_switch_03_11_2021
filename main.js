addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method: "POST", 
        body: JSON.stringify({
            numero: 3
        })
    };
    let peticion = await fetch("https://pruebacofenalco.000webhostapp.com/Condicionales_if_else_switch_03_11_2021/api.php", config);
    let json = await peticion.text();
    alert(json);
    console.log(json);
})