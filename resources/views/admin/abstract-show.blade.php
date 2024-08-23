@extends('layouts.admin')
@section('title','Admin - Abstracts')
@section('sidebar')
    @include('sidebars.abstract')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)]">
        <div class="flex items-center space-x-4 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Call for Abstracts
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="/admin"
                >Admin</a
              >
              <svg
                x-ignore
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
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="/admin/abstracts"
                >Abstracts</a
              >
              <svg
                x-ignore
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
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>View</li>
          </ul>
        </div>

        <div class="grid grid-cols-12 lg:gap-6">
          <div
            class="col-span-12lg:sticky lg:bottom-0 lg:col-span-4 lg:self-end"
            >
            <div class="card grow items-center  p-4 sm:p-5">
              <h3
                class="text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                {{ $abstract->fname . ' ' . $abstract->lname }}
              </h3>
              <p class="text-xs+">{{ $abstract->organization }}</p>
              <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
              <div class="grow space-y-4">
                <div class="flex items-center space-x-4">
                  <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light"
                  >
                    <i class="fa fa-phone text-xs"></i>
                  </div>
                  <p>{{ $abstract->phone }}</p>
                </div>
                <div class="flex items-center space-x-4">
                  <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light"
                  >
                    <i class="fa fa-envelope text-xs"></i>
                  </div>
                  <p>{{ strtolower($abstract->email) }}</p>
                </div>
                <div class="flex items-center space-x-4">
                  <div
                    class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light"
                  >
                    <i class="fa fa-location text-xs"></i>
                  </div>
                  <p>{{ $abstract->address1 }}
                  <br>{{ $abstract->address2 }}
                  <br>{{ $abstract->city . ' - ' . $abstract->code }}</p>
                </div>
              </div>
              <!-- <button
                class="btn mt-5 space-x-2 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="size-4.5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd"
                  />
                </svg>
                <span> Profile </span>
              </button> -->
            </div>
          </div>

          <div class="col-span-12 lg:col-span-8 lg:pb-6">
            <div class="card">
              <div class="pt-3 flex grow flex-col px-4 pb-5 pt-1 text-center sm:px-5">
                <div><a class="text-xs+ text-info" href="#">{{ $abstract->category }}</a></div>
                <div class="mt-1">
                  <a
                    class="text-lg font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"
                    >{{ $abstract->track_name }}</a
                  >
                </div>
                <div class="my-2 flex items-center space-x-3 text-xs">
                  <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                  <p>{{ $abstract->date }}</p>
                  <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>
                <!-- <p class="my-2 grow text-left line-clamp-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p> -->
                <div>
                  <a
                    href="/uploads/abstracts/{{ $abstract->file }}"
                    class="btn mt-4 rounded-full bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90"
                    download
                    >
                    <i class="fa fa-download pr-2"></i>Download Abstract
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </main>



      <!-- Main Content Wrapper -->
@endsection