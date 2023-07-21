<template>
   <div class="rounded-md overflow-hidden">
        <div class="hidden lg:grid grid-cols-5 bg-sgreen text-white">
            <table-cell tag="th">Имя</table-cell>
            <table-cell tag="th">Подразделение</table-cell>
            <table-cell tag="th">Отдел</table-cell>
            <table-cell tag="th">Телефон внутренний</table-cell>
            <table-cell tag="th">Телефон мобильный</table-cell>
        </div>

        <table-row v-for="item in abonents" :key="item.id">
            <table-cell tag="td" title="Имя">{{item.name}}</table-cell>
            <table-cell tag="td" title="Подразделение">{{item.podrazdelenie}}</table-cell>
            <table-cell tag="td" title="Отдел">{{item.otdel}}</table-cell>
            <table-cell tag="td" title="Телефон внутренний">{{item.phone_st}}</table-cell>
            <table-cell tag="td" title="Телефон мобильный">{{item.phone_mobile}}</table-cell>
        </table-row>
    </div>

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
