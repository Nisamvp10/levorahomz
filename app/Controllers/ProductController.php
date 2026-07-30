<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductManageModel;
use App\Models\CategoryModel;
class ProductController extends BaseController
{
    protected $productModel;
    protected $categoryModel;

    function __construct()
    {
        $this->productModel = new ProductManageModel();
        $this->categoryModel = new CategoryModel();
    }
    public function index()
    {
        return view('frontend/products/index');
    }
   public function details()
    {
        $categorySlug = $this->request->getGet('category');
        $perPage = 12;

        $category = null;

        if ($categorySlug) {
            $category = $this->categoryModel
                ->where('slug', $categorySlug)
                ->first();
        }
        if ($category) {
            $products = $this->productModel->getProducts($category['id'], $perPage);
        } else {
            $products = $this->productModel->getProducts(false, $perPage);
        }

        return view('frontend/products/index', [
            'products' => $products,
            'pager'    => $this->productModel->pager,
            'category' => $categorySlug
        ]);
    }

    public function ajaxProductList() {

        $valid['success'] = ['status' => 400,'message'=>'Invalid request'];

        $categorySlug = $this->request->getGet('category');
        $perPage = 4;

        $category = null;

        if ($categorySlug) {
            $category = $this->categoryModel->where('slug', $categorySlug)->first();
        }
        $productsList = [];
        if ($category) {
            $products = $this->productModel->getProducts($category['id'], $perPage);
            
        } else {
            $products = $this->productModel->getProducts(false, $perPage);
        }

        if(!empty($products)) {
            foreach ($products as &$product) {

                $price = calculatePrice(
                    $product['price'],
                    $product['compare_price'],
                    $product['price_offer_type']
                );

                $product['offer_price']  = money_format_custom($price['offer_price']);
                $product['actual_price'] = money_format_custom($price['actual_price']);
                $product['discount']     = $price['discount'];
                $product['product_image'] = validImg($product['product_image']);
            }
            
        }
        
        if($products) {
            $valid['status'] = 200;
            $valid['message'] = 'Data fetch successfully';
            $valid['products'] = $products;
            $valid['pagination'] = $this->productModel->pager->links('default', 'custom_pager');

        } else {
            $valid['status'] = 400;
            $valid['message'] = 'No data found';
            $valid['products'] = [];
            $valid['pagination'] = '';
        }

        echo json_encode($valid);
    }

    public function singleDetails($slug) {
        $result = $this->productModel->productSingle($slug);
        $product = [];
        if($result) {
            foreach($result as $row) {
                $productId = $row->id;
                if(!isset($product[$productId])) {
                    $product[$productId]=[
                        'id' => $row->id,
                        'product_title' => $row->product_title,
                        'compare_price' => $row->compare_price,
                        'price_offer_type' => $row->price_offer_type,
                        'price' => $row->price,
                        'product_image' => $row->product_image,
                        'description' => $row->description,
                        'short_description' => $row->short_description,
                        'category_id' => $row->category_id,
                        'category_name' => $row->category,
                        'sku' => $row->sku,
                        'stock' => $row->current_stock,
                        'stock_status' => $row->stock_status,
                        'variantImages' => []
                    ];
                    
                }
                if($row->variantimages) {
                        $product[$productId]['variantimages'][] = [
                            'image' => $row->variantimages,
                            'id' => encryptor($row->variantimageid)
                        ];
                    }
                
            }
  
        }
        return view('frontend/products/productdetials',compact('product'));
    } 

}