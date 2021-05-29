<template>
  <div class="page-trang-chu">
    <b-row>
      <b-col></b-col>
      <b-col></b-col>
      <b-col></b-col>
    </b-row>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';

@Component({
  name: 'page-trang-chu',
  head: { title: 'Trang chủ' }
})
export default class extends Vue {}
</script>

<style lang="scss">
// .page-trang-chu {
// }
</style>
