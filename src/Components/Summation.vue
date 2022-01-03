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
        <p v-for="val in arrRes" :key="val">
          {{ val.a }} + {{ val.b }} =
          <span class="res" @click='resShow = !resShow'>
            _<strong v-if="resShow" v-on:click="resShow = true">{{ val.res }}</strong
            >_</span
          > 
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
      arrRes: [],
      resShow: false
    };
  },
  mounted() {
    this.getData();
  },
  methods: {
    // getRandomArbitrary(min, max) {
    //   console.log("getRandomArbitrary");
    //   return Math.random() * (max - min) + min;
    // },
    getData() {
      for (var i = 0; i < 9; i++) {
        let minA = Math.ceil(10);
        let maxA = Math.floor(99);

        let minB = Math.ceil(11);
        let maxB = Math.floor(99);

        let a = Math.floor(Math.random() * (maxA - minA)) + minA;
        let b = Math.floor(Math.random() * (maxB - minB)) + minB;

        this.arrRes.push({
          a: a,
          b: b,
          res: a + b,
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
.res strong {
  
}
hr {
  color:#aaa;
}
</style>
