<template>
  <div class="page-header">
    <h1>{{ title }}</h1>
  </div>

  <p class="lead" v-html="lead"></p>
  <div id="accordion">
    <h2>Легкий</h2>
    <!-- Умножение -->
    <Summation level="easy" />
    <!-- Вычитание -->
    <Subtraction level="easy" />
    <!-- Multiplication -->
    <Multiplication level="easy" />
    <!-- Деление -->
    <Division level="easy" />
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
    title: "Генератор примеров по математике",
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

<style></style>
