<template>
  <h3>Сложение</h3>
  <div class="card">
    <div class="card-header" id="headingOne33">
      <h5 class="mb-0">
        <button
          class="btn btn-link"
          data-toggle="collapse"
          data-target="#collapseOne33"
          aria-expanded="false"
          aria-controls="collapseOne33"
        >
          Сложение (XX + XX)
        </button>
      </h5>
    </div>

    <div
      id="collapseOne33"
      class="collapse"
      aria-labelledby="headingOne33"
      data-parent="#accordion"
    >
      <div class="card-body">
        <div class="tasks"></div>
      </div>
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
