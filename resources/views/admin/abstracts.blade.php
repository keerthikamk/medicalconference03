@extends('layouts.admin')
@section('title','Admin - Abstracts')
@section('sidebar')
    @include('sidebars.abstract')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
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
            <li>Call for Abstracts</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Abstracts Table -->
          <div>
            @if($search)
            <div class="flex items-center justify-between">
              <h2
                class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
              >
                Search Result
              </h2>
            </div>
            @endif
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
                        Name
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Track Name
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Category
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Organization
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Phone
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Email
                      </th>
                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Action
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Date
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($abstracts as $item)
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
                        <td
                          class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5"
                        >{{ $item->fname. ' ' .$item->lname }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->track_name }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->category }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5">
                          @if(strlen($item->organization) > 30)
                          {{ substr($item->organization, 0, 30) }}...
                          @else
                          {{ $item->organization }}
                          @endif
                        </td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->phone }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ strtolower($item->email) }}</td>
                        <td class="gridjs-td">
                          <form method="post" action="abstracts/{{ $item->id }}">
                            @method('delete')
                            @csrf
                            <div class="flex justify-center space-x-2">
                              <a href="/uploads/abstracts/{{ $item->file }}" class="btn size-8 p-0 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25" x-tooltip="'Download Abstract file'" download>
                                  <i class="fa fa-download"></i>
                              </a>
                              <a href="abstracts/{{ $item->id }}" class="btn size-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25" x-tooltip="'View Details'">
                                  <i class="fa fa-eye"></i>
                              </a>
                              <button class="btn size-8 p-0 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25" x-tooltip="'Delete'">
                                  <i class="fa fa-trash-alt"></i>
                              </button>
                            </div>
                          </form>
                        </td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->date }}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>

              <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
              {{ $abstracts->links('vendor.pagination.custom') }}
              </div>
            </div>
          </div>

        </div>
      </main>
@endsection