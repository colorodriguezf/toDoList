{literal}
    <div id="app">
    <ul id="lista-tareas" class="list-group">
    <li v-for="tarea in tareas"  class="tarea" :id=tarea.id :data-realizada=tarea.realizada :value=tarea.tarea :data-hs=tarea.hs>
    <div class="contenedorListaTareas">
    <div class="hsLista">{{tarea.hs}}hs </div>
        <div class="e"> 
                <div  class="tarea"> {{tarea.tarea}}</div> {{ /*   v-on:click="realizada(tarea.id)" */ }}

            
               <div class="contenedorBoton">
                <button v-on:click="deleteComment(tarea.id)" class="fas fa-trash-alt eliminarTarea"></button>
                </div>
        </div>
        </div>
                </li>
        </ul>
    </div>
{/literal}
        
