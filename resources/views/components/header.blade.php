<nav class="bg-white w-full z-30">
  <div class="container mx-auto flex items-center justify-between px-4 py-2 md:px-24">
      <!-- Logo Section -->
      <div class="flex items-center">
          <a href="/" class="hover:opacity-90 transition-opacity duration-300">
              <a href="{{route('frontend.index')}}" class="text-white font-semibold text-xl">
                  {{-- Σ-BΛƬƬΣЯY --}}
                  <img src="{{asset('asset/img/LITHO_POWER.png')}}" alt="" class="w-20 h-20">
              </a>
          </a>
      </div>

      <!-- Mobile Toggle Button -->
      <button
          id="mobile-menu-button"
          class="md:hidden text-gray-500 hover:text-green-500 transition-colors duration-300 focus:outline-none z-20"
          onclick="toggleMenu()"
      >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
      </button>

      <!-- Navigation Links -->
      <div
          id="mobile-menu"
          class="invisible md:visible fixed inset-0 bg-white md:static md:bg-transparent z-40"
      >
          <div class="flex flex-col h-full ">
              <!-- Mobile Close Button -->
              <button
                  id="mobile-menu-close"
                  class="md:hidden absolute top-4 right-4 text-black hover:text-gray-800 z-50"
                  onclick="toggleMenu()"
              >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>

              <ul class="flex flex-col md:flex-row items-center justify-center md:justify-start space-y-6 md:space-y-0 md:space-x-8 p-6 md:p-0 h-full">
                  <li class="w-full md:w-auto text-center md:text-left">
                      <a href="{{route('frontend.index')}}" class="block py-2 text-lg md:text-md hover:text-gray-500 transition-colors duration-300 font-light">Home</a>
                  </li>
                  <li class="w-full md:w-auto text-center md:text-left">
                      <a href="#about" class="block py-2 text-md md:text-md hover:text-gray-500 transition-colors duration-300 font-light ">About</a>
                  </li>

                  @php
                      $products=App\Models\Product::all();
                    //   print_r($products)
                  @endphp

                  <li class="w-full md:w-auto text-center md:text-left relative group">
                    <button class="w-full py-2 text-md md:text-md hover:text-gray-500 transition-colors duration-300 focus:outline-none font-light ">
                        <a href="#product">Products</a>
                    </button>
                    <!-- Mobile Dropdown -->
                    <div class="md:absolute md:left-0 md:hidden md:group-hover:block md:w-48 md:bg-white md:rounded-md md:shadow-lg">
                        <ul class="md:py-2 space-y-4 md:space-y-0">
                            @foreach($products as $category)
                                <li>
                                    <a href="{{ route('frontend.detail', $category->id) }}"
                                       class="block px-4 py-2 text-md hover:bg-gray-100 hover:text-gray-500 font-light ">
                                        {{ $category->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>


                  <li class="w-full md:w-auto text-center md:text-left">
                      <a href="#testimonial" class="block py-2 text-md md:text-md hover:text-gray-500 transition-colors duration-300 font-light ">Testimonial</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</nav>

<script>
function toggleMenu() {
  console.log("Toggle function called");
  const menu = document.getElementById('mobile-menu');
  console.log("Menu element:", menu);
  if (menu.classList.contains('invisible')) {
      menu.classList.remove('invisible');
      menu.classList.add('visible');
  } else {
      menu.classList.remove('visible');
      menu.classList.add('invisible');
  }
}



// Make sure the function exists in global scope
window.toggleMenu = toggleMenu;
</script>

  
<div class="fixed bottom-5 right-5 z-50">
    <!-- Toggle Button -->
    <button id="toggle-btn" class="w-12 h-12 bg-green-600 text-white rounded-full shadow-md flex items-center justify-center">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
    </button>
  
    <!-- Phone Icon -->
    <div id="phone-icon" class="hidden fixed bottom-20 right-5 flex items-center space-x-4 z-50">
      <a href="tel:+8090354027" class="flex items-center justify-center w-12 h-12 bg-green-600 text-white rounded-full shadow-md hover:bg-green-700">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22.54 16.88l-5.06-2.18a2.18 2.18 0 00-2.45.47l-1.52 1.52a15.05 15.05 0 01-6.42-6.42l1.52-1.52a2.18 2.18 0 00.47-2.45L7.12 1.46a2.19 2.19 0 00-2.45-.88 4.38 4.38 0 00-3.2 4.25c0 9.94 8.06 18 18 18a4.37 4.37 0 004.25-3.2 2.18 2.18 0 00-.88-2.45z"></path>
          </svg>
      </a>
    </div>
  
    <!-- WhatsApp Icon -->
    <div id="whatsapp-icon" class="hidden fixed bottom-20 right-20 flex items-center space-x-4 z-50">
      <a href="https://wa.me/+8090354027" target="_blank" class="flex items-center justify-center w-12 h-12 bg-green-600 text-white rounded-full shadow-md hover:bg-green-600">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.52 3.47A12.05 12.05 0 0012.01 0C5.38 0 .01 5.37.01 12c0 2.11.56 4.15 1.62 5.95l-1.65 5.03 5.18-1.57A12.04 12.04 0 0012.02 24c6.63 0 12-5.37 12-12a11.93 11.93 0 00-3.5-8.53zM12.03 22.02c-1.91 0-3.8-.51-5.46-1.49l-.39-.23-3.07.92.93-3.04-.25-.4A9.93 9.93 0 012.01 12c0-5.52 4.49-10 10-10 2.68 0 5.19 1.05 7.08 2.92a9.93 9.93 0 012.92 7.07c0 5.52-4.49 10-10 10zm5.42-6.63l-.78-.4c-.2-.1-1.19-.59-1.37-.66-.18-.07-.32-.1-.45.1-.13.2-.52.65-.64.79-.12.14-.24.16-.45.06-.2-.1-.85-.31-1.62-1a6.11 6.11 0 01-1.14-1.42c-.08-.15 0-.28.06-.38.06-.1.13-.16.2-.25.06-.08.08-.13.13-.22.04-.08.02-.15-.01-.22-.03-.06-.45-1.08-.62-1.5-.16-.38-.33-.33-.45-.33h-.38c-.13 0-.32.05-.49.23-.17.18-.64.63-.64 1.54 0 .9.66 1.78.75 1.9.1.13 1.3 2.04 3.16 2.86.44.19.78.3 1.05.38.44.14.85.12 1.17.07.36-.05 1.19-.49 1.36-.96.17-.47.17-.87.12-.96-.04-.09-.12-.13-.25-.2z"></path>
          </svg>
      </a>
    </div>
  </div>
  
  <script>
    const toggleButton = document.getElementById("toggle-btn");
    const phoneIcon = document.getElementById("phone-icon");
    const whatsappIcon = document.getElementById("whatsapp-icon");
  
    toggleButton.addEventListener("click", () => {
      // Toggle visibility of phone and whatsapp icons
      phoneIcon.classList.toggle("hidden");
      whatsappIcon.classList.toggle("hidden");
    });
  </script>
  