<template>
    <div class="px-2 py-3 text-left  text" v-if=" tag == 'th'"><slot></slot></div>
    <div class="text-left flex flex-wrap " v-else>
        <span class="font-bold w-1/2 mr-3 px-2 py-3 lg:hidden">{{title}}</span>
        <span class="px-2 py-3">
            <slot></slot>
        </span>
    </div>

</template>

<script>
export default {
    props:["tag", "title"]
}
</script>
