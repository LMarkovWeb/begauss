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
      <div class="accordion-body">Сложение</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["level"],
  data() {
    return {};
  },
  methods: {},
};
</script>

<style scoped></style>
