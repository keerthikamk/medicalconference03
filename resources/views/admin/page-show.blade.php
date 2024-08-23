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
            <form method="post" enctype="multipart/form-data" onsubmit="myFunction1()">
              @method('PATCH')
              @csrf
              <div class="card">
                <div class="is-scrollbar-hidden overflow-x-auto">
                  <div class="border-b-2 border-slate-150 dark:border-navy-500">
                    <div class="tabs-list -mb-0.5 flex">
                      <a
                        class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5"
                      >
                        <i class="fa-solid fa-layer-group text-base"></i>
                        <span>General</span>
                      </a>
                      <a href="{{ $page->id }}/edit"
                        class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-transparent px-4 font-medium hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100 sm:px-5"
                      >
                        <i class="fa-solid fa-tags text-base"></i>
                        <span>Meta Tags</span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="space-y-4 p-4 sm:p-5">
                  <label class="block">
                    <span>Sub Title</span>
                    <input
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="text" value="{{ $sections[0]->sub_title }}" name="sub_title"
                    />
                  </label>
                  <label class="block">
                    <span>Title</span>
                    <input
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="text" value="{{ $sections[0]->title }}" name="title"
                    />
                  </label>
                  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="grid grid-cols-2 gap-4">
                      <label class="block">
                        <span>Change Images ( 436 x 436 )</span>
                        <img src="{{ $contents[0]->content }}" id="img1">
                        <div
                          class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]"
                          >
                          <input
                            type="file"
                            id="file1"
                            name="image1"
                            accept="image/*"
                          />
                        </div>
                      </label>

                      <label class="block">
                        <span>Change Images ( 298 x 298 )</span>
                        <img src="{{ $contents[1]->content }}" id="img2">
                        <div
                          class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]"
                          >
                          <input
                            type="file"
                            id="file2"
                            name="image2"
                            accept="image/*"
                          />
                        </div>
                      </label>
                    </div>
                    <div>
                      <span>Content</span>
                      <div class="mt-1.5 w-full">
                        <div id="editor1">
                        {!! $contents[2]->content !!}
                        </div>
                        <input type="hidden" name="content" id="hidden1">
                      </div>
                    </div>

                  </div>
                  <div class="flex justify-center space-x-2 pt-4">
                    
                    <button
                      class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                      name="form" value="general"
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

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6 mt-5">
          <div class="col-span-12 grid">
            <form method="post" onsubmit="myFunction2()">
              @method('PATCH')
              @csrf
              <div class="card">
                <div
                  class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5"
                  >
                  <div class="flex items-center space-x-2">
                    <div
                      class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light"
                    >
                      <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h4
                      class="text-lg font-medium text-slate-700 dark:text-navy-100"
                    >
                      Feature Section
                    </h4>
                  </div>
                </div>
                <div class="space-y-4 p-4 sm:p-5">
                  <label class="block">
                    <span>Sub Title</span>
                    <input
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="text"
                      name="sub_title"
                      value="{{ $sections[1]->sub_title }}"
                    />
                  </label>
                  <label class="block">
                    <span>Title</span>
                    <input
                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="text"
                      name="title"
                      value="{{ $sections[1]->title }}"
                    />
                  </label>
                  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    <div>
                      <span>Content</span>
                      <div class="mt-1.5 w-full">
                        <div id="editor2">
                        {!! $contents[3]->content !!}
                        </div>
                        <input type="hidden" name="content" id="hidden2">
                      </div>

                    </div>

                    <div>
                      <label class="block">
                        <p><strong>Future 1</strong></p>
                        <span>Icon</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="icon1"
                          value="{{ $contents[4]->type }}"
                        />
                      </label>
                      <label class="block">
                        <span>Title</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="title1"
                          value="{{ $contents[4]->content }}"
                        />
                      </label>

                      <label class="block mt-5">
                        <p><strong>Future 2</strong></p>
                        <span>Icon</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="icon2"
                          value="{{ $contents[5]->type }}"
                        />
                      </label>
                      <label class="block">
                        <span>Title</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="title2"
                          value="{{ $contents[5]->content }}"
                        />
                      </label>

                      <label class="block mt-5">
                        <p><strong>Future 3</strong></p>
                        <span>Icon</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="icon3"
                          value="{{ $contents[6]->type }}"
                        />
                      </label>
                      <label class="block">
                        <span>Title</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="title3"
                          value="{{ $contents[6]->content }}"
                        />
                      </label>

                      <label class="block mt-5">
                        <p><strong>Future 4</strong></p>
                        <span>Icon</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="icon4"
                          value="{{ $contents[7]->type }}"
                        />
                      </label>
                      <label class="block">
                        <span>Title</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          type="text"
                          name="title4"
                          value="{{ $contents[7]->content }}"
                        />
                      </label>


                    </div>

                  </div>
                  <div class="flex justify-center space-x-2 pt-4">
                    
                    <button
                      class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                      name="form" value="feature"
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

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6 mt-5">
          <div class="col-span-12 grid">
            <form method="post" enctype="multipart/form-data" onsubmit="myFunction3()">
              @method('PATCH')
              @csrf
              <div class="card">
                <div
                  class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5"
                  >
                  <div class="flex items-center space-x-2">
                    <div
                      class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light"
                    >
                      <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h4
                      class="text-lg font-medium text-slate-700 dark:text-navy-100"
                    >
                      Section
                    </h4>
                  </div>
                </div>
                <div class="space-y-4 p-4 sm:p-5">
                  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="grid grid-cols-2 gap-4">
                      <label class="block">
                        <span>Change Images ( 370 x 409 )</span>
                        <img src="{{ $contents[8]->content }}" id="img3">
                        <div
                          class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]"
                          >
                          <input
                            type="file"
                            id="file3"
                            name="image1"
                            accept="image/*"
                          />
                        </div>
                      </label>

                      <label class="block">
                        <span>Change Images ( 370 x 270 )</span>
                        <img src="{{ $contents[9]->content }}" id="img4">
                        <div
                          class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]"
                          >
                          <input
                            type="file"
                            id="file4"
                            name="image2"
                            accept="image/*"
                          />
                        </div>
                      </label>
                    </div>
                    <div>
                      <span>Content</span>
                      <div class="mt-1.5 w-full">
                        <div id="editor3">
                        {!! $contents[10]->content !!}
                        </div>
                        <input type="hidden" name="content" id="hidden3">
                      </div>

                    </div>

                  </div>
                  <div class="flex justify-center space-x-2 pt-4">
                    
                    <button
                      class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                      name="form" value="section"
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
      <script>
        const quill1 = new Quill('#editor1', {
          theme: 'snow'
        });

        const quill2 = new Quill('#editor2', {
          theme: 'snow'
        });

        const quill3 = new Quill('#editor3', {
          theme: 'snow'
        });
        
        function myFunction1() {
          document.getElementById('hidden1').value = quill1.root.innerHTML;
        }

        function myFunction2() {
          document.getElementById('hidden2').value = quill2.root.innerHTML;
        }

        function myFunction3() {
          document.getElementById('hidden3').value = quill3.root.innerHTML;
        }

        var file1 = document.getElementById("file1"),
            img1 = document.getElementById("img1"),
            file2 = document.getElementById("file2"),
            img2 = document.getElementById("img2"),
            file3 = document.getElementById("file3"),
            img3 = document.getElementById("img3"),
            file4 = document.getElementById("file4"),
            img4 = document.getElementById("img4");

        file1.addEventListener("change", function() {
          changeImage1(this);
        });

        file2.addEventListener("change", function() {
          changeImage2(this);
        });

        file3.addEventListener("change", function() {
          changeImage3(this);
        });

        file4.addEventListener("change", function() {
          changeImage4(this);
        });

        function changeImage1(input) {
          var reader;

          if (input.files && input.files[0]) {
            reader = new FileReader();

            reader.onload = function(e) {
              img1.setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        function changeImage2(input) {
          var reader;

          if (input.files && input.files[0]) {
            reader = new FileReader();

            reader.onload = function(e) {
              img2.setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        function changeImage3(input) {
          var reader;

          if (input.files && input.files[0]) {
            reader = new FileReader();

            reader.onload = function(e) {
              img3.setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        function changeImage4(input) {
          var reader;

          if (input.files && input.files[0]) {
            reader = new FileReader();

            reader.onload = function(e) {
              img4.setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

      </script>

@endsection