<template>
  <section class="section bg-light-primary dark:bg-dark-primary">
    <div class="container mx-auto">
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">Contact Me</h2>
        <p class="subtitle">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.Rerum assumenda
          veritatis unde perferendis voluptates dolorem neque?
        </p>
      </div>
      <div class="flex flex-col lg:flex-row lg:gap-x-8">
        <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
          <div class="flex flex-col lg:flex-row gap-x-4">
            <div
              class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                />
              </svg>
            </div>
            <div>
              <h4 class="font-body text-xl mb-1">Have a question?</h4>
              <p class="mb-1 text-paragraph">I am here to help you.</p>
              <p class="text-accent font-normal">Email me at veggiesaigon@gmail.com</p>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-x-4">
            <div
              class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                />
              </svg>
            </div>
            <div>
              <h4 class="font-body text-xl mb-1">Curren Location</h4>
              <p class="mb-1 text-paragraph">De Tham, Q1, Sai Gon.</p>
              <p class="text-accent font-normal">Serving clients worldwide</p>
            </div>
          </div>
        </div>
        <form class="space-y-8 w-full max-w-md" action="">
            <div class="flex gap-8">
                <div>
                    <input type="text" class="input" placeholder="Your Name"/>
                    <span class="text-sm m-2 text-red-400">Error</span>
                </div>
                <div>
                    <input type="email" class="input" placeholder="Your Name"/>
                </div>
            </div>
        </form>
      </div>
    </div>
  </section>
</template>

<script setup></script>

<style></style>
