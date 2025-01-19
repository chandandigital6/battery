@extends('components.main')
@section('comtent')

<style>
    .swiper-pagination {
      bottom: 0;
      position: relative;
    }

    .swiper-container {
      overflow: hidden;
    }
    .swiper-pagination-bullet{
      background-color:rgb(14 211 207);
    }
    .swiper-pagination-bullet-active{
      background-color:rgb(14 211 207);
    }
</style>

 {{-- BANNER --}}
 <div class="space-y-12 px-4 lg:px-0 ">
  @foreach ($banners as $banner)
  <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-0">
    <!-- Text Content -->
    <div class="flex items-center justify-center bg-green-200 h-full w-full px-4 py-8">
      <div class="space-y-4 text-center">
        <!-- Header Title -->
        <h1 class="text-3xl font-extrabold sm:text-5xl text-[#255D3A]">
          {{ $banner->title }}
        </h1>

        <!-- Description -->
        <p class="text-gray-700 text-lg sm:text-xl max-w-xl mx-auto">
          {{ $banner->sub_title }}
        </p>
      </div>
    </div>


    <!-- Banner Image -->
    <div>
      <img
        src="{{ asset('storage/' . $banner->image) }}"
        alt="{{ $banner->title }}"
        class="w-full h-auto object-cover "
      >
    </div>
  </div>
  @endforeach
</div>

{{-- ABOUT US:::::::: --}}
<section id="about" class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
        @foreach ($abouts->take(1) as $about)


        <h2 class="text-4xl font-extrabold text-[#255D3A] sm:text-5xl">
         {{ $about->title }}
        </h2>
        <p class="mt-4 text-lg text-black max-w-3xl mx-auto">
{!! $about->description !!}
        </p>
        @endforeach
        <div class="mt-12 grid gap-12 lg:grid-cols-3 md:grid-cols-2 mb-4">
            <!-- Card 1 -->
            @foreach ($abouts->skip(1)->take(3) as $ab)


            <div class="p-6 bg-white text-black rounded-lg shadow-lg  hover:shadow-md hover:shadow-[#00B228] transition-shadow duration-300">
              {{-- Uncomment the image section if needed --}}
              {{-- <div class="flex justify-center">
                  <img src="{{ asset('storage/' . $ab->image) }}" alt="Image" class="h-24 w-24">
              </div> --}}
              <h3 class="text-2xl font-semibold text-[#255D3A]">
                  {{ $ab->title }}
              </h3>
              <p class="mt-4 text-black">
                  {!! $ab->description !!}
              </p>
          </div>

            @endforeach
            <!-- Card 2 -->
            {{-- <div class="p-6 p-6 bg-gradient-to-r from-green-500 to-black rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex justify-center"><img src="{{asset('image/SUSTAINBILITY.png')}}" alt="" class="h-24 w-24"></div>
                <h3 class="text-2xl font-semibold text-white">Sustainability</h3>
                <p class="mt-4 text-gray-100">
                    Our commitment to the environment is reflected in the way we manufacture and recycle batteries. We aim to create eco-friendly products that contribute to a greener planet.
                </p>
            </div> --}}

            <!-- Card 3 -->
            {{-- <div class="p-6 p-6 bg-gradient-to-r from-green-500 to-black rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex justify-center"><img src="{{asset('image/InnovatioN.png')}}" alt="" class="h-24 w-24"></div>
                <h3 class="text-2xl font-semibold text-white">Innovation</h3>
                <p class="mt-4 text-gray-100">
                    Constant innovation drives us forward. We invest in research and development to bring you the latest in battery technology, ensuring you have access to cutting-edge solutions.
                </p>
            </div> --}}
        </div>
        @foreach ($abouts->skip(4)->take(1) as $about)
        {{-- <h2 class="text-4xl font-extrabold text-green-900 sm:text-5xl">
            {{ $about->title }}
        </h2> --}}
        <span class="mt-8 text-lg text-black max-w-3xl mx-auto " style="">
            {!! $about->description !!}
        </span>
    @endforeach
    </div>
</section>

<section class="bg-white py-16">
    @foreach ($missionViosions as $mv)


    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center">
        <h2 class="text-3xl font-semibold text-[#255D3A]">{{ $mv->title }}</h2>
        <p class="mt-4 text-lg text-black">{{ $mv->sub_title }}</p>
      </div>

      <!-- Vision Section -->
      <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 md:mx-32">
        <div class="text-center md:text-left">
          <h3 class="text-2xl font-semibold text-[#255D3A]">{{ $mv->vision }}</h3>
          <p class="mt-4 text-lg text-black">
           {!! $mv->vision_description !!}
          </p>

        </div>

        <!-- Mission Section -->
        <div class="text-center md:text-left">
          <h3 class="text-2xl font-semibold text-[#255D3A]">{{ $mv->mission }}</h3>
          <p class="mt-4 text-lg text-black">
      {!! $mv->mission_description !!}
        </p>
          {{-- <ul class="mt-4 list-disc pl-6 text-gray-700 space-y-2">
            <li><strong>Innovation</strong>: Continuously pushing the boundaries of e-battery technology to enhance energy efficiency, longevity, and overall performance.</li>
            <li><strong>Sustainability</strong>: Ensuring our products and processes minimize environmental impact, promoting a cleaner, more sustainable planet.</li>
            <li><strong>Quality</strong>: Delivering reliable, durable, and safe e-batteries that meet the highest standards of excellence for our customers.</li>
            <li><strong>Customer Commitment</strong>: Offering personalized, efficient solutions that cater to both consumer and industrial needs, with exceptional customer service at every step.</li>
          </ul> --}}
        </div>
      </div>
    </div>

    @endforeach
  </section>

   {{-- Explore Products --}}
   <div id="product" class="bg-white py-10">
    <!-- Section Heading -->
    <div class="font-bold flex justify-center mb-8">
      <h1 class="text-4xl text-[#255D3A]">Explore Battery</h1>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6 md:px-16">
      <!-- Card 1 -->

      @forelse ($products as $product)
      @php
          // Convert the product_images string to an array
          $images = explode(',', $product->product_images);
      @endphp
      <article class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
          <img
              src="{{ asset('storage/' . $images[0]) }}" {{-- Get the first image --}}
              alt="{{ $product->title }}"
              class="w-full h-48 object-cover"
          />
          <div class="p-6">
              <h1 class="text-xl font-bold text-[#255D3A]">{{ $product->title }}</h1>
              <p class="text-[#012D14] mt-2">
                  {{ $product->sub_title }}
              </p>
              <button class="mt-4 px-4 py-2 bg-[#255D3A] text-white rounded hover:from-green-700 hover:to-black">
                  <a href="{{ route('frontend.detail', $product->id) }}">View Details</a>
              </button>
          </div>
      </article>
  @empty
      <p>No data found</p>
  @endforelse



      <!-- Card 2 -->
      {{-- <article class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img
          src="{{ asset('image/e-rickshaw-battery.png') }}"
          alt="Lead-acid battery for industrial use"
          class="w-full h-48 object-cover"
        />
        <div class="p-6">
          <h1 class="text-xl font-bold text-gray-800">Industrial Lead-acid Battery</h1>
          <p class="text-gray-600 mt-2">
            High-capacity lead-acid batteries for industrial applications.
          </p>
          <button class="mt-4 px-4 py-2 bg-gradient-to-r from-green-500 to-black text-white rounded hover:from-green-700 hover:to-black">
            <a href="{{route('frontend.detail')}}">View Details</a>
          </button>
        </div>
      </article> --}}

      <!-- Card 3 -->
      {{-- <article class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img
          src="{{ asset('image/litium.png') }}"
          alt="Lithium-ion battery for advanced applications"
          class="w-full h-48 object-cover"
        />
        <div class="p-6">
          <h1 class="text-xl font-bold text-gray-800">Lithium-ion Battery</h1>
          <p class="text-gray-600 mt-2">
            Advanced lithium-ion batteries for efficient energy storage solutions.
          </p>
          <button class="mt-4 px-4 py-2 bg-gradient-to-r from-green-500 to-black text-white rounded hover:from-green-700 hover:to-black">
           <a href="{{route('frontend.detail')}}"> View Details</a>
          </button>
        </div>
      </article> --}}
    </div>
  </div>


<!-- component testimonial
-->


<div id="testimonial" class="bg-no-repeat bg-cover bg-center relative h-110" style="background-image: url();">
 <div class="absolute bg-white opacity-75 inset-0 z-0"></div>
<div>
    <div class="min-h-100 flex justify-center md:mx-32">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center z-10">
          <!-- Left Section -->
          <div class="max-w-lg text-center sm:text-left">
            <h1 class="text-2xl mt-4 md:text-4xl font-bold text-[#255D3A] tracking-tight">Testimonial</h1>
            <h2 class=" text-xl md:text-4xl font-bold text-black tracking-tight">
              What our <br class="hidden sm:block lg:hidden"> clients say about the Litho Power batteries
            </h2>
            {{-- <p class="mt-4 text-gray-300">
              Goals are just dreams with a deadline
            </p> --}}
            {{-- <div class="flex flex-row items-center space-x-3 mt-5 ml-12">
              <!-- Social Buttons -->
              <a href="#" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-2xl font-bold text-lg bg-green-600 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300">
                <svg class="w-4 fill-gray-100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.072 9.301s1.892-.147 1.892-2.459c0-2.315-1.548-3.441-3.51-3.441H0v12.926h6.454s3.941.129 3.941-3.816c-.001-.001.171-3.21-2.323-3.21zM2.844 5.697h3.61s.878 0 .878 1.344c0 1.346-.516 1.541-1.102 1.541H2.844V5.697zm3.427 8.332H2.844v-3.455h3.61s1.308-.018 1.308 1.775c0 1.512-.977 1.669-1.491 1.68zm9.378-7.341c-4.771 0-4.767 4.967-4.767 4.967s-.326 4.941 4.767 4.941c0 0 4.243.254 4.243-3.437H17.71s.072 1.391-1.988 1.391c0 0-2.184.152-2.184-2.25h6.423c.001-.001.709-5.612-4.312-5.612zm1.941 3.886h-4.074s.266-1.992 2.182-1.992 1.892 1.992 1.892 1.992zm.507-6.414H12.98v1.594h5.117V4.16z"/>
                </svg>
              </a>
              <a href="#" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-2xl font-bold text-lg bg-gray-900 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300">
                <svg class="h-5 fill-gray-100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 15.047a.846.846 0 0 1-.008.112l-.006.037-.016.072c-.003.015-.008.028-.013.042l-.022.063-.02.042c-.008.02-.018.038-.028.057l-.025.04a.769.769 0 0 1-.108.135l-.035.034a.812.812 0 0 1-.049.04l-.038.03c-.005.003-.01.008-.015.01l-9.14 6.095a.858.858 0 0 1-.954 0l-9.14-6.094-.014-.01a.807.807 0 0 1-.088-.071c-.012-.01-.023-.022-.034-.034-.015-.015-.03-.03-.043-.046a.707.707 0 0 1-.066-.09 1.038 1.038 0 0 1-.054-.096l-.019-.042a.868.868 0 0 1-.022-.063c-.005-.014-.01-.027-.013-.042-.007-.023-.01-.048-.015-.072l-.007-.037A.847.847 0 0 1 2 15.047V8.953c0-.038.003-.075.008-.112l.007-.037c.004-.024.008-.049.015-.072a.774.774 0 0 1 .145-.295.978.978 0 0 1 .029-.038l.043-.046.034-.034a.834.834 0 0 1 .088-.07c.005-.003.009-.008.014-.01l9.14-6.095a.86.86 0 0 1 .954 0l9.14 6.094c.005.003.01.008.015.01l.038.03a.839.839 0 0 1 .05.041l.034.034a.735.735 0 0 1 .108.136l.025.04.029.056.019.042.022.063c.005.014.01.027.013.042.007.023.011.048.016.072l.006.037a.834.834 0 0 1 .008.112v6.094ZM3.719 10.562v2.876L5.869 12l-2.15-1.438Zm7.422-2.088V4.465l-6.734 4.49 3.008 2.011 3.726-2.492Zm8.452.48L12.86 4.465v4.009l3.726 2.492 3.007-2.012ZM4.407 15.046l6.734 4.489v-4.009l-3.726-2.492-3.008 2.012Zm8.453.48v4.009l6.733-4.49-3.007-2.01-3.726 2.491ZM12 9.966 8.96 12 12 14.033 15.04 12 12 9.967Zm8.281 3.472v-2.876L18.131 12l2.15 1.438Z"/>
                </svg>
              </a>
            </div> --}}
          </div>

          <!-- Right Section -->
          <div class="mx-0 max-w-xl my-6 flex rounded-2xl bg-[#255D3A]">
            <div class="swiper-container flex-col flex self-center">
              <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)


                <div class="swiper-slide">
                  <blockquote class="text-left">
                    <div class="relative">
                      <img src="{{asset('storage/'.$testimonial->image)}}" alt="aji" class="object-cover w-full h-80 mx-auto rounded-t-2xl"/>
                      <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
                    </div>
                    <div class="relative m-5 p-5">
                      <p class="text-white text-xl px-5">
                       {{ $testimonial->msg }}
                      </p>
                    </div>
                  </blockquote>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>




  </div>
</div>
</div>

{{-- contact us --}}


  <section id="contact" class="bg-white py-16 ">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-white">
      <div class="text-center">
        <h2 class="text-5xl font-bold text-[#255D3A] mb-4"><strong>Get in Touch</strong></h2>
        <p class="mt-4 text-lg text-black">Have questions or need more information? We are here to help!</p>
      </div>

      <!-- Contact Form -->
      <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 ">
        <div class="flex flex-col justify-center bg-[#255D3A] bg-opacity-20 backdrop-blur-lg rounded-lg shadow-lg p-8">
          <h3 class="text-3xl font-semibold text-[#255D3A] mb-4"><strong>Contact Us</strong></h3>
          <p class="text-lg text-black mb-6">Fill out the form below to reach our team.</p>
          <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Name Field -->
              <div>
                <label for="name" class="block text-sm font-medium text-black">Full Name</label>
                <input type="text" id="name" name="name" required class="mt-2 w-full px-4 py-3 border border-[#255D3A] rounded-md text-black focus:outline-none focus:ring-2 focus:ring-[#255D3A]" />
              </div>

              <!-- Email Field -->
              <div>
                <label for="email" class="block text-sm font-medium text-black">Email Address</label>
                <input type="email" id="email" name="email" required class="mt-2 w-full px-4 py-3 border border-[#255D3A] rounded-md text-black focus:outline-none focus:ring-2 focus:ring-[#255D3A]" />
              </div>
            </div>

            <!-- Phone Number Field -->
            <div>
              <label for="number" class="block text-sm font-medium text-black">Phone Number</label>
              <input type="number" id="number" name="number" required class="mt-2 w-full px-4 py-3 border border-[#255D3A] rounded-md text-black focus:outline-none focus:ring-2 focus:ring-[#255D3A]" />
            </div>

            <!-- Message Field -->
            <div>
              <label for="message" class="block text-sm font-medium text-black">Message</label>
              <textarea id="message" name="msg" rows="4" required class="mt-2 w-full px-4 py-3 border border-[#255D3A] rounded-md text-black focus:outline-none focus:ring-2 focus:ring-[#255D3A]"></textarea>
            </div>

            <!-- Submit Button -->
            <div>
              <button type="submit" class="w-full bg-[#255D3A] text-white font-semibold py-3 px-4 rounded-md hover:bg-[#272727] focus:outline-none focus:ring-2 focus:ring-[#255D3A] transition duration-300">
                Send Message
              </button>
            </div>
          </form>
        </div>

        <!-- Contact Information Section -->
        <div class="flex flex-col justify-center bg-[#255D3A]  bg-opacity-20 backdrop-blur-lg rounded-lg shadow-lg p-8">
          <h3 class="text-3xl font-semibold text-[#255D3A] mb-4"><strong>Our Office</strong></h3>
          <p class="text-lg text-black mb-6">You can also reach us at the following address:</p>
          <div class="text-lg text-black">
            <p><strong>Factory:</strong> B15 Rania, Kanpur Dehat, Uttar Pradesh – 209304</p>
            <p class="mt-2"><strong>Phone:</strong> 8090354027</p>
            <p class="mt-2"><strong>Email:</strong> lithopower25@gmail.com</p>
            <p class="mt-2"><strong>Website:</strong> www.lithopowerr.com</p>
            <p class="mt-2"><strong>Visit:</strong> www.eprrecycler.com</p>
          </div>
        </div>
      </div>
    </div>
</section>



<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 8,
      autoplay: {
        delay: 8000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
        },
        1024: {
          slidesPerView: 1,
        },
      },
    })
  })
</script>

@endsection
