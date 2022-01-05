import { createRouter, createWebHistory } from "vue-router";
import About from "@/views/About.vue";
import AllTasks from "@/views/AllTasks.vue";
// import Easy from "@/views/Easy.vue";
// import Middle from "@/views/Middle.vue";
// import Hard from "@/views/Hard.vue";
// import ExtraHard from "@/views/ExtraHard.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: AllTasks,
    props: true,
  },
  {
    path: "/about",
    name: "About",
    component: About,
    props: true,
  },
  // {
  //   path: "/easy",
  //   name: "Easy",
  //   component: Easy,
  //   props: true,
  // },
  // {
  //   path: "/middle",
  //   name: "Middle",
  //   component: Middle,
  //   props: true,
  // },
  // {
  //   path: "/hard",
  //   name: "Hard",
  //   component: Hard,
  //   props: true,
  // },
  // {
  //   path: "/extrahard",
  //   name: "ExtraHard",
  //   component: ExtraHard,
  //   props: true,
  // },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
