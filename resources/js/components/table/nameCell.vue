<template>
    <th v-if="tag='th'"><slot></slot></th>
    <td v-else><slot></slot></td>

</template>

<script>
export default {
    props:["tag"]
}
</script>
