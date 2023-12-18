import { createStore } from "vuex";

export default createStore({
  state: {
    levelsConfig: [
      // D
      {
        title: "D",
        level: "easy",
        AppMultiplication: {
          title: "Умножение (Х * Х)",
          taskCount: 12,
          operandsCount: 2,
          range: [
            { from: 2, to: 9 },
            { from: 2, to: 9 },
          ],
        },
        AppSummation: {
          title: "Сложение (XX + XX)",
          taskCount: 10, // кол-во примеров
          operandsCount: 2, // кол-во операндов в примере
          range: [
            // кол-во объектов по кол-ву операндов
            { from: 10, to: 59 },
            { from: 11, to: 59 },
          ],
        },
        AppSubtraction: {
          title: "Вычитание (XX - XX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 21, to: 69 },
            { from: 10, to: 49 },
          ],
        },
        AppDivision: {
          title: "Деление (XX / X)",
          taskCount: 10,
          operandsCount: 2, // без учета проверок на целочисленное деление
          range: [
            { from: 21, to: 59 },
            { from: 2, to: 9 },
          ],
        },
      },
      // D+
      {
        title: "D+",
        level: "middle",
        AppMultiplication: {
          title: "Умножение (ХХ * Х)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 11, to: 69 },
            { from: 2, to: 6 },
          ],
        },
        AppSummation: {
          title: "Сложение (XX + XX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 41, to: 99 },
            { from: 31, to: 99 },
          ],
        },
        AppSubtraction: {
          title: "Вычитание (XX - XX)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 69, to: 99 },
            { from: 11, to: 79 },
          ],
        },
        AppDivision: {
          title: "Деление (XX(X) / X)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 70, to: 159 },
            { from: 4, to: 9 },
          ],
        },
      },
      // C
      {
        title: "C",
        level: "middle+",
        AppMultiplication: {
          title: "Умножение (ХХ * Х)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 61, to: 99 },
            { from: 5, to: 9 },
          ],
        },
        AppSummation: {
          title: "Сложение (XXX + XX)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 100, to: 599 },
            { from: 29, to: 99 },
          ],
        },
        AppSubtraction: {
          title: "Вычитание (XXX - XX)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 100, to: 399 },
            { from: 100, to: 199 },
          ],
        },
        AppDivision: {
          title: "Деление (XX / X)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 199, to: 999 },
            { from: 3, to: 9 },
          ],
        },
        // AppSquare: {
        //   title: "Таблица квадратов до 20",
        //   taskCount: 7,
        //   operandsCount: 2,
        //   range: [
        //     { from: 2, to: 20 },
        //     { from: 2, to: 2 },
        //   ],
        // },
      },
      // C+
      {
        title: "C+",
        level: "hard",
        AppMultiplication: {
          title: "Умножение (ХХ * ХX)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 11, to: 39 },
            { from: 11, to: 39 },
          ],
        },
        AppSummation: {
          title: "Сложение (ХХХ + ХХХ)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 499, to: 999 },
            { from: 499, to: 999 },
          ],
        },
        AppSummationPlus: {
          title: "Сложение (ХХХХ + ХХ)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 10001, to: 99999 },
            { from: 11, to: 99 },
          ],
        },
        AppSubtraction: {
          title: "Вычитание (XXX - XX(Х))",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 399, to: 999 },
            { from: 39, to: 399 },
          ],
        },
        AppDivision: {
          title: "Деление (XXX / X)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 100, to: 499 },
            { from: 2, to: 6 },
          ],
        },
        AppPercentage: {
          title: "Процент (%) от числа",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 1, to: 99 },
            { from: 200, to: 1000 },
          ],
        },
        AppHowManyPercent: {
          title: "На сколько(%) больше",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 100, to: 150 },
            { from: 10, to: 120 },
          ],
        },
      },
      // B
      {
        title: "B",
        level: "hard",
        AppMultiplication: {
          title: "Умножение (ХХ * ХX)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 51, to: 99 },
            { from: 51, to: 99 },
          ],
        },
        AppSummation: {
          title: "Сложение (ХХХ + ХХХ + ХХХ)",
          taskCount: 7,
          operandsCount: 3,
          range: [
            { from: 101, to: 999 },
            { from: 101, to: 999 },
            { from: 101, to: 999 },
          ],
        },
        AppSummationPlus: {
          title: "Сложение (ХХХХ + ХХХХ)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 10001, to: 99999 },
            { from: 10001, to: 99999 },
          ],
        },
        AppSubtraction: {
          title: "Вычитание (XXX - XXX)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 700, to: 999 },
            { from: 100, to: 699 },
          ],
        },
        AppDivision: {
          title: "Деление (XXX / X)",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 501, to: 999 },
            { from: 5, to: 9 },
          ],
        },
        AppPercentage: {
          title: "Процент (%) от числа",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 1, to: 99 },
            { from: 200, to: 1000 },
          ],
        },
        AppHowManyPercent: {
          title: "На сколько(%) больше",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 100, to: 150 },
            { from: 10, to: 120 },
          ],
        },
        AppConversion: {
          // конвертация $ -> P.
          title: "Конвертация &#36; -> &#8381;",
          taskCount: 7,
          operandsCount: 2,
          range: [
            { from: 3, to: 100 },
            { from: 1, to: 1 },
          ],
        },
      },
      // B+
      {
        title: "B+",
        level: "extraHard",
        AppMultiplication: {
          title: "Умножение (ХХ(Х) * ХХ)",
          taskCount: 10,
          operandsCount: 2,
          range: [
            { from: 51, to: 999 },
            { from: 11, to: 99 },
          ],
        },
        AppSummation: {
          title: "Сложение (ХХХХ + ... + ХХХХ)",
          taskCount: 10,
          operandsCount: 5,
          range: [
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
      // A
      // {
      //   title: "A",
      //   level: "extraHard",
      // },
      // A+
      // {
      //   title: "A+",
      //   level: "extraHard",
      // },
    ],
  },
  mutations: {},
  actions: {},
  getters: {},
  modules: {},
});
