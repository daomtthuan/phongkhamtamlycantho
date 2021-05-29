<template>
  <div>
    <shared-navbar></shared-navbar>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';

@Component({
  name: 'page-trang-chu',
  head: { title: 'Trang chủ' },
})
export default class extends Vue {}
</script>
