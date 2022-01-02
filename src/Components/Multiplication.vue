<template>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingMultiplication">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseMultiplication"
        aria-expanded="false"
        aria-controls="collapseMultiplication"
      >
        Умножение (ХХ * Х)
      </button>
    </h2>
    <div
      id="collapseMultiplication"
      class="accordion-collapse collapse"
      aria-labelledby="headingMultiplication"
      data-bs-parent="#accordionExample"
    >
      <div class="accordion-body">Умножение</div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {},
};
</script>
<style scoped></style>
