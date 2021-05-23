<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Create item
 *
 * @param string $label Label item
 * @return array
 */
function item($label) {
  return [
    'uri' => Str::slug($label),
  ];
}

/**
 * Create group items
 *
 * @param string $label Label group
 * @param string[] $items Label items
 * @return array
 */
function groupItems($label, $items) {
  $groupItems = [
    'prefix' => Str::slug($label),
    'uris' => [],
  ];

  foreach ($items as $item) {
    $groupItems['uris'][] = Str::slug($item);
  }

  return $groupItems;
}

$items = [
  item('Trang chủ'),
  groupItems('Giới thiệu', [
    'Bác sĩ tâm lý - SKTT',
    'Phòng khám tâm lý',
    'Trung tâm VTCare'
  ]),
  groupItems('Dịch vụ', [
    'Thăm khám và tư vấn tâm lý',
    'Hướng dẫn phụ huynh can thiệp cho trẻ',
    'Can thiệp cho trẻ, giúp trẻ phát triển / hoà nhập',
  ]),
  groupItems('Trắc nghiệm tâm lý', [
    'Nguy cơ tự kỷ - chậm nói',
    'Tăng động giảm chú ý',
    'Trầm Cảm - Hưng Cảm',
    'Lo âu – Mất ngủ',
    'Nghiện Game / Rượu / Chất',
    'Sa sút trí tuệ - tập trung',
    'Đánh giá trẻ tại trung tâm VTCare',
  ]),
  groupItems('Góc kiến thức', [
    'Chậm nói',
    'Tự kỷ',
    'Tăng động',
    'Mất ngủ',
    'Lo âu',
    'Trầm cảm',
    'Chuyên ngành',
  ]),
  groupItems('Tin tức / hoạt động', [
    'Tuyển dụng',
    'Hình ảnh / hoạt động',
    'Cập nhật y học',
  ]),
];

Route::get('', fn () => view('pages.trang-chu'));

foreach ($items as $item) {
  if (array_key_exists('prefix', $item)) {
    Route::prefix($item['prefix'])->group(function () use ($item) {
      foreach ($item['uris'] as $uri) {
        Route::get($uri, fn () => view('pages.' . $item['prefix'] . '.' . $uri));
      }
    });
  } else {
    Route::get($item['uri'], fn () => view('pages.' . $item['uri']));
  }
}
