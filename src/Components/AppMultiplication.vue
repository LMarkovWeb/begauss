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
    getData() {
      for (var i = 0; i < 10; i++) {
        let minA = Math.ceil(2);
        let maxA = Math.floor(9);

        let minB = Math.ceil(2);
        let maxB = Math.floor(9);

        let a = Math.floor(Math.random() * (maxA - minA)) + minA;
        let b = Math.floor(Math.random() * (maxB - minB)) + minB;

        let res = a * b;

        this.arResult.push({
          resShow: false,
          data: {
            a: a,
            b: b,
            res,
          },
        });
      }
    },
  },
};
</script>
<style scoped></style>
