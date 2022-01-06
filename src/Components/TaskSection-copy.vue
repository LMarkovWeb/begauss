<template>
  <section class="text-gray-600 body-font">
    <div
      v-for="(level, key) in levelsConfig"
      :key="key"
      class="container px-5 py-15 mx-auto flex flex-wrap"
    >
      <div class="flex relative pt-10 pb-20 sm:items-center md:w-5/6 mx-auto">
        <div
          class="h-full w-6 absolute inset-0 flex items-center justify-center"
        >
          <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div
          class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm"
        >
          {{ key + 1 }}
        </div>
        <div
          class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row"
        >
          <div
            v-html="arView[key].svg"
            class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center"
          ></div>
          <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">
              {{ level.title }}
            </h2>
            <div class="leading-relaxed">
              <!-- Сложение -->
              <AppSummation :arParams="level.AppSummation" />
              <AppSummation
                v-if="level.AppSummationPlus"
                :arParams="level.AppSummationPlus ? level.AppSummationPlus : {}"
              />
              <!-- Вычитание -->
              <AppSubtraction :arParams="level.AppSubtraction"></AppSubtraction>
              <!-- Умножение -->
              <AppMultiplication
                :arParams="level.AppMultiplication"
              ></AppMultiplication>
              <!-- Деление -->
              <AppDivision :arParams="level.AppDivision"></AppDivision>
              <!-- Процент от числа -->
              <AppPercentage
                v-if="level.AppPercentage"
                :arParams="level.AppPercentage ? level.AppPercentage : {}"
              />
              <!-- На сколько процентов больше -->
              <AppHowManyPercent
                  v-if="level.AppHowManyPercent"
                  :arParams="level.AppHowManyPercent ? level.AppHowManyPercent : {}"
              />
              <!-- Перевод из долларов в рубли -->
              <AppConversion
                  v-if="level.AppConversion"
                  :arParams="level.AppConversion ? level.AppConversion : {}"
              />

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import AppSummation from "@/Components/Math/AppSummation";
import AppDivision from "@/Components/Math/AppDivision";
import AppSubtraction from "@/Components/Math/AppSubtraction";
import AppMultiplication from "@/Components/Math/AppMultiplication";
import AppPercentage from "@/Components/Math/AppPercentage";
import AppHowManyPercent from "@/Components/Math/AppHowManyPercent";
import AppConversion from "@/Components/Math/AppConversion";
export default {
  name: "TaskSection",
  components: {
    AppSummation,
    AppDivision,
    AppSubtraction,
    AppMultiplication,
    AppPercentage,
    AppHowManyPercent,
    AppConversion,
  },

  data() {
    return {
      arView: [
        {
          svg: "<svg  fill='none'  stroke='currentColor'  stroke-linecap='round'  stroke-linejoin='round'  stroke-width='2'  class='w-12 h-12'  viewBox='0 0 24 24'>  <path d='M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z'></path></svg>",
        },
        {
          svg: "<svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round'              stroke-width='2' class='w-12 h-12' viewBox='0 0 24 24'><path d='M22 12h-4l-3 9L9 3l-3 9H2'></path></svg>",
        },
        {
          svg: "<svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round'             stroke-width='2' class='w-12 h-12' viewBox='0 0 24 24'><circle cx='12' cy='5' r='3'></circle><path d='M12 22V8M5 12H2a10 10 0 0020 0h-3'></path></svg>",
        },
        {
          svg: "<svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-12 h-12' viewBox='0 0 24 24'><path d='M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg>",
        },
      ],
      levelsConfig: this.$store.state.levelsConfig,
    };
  },
  methods: {},
};
</script>

<style scoped></style>
