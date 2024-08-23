@if ($errors->any())
  <div class="space-y-4">
    @foreach ($errors->all() as $error)
    <div
      x-data="{isShow:true}"
      :class="!isShow && 'opacity-0 transition-opacity duration-300'"
      class="alert flex items-center justify-between overflow-hidden rounded-lg border border-info text-info"
      >
      <div class="flex">
        <div class="bg-info p-3 text-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>
        </div>
        <div class="px-4 py-3 sm:px-5">{{ $error }}</div>
      </div>
      <div class="px-2">
        <button
          @click="isShow = false; setTimeout(()=>$root.remove(),300)"
          class="btn size-7 rounded-full p-0 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>
    </div>
    @endforeach
  </div>
@endif