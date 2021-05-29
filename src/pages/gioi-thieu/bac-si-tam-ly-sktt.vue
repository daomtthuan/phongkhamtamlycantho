<template>
    <div class="page-gioi-thieu-bac-si-tam-ly-sktt">
        <shared-navbar></shared-navbar>
        <shared-carousel-cover></shared-carousel-cover>
        <b-container>
        <h1 class="text-center">BÁC SĨ TÂM LÝ - SKTT</h1>
        <h2 class="text-muted">THÔNG TIN CÁ NHÂN</h2>
            <dl>
                Họ tên: Trần Thiện Thắng<br />
                Ngày tháng năm sinh: 09/09/1990<br />
                Email: ttthang@ctump.edu.vn<br />
                Điện thoại: 091599999x
            </dl>
       <h2 class="text-muted">ĐÀO TẠO - CHỨNG CHỈ</h2>
        <b-table head-variant="light" hover :items="Chungchi" ></b-table>
       <h2 class="text-muted">CÔNG TÁC</h2>
       <h2 class="text-muted">CÔNG TRÌNH NGHIÊN CỨU TIÊU BIỂU</h2>
            <ol type="1">
                <li>Xây dựng mô hình sàng lọc, chẩn đoán sớm và can thiệp cho trẻ em bị rối loạn phổ tự kỷ 
                    trên địa bàn thành phố Cần Thơ - Đề tài cấp thành phố</li>
                <li>Sàng lọc, chẩn đoán và can thiệp sớm cho trẻ từ 18 đến 36 tháng bị rối loạn phổ tự kỷ 
                    tại tỉnh Cà Mau - Đề tài cấp tỉnh</li>
                <li>Nghiên cứu đặc điểm trẻ tự kỷ ở long an và đề ra giải pháp can thiệp - Đề tài cấp tỉnh </li>
                <li>Đặc điểm lâm sàng và các yếu tố liên quan trẻ rối loạn tự kỷ tại Bệnh viện Tâm Thần Cần Thơ</li>
                <li>Nghiên cứu hiệu quả điều trị trầm cảm chủ yếu bằng venlafaxine tại bệnh viện tâm thần thành phố Hồ Chí Minh, Việt Nam</li>
                <li>Đánh giá kết quả điều trị ngoại trú bệnh trầm cảm tại khoa khám Bệnh viện Tâm Thần thành phố Cần Thơ 2015</li>
                <li>Global Mental Health: Child and Adolescent Psychiatry in the Mekong Delta of Vietnam, 2018, 
                    American Academy of Child and Adolescent Psychoatry News</li>
            </ol>
       <h2 class="text-muted">CÁC HOẠT ĐỘNG TIÊU BIỂU</h2>
            <b-card-group deck>
                <b-card>
                    <b-embed aspect="16by9" src="https://youtu.be/Am2mfi_nzr8" ></b-embed>
                    <b-card-text>Sức khoẻ của: “Tìm hiểu hội chứng tự kỷ ở trẻ em” - Đài Truyền hình Vĩnh Long THVL1</b-card-text>
                    <template #footer>
                        <b-button href="https://youtu.be/Am2mfi_nzr8" variant="primary" size="sm" class="text-center">Xem</b-button>
                    </template>
                </b-card>
                <b-card>
                    <b-embed src="https://baocantho.com.vn/hieu-dung-ve-tu-ky-o-tre-em--a115061.html?fbclid=IwAR2ER0bzhgIdf2dMidPrGwYTeFuZkqx5SHPKbvOGHnXJdzSrIcr_zEK7xTc ">                    </b-embed>
                    <b-card-text>Hiểu đúng về tự kỷ ở trẻ em – Báo Cần Thơ</b-card-text>
                    <template #footer>
                        <b-button href="https://baocantho.com.vn/hieu-dung-ve-tu-ky-o-tre-em--a115061.html?fbclid=IwAR2ER0bzhgIdf2dMidPrGwYTeFuZkqx5SHPKbvOGHnXJdzSrIcr_zEK7xTc " 
                        variant="primary" size="sm" class="mr-auto">Xem</b-button>  
                    </template>     
                </b-card>
                <b-card>
                    <b-embed src="https://www.facebook.com/tintucvtv9/videos/377641520091631"></b-embed>
                    <b-card-text>Một phút cảnh báo – “Cảnh báo trẻ chậm nói” – Truyền hình quốc gia VTV9</b-card-text>
                    <template #footer>
                        <b-button href="https://www.facebook.com/tintucvtv9/videos/377641520091631" variant="primary" size="sm">Xem</b-button>
                    </template>    
                </b-card>
            </b-card-group>

            <b-card-group class="mt-3" deck>
                <b-card>
                    <b-embed src="https://www.facebook.com/ivfphuongchau/videos/719034328714406/?vh=e&d=n"></b-embed>
                    <b-card-text>Livestream – “Trầm cảm, lo âu có làm giảm nguy cơ có làm giảm nguy cơ hiếm muộn”</b-card-text>
                    <template #footer>
                        <b-button href="https://www.facebook.com/ivfphuongchau/videos/719034328714406/?vh=e&d=n" variant="primary" size="sm">Xem</b-button>
                    </template>
                </b-card>
                <b-card>
                    <b-embed src="https://youtu.be/cSYiSS1QX5M"></b-embed>
                    <b-card-text>Sức khoẻ của bạn– “Tìm hiểu hội chứng tăng động ở trẻ”  Đài Truyền hình Vĩnh Long THVL1</b-card-text>
                    <template #footer>
                        <b-button href="https://youtu.be/cSYiSS1QX5M" variant="primary" size="sm">Xem</b-button>
                    </template>
                </b-card>
                <b-card>
                    <b-embed src="http://www.baovinhlong.com.vn/xa-hoi/y-te/202010/vai-tro-tri-thuc-voi-cham-soc-suc-khoe-va-tinh-than-ba-me-va-tre-em-thoi-ky-sau-covid-19-3027248/?fbclid=IwAR0EFoDv_SPlsK4wxIi3ek9vZKJIyJqi64WiDhBWbvy0CQ4N_08LV8kFQvA#.X66-N9MzY1K">
                    </b-embed>
                    <b-card-text>Vai trò của tri thức với sức khoẻ và tinh thần của bà mẹ và trẻ em thời kỳ 
                        sau Covid-19 – Câu lạc bộ tri thức tỉnh Vĩnh Long</b-card-text>
                    <template #footer>
                        <b-button href="http://www.baovinhlong.com.vn/xa-hoi/y-te/202010/vai-tro-tri-thuc-voi-cham-soc-suc-khoe-va-tinh-than-ba-me-va-tre-em-thoi-ky-sau-covid-19-3027248/?fbclid=IwAR0EFoDv_SPlsK4wxIi3ek9vZKJIyJqi64WiDhBWbvy0CQ4N_08LV8kFQvA#.X66-N9MzY1K" 
                        variant="primary" size="sm">Xem</b-button>
                    </template>
                </b-card>
            </b-card-group>
        </b-container>
    </div>
</template>

<script lang="ts">
import { Component, Vue } from "nuxt-property-decorator";

interface chungchi {
    thời_gian: string;
    chuyên_ngành:string;
    nơi_học:string;
}

@Component({
  name: "page-gioi-thieu-bac-si-tam-ly-sktt",
  head: { title: "Giới thiệu - Bác sĩ tâm lý - SKTT" },
})


export default class extends Vue {
    private Chungchi:  chungchi[] = [
        {thời_gian: '2008 - 2014',chuyên_ngành: 'Bác sĩ đa khoa', nơi_học: 'Đại học Y Dược Cần Thơ'},
        {thời_gian:'2016 - 2018',chuyên_ngành:'Thạc sĩ y học',nơi_học:'Đại học Y Dược Hồ Chí Minh'},
        {thời_gian:'2017',chuyên_ngành:'Chẩn đoán, điều trị các rối loạn phát triển và hành vi ở trẻ em',nơi_học:'Khoa tâm lý - Bệnh viện Nhi Đồng 1'},
        {thời_gian:'2018',chuyên_ngành:'Can thiệp âm ngữ trị liệu cho trẻ tự kỷ',nơi_học:'Đại học Y Phạm Ngọc Thạch'},
        {thời_gian:'2018',chuyên_ngành:'Rối loạn phổ tự kỷ',nơi_học:'BV Nhi Đồng Cần Thơ – Đoàn MEET - Đại Học Y Washington, Mỹ'},
        {thời_gian:'2018',chuyên_ngành:'Tâm lý trị liệu – liệu pháp nhận thức và hành vi (CBT) ',nơi_học:'Đại học Khoa học xã hội nhân văn '},
        {thời_gian:'2018-nay',chuyên_ngành:'Trị liệu tâm lý hệ thống và gia đình',nơi_học:'Đại học Y Phạm Ngọc Thạch - Đại học Catholique de Louvain – Vương Quốc Bỉ.'},
        {thời_gian:'2020',chuyên_ngành:'Các rối loạn tâm lý người lớn và trẻ em',nơi_học:'ĐH Y Dược Cần Thơ - Đại học Deakin, Úc'},
        {thời_gian:'2020 – nay',chuyên_ngành:'Tiến sĩ Y Kkhoa',nơi_học:'Đại học Y Hà Nội'},
    ]
}
</script>

<style lang="scss">
// .page-gioi-thieu-bac-si-tam-ly-sktt {
// }
</style>