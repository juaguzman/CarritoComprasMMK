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