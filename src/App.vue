<template>
  <div class="container mx-auto px-4">
    <app-header />
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
                <!-- Сложение -->
                <!-- <AppSummation level="easy" /> -->
                <!-- Вычитание -->
                <!-- <AppSubtraction level="easy" /> -->
                <!-- Умножение -->
                <!-- <AppMultiplication level="easy" /> -->
                <!-- Деление -->
                <!-- <AppDivision level="easy" /> -->
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
              <div class="leading-relaxed">
                <!-- Сложение -->
                <!-- <AppSummation level="middle" /> -->
                <!-- Вычитание -->
                <!-- <AppSubtraction level="middle" /> -->
                <!-- Умножение -->
                <!-- <AppMultiplication level="middle" /> -->
                <!-- Деление -->
                <!-- <AppDivision level="middle" /> -->
              </div>
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
              <div class="leading-relaxed">
                <!-- Сложение -->
                <!-- <AppSummation level="hard" /> -->
                <!-- Вычитание -->
                <!-- <AppSubtraction level="hard" /> -->
                <!-- Умножение -->
                <!-- <AppMultiplication level="hard" /> -->
                <!-- Деление -->
                <!-- <AppDivision level="hard" /> -->
              </div>
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
              <div class="leading-relaxed">
                <!-- Сложение -->
                <!-- <AppSummation level="extrahard" /> -->
                <!-- Вычитание -->
                <!-- <AppSubtraction level="extrahard" /> -->
                <!-- Умножение -->
                <!-- <AppMultiplication level="extrahard" /> -->
                <!-- Деление -->
                <!-- <AppDivision level="extrahard" /> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <app-intro />
    <app-footer />
  </div>
</template>

<script>
import AppHeader from "./Components/AppHeader";
import AppIntro from "./Components/AppIntro.vue";
import AppFooter from "./Components/AppFooter.vue";
import AppSummation from "@/Components/AppSummation";
import AppDivision from "@/Components/AppDivision";
import AppSubtraction from "@/Components/AppSubtraction";
import AppMultiplication from "@/Components/AppMultiplication";

export default {
  components: {
    AppHeader,
    AppSummation,
    AppDivision,
    AppSubtraction,
    AppMultiplication,
    AppIntro,
    AppFooter,
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
