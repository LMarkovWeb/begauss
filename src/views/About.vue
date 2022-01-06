<template>
  <div>
    <app-intro :text="text" />
  </div>
</template>

<script>
import AppIntro from "@/Components/AppIntro.vue";
export default {
  components: { AppIntro },
  props: ["text"],
};
</script>
