<template>
    <th class="px-2 py-3 text-left bg-sgreen text text-white border-r border-sgreen border-b" v-if=" tag == 'th'"><slot></slot></th>
    <td class="text-left border-r border-sgreen border-b flex flex-wrap lg:table-cell" v-else>
        <span class="bg-sgreen text-white w-1/2 mr-3 px-2 py-3 lg:hidden">{{title}}</span>
        <span class="px-2 py-3">
            <slot></slot>
        </span>
    </td>

</template>

<script>
export default {
    props:["tag", "title"]
}
</script>
