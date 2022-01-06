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
          title: "Вычитание (XX - XX)",
          taskCount: 15,
          operandsCount: 2,
          range: [
            { from: 21, to: 99 },
            { from: 6, to: 60 },
          ],
        },
        AppMultiplication: {
          title: "Умножение (Х * Х)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 2, to: 9 },
            { from: 2, to: 9 },
          ],
        },
        AppDivision: {
          title: "Деление (XX / X)",
          taskCount: 20,
          operandsCount: 2, // без учета проверок на целочисленное деление
          range: [
            { from: 21, to: 99 },
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
          title: "Вычитание (XX(X) - XX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 81, to: 199 },
            { from: 11, to: 99 },
          ],
        },
        AppMultiplication: {
          title: "Умножение (ХХ * Х)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 11, to: 39 },
            { from: 2, to: 9 },
          ],
        },
        AppDivision: {
          title: "Деление (XX(X) / X)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 80, to: 199 },
            { from: 2, to: 9 },
          ],
        },
        AppConversion: {
          // конвертация $ -> P.
          title: "Конвертация &#36; -> &#8381;",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 3, to: 100 },
            { from: 1, to: 1 },
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
            { from: 11, to: 99 },
          ],
        },
        AppDivision: {
          title: "Деление (XXX / X)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 100, to: 999 },
            { from: 2, to: 9 },
          ],
        },
        AppPercentage: {
          title: "Процент (%) от числа",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 1, to: 99 },
            { from: 200, to: 1000 },
          ],
        },
        AppHowManyPercent: {
          title: "На сколько(%) больше",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 100, to: 150 },
            { from: 10, to: 120 },
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
          title: "Вычитание (XXX(X) - XXX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 700, to: 9999 },
            { from: 101, to: 999 },
          ],
        },
        AppMultiplication: {
          title: "Умножение (ХХ(Х) * ХХ)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 51, to: 999 },
            { from: 11, to: 99 },
          ],
        },
        AppDivision: {
          title: "Деление (XXX / XX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 100, to: 999 },
            { from: 11, to: 99 },
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
