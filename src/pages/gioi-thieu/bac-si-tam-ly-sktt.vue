<template>
  <div class="page-gioi-thieu-bac-si-tam-ly-sktt">
    <h1 class="text-primary">BÁC SĨ TÂM LÝ - SKTT</h1>

    <hr />
    <h2>THÔNG TIN CÁ NHÂN</h2>
    <hr />

    <dl>
      <dt>Họ tên:</dt>
      <dd>Trần Thiện Thắng</dd>

      <dt>Ngày tháng năm sinh:</dt>
      <dd>09/09/1990</dd>

      <dt>Email:</dt>
      <dd>ttthang@ctump.edu.vn</dd>

      <dt>Điện thoại:</dt>
      <dd>091599999x</dd>
    </dl>

    <hr />
    <h2>ĐÀO TẠO - CHỨNG CHỈ</h2>
    <hr />

    <b-table head-variant="light" hover :items="items" :fields="fields" small></b-table>

    <hr />
    <h2>CÔNG TÁC</h2>
    <hr />

    <p>---</p>

    <hr />
    <h2>CÔNG TRÌNH NGHIÊN CỨU TIÊU BIỂU</h2>
    <hr />

    <ol>
      <li>Xây dựng mô hình sàng lọc, chẩn đoán sớm và can thiệp cho trẻ em bị rối loạn phổ tự kỷ trên địa bàn thành phố Cần Thơ - Đề tài cấp thành phố</li>
      <li>Sàng lọc, chẩn đoán và can thiệp sớm cho trẻ từ 18 đến 36 tháng bị rối loạn phổ tự kỷ tại tỉnh Cà Mau - Đề tài cấp tỉnh</li>
      <li>Nghiên cứu đặc điểm trẻ tự kỷ ở long an và đề ra giải pháp can thiệp - Đề tài cấp tỉnh</li>
      <li>Đặc điểm lâm sàng và các yếu tố liên quan trẻ rối loạn tự kỷ tại Bệnh viện Tâm Thần Cần Thơ</li>
      <li>Nghiên cứu hiệu quả điều trị trầm cảm chủ yếu bằng venlafaxine tại bệnh viện tâm thần thành phố Hồ Chí Minh, Việt Nam</li>
      <li>Đánh giá kết quả điều trị ngoại trú bệnh trầm cảm tại khoa khám Bệnh viện Tâm Thần thành phố Cần Thơ 2015</li>
      <li>
        Global Mental Health: Child and Adolescent Psychiatry in the Mekong Delta of Vietnam, 2018, American Academy of Child and Adolescent Psychoatry News
      </li>
    </ol>

    <hr />
    <h2>CÁC HOẠT ĐỘNG TIÊU BIỂU</h2>
    <hr />

    <b-row class="my-4" v-for="rowIndex in Math.round(activities.length / 3)" :key="rowIndex">
      <b-col v-for="colIndex in 3" :key="colIndex" lg="4">
        <b-card v-if="activity(rowIndex, colIndex)" class="h-100">
          <template #header>
            <img :src="activity(rowIndex, colIndex).embed" v-if="activity(rowIndex, colIndex).image" width="100%" />
            <b-embed :src="activity(rowIndex, colIndex).embed" v-else></b-embed>
          </template>

          <template #default>
            <b-card-text>
              {{ activity(rowIndex, colIndex).text }}
            </b-card-text>
          </template>

          <template #footer>
            <div class="text-right">
              <nuxt-link :to="activity(rowIndex, colIndex).src" class="btn btn-sm btn-primary">
                Xem chi tiết
              </nuxt-link>
            </div>
          </template>
        </b-card>
      </b-col>
    </b-row>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';
import { TableField } from '~/types/bootstrap-vue';

interface Certificate {
  time: string;
  major: string;
  studyPlace: string;
}

interface Activity {
  text: string;
  image?: boolean;
  embed: string;
  src: string;
}

@Component({
  name: 'page-gioi-thieu-bac-si-tam-ly-sktt',
  head: { title: 'Giới thiệu - Bác sĩ tâm lý - SKTT' }
})
export default class extends Vue {
  private fields: TableField[] = [
    {
      key: 'time',
      label: 'Thời gian',
      class: 'align-middle'
    },
    {
      key: 'major',
      label: 'Chuyên ngành',
      class: 'align-middle'
    },
    {
      key: 'studyPlace',
      label: 'Nơi học',
      class: 'align-middle'
    }
  ];

  private items: Certificate[] = [
    { time: '2008 - 2014', major: 'Bác sĩ đa khoa', studyPlace: 'Đại học Y Dược Cần Thơ' },
    { time: '2016 - 2018', major: 'Thạc sĩ y học', studyPlace: 'Đại học Y Dược Hồ Chí Minh' },
    { time: '2017', major: 'Chẩn đoán, điều trị các rối loạn phát triển và hành vi ở trẻ em', studyPlace: 'Khoa tâm lý - Bệnh viện Nhi Đồng 1' },
    { time: '2018', major: 'Can thiệp âm ngữ trị liệu cho trẻ tự kỷ', studyPlace: 'Đại học Y Phạm Ngọc Thạch' },
    { time: '2018', major: 'Rối loạn phổ tự kỷ', studyPlace: 'BV Nhi Đồng Cần Thơ – Đoàn MEET - Đại Học Y Washington, Mỹ' },
    { time: '2018', major: 'Tâm lý trị liệu – liệu pháp nhận thức và hành vi (CBT) ', studyPlace: 'Đại học Khoa học xã hội nhân văn ' },
    {
      time: '2018 - nay',
      major: 'Trị liệu tâm lý hệ thống và gia đình',
      studyPlace: 'Đại học Y Phạm Ngọc Thạch - Đại học Catholique de Louvain – Vương Quốc Bỉ.'
    },
    { time: '2020', major: 'Các rối loạn tâm lý người lớn và trẻ em', studyPlace: 'ĐH Y Dược Cần Thơ - Đại học Deakin, Úc' },
    { time: '2020 - nay', major: 'Tiến sĩ Y Kkhoa', studyPlace: 'Đại học Y Hà Nội' }
  ];

  private activities: Activity[] = [
    {
      text: 'Sức khoẻ của: "Tìm hiểu hội chứng tự kỷ ở trẻ em" - Đài Truyền hình Vĩnh Long THVL1',
      embed: 'https://www.youtube-nocookie.com/embed/Am2mfi_nzr8',
      src: 'https://youtu.be/Am2mfi_nzr8'
    },
    {
      text: 'Sức khoẻ của bạn – "Tìm hiểu hội chứng ttăng động ở trẻ"  Đài Truyền hình Vĩnh Long THVL1',
      embed: 'https://www.youtube-nocookie.com/embed/cSYiSS1QX5M',
      src: 'https://youtu.be/cSYiSS1QX5M'
    },
    {
      text: 'Một phút cảnh báo – “Cảnh báo trẻ chậm nói” – Truyền hình quốc gia VTV9 ',
      embed:
        'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Ftintucvtv9%2Fvideos%2F377641520091631%2F&show_text=false&width=560&t=0',
      src: 'https://fb.watch/5OjWlx25Du/'
    },
    {
      text: 'Livestream – "Trầm cảm, lo âu có làm giảm nguy cơ có làm giảm nguy cơ hiếm muộn"',
      embed:
        'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fivfphuongchau%2Fvideos%2F719034328714406%2F&show_text=false&width=560&t=0',
      src: 'https://fb.watch/5OjUDMfy7H/'
    },
    {
      text: 'Hiểu đúng về tự kỷ ở trẻ em – Báo Cần Thơ',
      image: true,
      embed: '/images/pages/gioi-thieu/1.jpg',
      src: 'https://baocantho.com.vn/hieu-dung-ve-tu-ky-o-tre-em--a115061.html?fbclid=IwAR2ER0bzhgIdf2dMidPrGwYTeFuZkqx5SHPKbvOGHnXJdzSrIcr_zEK7xTc'
    },
    {
      text: 'Vai trò của tri thức với sức khoẻ và tinh thần của bà mẹ và trẻ em thời kỳ sau Covid-19 – Câu lạc bộ tri thức tỉnh Vĩnh Long',
      image: true,
      embed: '/images/pages/gioi-thieu/2.jpg',
      src:
        'http://www.baovinhlong.com.vn/xa-hoi/y-te/202010/vai-tro-tri-thuc-voi-cham-soc-suc-khoe-va-tinh-than-ba-me-va-tre-em-thoi-ky-sau-covid-19-3027248/?fbclid=IwAR0EFoDv_SPlsK4wxIi3ek9vZKJIyJqi64WiDhBWbvy0CQ4N_08LV8kFQvA#.X66-N9MzY1KxTc'
    }
  ];

  private activity(rowIndex: number, colIndex: number) {
    return this.activities[3 * rowIndex + colIndex - 4];
  }
}
</script>

<style lang="scss">
// .page-gioi-thieu-bac-si-tam-ly-sktt {

// }
</style>
