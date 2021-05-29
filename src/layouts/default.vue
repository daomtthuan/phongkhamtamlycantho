<template>
  <div class="layout-default">
    <shared-navbar></shared-navbar>

    <b-container>
      <b-row>
        <shared-carousel-cover></shared-carousel-cover>
      </b-row>

      <nuxt></nuxt>
    </b-container>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';

@Component({
  name: 'layout-default'
})
export default class extends Vue {}
</script>

<style lang="scss">
// .layout-default {
// }
</style>
