<template>
    <form class="search_form" action="">
        <input v-model="search_str"  type="text" name="search" placeholder="Введите номер телефона или название подразделения">
        <button></button>
    </form>
    <form class="organization_list" action="">
        <label  for="rbo_all">
            <input v-model="organization_sel" type="radio" name="organization" value="%" id="rbo_all">
            <span>Все</span>
        </label>
        <label v-for="(item, index) in organization_list" :key="index" :for="'rbo'+index">
            <input v-model="organization_sel" type="radio" name="organization" :value="item.organization" :id="'rbo'+index">
            <span>{{ item.organization }}</span>
        </label>

    </form>
</template>

<script>
import { useStore } from 'vuex'
import { computed, ref, watch } from 'vue'

export default {

    setup() {
        const store = useStore()

        let search_str = ref("")

        let organization_list = ref(store.getters.getOrganizationList)

        let organization_sel = ref("")

        watch(() => store.getters.getOrganizationList, ()=> {
            organization_list.value = store.getters.getOrganizationList
            console.log(organization_list)
        });

        watch(search_str, (newVal, oldVal)=> {
            store.commit('setSearchStr', newVal);
            store.dispatch('initialBascet')
        })

        watch(organization_sel, (newVal, oldVal)=> {
            store.commit('setOrganization', newVal);
            console.log(store.state.organization)
            store.dispatch('initialBascet')
        })

        return {
            organization_list,
            organization_sel,
            search_str
        }
    }
}
</script>

<style>

</style>
