<template>
  <div class="py-5 px-5 border rounded-lg border-indigo-300 mb-4">
    <h3
        class="tracking-widest text-md title-font font-medium text-gray-400 mb-4"
    >
      {{ title }}
    </h3>
    <p v-for="(val, key) in arResult" :key="key" class="text-xl">
      <span v-for="(v, k) in val.data.operands" :key="k">
        {{ v }}<span v-if="k < val.data.operands.length - 1">% от </span>
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
  name: "AppPercentage",
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
      // массив значений для процента
      inputProc : [5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95],

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
    getData() {
      let requiredQuantity = this.taskCount; // счетчик примеров
      while (requiredQuantity) {
        // создание случайных чисел в заданном диапазоне
        // какой процент взять от числа, случайное значение из массива процентов
        let a = this.inputProc[Math.floor(Math.random()*this.inputProc.length)];
        let b = this.getRandomArbitrary(this.range[1].min, this.range[1].max);

        // вычисление процента
        let res = a * b / 100;

        if (Number.isInteger(res)) {
          requiredQuantity--;
        } else {
          continue;
        }

        this.arResult.push({
          resShow: false,
          data: {
            operands: [a, b],
            res,
          },
        });
      }
    },
  },
};
</script>

<style scoped></style>
