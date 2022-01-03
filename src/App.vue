<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{ title }}</h1>
      </div>
    </div>

    <p class="lead" v-html="lead"></p>

    <div class="accordion" id="accordionExample">
      <h2>Легкий</h2>
      <!-- Сложение -->
      <Summation level="easy" />
      <!-- Вычитание -->
      <Subtraction level="easy" />
      <!-- Умножение -->
      <Multiplication level="easy" />
      <!-- Деление -->
      <Division level="easy" />
      <hr />

      <h2>Средний</h2>
      <!-- Сложение -->
      <Summation level="easy" />
      <hr />

      <h2>Сложный</h2>
      <!-- Сложение -->
      <Summation level="easy" />
      <hr />

      <h2>Супер сложный</h2>
      <!-- Сложение -->
      <Summation level="easy" />
      <hr />
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          2021,
          <a href="https://lmarkovweb.github.io/" target="_blank"
            >lmarkovweb.github.io</a
          >
        </div>
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
