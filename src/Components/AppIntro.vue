<template>
  <!-- intro -->
  <section id="intro" class="text-gray-600 body-font">
    <div class="container px-5 py-20 mx-auto">
      <div class="xl:w-3/4 lg:w-3/4 w-full mx-auto text-center">
        <p v-html="lead" class="leading-relaxed text-lg"></p>
        <span
          class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"
        ></span>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    text: {
      type: string,
    },
  },
};
</script>

<style scoped></style>
