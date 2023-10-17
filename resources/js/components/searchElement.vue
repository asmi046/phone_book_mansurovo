<template>
    <form class="search_form" action="">
        <input v-model="search_str"  type="text" name="search" placeholder="Введите номер телефона или название подразделения">
        <button></button>
    </form>
</template>

<script>
import { useStore } from 'vuex'
import { computed, ref, watch } from 'vue'

export default {

    setup() {
        const store = useStore()

        let search_str = ref("")

        watch(search_str, (newVal, oldVal)=> {
            console.log("dodo")
            store.commit('setSearchStr', newVal);
            store.dispatch('initialBascet')
        })

        return {
            search_str
        }
    }
}
</script>

<style>

</style>
