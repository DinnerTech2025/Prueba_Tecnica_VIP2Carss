<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prueba Tecnica Vip2Cars</title>

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"
    />
  </head>
  <body class="hold-transition layout-top-nav">
    <div class="wrapper">

      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Encuestas de Vehiculos y Clientes VIP2Cars</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Encuestas</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <section class="content">
          <div class="container-fluid">
            <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#encuestaModal">
                    Iniciar Encuesta
                  </button>
                  <br><br>
                    <table
                      id="example1"
                      class="table table-bordered table-striped"
                    >
                      <thead>
                        <tr>
                            <th>N°</th>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año de Fabricacion</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nro Documento</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>
                              Acciones
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $vehiculo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $vehiculo->placa }}</td>
                                    <td>{{ $vehiculo->marca }}</td>
                                    <td>{{ $vehiculo->modelo }}</td>
                                    <td>{{ $vehiculo->anio_fabricacion }}</td>
                                    <td>{{ $vehiculo->cliente->nombre }}</td>
                                    <td>{{ $vehiculo->cliente->apellidos }}</td>
                                    <td>{{ $vehiculo->cliente->nro_documento }}</td>
                                    <td>{{ $vehiculo->cliente->correo }}</td>
                                    <td>{{ $vehiculo->cliente->telefono }}</td>
                                    <td>
                                       <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal{{ $vehiculo->id }}">
                                          Editar
                                        </button>
                                      <form action="{{ route('encuestas.destroy', $vehiculo->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este registro?')">
                                            Eliminar
                                        </button>
                                    </form>
                                    </td>
                                </tr>

                                <!-- Modal de Edicion -->
                              <div class="modal fade" id="editModal{{ $vehiculo->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $vehiculo->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editModalLabel{{ $vehiculo->id }}">Editar Vehículo y Cliente</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>

                                    <div class="modal-body">
                                      <form id="formEdit{{ $vehiculo->id }}" method="POST" action="{{ route('encuestas.update', $vehiculo->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="row g-3">
                                          <div class="col-md-4">
                                            <label class="form-label">Placa</label>
                                            <input type="text" name="placa" value="{{ $vehiculo->placa }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-4">
                                            <label class="form-label">Marca</label>
                                            <input type="text" name="marca" value="{{ $vehiculo->marca }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-4">
                                            <label class="form-label">Modelo</label>
                                            <input type="text" name="modelo" value="{{ $vehiculo->modelo }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-4">
                                            <label class="form-label">Año de Fabricación</label>
                                            <input type="number" name="anio_fabricacion" value="{{ $vehiculo->anio_fabricacion }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-4">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" name="nombre" value="{{ $vehiculo->cliente->nombre }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-4">
                                            <label class="form-label">Apellidos</label>
                                            <input type="text" name="apellidos" value="{{ $vehiculo->cliente->apellidos }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-6">
                                            <label class="form-label">Nro. Documento</label>
                                            <input type="text" name="nro_documento" value="{{ $vehiculo->cliente->nro_documento }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-6">
                                            <label class="form-label">Correo</label>
                                            <input type="email" name="correo" value="{{ $vehiculo->cliente->correo }}" class="form-control" required>
                                          </div>
                                          <div class="col-md-6">
                                            <label class="form-label">Teléfono</label>
                                            <input type="text" name="telefono" value="{{ $vehiculo->cliente->telefono }}" class="form-control" required>
                                          </div>
                                        </div>
                                      </form>
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                      <button type="submit" class="btn btn-success" form="formEdit{{ $vehiculo->id }}">Actualizar</button>
                                    </div>

                                  </div>
                                </div>
                              </div>

                            @endforeach
                        </tbody>
                    </table>
                    <!-- Modal de Guardado de Registros -->
                    <div class="modal fade" id="encuestaModal" tabindex="-1" aria-labelledby="encuestaModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="encuestaModalLabel">Registrar Encuesta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form id="formEncuesta" method="POST" action="{{ route('encuestas.store') }}">
                              @csrf
                              <div class="row g-3">

                                <div class="col-md-4">
                                  <label class="form-label">Placa</label>
                                  <input type="text" name="placa" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label">Marca</label>
                                  <input type="text" name="marca" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label">Modelo</label>
                                  <input type="text" name="modelo" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label">Año de Fabricación</label>
                                  <input type="number" name="anio_fabricacion" class="form-control" min="1900" max="2099" required>
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label">Nombre</label>
                                  <input type="text" name="nombre" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label class="form-label">Apellidos</label>
                                  <input type="text" name="apellidos" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-label">Nro. Documento</label>
                                  <input type="text" name="nro_documento" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-label">Correo</label>
                                  <input type="email" name="correo" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-label">Teléfono</label>
                                  <input type="text" name="telefono" class="form-control" required>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" form="formEncuesta" class="btn btn-success">Guardar</button>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

    <!-- DataTables & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <script>
      $(function () {
        $("#example1")
          .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
          })
          .buttons()
          .container()
          .appendTo("#example1_wrapper .col-md-6:eq(0)");
        $("#example2").DataTable({
          paging: true,
          lengthChange: false,
          searching: false,
          ordering: true,
          info: true,
          autoWidth: false,
          responsive: true,
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $('.btn-edit').click(function () {
          let id = $(this).data('id');

          $.ajax({
            url: '/vehiculos/' + id + '/edit',
            type: 'GET',
            success: function (data) {
              // Llenamos los campos del modal
              $('#edit_id').val(data.id);
              $('#edit_placa').val(data.placa);
              $('#edit_marca').val(data.marca);
              $('#edit_modelo').val(data.modelo);
              $('#edit_anio').val(data.anio_fabricacion);

              $('#edit_nombre').val(data.cliente.nombre);
              $('#edit_apellidos').val(data.cliente.apellidos);
              $('#edit_documento').val(data.cliente.nro_documento);
              $('#edit_correo').val(data.cliente.correo);
              $('#edit_telefono').val(data.cliente.telefono);

              // Cambiamos la acción del formulario
              $('#formEdit').attr('action', '/vehiculos/' + id);

              // Mostramos el modal
              $('#editModal').modal('show');
            },
            error: function () {
              alert('Error al cargar los datos');
            }
          });
        });
      });
    </script>
  </body>
</html>
