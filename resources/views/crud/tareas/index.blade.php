<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud - Tareas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="/">REGRESAR</a>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary" id="btnNuevo">NUEVO USUARIO</button>
        </div>
        <div class="col-12">
            <br/>
            <div class="card">
                <div class="card-body">
                    LISTA DE USUARIOS
                </div>
                <div class="card-footer">
                    <div class="table-responsive">
                        <table class="table" id="tbl-usuarios">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Email</th>
                                    <th>Dirección</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" role="dialog" tabindex="-1" id="modalUsuario">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" id="frmUsuario">
                            <input type="hidden" id="usuario_id" name="usuario_id" value="0">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar Nombre" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="direccion">Dirección</label>
                                        <textarea class="form-control" name="direccion" id="direccion"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" required>
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                <div class="col-6" id="formClave">
                                    <div class="form-group">
                                        <label for="clave">Clave</label>
                                        <input type="password" class="form-control" name="clave" id="clave" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="activo">Estado</label>
                                        <select name="activo" id="activo" class="form-control">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning" id="btnSave">Grabar</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    let tb_data = $('#tbl-usuarios').DataTable({
        'processing': false,
        'serverSide': true,
        'responsive': true,
        'ajax': {
            'url': '{{route('dtUsuarios')}}',
            'type' : 'get',
        },
        'language': {
            'url': '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
        },
        'columns': [
            {data: 'nombre'},
            {data: 'email'},
            {data: 'direccion'},
            {data: 'activo'},
            {data: 'id'},
        ],
        'fnRowCallback': function(nRow, aData) {
            switch (parseInt(aData['activo'])) {
                case 1:
                    $(nRow).find('td:eq(3)').html('<span>ACTIVO</span>');
                    break;
                case 0:
                    $(nRow).find('td:eq(3)').html('<span>INACTIVO</span>');
                    break;
            }

            let button = '';

            button += '<button type="button" class="btn btn-warning edit">EDITAR</button> &nbsp; &nbsp;';
            button += '<button type="button" class="btn btn-danger delete">ELIMINAR</button>';

            $(nRow).find('td:eq(4)').html(button);
        }
    });

    $('#btnSave').click(function () {
        let formData = $('#frmUsuario').serialize();
        let route = $('#usuario_id').val() == 0 ? '{{route('grabarUsuario')}}' : '{{route('editarUsuario')}}'
        $.ajax({
            url: route,
            dataType: 'json',
            type: 'post',
            data: formData,
            success: function (response) {
                tb_data.ajax.reload();
                clear();
                $('#modalUsuario').modal('hide');
            }
        });
    });

    $('#btnNuevo').click(function () {
        clear();
        $('#modalUsuario').modal('show');
    })

    $('body').on('click', '.edit', function () {
        let data = tb_data.row( $(this).parents('tr') ).data();

        if(data == undefined) {
            tb_data = $("#tb_data").DataTable();
            data = tb_data.row( $(this).parents('tr') ).data();
        }
        $('#usuario_id').val(data.id);
        $('#nombre').val(data.nombre);
        $('#apellidos').val(data.nombre);
        $('#direccion').val(data.direccion);
        $('#activo').val(data.activo);
        $('#formClave').hide();
        $('#modalUsuario').modal('show');
    });

    function clear() {
        $('#usuario_id').val(0);
        $('#nombre').val();
        $('#apellidos').val();
        $('#direccion').val();
        $('#activo').val();
        $('#formClave').show();
    }
</script>
</body>
</html>
