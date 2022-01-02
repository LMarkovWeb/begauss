<template>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingDivision">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseDivision"
        aria-expanded="false"
        aria-controls="collapseDivision"
      >
        Деление (XX / X)
      </button>
    </h2>
    <div
      id="collapseDivision"
      class="accordion-collapse collapse"
      aria-labelledby="headingDivision"
      data-bs-parent="#accordionExample"
    >
      <div class="accordion-body">Деление</div>
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
