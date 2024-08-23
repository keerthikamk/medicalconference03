@extends('layouts.admin')
@section('title','Admin')
@section('menu','is-sidebar-open')
@section('sidebar')
    @include('sidebars.home')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div
          class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6"
          >
          <div
            class="col-span-12 space-y-4 sm:space-y-5 lg:space-y-6"
            >
            <div
              class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5 lg:gap-6"
            >
              <div
                class="card bg-gradient-to-r from-blue-500 to-indigo-600 px-5 pb-5"
              >
                <div>
                  <div class="ax-transparent-gridline mt-5 w-1/2">
                    <div
                      x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.earningWhite); $el._x_chart.render() });"
                    ></div>
                  </div>
                  <p
                    class="mt-3 text-base font-medium tracking-wide text-indigo-100"
                  >
                    Earnings
                  </p>
                  <p class="mt-4 font-inter text-2xl font-semibold">
                    <span class="text-indigo-100">$</span>
                    <span class="text-white">31.313</span>
                  </p>
                  <div
                    class="badge mt-2 rounded-full bg-black/20 text-indigo-50"
                  >
                    13 Members
                  </div>
                </div>
                <div
                  class="absolute bottom-0 right-0 overflow-hidden rounded-lg"
                >
                  <img
                    class="w-24 translate-x-1/4 translate-y-1/4 opacity-50"
                    src="/assets/images/illustrations/the-dollar.svg"
                    alt="image"
                  />
                </div>
              </div>
              <div
                class="grid grid-cols-1 gap-4 sm:col-span-2 sm:grid-cols-2 sm:gap-5 lg:gap-6"
              >
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        {{ $count->abstracts }}
                      </p>
                      <p class="text-xs+ line-clamp-1">Abstracts</p>
                    </div>
                    <div
                      class="mask is-star flex size-10 shrink-0 items-center justify-center bg-success"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <a href="/admin/abstracts"
                      class="badge mt-2 space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15"
                      >
                      <span>View All</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        {{ $count->mails }}
                      </p>
                      <p class="text-xs+ line-clamp-1">Unread Mails</p>
                    </div>
                    <div
                      class="mask is-star flex size-10 shrink-0 items-center justify-center bg-info"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                      </svg>
                    </div>
                  </div>
                  <div>
                    <a href="/admin/mails"
                      class="badge mt-2 space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15"
                      >
                      <span>All Mails</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        {{ $count->conferences }}
                      </p>
                      <p class="text-xs+ line-clamp-1">Active Conference</p>
                    </div>
                    <div
                      class="mask is-star flex size-10 shrink-0 items-center justify-center bg-secondary"
                    >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 99.97" fill="white" class="size-5">
                      <g><path d="M81.5,54.86c-17.01,0-24.95,0-41.95,0c-0.26,0-0.46,0.21-0.46,0.46v7.95c0,0.26,0.21,
                      0.46,0.46,0.46 c8.88,0,8.29,0,17.19,0v31.49c0,0.34,0.28,0.62,0.62,0.62h0.24h6.54h0.25c0.34,0,
                      0.62-0.28,0.62-0.62V63.74c5.87,0,10.64,0,16.51,0 c0.25,0,0.46-0.21,0.46-0.46v-7.95C81.96,55.08,81.76,
                      54.86,81.5,54.86L81.5,54.86z M119.05,95.34c-0.04-0.29-0.16-0.56-0.38-0.78
                      c-1.61-1.63-3.65-2.95-5.98-3.86c-1.62-0.63-3.4-1.06-5.26-1.25l0.35-2.04h12.65c1.31,0,2.4-1.08,2.4-2.4
                      c0-9.93-2.34-18.56,0-29.87c0.69-3.35-6.22-3.83-6.22,0.18v25.45H92.69c-2.14,0-2.4,4.49-2.4,6.12c0,0.29,
                      0.24,0.53,0.53,0.53 h12.69l0.49,1.98c-1.97,0.13-3.84,0.53-5.58,1.16c-2.23,0.81-4.2,2.01-5.81,3.47c-0.38,
                      0.35-0.52,0.87-0.4,1.34 c-0.62,0.46-1.02,0.92-1.02,2.05s1.14,2.55,2.55,2.55s2.55-1.42,
                      2.55-2.55s-0.41-1.59-1.04-2.06c1.19-0.92,2.58-1.69,4.1-2.25 c1.63-0.6,3.44-0.96,5.35-1.02l0.28,2.76l0.01,
                      0.12c-1.07,0.3-1.87,1.16-1.87,2.46s1.14,2.55,2.55,2.55c1.4,0,2.55-1.26,2.55-2.55
                      s-0.78-2.15-1.85-2.45l0.01-0.13l0.2-2.73c1.82,0.12,3.54,0.51,5.11,1.12h0.01c1.53,0.59,2.9,1.39,4.07,2.37
                      c-0.47,0.46-0.76,0.76-0.76,1.82s1.14,2.55,2.55,2.55c1.41,0,2.55-1.42,2.55-2.55C120.11,96.27,119.69,95.8,
                      119.05,95.34 L119.05,95.34L119.05,95.34z M102.04,17.56c-5.79,0-10.49,4.7-10.49,10.49c0,5.79,4.7,10.49,10.49,
                      10.49s10.49-4.7,10.49-10.49 C112.52,22.26,107.83,17.56,102.04,17.56L102.04,17.56L102.04,17.56z
                      M89.85,67.06h-9.62c-2.87,0-5.22,2.34-5.22,5.22 c0,8.53,0.06,15.07,0.06,23.65l10.43,0.02v-16.3c0-2.29,0.86-1.49,
                      3.44-1.49c6.14,0,8.28-0.03,14.4-0.03 c4.32,0,7.84-3.53,7.84-7.84V48.3c0-4.39-3.59-7.98-7.98-7.98C84.14,40.32,
                      89.63,53.86,89.85,67.06L89.85,67.06z M3.83,95.34 c0.04-0.29,0.16-0.56,0.38-0.78c1.62-1.63,3.65-2.95,
                      5.98-3.86c1.62-0.63,3.4-1.06,5.26-1.25l-0.35-2.04H2.45 c-1.31,0-2.4-1.08-2.4-2.4c0-9.93,2.34-18.56,
                      0-29.87c-0.69-3.35,6.22-3.83,6.22,0.18v25.45h23.92c2.14,0,2.4,4.49,2.4,6.12 c0,0.29-0.24,0.53-0.53,
                      0.53H19.37l-0.49,1.98c1.97,0.13,3.84,0.53,5.58,1.16c2.23,0.81,4.2,2.01,5.81,3.47 c0.38,0.35,0.52,0.87,0.4,1.34c0.62,
                      0.46,1.02,0.92,1.02,2.05s-1.14,2.55-2.55,2.55c-1.4,0-2.55-1.42-2.55-2.55 s0.41-1.59,
                      1.04-2.06c-1.19-0.92-2.58-1.69-4.1-2.25c-1.63-0.6-3.44-0.96-5.35-1.02l-0.28,2.76l-0.01,0.12 c1.07,0.3,1.87,
                      1.16,1.87,2.46s-1.14,2.55-2.55,2.55c-1.4,0-2.55-1.26-2.55-2.55s0.78-2.15,1.85-2.45l-0.01-0.13l-0.2-2.73 c-1.82,
                      0.12-3.54,0.51-5.1,1.12h-0.01c-1.52,0.59-2.9,1.39-4.07,2.37c0.47,0.46,0.76,0.76,0.76,1.82s-1.14,2.55-2.55,2.55
                      s-2.55-1.42-2.55-2.55C2.77,96.27,3.19,95.8,3.83,95.34L3.83,95.34L3.83,95.34z M20.31,17.56c5.79,0,10.49,4.7,10.49,
                      10.49 c0,5.79-4.7,10.49-10.49,10.49S9.82,33.84,9.82,28.05C9.83,22.26,14.52,17.56,20.31,17.56L20.31,17.56L20.31,
                      17.56z M31.19,67.06 h9.62c2.87,0,5.22,2.34,5.22,5.22c0,7.88-0.06,15.72-0.06,23.65l-10.43,
                      0V79.64c0-2.29-0.86-1.49-3.44-1.49 c-6.14,0-8.28-0.03-14.4-0.03c-4.32,0-7.84-3.53-7.84-7.84V48.3c0-4.39,3.59-7.98,
                      7.98-7.98C36.9,40.32,31.41,53.86,31.19,67.06 L31.19,67.06z M60.46,0c5.5,0,9.97,4.46,9.97,9.97c0,5.5-4.46,9.97-9.97,
                      9.97c-5.5,0-9.97-4.46-9.97-9.97 C50.5,4.46,54.95,0,60.46,0L60.46,0L60.46,0z M45.01,29.05c-3.03,3.87-4.5,7.58-4.85,
                      12.42c-0.43,2.92-0.83,2.61-0.77,4.49 c0.17,6.02,8.15,6.46,8.63-0.25l0.62-4.58c0.13-1.68,0.24-1.5,0.92-3.1c0.32-0.75,
                      0.7-1.4,1.15-1.92l0.07,2.97l0,0l0.04,11.2h19.36 l0.08-11.2l0,0l0.07-2.97c0.45,0.53,0.84,1.17,1.15,1.92c0.68,1.6,0.79,
                      1.42,0.92,3.1l0.62,4.58c0.74,6.81,8.65,5.95,8.63,0.25
                      c-0.01-1.88-0.34-1.57-0.78-4.49c-0.38-5.13-2.01-9.17-5.43-13.12C68.83,20.7,51.54,20.71,45.01,29.05L45.01,29.05z"/></g>
                    </svg>


                    </div>
                  </div>
                  <div>
                    <a href="/admin/conferences"
                      class="badge mt-2 space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15"
                      >
                      <span>View All</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        {{ $count->downloads }}
                      </p>
                      <p class="text-xs+ line-clamp-1">Broucher Downloads</p>
                    </div>
                    <div
                      class="mask is-star flex size-10 shrink-0 items-center justify-center bg-warning"
                    >
                      <svg
                        class="size-5 text-white"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M12.5293 18L20.9999 8.40002"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M3 13.2L7.23529 18L17.8235 6"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <a href="/admin/sections/downloads"
                      class="badge mt-2 space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15"
                      >
                      <span>View All</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6"
              >
              <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                  <h2
                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                  >
                    Contact List
                  </h2>

                  <div
                    x-data="usePopper({placement:'bottom-end',offset:4})"
                    @click.outside="isShowPopper && (isShowPopper = false)"
                    class="inline-flex"
                  >
                    <button
                      x-ref="popperRef"
                      @click="isShowPopper = !isShowPopper"
                      class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>

                    <div
                      x-ref="popperRoot"
                      class="popper-root"
                      :class="isShowPopper && 'show'"
                    >
                      <div
                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                      >
                        <ul>
                          <li>
                            <a
                              href="dashboards-personal.html#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Action</a
                            >
                          </li>
                          <li>
                            <a
                              href="dashboards-personal.html#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Another Action</a
                            >
                          </li>
                          <li>
                            <a
                              href="dashboards-personal.html#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Something else</a
                            >
                          </li>
                        </ul>
                        <div
                          class="my-1 h-px bg-slate-150 dark:bg-navy-500"
                        ></div>
                        <ul>
                          <li>
                            <a
                              href="dashboards-personal.html#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Separated Link</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="space-y-3.5" x-data="{expandedItem:'item-1'}">
                  <div x-data="accordionItem('item-1')">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-4">
                        <div class="avatar size-10">
                          <img
                            class="rounded-full"
                            src="/assets/images/avatar/avatar-12.jpg"
                            alt="avatar"
                          />
                        </div>
                        <div>
                          <h3
                            class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                          >
                            Konnor Guzman
                          </h3>
                          <p class="mt-0.5 text-xs line-clamp-1">
                            (01) 22 888 4444
                          </p>
                        </div>
                      </div>
                      <button
                        @click="expanded = !expanded"
                        class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <i
                          :class="expanded && '-rotate-180'"
                          class="fas fa-chevron-down transition-transform"
                        ></i>
                      </button>
                    </div>
                    <div x-show="expanded" x-collapse>
                      <div class="flex justify-between pt-4">
                        <button
                          class="btn size-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
                        >
                          <i class="fa-solid fa-phone text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25"
                        >
                          <i class="fa-solid fa-video text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
                        >
                          <i class="fa-regular fa-comment text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                          <i class="fa-regular fa-envelope text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                        >
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div x-data="accordionItem('item-2')">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-4">
                        <div class="avatar size-10">
                          <img
                            class="rounded-full"
                            src="/assets/images/avatar/avatar-6.jpg"
                            alt="avatar"
                          />
                        </div>
                        <div>
                          <h3
                            class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                          >
                            Alfredo Elliott
                          </h3>
                          <p class="mt-0.5 text-xs line-clamp-1">
                            (095)-800-8313
                          </p>
                        </div>
                      </div>
                      <button
                        @click="expanded = !expanded"
                        class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <i
                          :class="expanded && '-rotate-180'"
                          class="fas fa-chevron-down transition-transform"
                        ></i>
                      </button>
                    </div>
                    <div x-show="expanded" x-collapse>
                      <div class="flex justify-between pt-4">
                        <button
                          class="btn size-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
                        >
                          <i class="fa-solid fa-phone text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25"
                        >
                          <i class="fa-solid fa-video text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
                        >
                          <i class="fa-regular fa-comment text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                          <i class="fa-regular fa-envelope text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                        >
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div x-data="accordionItem('item-3')">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-4">
                        <div class="avatar size-10">
                          <div
                            class="is-initial rounded-full bg-info text-sm+ uppercase text-white"
                          >
                            ds
                          </div>
                        </div>
                        <div>
                          <h3
                            class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                          >
                            Derrick Simmons
                          </h3>
                          <p class="mt-0.5 text-xs line-clamp-1">
                            (350)-813-3861
                          </p>
                        </div>
                      </div>
                      <button
                        @click="expanded = !expanded"
                        class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <i
                          :class="expanded && '-rotate-180'"
                          class="fas fa-chevron-down transition-transform"
                        ></i>
                      </button>
                    </div>
                    <div x-show="expanded" x-collapse>
                      <div class="flex justify-between pt-4">
                        <button
                          class="btn size-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
                        >
                          <i class="fa-solid fa-phone text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25"
                        >
                          <i class="fa-solid fa-video text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
                        >
                          <i class="fa-regular fa-comment text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                          <i class="fa-regular fa-envelope text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                        >
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div x-data="accordionItem('item-4')">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-4">
                        <div class="avatar size-10">
                          <img
                            class="rounded-full"
                            src="/assets/images/avatar/avatar-3.jpg"
                            alt="avatar"
                          />
                        </div>
                        <div>
                          <h3
                            class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                          >
                            Henry Curtis
                          </h3>
                          <p class="mt-0.5 text-xs line-clamp-1">
                            (675)-975-0083
                          </p>
                        </div>
                      </div>
                      <button
                        @click="expanded = !expanded"
                        class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <i
                          :class="expanded && '-rotate-180'"
                          class="fas fa-chevron-down transition-transform"
                        ></i>
                      </button>
                    </div>
                    <div x-show="expanded" x-collapse>
                      <div class="flex justify-between pt-4">
                        <button
                          class="btn size-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
                        >
                          <i class="fa-solid fa-phone text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25"
                        >
                          <i class="fa-solid fa-video text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
                        >
                          <i class="fa-regular fa-comment text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                          <i class="fa-regular fa-envelope text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                        >
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div x-data="accordionItem('item-5')">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-4">
                        <div class="avatar size-10">
                          <img
                            class="rounded-full"
                            src="/assets/images/avatar/avatar-20.jpg"
                            alt="avatar"
                          />
                        </div>
                        <div>
                          <h3
                            class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                          >
                            John Doe
                          </h3>
                          <p class="mt-0.5 text-xs line-clamp-1">
                            (727)-810-3880
                          </p>
                        </div>
                      </div>
                      <button
                        @click="expanded = !expanded"
                        class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <i
                          :class="expanded && '-rotate-180'"
                          class="fas fa-chevron-down transition-transform"
                        ></i>
                      </button>
                    </div>
                    <div x-show="expanded" x-collapse>
                      <div class="flex justify-between pt-4">
                        <button
                          class="btn size-7 rounded-full bg-success/10 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
                        >
                          <i class="fa-solid fa-phone text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-warning/10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25"
                        >
                          <i class="fa-solid fa-video text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-secondary/10 p-0 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
                        >
                          <i class="fa-regular fa-comment text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-info/10 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                          <i class="fa-regular fa-envelope text-xs"></i>
                        </button>
                        <button
                          class="btn size-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                        >
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                  <h2
                    class="font-medium tracking-wide text-slate-700 dark:text-navy-100"
                  >
                    Recent Payments
                  </h2>
                  <a
                    href="dashboards-personal.html#"
                    class="border-b border-dotted border-current pb-0.5 text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70"
                    >View All</a
                  >
                </div>
                <div class="space-y-3.5">
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="/assets/images/avatar/avatar-20.jpg"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Konnor Guzman
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 21, 2021 - 08:05
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $660.22
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="/assets/images/avatar/avatar-5.jpg"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Henry Curtis
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 19, 2021 - 11:55
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $33.63
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="/assets/images/avatar/avatar-18.jpg"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Derrick Simmons
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 16, 2021 - 14:45
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $674.63
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="/assets/images/avatar/avatar-7.jpg"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Kartina West
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 13, 2021 - 11:30
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $547.63
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="/assets/images/avatar/avatar-11.jpg"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Samantha Shelton
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 10, 2021 - 09:41
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $736.24
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="/assets/images/avatar/avatar-19.jpg"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Joe Perkins
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 06, 2021 - 11:41
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $736.24
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </main>
@endsection