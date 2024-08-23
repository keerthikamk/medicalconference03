@extends('layouts.admin')
@section('title','Admin - Scientific Sessions - Add')
@section('sidebar')
    @include('sidebars.scientific')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Scientific Sessions
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
                href="/admin/scientifics"
                >Scientific Sessions</a
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
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          

          <!-- Resizeabele Textarea -->
          <div class="card px-4 pb-4 sm:px-5 space-y-4">
            <div class="my-3 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base pb-2"
              >
                {{ $scientific->title }}
                <a href="{{ $scientific->id }}/edit" class="btn h-8 border border-info/30 bg-info/10 font-small text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                  <i class="fa fa-edit pr-2"></i>
                  <span>Edit</span>
                </a>
              </h2>
              <p>{{ $scientific->content }}</p>
            
            </div>
            <form method="post" action="/admin/scientifics/{{ $scientific->id }}">
              @method('PATCH')
              @csrf
              <div class="relative flex -space-x-px">
                <input class="form-input peer w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Add List" type="text" name="list" autofocus="true">

                <button class="btn rounded-l-none bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                  <i class="fa fa-plus pr-2"></i>
                  Add
                </button>
              </div>
            </form>
            
              <div
                class="is-scrollbar-hidden min-w-full overflow-x-auto"
                x-data="pages.tables.initExample1"
                >
                <table class="is-hoverable w-full text-left">
                  <tbody>
                      @php
                        $sl = 0;
                      @endphp
                      @foreach($list as $item)
                      @php
                        $sl++;
                      @endphp
                      <tr
                      >
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $sl }}
                        </td>
                        <td
                          class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5"
                        >{{ $item->list }}</td>
                        <td class="gridjs-td">
                          <form method="post" action="{{ $item->id }}">
                            @method('delete')
                            @csrf
                            <div class="flex justify-center space-x-2">
                            <!-- <a href="scientifics/{{ $item->id }}" class="btn size-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                <i class="fa fa-edit"></i>
                            </a> -->
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
            
          </div>

        </div>
      </main>
@endsection