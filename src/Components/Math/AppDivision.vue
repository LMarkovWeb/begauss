<template>
  <div class="py-5 px-5 border rounded-lg border-indigo-300 mb-4">
    <h3
      class="tracking-widest text-md title-font font-medium text-gray-400 mb-4"
    >
      {{ title }}
    </h3>
    <p v-for="(val, key) in arResult" :key="key" class="text-xl">
      <span v-for="(v, k) in val.data.operands" :key="k">
        {{ v }}
        <span v-if="k < val.data.operands.length - 1"> / </span>
      </span>
      =

      <span @click="changeVisible(key)" class="res">
        _
        <strong :class="arResult[key].resShow ? 'show' : 'hide'">
          {{ val.data.res }}
        </strong>
      </span>
    </p>
  </div>
</template>
<script>
export default {
  name: "AppDivision",
  props: {
    arParams: Object,
  },
  data() {
    return {
      // Итоговый массив примеров
      arResult: [],
      // кол-во заданий
      taskCount: this.arParams.taskCount,
      // кол-во операндов в математическом выражении
      operandsCount: this.arParams.operandsCount,

      // Заголовок блока
      title: this.arParams.title,
    };
  },
  mounted() {
    this.getData();
  },
  computed: {
    // Массив диапазонов для генерации примеров
    range: function () {
      let arRes = [];
      for (let i = 0; i < this.operandsCount; i++) {
        arRes.push({
          min: Math.ceil(this.arParams.range[i].from),
          max: Math.ceil(this.arParams.range[i].to),
        });
      }
      return arRes;
    },
  },
  methods: {
    // Показ ответов
    changeVisible(key) {
      this.arResult[key].resShow = true;
    },
    // генерация случайного числа в диапазоне
    getRandomArbitrary(min, max) {
      return Math.floor(Math.random() * (max - min)) + min;
    },
    // генерация случайного числа в диапазоне
    getData() {

      let requiredQuantity = this.taskCount; // счетчик примеров

      while (requiredQuantity) {

        // создание случайных чисел в заданном диапазоне
        let a = this.getRandomArbitrary(this.range[0].min, this.range[0].max);
        let b = this.getRandomArbitrary(this.range[1].min, this.range[1].max);

        if (a % b === 0) {
          requiredQuantity--;
        } else {
          continue;
        }

        this.arResult.push({
          resShow: false,
          data: {
            operands: [a, b],
            res: a / b,
          },
        });
      }
    },
  },
};
</script>
<style scoped></style>
