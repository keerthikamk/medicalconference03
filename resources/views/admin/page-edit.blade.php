@extends('layouts.admin')
@section('title','Admin - Page Settings')
@section('menu','is-sidebar-open')
@section('sidebar')
    @include('sidebars.page')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Page
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
                href="/admin/pages"
                >Pages</a
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
            <li>Edit</li>
          </ul>
        </div>
        @include('alerts.success')
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
          <div class="col-span-12 grid">
            <form method="post" action="/admin/pages/{{ $page->id }}">
              @method('PATCH')
              @csrf
              <div class="card">
                <div class="is-scrollbar-hidden overflow-x-auto">
                  <div class="border-b-2 border-slate-150 dark:border-navy-500">
                    <div class="tabs-list -mb-0.5 flex">
                      @if($sections->count())
                      <a href="/admin/pages/{{ $page->id }}"
                        class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-transparent px-4 font-medium hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100 sm:px-5"
                      >
                        <i class="fa-solid fa-layer-group text-base"></i>
                        <span>General</span>
                      </a>
                      @endif
                      <a
                        class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5"
                      >
                        <i class="fa-solid fa-tags text-base"></i>
                        <span>Meta Tags</span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="space-y-4 p-4 sm:p-5">
                  <label class="block">
                    <span>Title</span>
                    <input
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="text" value="{{ $page->title }}" name="title"
                    />
                  </label>
                  <label class="block">
                    <span>Keywords</span>
                    <input
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="text" value="{{ $page->keywords }}" name="keywords"
                    />
                  </label>
                  <label class="block">
                    <span>Title</span>
                    <textarea
                      rows="4"
                      class="form-textarea w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter Description"
                      name="description"
                    >{{ $page->description }}</textarea>
                  </label>
                  <div class="flex justify-center space-x-2 pt-4">
                    
                    <button
                      class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                    >
                      
                      <i class="fa fa-save"></i>
                      <span>Save</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

      </main>
@endsection