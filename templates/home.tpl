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
        <form class="formTareas" method="POST">
            <input type="text" id="newTask" autocomplete="off" placeholder="Nueva tarea" class="bordeLista" required >
            <input type="number" id="hs" required placeholder="hs" required>
            <input type="text" id="nombre_usuario" value={$nombre_usuario} hidden>
            <button type="button" class="agregarTarea" id="btn-agregarTarea"> +</button>
            <button type="button" class="ordenarTareas">Ordenar</button>
        </form>

        <div id="contenedorTareas">
            {include file='templates/vue/taskList.tpl'}
        </div>
    </div>


<script src="js/app.js"></script>
{include file="templates/usoComun/footer.tpl"}