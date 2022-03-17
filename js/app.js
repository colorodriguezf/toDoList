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

async function getTasks() {
    let lista = document.getElementById("contenedorTareas");
    let usuario=document.getElementById("nombre_usuario").value;
    try {
    let response = await fetch(API_URL+"/"+usuario);
    if (response.ok) {
        let tareas = await response.json();
        lista.innerHTML="";
        for (const item of tareas) {
            let tarea= item.tarea;
            lista.innerHTML+=`<ul> 
            <li>${tarea}</li><button class="fas fa-trash-alt eliminarTarea" value=${item.id}>a</button
            </ul>`;
        }    
        let btnEliminar = document.querySelectorAll(".eliminarTarea");
        for (let btn of btnEliminar) {
            btn.addEventListener("click", eliminarTarea);
        }
    }
}
catch (e) {
    console.log(e);
}
}
getTasks();
async function eliminarTarea(btn) {
    btn= event.currentTarget.value;
    console.log(btn);
    try {
        let response = await fetch (API_URL+"/"+btn, {
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

