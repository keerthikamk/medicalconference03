@if (Session::has('success'))
  <div class="space-y-4 pb-2">
    <div
      x-data="{isShow:true}"
      :class="!isShow && 'opacity-0 transition-opacity duration-300'"
      class="alert flex items-center justify-between overflow-hidden rounded-lg border border-success text-success"
      >
      <div class="flex">
        <div class="bg-success p-3 text-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
          <circle cx="12" cy="12" r="10" stroke="#1C274C" stroke-width="1.5"/>
          <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="px-4 py-3 sm:px-5">{{ Session::get('success') }}</div>
      </div>
      <div class="px-2">
        <button
          @click="isShow = false; setTimeout(()=>$root.remove(),300)"
          class="btn size-7 rounded-full p-0 font-medium text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
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
  </div>
@endif