<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <script src='./css.js'></script>

    <title>Welcome to Ez Jobs</title>
  </head>

  <body>
    <div class='relative overflow-hidden bg-white'>
      <div class='mx-auto max-w-7xl'>
        <div
          class='relative z-10 bg-white pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32'
        >
          <svg
            class='absolute inset-y-0 right-0 hidden h-full w-48 translate-x-1/2 transform text-white lg:block'
            fill='currentColor'
            viewBox='0 0 100 100'
            preserveAspectRatio='none'
            aria-hidden='true'
          >
            <polygon points='50,0 100,0 50,100 0,100' />
          </svg>

          <div>
            <div class='relative px-4 pt-6 sm:px-6 lg:px-8'>
              <nav
                class='relative flex items-center justify-between sm:h-10 lg:justify-start'
                aria-label='Global'
              >
                <div
                  class='flex flex-shrink-0 flex-grow items-center lg:flex-grow-0'
                >
                  <div
                    class='flex w-full items-center justify-between md:w-auto'
                  >
                    <a href='/'>
                      <span class='sr-only'>Ez Jobs</span>
                      <img
                        alt='Ez Jobs'
                        class='h-8 w-auto sm:h-10'
                        src='./src/logo.png'
                      />
                    </a>
                    <div class='-mr-2 flex items-center md:hidden'>
                      <button
                        type='button'
                        onclick='showMenu()'
                        class='inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500'
                        aria-expanded='false'
                      >
                        <span class='sr-only'>Open main menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg
                          class='h-6 w-6'
                          xmlns='http://www.w3.org/2000/svg'
                          fill='none'
                          viewBox='0 0 24 24'
                          stroke-width='1.5'
                          stroke='currentColor'
                          aria-hidden='true'
                        >
                          <path
                            stroke-linecap='round'
                            stroke-linejoin='round'
                            d='M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5'
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class='hidden md:ml-10 md:block md:space-x-8 md:pr-4'>
                  <a
                    href='./jobs/'
                    class='font-medium text-gray-500 hover:text-gray-900'
                    >Jobs</a
                  >
                  <a
                    href='./jobs/publish/'
                    class='font-medium text-gray-500 hover:text-gray-900'
                    >Post Job</a
                  >


                  <a
                    href='./about/'
                    class='font-medium text-gray-500 hover:text-gray-900'
                    >About us</a
                  >

                  <a
                    href='./login/'
                    class='font-medium text-cyan-600 hover:text-cyan-500'
                    >Admin Login</a
                  >
                </div>
              </nav>
            </div>

            <!--             
          Mobile menu, show/hide based on menu open state.

          Entering: 'duration-150 ease-out'
            From: 'opacity-0 scale-95'
            To: 'opacity-100 scale-100'
          Leaving: 'duration-100 ease-in'
            From: 'opacity-100 scale-100'
            To: 'opacity-0 scale-95'
        -->
            <div
              id='mobileMenu'
              class='absolute hidden inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden'
            >
              <script>
                let mobileMenu = document.getElementById('mobileMenu');

                const hideMenu = () => {
                  mobileMenu.style.display = 'none';
                };
                const showMenu = () => {
                  mobileMenu.style.display = 'block';
                };
              </script>
              <div
                class='overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5'
              >
                <div class='flex items-center justify-between px-5 pt-4'>
                  <div>
                    <img class='h-8 w-auto' src='./src/logo.png' alt=' />
                  </div>
                  <div class='-mr-2'>
                    <button
                      onclick='hideMenu()'
                      type='button'
                      class='inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500'
                    >
                      <span class='sr-only'>Close main menu</span>
                      <!-- Heroicon name: outline/x-mark -->
                      <svg
                        class='h-6 w-6'
                        xmlns='http://www.w3.org/2000/svg'
                        fill='none'
                        viewBox='0 0 24 24'
                        stroke-width='1.5'
                        stroke='currentColor'
                        aria-hidden='true'
                      >
                        <path
                          stroke-linecap='round'
                          stroke-linejoin='round'
                          d='M6 18L18 6M6 6l12 12'
                        />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class='space-y-1 px-2 pt-2 pb-3'>
                  <a
                    href='./jobs/'
                    class='block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900'
                    >Jobs</a
                  >
                  <a
                    href='./jobs/publish/'
                    class='block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900'
                    >Post Job</a
                  >


                  <a
                    href='./about/'
                    class='block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900'
                    >About us</a
                  >
                </div>
                <a
                  href='./login/'
                  class='block w-full bg-gray-50 px-5 py-3 text-center font-medium text-cyan-600 hover:bg-gray-100'
                  >Admin Login</a
                >
              </div>
            </div>
          </div>

          <main
            class='mx-auto mt-10 max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28'
          >
            <div class='pt-8 pb-16 sm:text-center lg:text-left'>
              <h1
                class='text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl'
              >
                <span class='block xl:inline'>Make The Path To Your</span>
                <span class='block text-cyan-600 xl:inline'>Dream Job</span>
              </h1>
              <p
                class='mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0'
              >
                The Easiest Way to Get Your New Job. Find Jobs, Receive Instant
                Job Alerts, apply Online. Employers Post Jobs for free!
              </p>
              <div
                class='mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start'
              >
                <div class='rounded-md shadow'>
                  <a
                    href='./jobs/publish/'
                    class='flex w-full items-center justify-center rounded-md border border-transparent bg-cyan-600 px-8 py-3 text-base font-medium text-white hover:bg-cyan-700 md:py-4 md:px-10 md:text-lg'
                    >Post Job</a
                  >
                </div>
                <div class='mt-3 sm:mt-0 sm:ml-3'>
                  <a
                    href='./about/'
                    action
                    class='flex w-full items-center justify-center rounded-md border border-transparent bg-cyan-100 px-8 py-3 text-base font-medium text-cyan-700 hover:bg-cyan-200 md:py-4 md:px-10 md:text-lg'
                    >About Us</a
                  >
                </div>
              </div>
            </div>
          </main>
          <?php
            // if(isset(_SESSION['auth'])){
            //   if ($_SESSION['auth']== true) {
            //    echo "<div class='rounded-md shadow'>
            //       <a
            //         href='./php/logout.php'
            //         class='flex w-full items-center justify-center rounded-md border border-transparent bg-cyan-600 px-8 py-3 text-base font-medium text-white hover:bg-cyan-700 md:py-4 md:px-10 md:text-lg'
            //         >Log Out</a
            //       >
            //     </div>";
            // }}
          ?>
        </div>
      </div>
      <div class='lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2'>
        <img
          class='h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-full'
          src='./src/cover.jpeg'
          alt='cover'
        />
      </div>
    </div>
    <div class='bg-white z-10 absolute inset-x-0 bottom-0'>
      <footer
        class='float-bottom flex flex-wrap items-center justify-between p-3 m-auto'
      >
        <div
          class='container mx-auto flex flex-col flex-wrap items-center justify-between'
        >
          <ul class='text-gray-600 flex mx-auto text-center'>
            <li class='p-2 cursor-pointer hover:underline'>
              <p>Made with ❤ in 🇱🇰 by using,</p>
            </li>
          </ul>
          <img src='./src/footer.png' alt='footer' class='h-10' />
          <div class='text-gray-600 flex mx-auto text-center'>
            Ez Jobs © 2022
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
