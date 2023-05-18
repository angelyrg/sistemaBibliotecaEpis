<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" value="{{ isset($usuarios->nombre) ? $usuarios->nombre : '' }}"id="nombre"
        name="nombre" required>
</div>
<div class="form-group">
    <label for="apellido">Apellido:</label>
    <input type="text" class="form-control" value="{{ isset($usuarios->apellido) ? $usuarios->apellido : '' }}"
        id="apellido" name="apellido" required>
</div>
<div class="form-group">
    <label for="dni">DNI:</label>
    <input type="text" class="form-control" value="{{ isset($usuarios->dni) ? $usuarios->dni : '' }}" id="dni"
        name="dni" required>
</div>
<div class="form-group">
    <label for="correo">Correo:</label>
    <input type="email" class="form-control" value="{{ isset($usuarios->correo) ? $usuarios->correo : '' }}"
        id="correo" name="correo" required>
</div>
<div class="form-group">
    <label for="password">Contraseña:</label>
    <input type="password" class="form-control" id="password" name="password" required>
</div>
<div class="form-group">
    <label for="repeat_password">Repetir contraseña:</label>
    <input type="password" class="form-control" id="repeat_password" name="repeat_password" required>
</div>
<div class="form-group">
    <label for="type_user">Tipo de usuario:</label>
    <select class="form-control" id="type_user" name="type_user" required>
        <option value="">Seleccione una opción</option>
        <option value="ADMIN" {{ isset($usuarios->type_user) && $usuarios->type_user == 'ADMIN' ? 'selected' : '' }}>
            Administrador</option>
        <option value="USER" {{ isset($usuarios->type_user) && $usuarios->type_user == 'USER' ? 'selected' : '' }}>
            Usuario</option>

    </select>
</div>
<button type="submit" class="btn btn-primary">Registrar usuario</button>
