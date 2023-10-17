<template>
    <div class="th" v-if=" tag == 'th'"><slot></slot></div>
    <div class="td" v-else>
        <span class="mobile_caption">{{title}}</span>
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
