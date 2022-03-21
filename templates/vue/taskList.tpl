{literal}
    <div id="app">
        <ul id="lista-tareas" class="list-group">
        <li v-for="tarea in tareas" class="tarea" :id=tarea.id :data-realizada=tarea.realizada :value=tarea.tarea v-on:click="realizada(tarea.id)">
                {{tarea.tarea}}
            <button v-on:click="deleteComment(tarea.id)" class="fas fa-trash-alt eliminarTarea"></button>
            </li>
        </ul>
    </div>
{/literal}
        
