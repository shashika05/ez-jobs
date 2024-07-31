<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="../css.js"></script>
  <title>Jobs - Ez Jobs</title>
</head>

<body>
  <div class="relative overflow-hidden bg-white">
    <div class="mx-auto max-w-7xl">
      <div class="relative z-10 bg-white pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-full lg:pb-28 xl:pb-32">
        <div>
          <div class="relative px-4 pt-6 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0">
                <div class="flex w-full items-center justify-between md:w-auto">
                  <a href="../">
                    <span class="sr-only">Ez Jobs</span>
                    <img alt="Ez Jobs" class="h-8 w-auto sm:h-10" src="../src/logo.png" />
                  </a>
                  <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500" aria-expanded="false" onclick="showMenu()" name="closeBtn">
                      <span class="sr-only">Open main menu</span>
                      <!-- Heroicon name: outline/bars-3 -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="hidden md:ml-10 md:block md:space-x-8 md:pr-4">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Jobs</a>

                <a href="./publish" class="font-medium text-gray-500 hover:text-gray-900">Post Job</a>

                <a href="../about" class="font-medium text-gray-500 hover:text-gray-900">About us</a>

                <a href="../login/" class="font-medium text-cyan-600 hover:text-cyan-500">Admin Login</a>
               </div>
            </nav>
          </div>

          <!--
          Mobile menu, show/hide based on menu open state.

          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
          <div id="mobileMenu" class="absolute hidden inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
            <script>
              let mobileMenu = document.getElementById("mobileMenu");

              const hideMenu = () => {
                mobileMenu.style.display = "none";
                // console.log(mobileMenu.style.display);
              };
              const showMenu = () => {
                mobileMenu.style.display = "block";
                // console.log(mobileMenu.style.display);
              };
            </script>
            <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
              <div class="flex items-center justify-between px-5 pt-4">
                <div>
                  <img class="h-8 w-auto" src="../src/logo.png" alt="" />
                </div>
                <div class="-mr-2">
                  <button type="button" onclick="hideMenu()" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Product</a>

                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Features</a>

                <a href="" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">About us</a>
              </div>
              <a href="../login/" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-cyan-600 hover:bg-gray-100">Log in</a>
              <a href="../register/" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-cyan-600 hover:bg-gray-100">Register</a>
            </div>
          </div>
        </div>

        <!-- Jobs array -->
        <?php
        include("../php/conn.php");
        mysqli_select_db($conn, "ez_jobs");

        $sql = "Select * from jobs;";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
          die("Invalid query " . mysqli_error($conn));
        } else {
          // $entry = mysqli_fetch_array($result);
          while ($row = mysqli_fetch_array($result)) {
            $skills = explode(PHP_EOL, $row['job_req']);
            echo "<section class='text-gray-600 body-font'>
          <div class='container px-5 mx-auto'>
            <div
              class='p-5 bg-white flex items-center mx-auto border-b border-gray-200 rounded-lg sm:flex-row flex-col'
            >
              <div
                class='sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center flex-shrink-0'
              >
                <img
                  class='rounded-full'
                  src='https://ui-avatars.com/api/?name=" . $row['job_title'] . "'&background=random&size=256&length=3'
                />
              </div>
              <div class='flex-grow sm:text-left text-center mt-6 sm:mt-0'>
                <h1 class='text-black text-2xl title-font font-bold mb-2'>" . $row['job_title'] . "</h1>
                <p class='leading-relaxed text-base'>" . $row['job_desc'] . "</p>
                <div class='py-4'>";

            foreach ($skills as $val) {
              // echo $val;
              echo "<div class='mr-2'>
                  <div class='flex pr-2 h-full items-center'>
                    <svg
                      class='text-cyan-600 w-6 h-6 mr-1'
                      width='24'
                      height='24'
                      viewBox='0 0 24 24'
                      stroke-width='2'
                      stroke='currentColor'
                      fill='none'
                      stroke-linecap='round'
                      stroke-linejoin='round'
                    >
                      <path stroke='none' d='M0 0h24v24H0z' />
                      <circle cx='12' cy='12' r='9' />
                      <path d='M9 12l2 2l4 -4' />
                    </svg>
                    <p class='title-font font-medium'>$val</p>
                  </div>
                </div>";
            }

            echo "</div>
                <div class='md:flex font-bold text-gray-800'>
                  <div class='w-full md:w-1/2 flex space-x-3'>
                    <div class='w-1/2'>
                      <h2 class='text-gray-500'>Salary</h2>
                      <p>$" . $row['salary'] . "</p>
                    </div>
                    <div class='w-1/2'>
                      <h2 class='text-gray-500'>Type</h2>
                      <p>" . $row['job_type'] . "</p>
                    </div>
                  </div>
                  <div class='w-full md:w-1/2 flex space-x-3'>
                    <div class='w-1/2'>
                      <h2 class='text-gray-500'>Locale</h2>
                      <p>" . $row['locale'] . "</p>
                    </div>
                    <div class='w-1/2'>
                      <h2 class='text-gray-500'>Closing Date</h2>
                      <p>" . $row['closing_date'] . "</p>
                    </div>
                    <div class='w-1/2'>
                    <h2 class='text-gray-500'>Email CV's</h2>
                      <p>" . $row['email_cv'] . "</p>
                      </div>
                      <div class='w-1/2'>
                    <h2 class='text-gray-500'>Contact Us</h2>
                      <p>" . $row['contact_no'] . "</p>
                      </div>
                  </div>
                </div>
                <a class='mt-3 text-indigo-500 inline-flex items-center'
                  >Learn More
                  <svg
                    fill='none'
                    stroke='currentColor'
                    stroke-linecap='round'
                    stroke-linejoin='round'
                    stroke-width='2'
                    class='w-4 h-4 ml-2'
                    viewBox='0 0 24 24'
                  >
                    <path d='M5 12h14M12 5l7 7-7 7'></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </section>";
          }
        }

        mysqli_close($conn);
        ?>
        <!--
          <section class="text-gray-600 body-font">
            <div class="container px-5 mx-auto">
              <div
                class="p-5 bg-white flex items-center mx-auto border-b border-gray-200 rounded-lg sm:flex-row flex-col"
              >
                <div
                  class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center flex-shrink-0"
                >
                  <img
                    class="rounded-full"
                    src="https://ui-avatars.com/api/?name=Back End&background=random&size=256&length=3"
                  />
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                  <h1 class="text-black text-2xl title-font font-bold mb-2">
                    Back End Developer
                  </h1>
                  <p class="leading-relaxed text-base">
                    We are looking for a Back End Developer to produce scalable
                    software solutions. You'll be part of a cross-functional
                    team that's responsible for the full software development
                    life cycle, from conception to deployment.
                  </p>
                  <div class="py-4">
                    <div class="mr-2">
                      <div class="flex pr-2 h-full items-center">
                        <svg
                          class="text-cyan-600 w-6 h-6 mr-1"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="2"
                          stroke="currentColor"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <circle cx="12" cy="12" r="9" />
                          <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <p class="title-font font-medium">Python</p>
                      </div>
                    </div>
                    <div class="mr-2">
                      <div class="flex pr-2 h-full items-center">
                        <svg
                          class="text-cyan-600 w-6 h-6 mr-1"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="2"
                          stroke="currentColor"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <circle cx="12" cy="12" r="9" />
                          <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <p class="title-font font-medium">C</p>
                      </div>
                    </div>
                    <div class="mr-2">
                      <div class="flex pr-2 h-full items-center">
                        <svg
                          class="text-cyan-600 w-6 h-6 mr-1"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="2"
                          stroke="currentColor"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <circle cx="12" cy="12" r="9" />
                          <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <p class="title-font font-medium">Php</p>
                      </div>
                    </div>
                    <div class="inline-block mr-2">
                      <div class="flex pr-2 h-full items-center">
                        <svg
                          class="text-gray-500 w-6 h-6 mr-1"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <line x1="15" y1="9" x2="9" y2="15" />
                          <line x1="9" y1="9" x2="15" y2="15" />
                        </svg>
                        <p class="title-font font-medium">Swift</p>
                      </div>
                    </div>

                    <div class="inline-block mr-2">
                      <div class="flex pr-2 h-full items-center">
                        <svg
                          class="text-gray-500 w-6 h-6 mr-1"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <line x1="15" y1="9" x2="9" y2="15" />
                          <line x1="9" y1="9" x2="15" y2="15" />
                        </svg>
                        <p class="title-font font-medium">Java</p>
                      </div>
                    </div>
                    <div class="inline-block mr-2">
                      <div class="flex pr-2 h-full items-center">
                        <svg
                          class="text-gray-500 w-6 h-6 mr-1"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <line x1="15" y1="9" x2="9" y2="15" />
                          <line x1="9" y1="9" x2="15" y2="15" />
                        </svg>
                        <p class="title-font font-medium">Javascript</p>
                      </div>
                    </div>
                  </div>
                  <div class="md:flex font-bold text-gray-800">
                    <div class="w-full md:w-1/2 flex space-x-3">
                      <div class="w-1/2">
                        <h2 class="text-gray-500">Salary</h2>
                        <p>$100,000</p>
                      </div>
                      <div class="w-1/2">
                        <h2 class="text-gray-500">Type</h2>
                        <p>Part Time</p>
                      </div>
                    </div>
                    <div class="w-full md:w-1/2 flex space-x-3">
                      <div class="w-1/2">
                        <h2 class="text-gray-500">Locale</h2>
                        <p>Remote</p>
                      </div>
                      <div class="w-1/2">
                        <h2 class="text-gray-500">Closing Date</h2>
                        <p>2022-12-31</p>
                      </div>
                    </div>
                  </div>
                  <a class="mt-3 text-indigo-500 inline-flex items-center"
                    >Learn More
                    <svg
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      class="w-4 h-4 ml-2"
                      viewBox="0 0 24 24"
                    >
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </section>
              -->
      </div>
    </div>
  </div>
</body>

</html>