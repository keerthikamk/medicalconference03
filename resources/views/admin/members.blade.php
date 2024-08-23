@extends('layouts.admin')
@section('title','Admin - Members')
@section('sidebar')
    @include('sidebars.member')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Committee Members
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
            <li>All Members</li>
          </ul>
        </div>
        @include('alerts.success')
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
          <div class="col-span-12 lg:col-span-8">
            <div class="card">
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
                        Image
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Name
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Description
                      </th>

                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($members as $item)
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                        >
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        ><img src="{{ $item->img }}" alt="client" width="60px"/></td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->name }}</td>
                        <td
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{ $item->description }}</td>
                        <td class="gridjs-td">
                          <form method="post" action="members/{{ $item->id }}">
                            @method('delete')
                            @csrf
                            <div class="flex justify-center space-x-2">
                            <!-- <button class="btn size-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                <i class="fa fa-edit"></i>
                            </button> -->
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
              {{ $members->links('vendor.pagination.custom') }}
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <form method="post" enctype="multipart/form-data">
              @csrf
              <div class="card space-y-5 p-4 sm:p-5">
                <img id="preview">
                <label class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                  <input tabindex="-1" type="file" class="pointer-events-none absolute inset-0 h-full w-full opacity-0" name="image" id="filetag" accept="image/*" required>
                  <span class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    <span>Member Photo (230 x 370)</span>
                  </span>
                </label>
                <label class="block">
                  <input class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Name" type="text" name="name" required>
                </label>
                <label class="block">
                  <input class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Description (Optional)" type="text" name="description">
                </label>
                <div class="flex justify-center space-x-2">
                  <!-- <button class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                    Cancel
                  </button> -->
                  <button class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    <i class="fa fa-plus pr-3"></i> Add Member
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </main>
      <script type="text/javascript">
        var fileTag = document.getElementById("filetag"),
            preview = document.getElementById("preview");

        fileTag.addEventListener("change", function() {
          changeImage(this);
        });

        function changeImage(input) {
          var reader;

          if (input.files && input.files[0]) {
            reader = new FileReader();

            reader.onload = function(e) {
              preview.setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>
@endsection