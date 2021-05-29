<template>
  <div class="compoent-shared-carousel-cover">
    <b-container>
      <b-carousel controls fade indicators label-goto-slide="Đến ảnh" label-indicators="Chọn để đến ảnh" label-next="Ảnh sau" label-prev="Ảnh trước">
        <b-carousel-slide v-for="(image, index) in images" :key="index" :img-src="image"></b-carousel-slide>
      </b-carousel>
      <hr />
    </b-container>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';

@Component({
  name: 'compoent-shared-carousel-cover'
})
export default class extends Vue {
  private images: string[] = ['/images/components/carousel-cover/1.png', '/images/components/carousel-cover/2.png', '/images/components/carousel-cover/3.png'];
}
</script>

<style lang="scss">
// .compoent-shared-carousel-cover {
// }
</style>
