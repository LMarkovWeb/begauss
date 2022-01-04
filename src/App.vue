<template>
  <div class="container mx-auto px-4">
    <app-header :title="title" />
    <task-section />
    <app-intro :text="lead" />
    <app-footer />
  </div>
</template>

<script>
import AppHeader from "./Components/AppHeader";
import TaskSection from "@/Components/TaskSection.vue";
import AppIntro from "./Components/AppIntro.vue";
import AppFooter from "./Components/AppFooter.vue";

export default {
  components: {
    AppHeader,
    TaskSection,
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
