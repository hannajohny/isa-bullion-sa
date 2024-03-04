<ul class="nav nav-underline bg-primary" id="myTab" role="tablist">
    <?php
        $i = 0;
        $categories = get_terms('faq-category');
        $selectedCategory = $categories[0]->slug;
        foreach( $categories as $category ):
    ?>
    <li class="nav-item">
        <a class="bp-tab-nav-link <?php if ($i === 0) echo 'active'; ?> cursor-pointer faq-category-button"
            id="faq-tab-<?php echo $category->slug; ?>" data-bs-toggle="tab" role="tab"
            data-slug="<?php echo $category->slug; ?>">
            <?php echo $category->name;?>
        </a>
    </li>
    <?php
        $i++;
    endforeach; 
    ?>
</ul>