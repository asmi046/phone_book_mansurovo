<template>
  <table class="w-full border-l border-sgreen border-t">
    <thead class="hidden lg:table-header-group">
        <tr>
            <table-cell tag="th">Имя</table-cell>
            <table-cell tag="th">Подразделение</table-cell>
            <table-cell tag="th">Отдел</table-cell>
            <table-cell tag="th">Телефон внутренний</table-cell>
            <table-cell tag="th">Телефон мобильный</table-cell>
        </tr>
    </thead>
    <tbody>
        <tr class="flex flex-col lg:table-row">
            <table-cell tag="td" title="Имя">Иванов Иван Иванычь</table-cell>
            <table-cell tag="td" title="Подразделение">Конезавод</table-cell>
            <table-cell tag="td" title="Отдел">Бухгалтерия</table-cell>
            <table-cell tag="td" title="Телефон внутренний">03-00</table-cell>
            <table-cell tag="td" title="Телефон мобильный">+7 (903) 000-00-00</table-cell>
        </tr>

        <tr class="flex flex-col lg:table-row">
            <table-cell tag="td" title="Имя">Иванов Иван Иванычь</table-cell>
            <table-cell tag="td" title="Подразделение">Конезавод</table-cell>
            <table-cell tag="td" title="Отдел">Бухгалтерия</table-cell>
            <table-cell tag="td" title="Телефон внутренний">03-00</table-cell>
            <table-cell tag="td" title="Телефон мобильный">+7 (903) 000-00-00</table-cell>
        </tr>
    </tbody>

  </table>
</template>

<script>
import tableCell from './table/tableCell.vue'
export default {
    components: { tableCell },

}
</script>

<style>

</style>
