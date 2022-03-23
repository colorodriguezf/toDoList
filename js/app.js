"use strict"
document.addEventListener("DOMContentLoaded", getTasks);
let dataNumero= document.getElementById("dataNumero");
let dataMes = document.getElementById("dataMes");
let dataAño = document.getElementById("dataAño");
let dataText = document.getElementById("dataText");

// Contenedor tareas
let contenedorTareas= document.getElementById("contenedorTareas");

let setDate = () => {
    dataNumero.innerHTML="2";
    let date = new Date();
    console.log(date);
    dataNumero.textContent = date.toLocaleString('es', { day: 'numeric'});
    dataText.textContent = date.toLocaleString('es', { weekday: 'long'});
    dataMes.textContent = date.toLocaleString('es', { month: 'short'});
    dataAño.textContent = date.toLocaleString('es', { year: 'numeric'});
}
setDate();

let API_URL = "api/tarea";

let app = new Vue({
    el: "#app",
    data: {
        tareas: [],
        total:0
    },
    methods: {
        deleteComment: async function (id) {
            try {
                let response = await fetch (API_URL+"/"+id, {
                    "method":"DELETE",
                });
                if (response.ok) {
                    console.log("Tarea eliminada con exito");
                }
            }
            catch (e) {
                console.log(e);
            }
            getTasks();
        }
    },
    realizada: async function (id) {
        let usuario = document.getElementById("nombreUsuario");
        usuario = usuario.dataset.value;
        let tareaRealizada = document.getElementById("id");
        tareaRealizada.dataset.realizada;
        let tarea= tareaRealizada.dataset.value;
        let hs= tareaRealizada.dataset.hs;
        if (tareaRealizada==0) {
            tareaRealizada==1;
        }
        else {
            tareaRealizada==0;
        }
        let realizada= {
            "usuario_fk": usuario,
            "tarea": tarea,
            "realizada":tareaRealizada,
            "hs":hs
        }
        console.log("usuario "+usuario);
        console.log("tarea "+tarea);
        console.log("realizada "+realizada);
        console.log("HS: "+hs)
       
            try {
                let response = await fetch (API_URL+"/"+id, {
                    "method": "PUT",
                    "headers": {"Content-type": "application/json"},
                    "body": JSON.stringify(realizada)
                    });
                if (response.ok) {
                    console.log("Tarea eliminada con exito");
                }
            }
            catch (e) {
                console.log(e);
            }
            getTasks();
    }
    
});


async function getTasks() {
    let usuario=document.getElementById("nombre_usuario").value;
    try {
        let response = await fetch(API_URL+"/"+usuario);
    if (response.ok) {
        let tareas = await response.json();
        app.tareas = tareas;
        app.total=tareas.length;
        console.log(tareas);
        let tareasARealizar= document.querySelectorAll(".tarea");
        console.log(tareasARealizar);
        for (let tarea of tareasARealizar) {
            if (tarea.dataset.realizada==1) {
                tarea.classList.add("realizada");
                tarea.classList.remove("tarea");
                
            }
            else if (tarea.dataset.realizada==0) {
                tarea.classList.add("tarea");
                tarea.classList.remove("realizada");
            }
        }
    }
}
catch (e) {
    console.log(e);
}
}
getTasks();




document.getElementById("btn-agregarTarea").addEventListener("click",agregarTarea);

async function agregarTarea() {
    let nombre_usuario = document.getElementById("nombre_usuario").value;
    let tarea = document.getElementById("newTask").value;
    let hs = document.getElementById("hs").value;
    if (tarea != "") {
        if (hs >= 1 && hs<= 24) {
            let tareaNueva = {
                "usuario_fk":nombre_usuario,
                "tarea":tarea,
                "realizada":0,
                "hs":hs
            }        
            try {
                let response = await fetch (API_URL, {
                    "method":"POST",
                    "headers":{"Content-type": "application/json"},
                    "body": JSON.stringify(tareaNueva)
                });
                if (response.ok) {
                    console.log("Tarea añadida con exito");
                }
            }
            catch (e) {
                console.log(e);
            }
            getTasks();
        }
        else {
            console.log("Rango horario no valido, tiene que ser entre 1 y 24");
        }

        }

    else {
        console.log("No podes agregar a la lista una tarea vacia");
    }
    
     
}

