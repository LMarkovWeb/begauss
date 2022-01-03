<template>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSummation">
      <button
        class="accordion-button"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseSummation"
        aria-expanded="true"
        aria-controls="collapseSummation"
      >
        Сложение (XX + XX)
      </button>
    </h2>
    <div
      id="collapseSummation"
      class="accordion-collapse collapse"
      aria-labelledby="headingSummation"
      data-bs-parent="#accordionExample"
    >
      <div class="accordion-body">
        <p v-for="(val, key) in arResult" :key="key">

          {{ val.data.a }} + {{ val.data.b }} =

          <span @click="changeVisible(key)">
            _
            <strong :class="arResult[key].resShow ? 'show' : 'hide'">
              {{ val.data.res }}
            </strong>
            _
          </span> 

          <hr />
        </p>
       
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Summation",
  props: ["level"],
  data() {
    return {
      arResult: [],
    };
  },
  mounted() {
    this.getData();
  },
  computed: {
    // getRandomArbitrary(min, max) {
    //   console.log("getRandomArbitrary");
    //   return Math.random() * (max - min) + min;
    // },
  },
  watch: {
  },
  methods: {
    changeVisible(key) {
        this.arResult[key].resShow = true;
    },
    getData() {
      for (var i = 0; i < 9; i++) {
        let minA = Math.ceil(10);
        let maxA = Math.floor(99);

        let minB = Math.ceil(11);
        let maxB = Math.floor(99);

        let a = Math.floor(Math.random() * (maxA - minA)) + minA;
        let b = Math.floor(Math.random() * (maxB - minB)) + minB;

        this.arResult.push({
          resShow: false,
          data: {
            a: a,
            b: b,
            res: a + b,
          }
        });
      }
    },
  },
};
</script>

<style scoped>
  .res {
    cursor: help;
  }
  hr {
    color:#aaa;
  }
  .show {
    display:inline-block;
  }
  .hide {
    display:none;
  }
</style>
