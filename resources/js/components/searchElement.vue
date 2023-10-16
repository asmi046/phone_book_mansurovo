<template>
    <form class="border-sgray border rounded-md overflow-hidden bg-slgray flex px-3 w-full my-4" action="">
        <input v-model="search_str" class="bg-transparent my-2 flex-1 outline-none" type="text" name="search" placeholder="Введите номер телефона или название подразделения">
        <button class="pi shop_lins before:text-sgray before:text-2xl w-1/12 relative max-w-[40px]"></button>
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
