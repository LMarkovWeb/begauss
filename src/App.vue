<template>
  <div class="container mx-auto px-4">
    <!-- Header -->
    <app-header :title="title" />

    <!-- Nav -->
    <div id="nav">
      <router-link class="button" :to="{ name: 'Home' }">Главная </router-link>|

      <router-link :to="{ name: 'About', params: { text: lead } }"
        >О проекте</router-link
      >

      <!-- <router-link to="/easy">Легкий</router-link> |
      <router-link to="/middle">Средний</router-link> |
      <router-link to="/hard">Сложный</router-link> |
      <router-link to="/extrahard">Супер сложный</router-link> -->
    </div>

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
