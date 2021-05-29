<template>
  <b-navbar toggleable="lg" type="light" variant="white">
    <b-navbar-brand href="#">PHÒNG KHÁM TẤM LÝ CẦN THƠ</b-navbar-brand>
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="ml-auto">
        <div v-for="navItem in navItems" :key="navItem.to">
          <b-nav-item-dropdown :text="navItem.label" right v-if="navItem.items">
            <b-dropdown-item :href="navChildItem.to" v-for="navChildItem in navItem.items" :key="navChildItem.to">
              {{ navChildItem.label }}
            </b-dropdown-item>
          </b-nav-item-dropdown>
          <b-nav-item :href="navItem.to" v-else>
            {{ navItem.label }}
          </b-nav-item>
        </div>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script lang="ts">
import { Component, Prop, Vue } from 'nuxt-property-decorator';

interface NavItem {
  label: string;
  to: string;
  items?: NavItem[];
}

@Component({
  name: 'component-shared-navbar'
})
export default class extends Vue {
  @Prop({ default: () => [] })
  private activeItems!: string[];

  private createNavItem(label: string): NavItem {
    return {
      label: label,
      to: `/${this.$slug(label)}`
    };
  }

  createNavGroupItem(label: string, labelItems: string[]): NavItem {
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

  isActive(navItem: NavItem) {
    return this.activeItems.includes(navItem.label);
  }

  get navItems(): NavItem[] {
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
