<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <div class="d-flex">
        <a class="navbar-brand">ToDoList</a>    
    </div>
    <div> 
        <h2 id="nombreUsuario" data-value={$nombre_usuario} >¡Hola <span class="nombreUsuario">{$nombre_usuario}</span> 🖐!</h2>
    </div>

    <div class="cerrarSesion">
    <a href="logout">Cerrar sesión</a>
    </div>
  </div>
</nav>