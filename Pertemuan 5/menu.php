<?php
$menu = [
  ["nama" => "Beranda"],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Wisata",
        "subMenu" => [
          ["nama" => "Pantai"],
          ["nama" => "Gunung"],
        ]
      ],
      ["nama" => "Kuliner"],
      ["nama" => "Hiburan"],
    ]
  ],
  ["nama" => "Tentang"],
  ["nama" => "Kontak"],
];

function tampilkanMenuBertingkat(array $menu)
{
  echo "<ul>";
  foreach ($menu as $item) {
    echo "<li>{$item['nama']}</li>";
    
    // cara efisien
    if (isset($item['subMenu']) && is_array($item['subMenu'])) {
      tampilkanMenuBertingkat($item['subMenu']);
    }

    // if ($item['nama'] == "Berita") {
    //   foreach ($item['subMenu'] as $key => $item) {
    //     echo "<ul>";
    //     echo "<li>{$item['nama']}</li>";
    //     if ($item['nama'] == "Wisata") {
    //       foreach ($item['subMenu'] as $key => $item) {
    //         echo "<ul>";
    //         echo "<li>{$item['nama']}</li>";
    //         echo "</ul>";
    //       }
    //     }
    //     echo "</ul>";
    //   }
    // }
  }
  echo "</ul>";
}

tampilkanMenuBertingkat($menu);
