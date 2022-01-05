<template>
  <div>
    <task-section :levelsConfig="levelsConfig" />
  </div>
</template>

<script>
import TaskSection from "@/Components/TaskSection.vue";
export default {
  components: { TaskSection },
  props: ["levelsConfig"],
};
</script>

<style scoped></style>
