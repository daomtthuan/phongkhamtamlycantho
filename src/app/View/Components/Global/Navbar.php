<?php

namespace App\View\Components\Global;

use Illuminate\View\Component;

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
  public $items;

  /**
   * Create a new component instance.
   *
   * @param string[] $activeLabels The active items list
   * @return void
   */
  public function __construct($activeLabels) {
    $this->activeLabels = $activeLabels;
    $this->items = [
      ['label' => 'Trang chủ', 'url' => '/'],
      [
        'label' => 'Giới thiệu',
        'items' => [
          ['label' => 'Bác Sĩ Tâm Lý - SKTT', 'url' => '/'],
          ['label' => 'Phòng Khám Tâm Lý', 'url' => '/'],
          ['label' => 'Trung tâm VTCare', 'url' => '/'],
        ]
      ],
      [
        'label' => 'Dịch vụ',
        'items' => [
          ['label' => 'Thăm khám và tư vấn tâm lý', 'url' => '/'],
          ['label' => 'Hướng dẫn phụ huynh can thiệp cho trẻ', 'url' => '/'],
          ['label' => 'Can thiệp cho trẻ, giúp trẻ phát triển / hoà nhập', 'url' => '/'],
        ]
      ],
      [
        'label' => 'Trắc nghiệm tâm lý',
        'items' => [
          ['label' => 'Nguy cơ tự kỷ - chậm nói', 'url' => '/'],
          ['label' => 'Tăng động giảm chú ý', 'url' => '/'],
          ['label' => 'Trầm Cảm - Hưng Cảm', 'url' => '/'],
          ['label' => 'Lo âu – Mất ngủ', 'url' => '/'],
          ['label' => 'Nghiện Game / Rượu / Chất', 'url' => '/'],
          ['label' => 'Sa sút trí tuệ - tập trung', 'url' => '/'],
          ['label' => 'Đánh giá trẻ tại trung tâm VTCare', 'url' => '/'],
        ]
      ],
      [
        'label' => 'Gốc kiến thức',
        'items' => [
          ['label' => 'Chậm nói', 'url' => '/'],
          ['label' => 'Tự kỷ', 'url' => '/'],
          ['label' => 'Tăng động', 'url' => '/'],
          ['label' => 'Mất ngủ', 'url' => '/'],
          ['label' => 'Lo âu', 'url' => '/'],
          ['label' => 'Trầm cảm', 'url' => '/'],
          ['label' => 'Chuyên ngành', 'url' => '/'],
        ]
      ],
      [
        'label' => 'Tin tức / hoạt động',
        'items' => [
          ['label' => 'Tuyển dụng', 'url' => '/'],
          ['label' => 'Hình ảnh / hoạt động', 'url' => '/'],
          ['label' => 'Cập nhật y học', 'url' => '/'],
        ]
      ]
    ];
  }


  /**
   * Get menu navbar
   *
   * @return string
   */
  public function menu() {
    $html = '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
    foreach ($this->items as $item) {
      if (array_key_exists('items', $item)) {
        $html .=
          '<li class="nav-item dropdown">' .
          '<a class="' . (in_array($item['label'], $this->activeLabels) ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle') . '" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">' .
          $item['label'] .
          '</a>' .
          '<ul class="dropdown-menu">';

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
          '<a class="' . (in_array($item['label'], $this->activeLabels) ? 'nav-link active' : 'nav-link') . '" href="' . $item['url'] . '">' .
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
