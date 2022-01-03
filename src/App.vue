<template>
  <div class="container mx-auto px-4">
    <header class="text-gray-600 body-font">
      <div class="flex m-10">
        <div class="title-font font-medium text-gray-900 mb-4 ml-3 text-5xl">
          begauss.ru
        </div>
        <div
          class="text-lg md:mr-auto md:ml-4 md:py-1 md:pl-4 flex flex-wrap items-center"
        >
          — {{ title }}
        </div>
      </div>
    </header>

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-15 mx-auto flex flex-wrap">
        <!-- Легкий -->
        <div class="flex relative pt-10 pb-20 sm:items-center md:w-5/6 mx-auto">
          <div
            class="h-full w-6 absolute inset-0 flex items-center justify-center"
          >
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div
            class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm"
          >
            1
          </div>
          <div
            class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row"
          >
            <div
              class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center"
            >
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-12 h-12"
                viewBox="0 0 24 24"
              >
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
              <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">
                Легкий
              </h2>
              <div class="leading-relaxed">
                <Summation level="easy" />
                <!-- Вычитание -->
                <Subtraction level="easy" />
                <!-- Умножение -->
                <Multiplication level="easy" />
                <!-- Деление -->
                <Division level="easy" />
              </div>
            </div>
          </div>
        </div>
        <!-- Средний -->
        <div class="flex relative pb-20 sm:items-center md:w-5/6 mx-auto">
          <div
            class="h-full w-6 absolute inset-0 flex items-center justify-center"
          >
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div
            class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm"
          >
            2
          </div>
          <div
            class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row"
          >
            <div
              class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center"
            >
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-12 h-12"
                viewBox="0 0 24 24"
              >
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
              <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">
                Средний
              </h2>
              <div class="leading-relaxed"><Summation level="easy" /></div>
            </div>
          </div>
        </div>
        <!-- Сложный -->
        <div class="flex relative pb-20 sm:items-center md:w-5/6 mx-auto">
          <div
            class="h-full w-6 absolute inset-0 flex items-center justify-center"
          >
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div
            class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm"
          >
            3
          </div>
          <div
            class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row"
          >
            <div
              class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center"
            >
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-12 h-12"
                viewBox="0 0 24 24"
              >
                <circle cx="12" cy="5" r="3"></circle>
                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
              </svg>
            </div>
            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
              <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">
                Сложный
              </h2>
              <div class="leading-relaxed"><Summation level="easy" /></div>
            </div>
          </div>
        </div>
        <!-- Супер сложный -->
        <div class="flex relative pb-10 sm:items-center md:w-5/6 mx-auto">
          <div
            class="h-full w-6 absolute inset-0 flex items-center justify-center"
          >
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div
            class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm"
          >
            4
          </div>
          <div
            class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row"
          >
            <div
              class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center"
            >
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-12 h-12"
                viewBox="0 0 24 24"
              >
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
              <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">
                Супер сложный
              </h2>
              <div class="leading-relaxed"><Summation level="easy" /></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- intro -->
    <section id="intro" class="text-gray-600 body-font">
      <div class="container px-5 py-20 mx-auto">
        <div class="xl:w-3/4 lg:w-3/4 w-full mx-auto text-center">
          <p v-html="lead" class="leading-relaxed text-lg"></p>
          <span
            class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"
          ></span>
        </div>
      </div>
    </section>

    <footer class="text-gray-600 body-font">
      <div
        class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col"
      >
        <a
          class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"
        >
          <span class="ml-3 text-xl">begauss.ru</span>
        </a>
        <p
          class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"
        ></p>
        {{ new Date().getFullYear() }}
        <span
          class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
        >
          <a
            href="https://github.com/LMarkovWeb"
            class="text-gray-600 ml-1"
            target="_blank"
            >GitHub</a
          >
        </span>
      </div>
    </footer>
  </div>
</template>

<script>
import Summation from "./Components/Summation";
import Division from "./Components/Division";
import Subtraction from "./Components/Subtraction";
import Multiplication from "./Components/Multiplication";

export default {
  components: {
    Summation,
    Division,
    Subtraction,
    Multiplication,
  },
  data: () => ({
    title: "Генератор примеров по арифметике",
    lead: `<p>Генератор арифметических примеров с разным уровнем сложности и
    интерактивными ответами.</p>
    <p>Одним из математиков с феноменальной скоростью устного счета был знаменитый
    Карл Фридрих Гаусс (1777-1855).</p>
    <p>Если вы обычный человек, а не вундеркинд, то для развития навыка счета в уме
    понадобятся тренировки и практика, концентрация внимания и терпение. Сначала
    все может получаться медленно, но потом дело пойдет на лад, и вы сможете
    быстро считать в уме любые числа. Достичь успеха можно за 2 месяца
    регулярных тренировок.</p>`,
  }),
  methods: {},
};
</script>

<style>
.res {
  cursor: help;
}
.show {
  display: inline-block;
}
.hide {
  display: none;
}
</style>
