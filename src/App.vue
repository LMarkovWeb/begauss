<template>
  <div class="container mx-auto px-4">
    <!-- Header -->
    <app-header :title="title" />

    <!-- Nav -->
    <nav class="inline-flex mb-10" role="group">
      <button
          type="button"
          class="
      rounded-l
      px-6
      py-2
      m-1
      border-2 border-blue-600
      text-blue-600
      font-medium
      text-xs
      leading-tight
      uppercase
      hover:bg-black hover:bg-opacity-5
      focus:outline-none focus:ring-0
      transition
      duration-150
      ease-in-out
    "
      >
        <router-link class="button" :to="{ name: 'Home' }">Главная </router-link>
      </button>
      <button
          type="button"
          class="
      rounded-r
      px-6
      py-2
      m-1
      border-2 border-blue-600
      text-blue-600
      font-medium
      text-xs
      leading-tight
      uppercase
      hover:bg-black hover:bg-opacity-5
      focus:outline-none focus:ring-0
      transition
      duration-150
      ease-in-out
    "
      >
        <router-link :to="{ name: 'About', params: { text: lead } }">О проекте</router-link>
      </button>
      <!-- <router-link to="/easy">Легкий</router-link> |
      <router-link to="/middle">Средний</router-link> |
      <router-link to="/hard">Сложный</router-link> |
      <router-link to="/extrahard">Супер сложный</router-link> -->
  </nav>

    <!-- Content -->
    <router-view></router-view>

    <!-- Footer -->
    <app-footer />
  </div>
</template>

<script>
import AppHeader from "@/Components/AppHeader";
import AppFooter from "@/Components/AppFooter.vue";

export default {
  components: {
    AppHeader,
    AppFooter,
  },
  data: () => ({
    title: "Генератор примеров по арифметике",
    lead: `<p>Генератор арифметических примеров с разным уровнем сложности и
    интерактивными ответами.</p><hr/><br>
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
.router-link-active {
  font-weight: bold;
}
</style>
