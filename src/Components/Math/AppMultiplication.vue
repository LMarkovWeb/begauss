<template>
  <div class="py-5 px-5 border rounded-lg border-indigo-300 mb-4">
    <h3
      class="tracking-widest text-md title-font font-medium text-gray-400 mb-4"
    >
      Умножение (X + X)
    </h3>
    <p v-for="(val, key) in arResult" :key="key" class="text-xl">
      {{ val.data.a }} * {{ val.data.b }} =

      <span @click="changeVisible(key)">
        _
        <strong :class="arResult[key].resShow ? 'show' : 'hide'">
          {{ val.data.res }}
        </strong>
        _
      </span>
    </p>
  </div>
</template>
<script>
export default {
  name: "Multiplication",
  props: ["level"],
  data() {
    return {
      arResult: [],
      level: this.level,
      taskCount: 10,
    };
  },
  mounted() {
    this.getData();
  },
  computed: {},
  watch: {},
  methods: {
    changeVisible(key) {
      this.arResult[key].resShow = true;
    },
    getRandomArbitrary(min, max) {
      return Math.floor(Math.random() * (max - min)) + min;
    },
    getData() {
      const minA = Math.ceil(2);
      const maxA = Math.floor(9);
      const minB = Math.ceil(2);
      const maxB = Math.floor(9);

      for (var i = 0; i < this.taskCount; i++) {
        // создание случайных чисел в заданном диапазоне
        let a = this.getRandomArbitrary(minA, maxA);
        let b = this.getRandomArbitrary(minB, maxB);

        let res = a * b;

        this.arResult.push({
          resShow: false,
          data: {
            a,
            b,
            res,
          },
        });
      }
    },
  },
};
</script>
<style scoped></style>
