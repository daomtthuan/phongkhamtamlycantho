<template>
  <div class="page-gioi-thieu-bac-si-tam-ly-sktt">
    <shared-navbar></shared-navbar>
    <shared-carousel-cover></shared-carousel-cover>
    <b-container>
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

      <b-card-group class="mt-3" deck v-for="index in fields.length / 3" :key="index">
        <b-card>
          <b-embed src=""></b-embed>
          <b-card-text></b-card-text>
          <template #footer>
            <b-button href="https://www.facebook.com/ivfphuongchau/videos/719034328714406/?vh=e&d=n" variant="primary" size="sm">Xem</b-button>
          </template>
        </b-card>
      </b-card-group>
    </b-container>
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
  embed: string;
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
      embed: 'https://www.youtube.com/embed/Am2mfi_nzr8'
    },
    {
      text: 'Hiểu đúng về tự kỷ ở trẻ em – Báo Cần Thơ',
      embed: 'https://baocantho.com.vn/image/fckeditor/upload/2019/20191111/images/tre.jpg'
    },
    {
      text: 'Một phút cảnh báo – "Cảnh báo trẻ chậm nói" – Truyền hình quốc gia VTV9',
      embed:
        'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Ftintucvtv9%2Fvideos%2F377641520091631%2F&show_text=false&width=560&t=0'
    },
    {
      text: 'Livestream – "Trầm cảm, lo âu có làm giảm nguy cơ có làm giảm nguy cơ hiếm muộn"',
      embed: 'https://www.facebook.com/ivfphuongchau/videos/719034328714406/?vh=e&d=n'
    },
    {
      text: 'Sức khoẻ của bạn– "Tìm hiểu hội chứng tăng động ở trẻ" Đài Truyền hình Vĩnh Long THVL1',
      embed: 'https://youtu.be/cSYiSS1QX5M'
    },
    {
      text: 'Vai trò của tri thức với sức khoẻ và tinh thần của bà mẹ và trẻ em thời kỳ sau Covid-19 – Câu lạc bộ tri thức tỉnh Vĩnh Long',
      embed:
        'http://www.baovinhlong.com.vn/xa-hoi/y-te/202010/vai-tro-tri-thuc-voi-cham-soc-suc-khoe-va-tinh-than-ba-me-va-tre-em-thoi-ky-sau-covid-19-3027248/?fbclid=IwAR0EFoDv_SPlsK4wxIi3ek9vZKJIyJqi64WiDhBWbvy0CQ4N_08LV8kFQvA#.X66-N9MzY1K'
    }
  ];
}
</script>

<style lang="scss">
// .page-gioi-thieu-bac-si-tam-ly-sktt {
// }
</style>
