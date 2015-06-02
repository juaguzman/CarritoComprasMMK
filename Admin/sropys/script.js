function eliminarProducto(pos)
{
    if(confirm("Desea borrar el registro?"))
        location.href="eliminarProducto.php?id="+pos;
    else
        return false;
}

function modificarProducto(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificarProducto.php?id="+pos;
    else
        return false;
}

function eliminarUsuario(pos)
{
    if(confirm("Desea borrar el registro?"))
        location.href="eliminarUsuario.php?id="+pos;
    else
        return false;
}

function modificarUsuario(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificarUsuario.php?id="+pos;
    else
        return false;
}