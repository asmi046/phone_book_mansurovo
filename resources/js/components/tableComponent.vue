<template>
  <table class="w-full">
    <thead>
        <tr>
            <name-cell tag="th">Имя</name-cell>
            <th>Подразделение</th>
            <th>Отдел</th>
            <th>Телефон внутренний</th>
            <th>Телефон мобильный</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <name-cell tag="td">Иванов Иван Иванычь</name-cell>
            <td>Конезавод</td>
            <td>Бухгалтерия</td>
            <td>03-00</td>
            <td>+7 (903) 000-00-00</td>
        </tr>
    </tbody>

  </table>
</template>

<script>
import nameCell from './table/nameCell.vue'
export default {
    components: { nameCell },

}
</script>

<style>

</style>
