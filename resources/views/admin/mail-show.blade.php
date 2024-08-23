@extends('layouts.admin')
@section('title','Admin - Mails')
@section('menu','is-sidebar-open')
@section('sidebar')
    @include('sidebars.mail')
@endsection
@section('content')
      <!-- Main Content Wrapper -->
      <main class="main-content mail-app w-full px-[var(--margin-x)] pb-6">
        <div class="flex flex-col-reverse py-5 sm:flex-row sm:justify-between">
          
          <div class="flex justify-between">
            <div class="flex items-center space-x-1">
              <div class="flex items-center space-x-2">
                <!-- <span>span</span> -->
                <div class="flex">
                  <a href="{{ url()->previous() }}"
                    class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
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
                        stroke-width="1.5"
                        d="M15 19l-7-7 7-7"
                      />
                    </svg>
                    
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="flex flex-col p-2.5 dark:border-navy-500 sm:flex-row sm:items-center border-b">
            <div class="flex flex-1 items-center justify-between space-x-2">
              <div class="flex items-center space-x-2 px-2">
                <span>
                  <b>{{ $mail->name }}</b><br>{{ strtolower($mail->email) }}
                </span>
              </div>
            </div>
            <div class="px-2 text-xs+ sm:flex">{{ $mail->date }}</div>
          </div>

          <div class="flex flex-col p-2.5 dark:border-navy-500 sm:flex-row sm:items-center">
            <div class="flex flex-1 items-center justify-between space-x-2">
              <div class="flex items-center space-x-2 px-2 font-semibold">
                <span class="">
                  {{ $mail->subject }}
                </span>
              </div>
            </div>
          </div>
          
          <div class="flex flex-col p-2.5 dark:border-navy-500 sm:flex-row sm:items-center">
            <div class="flex flex-1 items-center justify-between space-x-2">
              <div class="flex items-center space-x-2 px-2">
                <span>
                  {{ $mail->message }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection