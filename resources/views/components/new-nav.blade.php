<header
  x-data="{ active: false }"
  class="flex justify-between p-4 md:px-[108px] md:py-6"
>
  <div class="flex items-center">
    <div class="bg-primary rounded w-12 lg:w-8 h-12 lg:h-8 flex items-center justify-center">
      <img class="lg:w-[21px] lg:h-[21px]" src="brain.png" alt="logo">
    </div>
    <div class="text-primary text-2xl align-middle title ml-2 font-poppy text-[32px] lg:text-[20px] leading-[120%]">Personety</div>
  </div>
  <div class="flex items-center">
    <div
      x-bind:class="active ? 'hidden' : ''"
      class="md:hidden space-y-2"
      @click="active = !active"
    >
      {{-- TODO: change img to div elements for animation posibility --}}
      <img class="mr-[15px]" src="hamburger.png" alt="hamburger">
    </div>
    <div class="flex lg:hidden">
      <button class="w-[170px] h-12 mr-6 text-secondary rounded border-solid border-2 border-secondary hover:border-mail hover:text-mail" >Cancel membership</button>
      <button class="bg-primary rounded flex w-[170px] h-12 flex justify-center items-center">
        <div class="text-white mr-2">
          Login
        </div>
        <img src="login.png" alt="login">
      </button>
    </div>
  </div>
  <div
    x-bind:class="active ? '' : 'hidden'"
    class="fixed inset-0 bg-modal bg-opacity-50 overflow-y-auto h-full w-full font-monty"
  >
    <div
      class="h-16 mb-2 flex justify-end items-center"
      @click="active = !active"
    >
      <img class="mr-[31px]" src="exit.png" alt="exit">
    </div>
    <div class="relative bg-white mx-4 px-6 rounded shadow-card border-solid border-footer-text border">
      <div class="flex flex-col">
        <div class="flex flex-col items-center font-semibold">
          <div class="mt-6">
            <a
              href="#"
              @click="active = !active"
            >
              Contacts us
            </a>
          </div>
          <div class="mt-6">
            <a
              href="#"
              @click="active = !active"
            >
              Pricacy policy
            </a>
          </div>
          <div class="mt-6">
            <a
              href="#"
              @click="active = !active"
            >
              Terms & Conditions
            </a>
          </div>
          <div class="mt-6">
            <a
              href="#"
              @click="active = !active"
            >
              Cancel membership
            </a>
          </div>
          <div class="my-6">
            <a
              href="#"
              @click="active = !active"
            >
              Login
            </a>
          </div>
        </div>
        <div class="flex-grow h-px bg-footer-text"></div>
        <div class="flex flex-col items-center my-6 font-sans-pro">
          <div class="mb-2 font-semibold">Have any questions</div>
          <a
            class="text-mail underline"
            href="mailto:support@brainety.com"
          >
            support@brainety.com
        </a>
        </div>
      </div>
    </div>
  </div>
</header>
