<template>
    <div class="result_table_greed">
        <table-cell tag="th">Имя</table-cell>
        <table-cell tag="th">Табельный номер</table-cell>
        <table-cell tag="th">Должность</table-cell>
        <table-cell tag="th">Организация</table-cell>
        <table-cell tag="th">Подразделение</table-cell>
        <table-cell tag="th">Телефон внутренний</table-cell>
        <table-cell tag="th">Телефон мобильный</table-cell>
        <table-cell tag="th">Электронная почта</table-cell>
    </div>

    <table-row v-for="item in abonents" :key="item.id">
        <table-cell tag="td" title="Имя">{{item.name}}</table-cell>
        <table-cell tag="td" title="Табельный номер">{{item.tabel_number}}</table-cell>
        <table-cell tag="td" title="Должность">{{item.dolgnost}}</table-cell>
        <table-cell tag="td" title="Организация">{{item.organization}}</table-cell>
        <table-cell tag="td" title="Подразделение">{{item.podrazdelenie}}</table-cell>
        <table-cell tag="td" title="Телефон внутренний">{{item.phone_st}}</table-cell>
        <table-cell tag="td" title="Телефон мобильный">{{item.phone_mobile}}</table-cell>
        <table-cell tag="td" title="Электронная почта">{{item.email}}</table-cell>
    </table-row>


</template>

<script>
import tableCell from './table/tableCell.vue'
import tableRow from './table/tableRow.vue'
import { useStore } from 'vuex'
import { computed } from 'vue'
export default {
    components: { tableCell, tableRow },

    setup() {
        const store = useStore()

        return {
            abonents : computed(() => store.getters.abonentList)
        }

    }

}
</script>

<style>

</style>
