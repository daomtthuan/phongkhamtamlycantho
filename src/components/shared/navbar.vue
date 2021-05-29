<template>
  <div class="compoent-shared-navbar">
    <b-navbar toggleable="lg" type="light" variant="white">
      <b-navbar-brand href="/" class="font-weight-bold text-primary">PHÒNG KHÁM TÂM LÝ CẦN THƠ</b-navbar-brand>

      <b-button class="d-lg-none" v-b-toggle.navbar-sidebar>
        <fa icon="bars"></fa>
      </b-button>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="ml-auto">
          <div v-for="navItem in navItems" :key="navItem.to">
            <b-nav-item-dropdown :text="navItem.label" right v-if="navItem.items" :class="{ active: isActive(navItem) }" no-caret>
              <b-dropdown-item :href="navChildItem.to" v-for="navChildItem in navItem.items" :key="navChildItem.to" :active="isActive(navChildItem)">
                {{ navChildItem.label }}
              </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item :href="navItem.to" :active="isActive(navItem)" v-else>
              <fa icon="home" v-if="navItem.to == '/trang-chu'"></fa>
              <span class="d-none d-xl-inline">{{ navItem.label }}</span>
            </b-nav-item>
          </div>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>

    <b-sidebar id="navbar-sidebar" bg-variant="white" right lazy backdrop shadow>
      <template #header="{hide}">
        <b-button @click="hide" class="ml-auto">
          <fa icon="times"></fa>
        </b-button>
      </template>

      <template #default>
        <div class="px-3">
          <div v-for="navItem in navItems" :key="navItem.to">
            <b-nav-item-dropdown :text="navItem.label" right v-if="navItem.items" :class="{ active: isActive(navItem) }" no-caret>
              <b-dropdown-item :href="navChildItem.to" v-for="navChildItem in navItem.items" :key="navChildItem.to" :active="isActive(navChildItem)">
                {{ navChildItem.label }}
              </b-dropdown-item>
            </b-nav-item-dropdown>

            <b-button :to="navItem.to" block variant="primary" class="text-right my-2" v-else>
              {{ navItem.label }}
            </b-button>
          </div>
        </div>
      </template>
    </b-sidebar>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';

interface NavItem {
  label: string;
  to: string;
  items?: NavItem[];
  icon?: string;
}

@Component({
  name: 'compoent-shared-navbar'
})
export default class extends Vue {
  private createNavItem(label: string): NavItem {
    return {
      label: label,
      to: `/${this.$slug(label)}`
    };
  }

  private createNavGroupItem(label: string, labelItems: string[]): NavItem {
    return {
      label: label,
      to: `/${this.$slug(label)}`,
      items: labelItems.map(labelItem => ({
        label: labelItem,
        to: `/${this.$slug(label)}/${this.$slug(labelItem)}`,
        isGroup: false
      }))
    };
  }

  private isActive(navItem: NavItem) {
    if (this.$route.path == '/' && navItem.to == '/trang-chu') {
      return true;
    }

    return this.$route.path.includes(navItem.to);
  }

  private get navItems(): NavItem[] {
    return [
      this.createNavItem('Trang chủ'),
      this.createNavGroupItem('Giới thiệu', ['Bác sĩ tâm lý - SKTT', 'Phòng khám tâm lý', 'Trung tâm VTCare']),
      this.createNavGroupItem('Dịch vụ', [
        'Thăm khám và tư vấn tâm lý',
        'Hướng dẫn phụ huynh can thiệp cho trẻ',
        'Can thiệp cho trẻ, giúp trẻ phát triển / hoà nhập'
      ]),
      this.createNavGroupItem('Trắc nghiệm tâm lý', [
        'Nguy cơ tự kỷ - chậm nói',
        'Tăng động giảm chú ý',
        'Trầm Cảm - Hưng Cảm',
        'Lo âu – Mất ngủ',
        'Nghiện Game / Rượu / Chất',
        'Sa sút trí tuệ - tập trung',
        'Đánh giá trẻ tại trung tâm VTCare'
      ]),
      this.createNavGroupItem('Góc kiến thức', ['Chậm nói', 'Tự kỷ', 'Tăng động', 'Mất ngủ', 'Lo âu', 'Trầm cảm', 'Chuyên ngành']),
      this.createNavGroupItem('Tin tức / hoạt động', ['Tuyển dụng', 'Hình ảnh / hoạt động', 'Cập nhật y học'])
    ];
  }
}
</script>

<style lang="scss">
// .compoent-shared-navbar {
// }
</style>
