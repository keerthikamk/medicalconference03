@extends('layouts.admin')
@section('title','Admin - Mails')
@section('menu','is-sidebar-open')
@section('sidebar')
    @include('sidebars.mail')
@endsection
@section('content')
    <!-- Main Content Wrapper -->
    <main class="main-content mail-app w-full px-[var(--margin-x)] pb-6">
      <form method="post">
        @csrf
        <div class="flex flex-col-reverse py-5 sm:flex-row sm:justify-between">
          <div class="mt-2 flex items-center justify-between space-x-1">
            <div class="flex items-center px-2.5">
            
              <label
                class="flex size-8 items-center justify-center"
                x-tooltip="'Select All'"
              >
                <input
                  onclick="check(this)"
                  class="form-checkbox is-basic size-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                  type="checkbox"
                />
              </label>
              <div
                x-data="usePopper({placement:'bottom-start',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <a
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn -ml-1 size-5 rounded p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <i class="fas fa-chevron-down text-tiny+"></i>
                </a>

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
                          onclick="checkAll()"
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >All</a
                        >
                      </li>
                      <li>
                        <a
                          onclick="none()"
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >None</a
                        >
                      </li>
                      <li>
                        <a
                          onclick="read()"
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Read</a
                        >
                      </li>
                      <li>
                        <a
                          onclick="unread()"
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Unread</a
                        >
                      </li>
                      <li>
                        <a
                          onclick="starred()"
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Starred</a
                        >
                      </li>
                      <li>
                        <a
                          onclick="unstarred()"
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Unstarred</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex">
              <button
                class="btn mr-2 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip="'Archive'" name="label" value="archive"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                </svg>
              </button>
              <button
                class="btn mr-2 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip="'Spam'" name="label" value="spam"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                </svg>
              </button>
              <button
                class="btn mr-2 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip="'Delete'" name="label" value="trash"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
              </button>
              <button
                class="btn mr-2 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip="'Mark as Unread'" name="status" value="unread"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </button>
              <button
                class="btn mr-2 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip="'Mark as Read'" name="status" value="read"
                >
                <svg class="size-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 9.00005L10.2 13.65C11.2667 14.45 12.7333 14.45 13.8 13.65L20 9" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.17681C3 8.45047 3.39378 7.78123 4.02871 7.42849L11.0287 3.5396C11.6328 3.20402 12.3672 3.20402 12.9713 3.5396L19.9713 7.42849C20.6062 7.78123 21 8.45047 21 9.17681V17C21 18.1046 20.1046 19 19 19H5C3.89543 19 3 18.1046 3 17V9.17681Z" />
                </svg>
              </button>

              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
                >
                <div
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
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
                      d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                    />
                  </svg>
                </div>

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
                          class="flex h-8 w-full items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >
                          <strong>Labels</strong>
                        </a>
                      </li>
                      <li>
                        <button name="label" value="saved"
                          class="flex h-8 w-full items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 mr-2 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                          </svg>
                          Saved</button
                        >
                      </li>
                      <li>
                        <button name="label" value="work"
                          class="flex h-8 w-full items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 mr-2 text-secondary dark:text-secondary-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                          </svg>
                          Work</button
                        >
                      </li>
                      <li>
                        <button name="label" value="personal"
                          class="flex h-8 w-full items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 mr-2 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                          </svg>
                          Personal</button
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-between">
            <div
              class="text-lg font-medium text-slate-700 dark:text-navy-100 sm:hidden"
            >
              Inbox
            </div>
            <div class="flex items-center space-x-1">
              <div class="flex items-center space-x-2">
                <span>{{ $mails->firstItem() . ' - ' . $mails->lastItem() . ' of ' . $mails->total() }}</span>
                <div class="flex">
                  <a href="{{ $mails->previousPageUrl() }}"
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
                  <a href="{{ $mails->nextPageUrl() }}"
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
                        d="M9 5l7 7-7 7"
                      />
                    </svg>
                  </a>
                </div>
              </div>
              <!-- <button
                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="size-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="1.5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                </svg>
              </button> -->
            </div>
          </div>
        </div>
        <div class="card">
        @foreach($mails as $mail)
          @if($mail->status == 'unread')
            @if( $mail->sl == $mails->lastItem() )
            <div class="flex cursor-pointer flex-col hover:bg-slate-100 dark:hover:bg-navy-600 sm:flex-row sm:items-center font-semibold text-slate-700 dark:text-navy-100">
            @else
            <div class="flex cursor-pointer flex-col border-b dark:border-navy-500 hover:bg-slate-100 dark:hover:bg-navy-600 sm:flex-row sm:items-center font-semibold text-slate-700 dark:text-navy-100">
            @endif
          @else
            @if( $mail->sl == $mails->lastItem() )
            <div class="flex cursor-pointer flex-col hover:bg-slate-100 dark:hover:bg-navy-600 sm:flex-row sm:items-center">
            @else
            <div class="flex cursor-pointer flex-col border-b dark:border-navy-500 hover:bg-slate-100 dark:hover:bg-navy-600 sm:flex-row sm:items-center">
            @endif
          @endif
              <div class="flex items-center justify-between">
                <div class="flex space-x-2 sm:w-72">
                  <div class="flex p-2">
                    <label
                      class="flex size-8 items-center justify-center"
                      x-tooltip="'Select'"
                    >
                      <input
                        class="{{$mail->status}} form-checkbox is-outline size-4.5 rounded border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                        type="checkbox" name="id-{{$mail->id}}"
                      />
                    </label>
                    <label
                      x-tooltip="'Starred'" id="{{ $mail->id }}" onclick="makeStarred(this.id)"
                      class="btn hidden size-8 rounded-full p-0 text-slate-400 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-300 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:inline-flex"
                    >
                      <svg
                        id="star_{{ $mail->id }}"
                        xmlns="http://www.w3.org/2000/svg"
                        stroke-width="1.5"
                        class="size-5"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path
                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                          @if($mail->status == 'starred')
                          fill="currentColor"
                          @else
                          fill="none"
                          @endif
                        />
                      </svg>
                    </label>
                  </div>
                  <a href="mails/{{ $mail->id }}" class="flex w-full items-center space-x-2">
                    <h3 class="line-clamp-1">{{ $mail->name }}</h3>
                    <span
                      class="size-2 shrink-0 rounded-full bg-secondary lg:hidden"
                    ></span>
                  </a>
                </div>
                <div class="shrink-0 px-1 text-xs sm:hidden">{{ $mail->date }}</div>
              </div>
              <a href="mails/{{ $mail->id }}" class="flex flex-1 items-center justify-between space-x-2 p-3">
                <div class="flex items-center space-x-2 px-2">
                  <span class="line-clamp-1">
                    {{ $mail->subject ? substr($mail->subject, 0, 100) : substr($mail->message, 0, 100) }}
                  </span>
                </div>
                <div class="flex sm:hidden">
                  <button
                    x-tooltip="'Starred'"
                    class="btn size-8 rounded-full p-0 text-slate-400 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-300 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      class="size-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                      />
                    </svg>
                  </button>
                  <button
                    x-tooltip="'Actions'"
                    class="btn size-8 rounded-full p-0 text-slate-400 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-300 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      class="size-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                      />
                    </svg>
                  </button>
                </div>
              </a>
              <a href="mails/{{ $mail->id }}" class="hidden px-2 text-xs+ sm:flex p-3">{{ $mail->date }}</a>
          </div>
        @endforeach
        @if($mails->count() == 0)
          <div class="flex flex-col hover:bg-slate-100 dark:hover:bg-navy-600 sm:flex-row sm:items-center font-semibold text-slate-700 dark:text-navy-100 p-2.5">
            Oops! Empty!!
          </div>
        @endif
        </div>
      </form>
    </main>
    <script>
      function check(input)
      {
        var checkboxes = document.getElementsByTagName('input');

        if(input.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
              checkboxes[i].checked = true;
            }
          }
        } else {
          for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
              checkboxes[i].checked = false;
            }
          }
        }
      }

      function checkAll() {
        var checkboxes = document.getElementsByTagName('input');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      }

      function none()
      {
        var checkboxes = document.getElementsByTagName('input');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = false;
          }
        }
      }

      function read()
      {
        var checkboxes = document.getElementsByClassName('read');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      }

      function unread()
      {
        var checkboxes = document.getElementsByClassName('unread');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      }

      function starred()
      {
        var checkboxes = document.getElementsByClassName('starred');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      }

      function unstarred()
      {
        var checkboxes = document.getElementsByClassName('unstarred');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      }

      function makeStarred(id)
      {
        const csrfToken = "{{ csrf_token() }}";
        // console.log(csrfToken);
        const url = "/admin/mails/" + id;
        // const data = {name: "John", age: 30, city: "New York"};
        return (
        fetch(url, {
            method: 'PATCH',
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            },
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
                '_method': 'PATCH',
                'X-CSRF-TOKEN': csrfToken
            },
            // data: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(res => {
            // console.log(res);
            if (res.status == 'starred') {
              document.getElementById('star_' + res.id).innerHTML = "<path d='M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z' fill='currentColor' />";
            } else document.getElementById('star_' + res.id).innerHTML = "<path d='M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z' fill='none' />";
        })
        .catch(err => console.error(err))
        );
      }

    </script>
@endsection

