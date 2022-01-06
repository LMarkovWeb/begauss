<template>
  <div class="accordion" :id="`accordion-${appId}`">
    <div class="accordion-item bg-white border border-gray-200">
      <h2 class="accordion-header mb-0" :id="`heading-${appId}`">
        <button v-html="title"
                class="
          accordion-button
          relative
          flex
          items-center
          w-full
          py-4
          px-5
          text-base text-gray-800 text-left
          bg-white
          border-0
          rounded-none
          transition
          focus:outline-none
        "
                type="button"
                data-bs-toggle="collapse"
                :data-bs-target="`#collapse-${appId}`"
                aria-expanded="false"
                :aria-controls="`collapse-${appId}`"
        >
        </button>
      </h2>
      <div
          :id="`collapse-${appId}`"
          class="accordion-collapse collapse"
          :aria-labelledby="`heading-${appId}`"
          :data-bs-parent="`#accordion-${appId}`"
      >
        <div class="accordion-body py-4 px-5">
          <p class="p-3">($ = {{currencyExchangeRate}} р.)</p>
          <p v-for="(val, key) in arResult" :key="key" class="text-2xl mb-3">
            <span>
              {{ val.data.operands[0] }}&#36;
            </span>
                  =

                  <span @click="changeVisible(key)" class="res">
              _
              <strong :class="arResult[key].resShow ? 'show' : 'hide'">
                {{ val.data.res }}
              </strong>
            </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AppConversion",
  props: {
    arParams: Object,
  },
  data() {
    return {
      // Итоговый массив примеров
      arResult: [],
      // кол-во заданий
      taskCount: this.arParams.taskCount,
      // кол-во операндов в математическом выражении
      operandsCount: this.arParams.operandsCount,
      currencyExchangeRate: 75,
      // Заголовок блока
      title: this.arParams.title,
    };
  },
  mounted() {
    this.getData();
  },
  computed: {
    // генерация id компонента
    appId: function () {
      return Math.random().toString(36).substring(8);
    },
    // Массив диапазонов для генерации примеров
    range: function () {
      let arRes = [];
      for (let i = 0; i < this.operandsCount; i++) {
        arRes.push({
          min: Math.ceil(this.arParams.range[i].from),
          max: Math.ceil(this.arParams.range[i].to),
        });
      }
      return arRes;
    },
  },
  methods: {
    // Показ ответов
    changeVisible(key) {
      this.arResult[key].resShow = true;
    },
    // генерация случайного числа в диапазоне
    getRandomArbitrary(min, max) {
      return Math.floor(Math.random() * (max - min)) + min;
    },
    getData() {
      let requiredQuantity = this.taskCount; // счетчик примеров
      while (requiredQuantity) {
        let a = this.getRandomArbitrary(this.range[0].min, this.range[0].max);

        requiredQuantity--;

        this.arResult.push({
          resShow: false,
          data: {
            operands: [a, 0],
            res: a * this.currencyExchangeRate
          },
        });
      }
    },
  },
};
</script>

<style scoped></style>
