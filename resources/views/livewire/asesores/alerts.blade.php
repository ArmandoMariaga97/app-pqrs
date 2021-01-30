@if (session()->has('register_success'))
      <script  type="text/javascript">
            toastr.success('Asesor agregado con exito.', 'Bien hecho!!');
      </script>
@endif

@if (session()->has('update-success'))
      <script  type="text/javascript">
            toastr.success('Asesor actualizado con exito.', 'Bien hecho!!');
      </script>
@endif

@if (session()->has('delete-success'))
      <script  type="text/javascript">
            toastr.error('Asesor eliminado con exito.', 'Bien hecho!!');
      </script>
@endif