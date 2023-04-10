{include file='templates/usoComun/header.tpl'}
{include file='templates/usoComun/nav.tpl'}

    <div class="list bordeLista">
        <div class="date">
        <div class="dateRight">
            <div id="dataNumero"></div>
            <div>
                <div id="dataMes"></div>
                <div id="dataAño"></div>
            </div>
        </div>
        <div id="dataText"></div>
        </div>
        <div class="contenedor-form">
        <form class="formTareas" method="POST">
        <div class="input-group dentroForm">
        
        <div class="form-floating">
            <input type="text" class="form-control newTask" id="newTask" placeholder="Tarea">
            <label for="floating">Tarea</label>
        </div>
        <div class="form-floating">
            <input type="number" class="form-control hs" id="hs" placeholder="Tarea" id="newTask" min="0"max="24">
            <label for="floatingHs">Hs</label>
         </div>
        <input type="text" id="nombre_usuario" value={$nombre_usuario} hidden>
        <button type="button" class="btn agregarTarea" id="btn-agregarTarea">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32 252c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92H92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/></svg>
        </button>
  </div>
            {* <input type="text" id="newTask" autocomplete="off" placeholder="Nueva tarea" class="bordeLista" required >
            <input type="number" id="hs" required placeholder="hs" required>
            <button type="button" class="btn btn-primary btn-group-sm agregarTarea" id="btn-agregarTarea"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32 252c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92H92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/></svg></button> *}
            {* <button type="button" class="ordenarTareas">Ordenar</button> *}
        </form>
        </div>

        <div id="contenedorTareas">
            {include file='templates/vue/taskList.tpl'}
        </div>
    </div>


<script src="js/app.js"></script>
{include file="templates/usoComun/footer.tpl"}