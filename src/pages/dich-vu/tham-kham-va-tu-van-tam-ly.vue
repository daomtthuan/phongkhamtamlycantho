<template>
  <div class="page-dich-vu-tham-kham-va-tu-van-tam-ly">
        <b-container>
            <shared-navbar></shared-navbar>
            <shared-carousel-cover></shared-carousel-cover>
            <h1 class="text-left text-primary" >Đánh giá tâm lý người lớn và trẻ em</h1>
            <hr>
            <h5>Các rối loạn mất ngủ, lo âu, trầm cảm, trẻ chậm nói, tăng động, tự kỷ …</h5>
            <dl>
                <dd>
                    Nhằm đánh giá và tư vấn, can thiệp cho các trường hợp rối loạn về tâm lý 
                    và sức khỏe tâm thần như mất ngủ, lo âu, trầm cảm ở người lớn và các rối loạn 
                    tăng động, chậm nói, tự kỷ ở trẻ em. Chúng tôi cung cấp dịch vụ đánh giá tư vấn tâm lý, hành vi.
                </dd>
                <dd>
                    Để đặt lịch đăng ký đánh giá, tư vấn với bác sĩ chuyên khoa tâm lý, sức khỏe tâm thần. 
                    Bạn có thể liên hệ với chúng tôi qua số điện thoại 0909904049 (hoặc nhắn tin/zalo qua số 0909904049), 
                    hoặc điền thông tin vào các ô dưới đây, Trung tâm VT Care sẽ sớm liên hệ với bạn.
                </dd>
            </dl>
            <div>
                <b-embed type="iframe" 
                src="https://docs.google.com/forms/d/e/1FAIpQLSf9sWrJhNOfyj-dXUHd5E8tTny0DrvzscmliGJ7RLGL6YUq7g/viewform?" 
                style="height:520px">
                </b-embed>
            </div>
        </b-container>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';

@Component({
  name: 'page-dich-vu-tham-kham-va-tu-van-tam-ly',
  head: { title: 'Dịch vụ - Thăm khám và tư vấn tâm lý' }
})
export default class extends Vue {}
</script>

<style lang="scss">
// .page-dich-vu-tham-kham-va-tu-van-tam-ly {
// }
</style>