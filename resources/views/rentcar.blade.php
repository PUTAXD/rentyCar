<x-layout>
  <section class="py-20 bg-white md:py-20 dark:bg-gray-900 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16 items-center">
        <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
            {{-- <img  src="{{ asset('carImage/' . $rentcar->image ) }}" alt="Car Image" width="200px" /> --}}
          <img class="w-full dark:hidden" src="{{ asset('carImage/' . $rentcar->image ) }}" alt="" />
          <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
        </div>
        {{-- {{dump($rentcar)}} --}}
        <div class="mt-6 sm:mt-8 lg:mt-0">
          <h1
            class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
          >
            {{$rentcar->merk->name}} -> {{$rentcar->type}}
          </h1>
          <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
            <p
              class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white"
            >
              Rp {{number_format($rentcar->price, 0, ',', '.')}}
            </p>
          </div>

          <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
            <a
              href="#"
              title=""
              class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
              role="button"
            >
              <svg
                class="w-5 h-5 -ms-2 me-2"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"
                />
              </svg>
              Add to favorites
            </a>

            <a
              href="#"
              title=""
              class="text-white mt-4 sm:mt-0 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
              role="button"
            >
              <svg
                class="w-5 h-5 -ms-2 me-2"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"
                />
              </svg>

              Add to cart
            </a>
          </div>

          <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

          <h3 class="font-semibold">Keadaan Mobil:</h3>
          <p class="mb-6 text-gray-500 dark:text-gray-400">
            {{ $rentcar['initialCondition'] }}
          </p>

          <h3 class="font-semibold">Deskripsi Mobil:</h3>
          <p class="mb-6 text-gray-500 dark:text-gray-400">
            {{ $rentcar['body'] }}
          </p>
          <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
            <!-- Modal toggle -->
            <button id="updateProductButton" data-modal-target="updateProductModal" data-modal-toggle="updateProductModal" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
              Update Car
            </button>

            <form action="{{ route('rentcar.destroy', $rentcar->id) }}" method="POST">
              @csrf
              @method('DELETE') <!-- Menggunakan method DELETE untuk form -->
              <button type="submit" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                  <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"></path></svg>
                  Delete
              </button>
            </form>
            </div>
        </div>
      </div>

    <div class="py-8">
        <a href="/rentcars" class="block text-xl text-blue-600 hover:underline"> &laquo;Back to All Car</a>
    </div>

      <!-- Tampilkan pesan error jika ada -->
      @if ($errors->any())
          <div>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

  <!-- Main modal -->
  <div id="updateProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Update Car
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('rentcar.update', $rentcar->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT') <!-- Menggunakan method PUT untuk update -->
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="merk_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk ID</label>
                        <input type="text" id="merk_id" name="merk_id" value="{{ old('merk_id', $rentcar->merk_id) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $rentcar->slug) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="licensePlate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">License Plate</label>
                        <input type="text" id="licensePlate" name="licensePlate" value="{{ old('licensePlate', $rentcar->licensePlate) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                      <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                      <input type="number" id="price" name="price" value="{{ old('price', $rentcar->price) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                      <label for="initialCondition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Initial Condition</label>
                      <textarea id="initialCondition" name="initialCondition" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description...">{{ old('initialCondition', $rentcar->initialCondition) }}</textarea>                    
                    </div>
                    <div class="sm:col-span-2">
                      <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                      <textarea id="body" name="body" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description...">{{ old('body', $rentcar->body) }}</textarea>                    
                    </div>
                    <div>
                      <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Renew New Image:</label>
                      <input type="file" id="image" name="image">
                    </div>
                </div>
                <div class="items-center">
                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Update Car
                    </button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
</section>
<x-footer></x-footer>
</x-layout>
