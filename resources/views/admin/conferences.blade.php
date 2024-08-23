@extends('layouts.admin')
@section('title','Admin - Conferences')
@section('sidebar')
    @include('sidebars.conference')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Conferences
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
            <li>All Conferences</li>
          </ul>
        </div>
        @include('alerts.success')
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Abstracts Table -->
          <div>
            <div class="flex items-center justify-between">
              <div class="flex">
                <h2
                  class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                >
                  @if(!$search)
                  Conferences
                  @else
                  Conferences - Search Result
                  @endif
                </h2>
              </div>
              <div class="flex">
                <a href="conferences/create" class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                  <i class="fa fa-plus"></i>
                  <span>Add</span>
                </a>
                
              </div>
            </div>
            <div class="card mt-3">
              <div
                class="is-scrollbar-hidden min-w-full overflow-x-auto"
                x-data="pages.tables.initExample1"
              >
                <table class="is-hoverable w-full text-left">
                  <thead>
                    <tr>
                      <th
                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Title
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Location
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Start
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        End
                      </th>
                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($conferences as $item)
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5 font-medium text-slate-700 dark:text-navy-100"
                        >{{ substr($item->title,0,30) }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->location }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->start }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->end ?? $item->start }}</td>
                        <td class="gridjs-td">
                          <form method="post" action="conferences/{{ $item->id }}">
                            @method('delete')
                            @csrf
                            <div class="flex justify-center space-x-2">
                            <a href="conferences/{{ $item->id }}/edit" class="btn size-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn size-8 p-0 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                            </div>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>

              <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
              {{ $conferences->links('vendor.pagination.custom') }}
              </div>
            </div>
          </div>

        </div>
      </main>
@endsection