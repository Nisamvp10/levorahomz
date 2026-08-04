<?php
use App\Models\CategoryModel;
use App\Services\ShippingCharge;
use App\Models\ExpertiseModel;

if (!function_exists('updateImage')) {
    function updateImage($url)
    {
       $url =  str_replace(base_url(), '', $url);
       
        if (file_exists($url)) {
            unlink($url);
        }
    }
}

function validImg($img)
{
    if (empty($img)) {
        return base_url('uploads/default.png');
    } 

    if (filter_var($img, FILTER_VALIDATE_URL)) {
        $path = parse_url($img, PHP_URL_PATH);

        // Remove the base URL path
        $basePath = parse_url(base_url(), PHP_URL_PATH);
        $relativePath = ltrim(str_replace($basePath, '', $path), '/');
    } else {
        $relativePath = ltrim($img, '/');
    }

    if (is_file(FCPATH . $relativePath)) {
        return base_url($relativePath);
    }

    return base_url('uploads/default.png');
}
if(!function_exists('slugify')) {
        function slugify($string) {
            
        $slug = strtolower($string);
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
        $slug = preg_replace('/[\s-]+/', '-', $slug);
        $slug = trim($slug, '-');

        return $slug;
    }
}

if(!function_exists('deleteImg')) {
    function deleteImg($img) {
        
        if(!empty($img))
        {
            $oldPath = FCPATH . $img;
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }
    }
}

if(!function_exists('rgbToHex')) {
    function rgbToHex($rgb) {
    if (preg_match('/rgb\s*\(\s*(\d+),\s*(\d+),\s*(\d+)\s*\)/', $rgb, $matches)) {
            return sprintf("#%02x%02x%02x", $matches[1], $matches[2], $matches[3]);
        }
        return '#000000';
    }
}

if(!function_exists('navigationMenu')) {
    function navigationMenu() {
        $db = \Config\Database::connect();
        $builder = $db->table('categories as c')
            ->select('c.category,s.slug,s.title')
            ->join('services as s','c.id = s.category_id','left')
            ->where('c.is_active',1)->get();
            $result = $builder->getResultArray();
            $menu = [];
            foreach($result as $row) {
                $categoryName = $row['category'];
                if(!isset($menu[$categoryName])) {
                    $menu[$categoryName] = [
                        'category' => $categoryName,
                        'submenu' => []
                    ];
                }
                if(!empty($row['slug']) && !empty($row['title'])) {
                    $menu[$categoryName]['submenu'] [] = [
                        'title' => $row['title'],
                        'slug' => $row['slug']
                    ];
                }

            }
           
            return $menu;

    }
}


if (!function_exists('navigationMenuhm')) {

    function navigationMenuhm()
    {
        $db = \Config\Database::connect();

        $categories = $db->table('categories')
            ->select('id, category, slug, parent_id, is_active')
            ->where('is_active', 1)
            ->orderBy('category', 'ASC')
            ->get()
            ->getResultArray();

        return buildCategoryTree($categories);
    }
}


if (!function_exists('buildCategoryTree')) {

    function buildCategoryTree($categories, $parentId = null)
    {
        $tree = [];

        foreach ($categories as $category) {

            // Parent category
            if ($category['parent_id'] == $parentId) {

                $children = buildCategoryTree(
                    $categories,
                    $category['id']
                );

                $tree[] = [
                    'id'       => $category['id'],
                    'category' => $category['category'],
                    'slug'     => $category['slug'],
                    'parent_id'=> $category['parent_id'],
                    'submenu'  => $children
                ];
            }
        }

        return $tree;
    }
}



if (!function_exists('renderCategoryMenu')) {

    function renderCategoryMenu($menus, $level = 1)
    {
        if (empty($menus)) {
            return;
        }

        /*
         * First level uses your existing class.
         * Deeper levels can use same structure.
         */

        echo '<ul class="sub-menu_list">';

        foreach ($menus as $menu) {

            $hasSubmenu = !empty($menu['submenu']);

            ?>

            <li class="<?= $hasSubmenu ? 'has-menu-lv2' : '' ?>">

                <a href="<?= base_url('product/' . $menu['slug']) ?>"
                   class="sub-menu_link has-text">

                    <span class="cus-text">
                        <?= esc($menu['category']) ?>
                    </span>

                    <?php if ($hasSubmenu): ?>

                        <i class="icon icon-CaretRightThin"></i>

                    <?php endif; ?>

                </a>


                <?php if ($hasSubmenu): ?>

                    <div class="sub-menu-lv2">

                        <?php
                        renderCategoryMenu(
                            $menu['submenu'],
                            $level + 1
                        );
                        ?>

                    </div>

                <?php endif; ?>

            </li>

            <?php
        }

        echo '</ul>';
    }
}

if(!function_exists('services')) {
    function services() {
        $categoryModel = new CategoryModel();
        $services = $categoryModel->where(['is_active'=>1,'parent_id' =>0])->findAll();
        return $services;
    }
}
if(!function_exists('shippingCharge')) {
    function shippingCharge($cartTotal, $state) {
        $shippingCharge = new ShippingCharge();
        return $shippingCharge->calculate($cartTotal, $state);
    }
}

if(!function_exists('tagline'))
{
    function tagline()
    {
        $expertiseModel = new ExpertiseModel();
        $tagline = $expertiseModel->where(['status' => 1])->orderBy('title','ASC')->get()->getResult();
        return $tagline;
    }
}

if(!function_exists('categories'))
{
    function categories($parent_id =0)
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->where(['is_active' => 1, 'parent_id' => NULL])->orderBy('id', 'ASC')->findAll();
        return $categories;
    }
}