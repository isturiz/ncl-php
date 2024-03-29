<?php require_once("../static/bodyStart.php") ?>

<div class="grid fr gap-y-10 content-center justify-items-center">
  <div class="grid grid-cols-2 gap-x-10 w-full">
    <a href="#" class="block h-full p-6 border rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-gray-600">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Ingresos totales</h5>
      <p class="font-normal text-gray-400">$300</p>
    </a>

    <div class="grid grid-cols-3 w-full h-full p-6 border rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-gray-600">
      <a href="#1">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Canto</h5>
        <p class="font-normal text-gray-400">6 estudiantes</p>
        <p class="font-normal text-gray-400">$90</p>
      </a>
      <a href="#2">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Piano</h5>
        <p class="font-normal text-gray-400">10 estudiantes</p>
        <p class="font-normal text-gray-400">$130</p>
      </a>
      <a href="#3">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Cuatro</h5>
        <p class="font-normal text-gray-400">4 estudiantes</p>
        <p class="font-normal text-gray-400">$80</p>
      </a>
    </div>
  </div>



</div>

<!-- SEARCH AND CREATE NEW USER -->
<div class="flex justify-between items-center pb-4 pt-8">

  <div class="flex justify-between items-center gap-2">

    <!-- Search -->
    <label for="table-search" class="sr-only">Search</label>
    <div class="relative">
      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <input type="text" id="table-search" onkeyup="doSearch()" class="block p-2 pl-10 w-80 text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar">
    </div>
  </div>


  <button type="button" data-modal-toggle="newUser" class="text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-1.5 bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-green-800">Registrar pago</button>


</div>

<div class="p-4 mb-4 rounded-lg bg-blue-200 hidden changeAlert" id="alertUser" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5  text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
  </svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium text-blue-800">
    Los cambios se han guardado correctamente
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5  inline-flex h-8 w-8 bg-blue-200 text-blue-600 hover:bg-blue-300" data-dismiss-target="#alertUser" aria-label="Close" onclick="noShowAlert()">
    <span class="sr-only">Close</span>
    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
  </button>
</div>

<table class="w-full text-sm text-left text-gray-400" id="table-file">
  <thead class="text-xs uppercase bg-gray-700 text-gray-400">
    <tr>
      <th scope="col" class="py-3 px-6">Fecha</th>
      <th scope="col" class="py-3 px-6">Referencia</th>
      <th scope="col" class="py-3 px-6">Monto</th>
      <th scope="col" class="py-3 px-6">Descripción</th>
      <th scope="col" class="py-3 px-6 text-center">Acción</th>
    </tr>
  </thead>
  <tbody>

    <?php
    //require_once '../../controller/users/list.php';
    //while ($row = mysqli_fetch_assoc($files)) {
    ?>

    <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
      <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
        <?php //echo $row['cedula']; 
        ?>
      </th>
      <td class="py-4 px-6"> <?php //echo $row['nombre']; 
                              ?> </td>
      <td class="py-4 px-6"><?php //echo $row['apellido']; 
                            ?></td>
      <td class="py-4 px-6"><?php // $row['telefono']; 
                            ?></td>
      <td class="py-4 px-6"><?php //echo $row['correo']; 
                            ?></td>
      <td class="py-4 px-6 text-right flex justify-between">

        <!-- Edit nuevo: oficial -->
        <button class="text-white-500 editButton" type="button" data-modal-toggle="editUserModal" onclick="editUser(
                      '<?php //echo ($row['cedula']) 
                        ?>',
                      '<?php //echo ($row['apellido']) 
                        ?>',
                      '<?php //echo ($row['telefono']) 
                        ?>',
                      '<?php //echo ($row['correo']) 
                        ?>',
                      '<?php //echo ($row['nombre']) 
                        ?>',
                      '<?php //echo ($row['contraseña']) 
                        ?>',
                      '<?php //echo ($row['idNivelUsuario']) 
                        ?>'

                      )">

          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
          </svg>
        </button>

        <button class="text-red-500" type="button" data-modal-toggle="deleteAlert" targetEl="" onclick="deleteUser('<?php //echo ($row['cedula']) 
                                                                                                                    ?>')">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
          </svg>
        </button>
      </td>
    </tr>
    <?php
    //}
    ?>

    <tr class='noSearch hide'>
      <td colspan="5"></td>
    </tr>
  </tbody>
</table>

<?php //require_once('edit.php'); 
?>
<?php //require_once('new.php'); 
?>
<?php //require_once('../complementary/deleteAlert.php'); 
?>


<script src="../../js/search.js"></script>
<script src="../../js/deleteAlert.js"></script>
<script src="../../js/edit.js"></script>



<?php require_once("../static/bodyEnd.php") ?>