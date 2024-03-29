<header class="absolute w-full z-10">
  <nav class="bg-gray-800 border-gray-200 px-4 py-2.5">

    <div class="flex flex-initial justify-between items-center mx-auto max-w-screen-xl">


      <div class="flex gap-3 items-center">
        <div class="text-center ">
          <button class="flex item-center" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <img class="w-8 h-8" src="https://img.icons8.com/ios-filled/50/FFFFFF/menu-rounded.png" />
          </button>
        </div>

        <a href="/ncl/view/home/main.php" class="flex items-center pl-10">
          <img src="https://img.icons8.com/fluency-systems-filled/48/FFFFFF/boy.png" class="mr-3 h-6 sm:h-9" alt="NCL logo" />          
          <span class="self-center text-xl font-semibold whitespace-nowrap text-white">NCL</span>
        </a>
      </div>

      <!-- User menu -->
      <div class="">
        <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Abrir menu de usuario</span>
            <svg class="w-8 h-8 rounded-full text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div class="hidden z-50 my-4 text-base list-none bg-gray-800 rounded divide-y divide-gray-600 shadow" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="
                  position: absolute;
                  inset: 0px auto auto 0px;
                  margin: 0px;
                  transform: translate3d(0px, 10.4px, 0px);
                ">
            <div class="py-3 px-4">
              <span class="block text-sm text-white">
                <?php
                session_start();
                echo $_SESSION['cedula'];
                ?>
              </span>
              <span class="block text-sm font-medium text-gray-400 truncate">email@domain</span>
            </div>
            <ul class="py-1" aria-labelledby="user-menu-button">
              <li>
                <a href="../../controller/system/exit.php" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Cerrar sesión</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </nav>
</header>