<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style type="text/css">
            input:invalid {
                border-color: #DD2C00;
            }
            
            input:valid {
                border-color: #ccc;
            }
            
        </style>
        
</head>
<body>
    
    <form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Nombre de usuario.
            Campo obligatorio, entre 5-40 carácteres
            Sólo se permiten letras y números -->
            <!--
            <input type="text" name="nombre" placeholder="Su nombre de usuario"
                required pattern="[A-Za-z0-9]{5,40}"
                title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 40">
            
            <br><br>
            -->

            <input
                type="text"
                name="username"
                placeholder="Username"
                pattern="[a-z]{1,15}"
                id="username">

            <br><br>
        <!--<button name="submit" type="submit" class="btn pull-right">Enviar</button>-->

    </form>
    <script type="text/javascript">
        
        var input = document.getElementById('username');
        var form  = document.getElementById('form');

        var elem               = document.createElement('div');
            elem.id            = 'notify';
            elem.style.display = 'none';
            form.appendChild(elem);
/*
            input.addEventListener('invalid', function(event){
                event.preventDefault();
                if ( ! event.target.validity.valid ) {
                    elem.textContent   = 'Username should only contain lowercase letters e.g. john';
                    elem.className     = 'error';
                    elem.style.display = 'block';
            
                    input.className    = 'invalid animated shake';
                }
            });
*/
            input.addEventListener('input', function(event){
                if ( 'block' === elem.style.display ) {
                    input.className = '';
                    elem.style.display = 'none';
                }
            });
    </script>
</body>
</html>