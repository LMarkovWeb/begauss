<template>
  <footer class="text-gray-600 body-font">
    <div
      class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col"
    >
      <a
        class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"
      >
        <span class="ml-3 text-xl">begauss.ru</span>
      </a>
      <p
        class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"
      ></p>
      {{ new Date().getFullYear() }}
      <span
        class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
      >
        <a
          href="https://github.com/LMarkovWeb"
          class="text-gray-600 ml-1"
          target="_blank"
          >GitHub</a
        >
      </span>
    </div>
  </footer>
</template>

<script>
export default {};
</script>

<style scoped></style>
