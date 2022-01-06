<template>
  <header class="text-gray-600 body-font">
    <div class="flex m-10">
      <div class="title-font font-medium text-gray-900 mb-4 ml-3 text-5xl">
        begauss.ru
      </div>
      <div
        class="text-lg md:mr-auto md:ml-4 md:py-1 md:pl-4 flex flex-wrap items-center"
      >
        — {{ title }}
      </div>
    </div>
  </header>
</template>

<script>
export default {
  props: {
    title:String
  }
};
</script>

<style scoped></style>
