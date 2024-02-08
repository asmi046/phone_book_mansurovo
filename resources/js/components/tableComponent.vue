<template>
    <div class="result_table_greed top-round">
        <table-cell tag="th">Имя</table-cell>
        <table-cell tag="th">Должность</table-cell>
        <table-cell tag="th">Организация</table-cell>
        <table-cell tag="th">Подразделение</table-cell>
        <table-cell tag="th">Телефон внутренний</table-cell>
        <table-cell tag="th">Телефон мобильный</table-cell>
        <table-cell tag="th">Электронная почта</table-cell>
    </div>

    <div v-if="abonents.length > 0" class ="t_body">
        <table-row v-for="item in abonents" :key="item.id">
            <table-cell tag="td" title="Имя">{{item.name}}</table-cell>
            <table-cell tag="td" title="Должность">{{item.dolgnost}}</table-cell>
            <table-cell tag="td" title="Организация">{{item.organization}}</table-cell>
            <table-cell tag="td" title="Подразделение">{{item.podrazdelenie}}</table-cell>
            <table-cell tag="td" title="Телефон внутренний">{{item.phone_st}}</table-cell>
            <table-cell tag="td" title="Телефон мобильный"><a :href="'tel:'+item.phone_mobile">{{item.phone_mobile}}</a></table-cell>
            <table-cell tag="td" title="Электронная почта"><a :href="'mailto:'+item.email">{{item.email}}</a></table-cell>
        </table-row>
    </div>
    <div v-else class ="t_body">
        <table-row>

            <span class="search_faild">Ничего не найдено</span>
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
