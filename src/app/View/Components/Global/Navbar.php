<?php

namespace App\View\Components\Global;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Navbar extends Component {
  /**
   * The active items list
   *
   * @var string[]
   */
  public $activeLabels;

  /**
   * The items list
   *
   * @var array[]
   */
  private $items;

  /**
   * Create a new component instance.
   *
   * @param string[] $activeLabels The active items list
   * @return void
   */
  public function __construct($activeLabels) {
    $this->activeLabels = $activeLabels;
    $this->items = [
      $this->item('Trang chủ', false),
      $this->groupItems('Giới thiệu', [
        'Bác sĩ tâm lý - SKTT',
        'Phòng khám tâm lý',
        'Trung tâm VTCare'
      ]),
      $this->groupItems('Dịch vụ', [
        'Thăm khám và tư vấn tâm lý',
        'Hướng dẫn phụ huynh can thiệp cho trẻ',
        'Can thiệp cho trẻ, giúp trẻ phát triển / hoà nhập',
      ]),
      $this->groupItems('Trắc nghiệm tâm lý', [
        'Nguy cơ tự kỷ - chậm nói',
        'Tăng động giảm chú ý',
        'Trầm Cảm - Hưng Cảm',
        'Lo âu – Mất ngủ',
        'Nghiện Game / Rượu / Chất',
        'Sa sút trí tuệ - tập trung',
        'Đánh giá trẻ tại trung tâm VTCare',
      ]),
      $this->groupItems('Góc kiến thức', [
        'Chậm nói',
        'Tự kỷ',
        'Tăng động',
        'Mất ngủ',
        'Lo âu',
        'Trầm cảm',
        'Chuyên ngành',
      ]),
      $this->groupItems('Tin tức / hoạt động', [
        'Tuyển dụng',
        'Hình ảnh / hoạt động',
        'Cập nhật y học',
      ]),
    ];
  }

  /**
   * Create item
   *
   * @param string $label Label item
   * @param bool $url Is generate url from label
   * @return array
   */
  private function item($label, $url = true) {
    return [
      'label' => $label,
      'url' => '/' . ($url ? Str::slug($label) : '')
    ];
  }

  /**
   * Create group items
   *
   * @param string $label Label group
   * @param string[] $items Label items
   * @return array
   */
  private function groupItems($label, $items) {
    $groupItems = [
      'label' => $label,
      'items' => [],
    ];

    foreach ($items as $item) {
      $groupItems['items'][] = [
        'label' => $item,
        'url' => '/' . Str::slug($label) . '/' . Str::slug($item),
      ];
    }

    return $groupItems;
  }

  /**
   * Get menu navbar
   *
   * @return string
   */
  public function menu() {
    $html = '<ul class="navbar-nav mb-2 mb-lg-0">';
    foreach ($this->items as $item) {
      if (array_key_exists('items', $item)) {
        $html .=
          '<li class="nav-item dropdown">' .
          '<a class="' . (in_array($item['label'], $this->activeLabels) ? 'nav-link active fw-bold border-bottom border-dark' : 'nav-link') . '" role="button" data-bs-toggle="dropdown" aria-expanded="false">' .
          $item['label'] .
          '</a>' .
          '<ul class="dropdown-menu dropdown-menu-end">';

        foreach ($item['items'] as $childItem) {
          $html .=
            '<li>' .
            '<a class="' . (in_array($childItem['label'], $this->activeLabels) ? 'dropdown-item active' : 'dropdown-item') . '" href="' . $childItem['url'] . '">' .
            $childItem['label'] .
            '</a>' .
            '</li>';
        }

        $html .=
          '</ul>' .
          '</li>';
      } else {
        $html .=
          '<li class="nav-item">' .
          '<a class="' . (in_array($item['label'], $this->activeLabels) ? 'nav-link active fw-bold border-bottom border-dark' : 'nav-link') . '" href="' . $item['url'] . '">' .
          $item['label'] .
          '</a>' .
          '</li>';
      }
    }
    $html .= '</ul>';

    return $html;
  }

  /**
   * Get active class for item
   *
   * @param string $label Label item
   * @return string
   */
  public function active($label) {
    return in_array($label, $this->activeLabels) ? 'active' : '';
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.global.navbar');
  }
}
