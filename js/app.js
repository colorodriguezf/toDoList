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
        if (tareaRealizada==0) {
            tareaRealizada==1;
        }
        else {
            tareaRealizada==0;
        }
        let realizada= {
            "usuario_fk": usuario,
            "tarea": tarea,
            "realizada":tareaRealizada
        }
       
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
        console.log(tareas);
        // let tareasARealizar= document.querySelectorAll(".tarea");
        // console.log(tareasARealizar);
        // for (let tarea of tareasARealizar) {
        //     tarea.addEventListener("click",tareaRealizada);
        // }
    }
}
catch (e) {
    console.log(e);
}
}
getTasks();

function tareaRealizada(tarea) {
    tarea=event.currentTarget.value;
    let tareaARealizar=document.getElementById("tarea"+tarea);
    tareaARealizar.classList.toggle("realizada");
    tareaARealizar.classList.remove("tarea");
    console.log(tareaARealizar);
}


document.getElementById("btn-agregarTarea").addEventListener("click",agregarTarea);

async function agregarTarea() {
    let nombre_usuario = document.getElementById("nombre_usuario").value;
    let tarea = document.getElementById("newTask").value;
    
     
    let tareaNueva = {
        "usuario_fk":nombre_usuario,
        "tarea":tarea
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

