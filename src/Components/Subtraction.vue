<template>
  <div class="py-5 px-5 border rounded-lg border-indigo-300 mb-4">
    <h3
      class="tracking-widest text-md title-font font-medium text-gray-400 mb-4"
    >
      Вычитание (XX(X) - XX)
    </h3>
    <p v-for="(val, key) in arResult" :key="key" class="text-xl">
      {{ val.data.a }} - {{ val.data.b }} =

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
  name: "Subtraction",
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
      for (var i = 0; i < 15; i++) {
        let minA = Math.ceil(21);
        let maxA = Math.floor(129);

        let minB = Math.ceil(6);
        let maxB = Math.floor(99);

        let a = Math.floor(Math.random() * (maxA - minA)) + minA;
        let b = Math.floor(Math.random() * (maxB - minB)) + minB;

        let res = a - b;
        if (res < 0) {
          continue;
        }

        this.arResult.push({
          resShow: false,
          data: {
            a: a,
            b: b,
            res: res,
          },
        });
      }
    },
  },
};
</script>

<style scoped></style>
