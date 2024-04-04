

$post->create([
    'title' => 'Judul Ke Enam',
    'category_id' => 1,
    'author' => 'Pak Galih',
    'slug' => 'Judul-Ke Enam', // Jangan lupa menambahkan slug jika diperlukan
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ex, doloribus veritatis vero inventore velit excepturi deserunt beatae temporibus aut quos vel praesentium officia culpa necessitatibus voluptatem minus quaerat perspiciatis molestias, sit qui pariatur blanditiis. Vel soluta excepturi dolorum maxime sit natus, magnam',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ex, doloribus veritatis vero inventore velit excepturi deserunt beatae temporibus aut quos vel praesentium officia culpa necessitatibus voluptatem minus quaerat perspiciatis molestias, sit qui pariatur blanditiis. Vel soluta excepturi dolorum maxime sit natus, magnam </p><p> voluptatem ipsum, ullam beatae sed sapiente praesentium. Voluptas tempore aut accusantium delectus, corrupti nam dicta earum hic voluptatem atque fuga numquam est exercitationem totam accusamus excepturi a velit illo ut nisi veniam quos consequatur necessitatibus? Fugit dolores cumque reiciendis sunt ipsa, impedit corporis et ratione id itaque, necessitatibus ducimus reprehenderit earum repudiandae quo! Magni sapiente quos rerum.</p>'
]);


$category->create([
    'name' => 'Manajemen',
    'slug' => 'manajemen'
])