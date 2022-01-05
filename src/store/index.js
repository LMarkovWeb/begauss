import { createStore } from "vuex";

export default createStore({
  state: {
    levelsConfig: [
      // easy
      {
        title: "Легкий",
        level: "easy",
        AppSummation: {
          title: "Сложение (XX + XX)",
          taskCount: 10, // кол-во примеров
          operandsCount: 2, // кол-во операндов в примере
          range: [
            // кол-во объектов по кол-ву операндов
            { from: 10, to: 99 },
            { from: 11, to: 99 },
          ],
        },
        AppSubtraction: {
          title: "Вычитание (XX(X) - XX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 21, to: 129 },
            { from: 6, to: 99 },
          ],
        },
        AppMultiplication: {
          title: "",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 2, to: 9 },
            { from: 2, to: 9 },
          ],
        },
        AppDivision: {
          title: "Деление (XX / X)",
          taskCount: 10,
          operandsCount: 30, // без учета проверок на целочисленное деление
          range: [
            { from: 21, to: 199 },
            { from: 2, to: 9 },
          ],
        },
      },
      // middle
      {
        title: "Средний",
        level: "middle",
        AppSummation: {
          title: "Сложение (XXX + XXX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 100, to: 999 },
            { from: 100, to: 999 },
          ],
        },
        AppSubtraction: {
          title: "Вычитание (XXX - XXX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 700, to: 999 },
            { from: 100, to: 699 },
          ],
        },
        AppMultiplication: {
          title: "Умножение (ХХ * Х)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 11, to: 99 },
            { from: 2, to: 9 },
          ],
        },
        AppDivision: {
          title: "",
          taskCount: 10,
          operandsCount: 30,
          range: [
            { from: 21, to: 199 },
            { from: 2, to: 9 },
          ],
        },
      },
      // hard
      {
        title: "Сложный",
        level: "hard",
        AppSummation: {
          title: "Сложение (ХХХ + ХХХ + ХХХ + ХХХ)",
          taskCount: 10,
          operandsCount: 4,
          range: [
            { from: 101, to: 999 },
            { from: 101, to: 999 },
            { from: 101, to: 999 },
            { from: 101, to: 999 },
          ],
        },
        AppSummationPlus: {
          title: "Сложение (ХХХХХ + ХХХХХ)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 10000, to: 99999 },
            { from: 10000, to: 99999 },
          ],
        },
        AppSubtraction: {
          title: "",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 700, to: 999 },
            { from: 100, to: 699 },
          ],
        },
        AppMultiplication: {
          title: "",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 11, to: 99 },
            { from: 11, to: 99 },
          ],
        },
        AppDivision: {
          title: "",
          taskCount: 10,
          operandsCount: 30,
          range: [
            { from: 21, to: 199 },
            { from: 2, to: 9 },
          ],
        },
      },
      // extraHard
      {
        title: "Супер сложный",
        level: "extraHard",
        AppSummation: {
          title: "Сложение (ХХХХ + ... + ХХХХ)",
          taskCount: 10,
          operandsCount: 5,
          range: [
            { from: 1001, to: 4999 },
            { from: 1001, to: 4999 },
            { from: 1001, to: 4999 },
            { from: 1001, to: 4999 },
            { from: 1001, to: 4999 },
          ],
        },
        AppSubtraction: {
          title: "В разработке...",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 700, to: 999 },
            { from: 100, to: 699 },
          ],
        },
        AppMultiplication: {
          title: "Умножение (ХХХ * ХХ)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 101, to: 999 },
            { from: 11, to: 99 },
          ],
        },
        AppDivision: {
          title: "В разработке...",
          taskCount: 10,
          operandsCount: 30,
          range: [
            { from: 21, to: 199 },
            { from: 2, to: 9 },
          ],
        },
      },
    ],
  },
  mutations: {},
  actions: {},
  getters: {},
  modules: {},
});
