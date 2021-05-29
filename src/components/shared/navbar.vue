<template>
  <div class="compoent-shared-navbar sticky-top">
    <b-navbar toggleable="lg" type="light" variant="white" class="shadow">
      <b-navbar-brand to="/" class="font-weight-bold text-primary">
        <span class="d-none d-sm-inline">PHÒNG KHÁM TÂM LÝ CẦN THƠ</span>
        <span class="d-sm-none">PK. TÂM LÝ CẦN THƠ</span>
      </b-navbar-brand>

      <b-button class="d-lg-none" v-b-toggle.navbar-sidebar>
        <fa icon="bars"></fa>
      </b-button>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="ml-auto">
          <div v-for="navItem in navItems" :key="navItem.to">
            <b-nav-item-dropdown :text="navItem.label" right v-if="navItem.items" :class="{ active: isActive(navItem) }" no-caret>
              <b-dropdown-item :to="navChildItem.to" v-for="navChildItem in navItem.items" :key="navChildItem.to" :active="isActive(navChildItem)">
                {{ navChildItem.label }}
              </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item :to="navItem.to" :active="isActive(navItem)" v-else>
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
        <div class="px-3 accordion" role="tablist">
          <div v-for="navItem in navItems" :key="navItem.to">
            <div v-if="navItem.items">
              <b-button v-b-toggle="navItem.to" block :variant="isActive(navItem) ? 'primary' : 'light'" class="text-right mt-2" role="tab">
                {{ navItem.label }}
              </b-button>
              <b-collapse :id="navItem.to" accordion="accordion" role="tabpanel">
                <b-card no-body class="mt-2">
                  <b-card-body class="py-2 px-0">
                    <b-link
                      :to="navChildItem.to"
                      v-for="navChildItem in navItem.items"
                      :key="navChildItem.to"
                      :active="isActive(navChildItem)"
                      class="dropdown-item text-right"
                    >
                      {{ navChildItem.label }}
                    </b-link>
                  </b-card-body>
                </b-card>
              </b-collapse>
            </div>

            <b-button :to="navItem.to" block :variant="isActive(navItem) ? 'primary' : 'light'" class="text-right mt-2" v-else>
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
      this.createNavGroupItem('Dịch vụ', ['Thăm khám và tư vấn tâm lý', 'Hướng dẫn phụ huynh', 'Can thiệp, giúp trẻ']),
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
