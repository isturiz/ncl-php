<!-- Edit user modal -->
<div id="newStudent" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
  <div class="relative w-full max-w-2xl h-full md:h-auto">

    <!-- Modal content -->
    <form action="../../controller/users/register.php" method="POST" class="relative rounded-lg shadow bg-gray-700">
      <!-- Modal header -->
      <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
        <h3 class="text-xl font-semibold text-white">
          Registrar usuario
        </h3>

        <button type="button" class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-toggle="newStudent">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">

          <div class="col-span-6 sm:col-span-3">
            <label for="firstName" class="block mb-2 text-sm font-medium text-white">Nombre</label>
            <input type="text" name="firstName" id="firstName" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="Nombre" value="">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="lastName" class="block mb-2 text-sm font-medium text-white">Apellido</label>
            <input type="text" name="lastName" id="lastName" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600  border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="lastName" value="">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="email" class="block mb-2 text-sm font-medium text-white">Correo</label>
            <input type="email" name="email" id="email" class="shadow-sm border text-sm rounded-lg block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="Mauricio" value="">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="address" class="block mb-2 text-sm font-medium text-white">Dirección</label>
            <input type="text" name="address" id="address" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="Istúriz" value="">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="birthdate" class="block mb-2 text-sm font-medium text-white">Fecha de nacimiento</label>
            <input type="date" name="birthdate" id="birthdate" class="shadow-sm border text-sm rounded-lg block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="123456678" value="">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="ageCategory" class="block mb-2 text-sm font-medium text-white">Categoría edad</label>
            <input type="number" name="ageCategory" id="ageCategory" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="0555000" value="">
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-600">
        <button type="submit" onclick="showAlert()" name="register" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-800">Registrar usuario</button>
      </div>
    </form>
  </div>
</div>