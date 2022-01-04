<template>
  <div class="py-5 px-5 border rounded-lg border-indigo-300 mb-4">
    <h3
      class="tracking-widest text-md title-font font-medium text-gray-400 mb-4"
    >
      Сложение (XX + XX)
    </h3>
    <p v-for="(val, key) in arResult" :key="key" class="text-xl">
      {{ val.data.a }} + {{ val.data.b }} =

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
  name: "AppSummation",
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
      // switch (level) {
      //   case "easy":
      //     console.log("easy");
      //     break;
      //   case "middle":
      //     break;
      //   default:
      //     break;
      // }
      const minA = Math.ceil(10);
      const maxA = Math.floor(99);
      const minB = Math.ceil(11);
      const maxB = Math.floor(99);

      for (var i = 0; i < this.taskCount; i++) {
        // создание случайных чисел в заданном диапазоне
        let a = this.getRandomArbitrary(minA, maxA);
        let b = this.getRandomArbitrary(minB, maxB);

        this.arResult.push({
          resShow: false,
          data: {
            a,
            b,
            res: a + b,
          },
        });
      }
    },
  },
};
</script>

<style scoped></style>
