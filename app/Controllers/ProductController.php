<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductManageModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\FeedbackModel;

class ProductController extends BaseController
{
    protected $productModel;
    protected $categoryModel;
    protected $feedbackModel;

    function __construct()
    {
        $this->productModel = new ProductManageModel();
        $this->categoryModel = new CategoryModel();
        $this->feedbackModel = new FeedbackModel();
    }
    public function index($category=false)
    {
        return view('frontend/products/index',compact('category'));
    }
   public function details()
    {
        
        $categorySlug = $this->request->getGet('perPage');
        $perPage = $this->request->getGet('perPage') ?? 12;

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

    function collectionItem($proType=false)
    {
        if($proType=='premium' || $proType=='featured' || $proType=='all'){
            return view('frontend/products/collections',compact('proType'));
        }
        return redirect()->to('/productlist');
    }

     public function collectionList() {

        $valid['success'] = ['status' => 400,'message'=>'Invalid request'];

        $productsModel = new ProductModel();

        $categorySlug = $this->request->getGet('category');
        // product find child 
        $childId = '';
        $protype =  ($this->request->getGet('protype') == 'premium' ? ['premium_product' => 1] : ['featured_product' => 1]);

        $perPage = (int) ($this->request->getGet('perPage') ?? 4);

        $page = (int) ($this->request->getGet('page') ?? 1);

        $category = null;

        if (!empty($categorySlug)) {

            $categoryData = $this->categoryModel
                ->where('slug', $categorySlug)
                ->first();
                $category = $categoryData['id'];
        }
        
        $products = [];
        $products = $this->productModel->getProducts(
                false,
                $childId,
                $protype,
                $perPage,
                $page,
                $category
        );   
        //print_r($products);   

       // echo $this->productModel->getLastQuery();
       // exit;

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

    public function ajaxProductList() {

        $valid['success'] = ['status' => 400,'message'=>'Invalid request'];

        $productsModel = new ProductModel();
        $protype = [];
        $categorySlug = $this->request->getGet('category');
        // product find child 
        $childId = $this->request->getGet('child') ?? '';

        $perPage = (int) ($this->request->getGet('perPage') ?? 4);

        $page = (int) ($this->request->getGet('page') ?? 1);

        $category = null;

        if (!empty($categorySlug)) {
            $category = $this->categoryModel->where('slug', $categorySlug)->first();
        }
        
        $products = [];

        if ($category) {

            $productRows = $productsModel
                ->select('id')
                ->where('category_id', $category['id'])
                ->get()
                ->getResultArray();

            $productIds = array_column($productRows, 'id');

            if (!empty($productIds)) {

                $products = $this->productModel->getProducts(
                    $productIds,
                    $childId,
                    $protype,
                    $perPage,
                    $page
                );
            }

        } else {

            $products = $this->productModel->getProducts(
                false,
                $childId,
                $protype,
                $perPage,
                $page
            );
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

    public function categoryItem($categorySlug = false)
    {
        if (empty($categorySlug)) {
            return redirect()->to('/');
        }
        // Get category
        $category = $this->categoryModel
            ->where('slug', $categorySlug)
            ->first();

        if (!$category) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        // Get first product under this category
         $productInfo = $this->productModel
            ->where('child_id', $category['id'])
            ->where('product_status', 1)
            ->get()
            ->getResultArray();
        if ($productInfo) {
           // return $this->singleDetails($productInfo['slug']);
           
           $child = $category['id'];
           return view('frontend/products/index',compact('child'));
        }
        
        return redirect()->to('/products');
    }

    public function singleDetails($slug) {
        $result = $this->productModel->productSingle($slug);
      
        $proFind = $this->productModel->where('slug', $slug)->first();


        $relatedProducts = [];
        $productFeedback = []; 
        if(!empty($proFind)) {
            $relatedProducts = $this->productModel->where(['product_status'=>1,'category_id'=>$proFind['category_id']])->limit(8)->findAll();
            $productFeedback = $this->feedbackModel->where('product_id', $proFind['id'])->findAll();
        }
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
        return view('frontend/products/productdetials',compact('product','productFeedback','relatedProducts'));
    }
    

    public function quickView()
    {
        $id = $this->request->getGet('id');

        $result = $this->productModel->productSingle('', $id);

        $valid = [
            'status'  => 400,
            'message' => 'Product not found',
            'product' => []
        ];

        $product = [];

        if (!empty($result)) {

            foreach ($result as $row) {

                $productId = $row->id;

                if (!isset($product[$productId])) {

                    $product[$productId] = [

                        'id'                => $row->id,
                        'slug'              => $row->slug,
                        'product_title'     => $row->product_title,
                        'compare_price'     => $row->compare_price,
                        'price_offer_type'  => $row->price_offer_type,
                        'price'             => $row->price,
                        'product_image'     => validImg($row->product_image),
                        'description'       => $row->description,
                        'short_description' => $row->short_description,
                        'category_id'       => $row->category_id,
                        'category_name'     => $row->category,
                        'sku'               => $row->sku,
                        'stock'             => $row->current_stock,
                        'stock_status'      => $row->stock_status,
                        'variantImages'     => []

                    ];

                }

                if (!empty($row->variantimages)) {

                    $product[$productId]['variantImages'][] = [

                        'id'    => encryptor($row->variantimageid),
                        'image' => validImg($row->variantimages)

                    ];

                }

            }

            $product = array_values($product);

            foreach ($product as &$item) {

                $price = calculatePrice(
                    $item['price'],
                    $item['compare_price'],
                    $item['price_offer_type']
                );

                $item['offer_price']  = money_format_custom($price['offer_price']);
                $item['actual_price'] = money_format_custom($price['actual_price']);
                $item['discount']     = $price['discount'];

                if (!empty($item['compare_price'])) {

                    if ($item['price_offer_type'] == 1) {
                        $item['discount_text'] = money_format_custom($price['discount']) . ' OFF';
                    } else {
                        $item['discount_text'] = $price['discount'] . '% OFF';
                    }

                } else {

                    $item['discount_text'] = '';

                }

            }

            $valid = [
                'status'  => 200,
                'message' => 'Product details fetched successfully',
                'product' => $product
            ];

        }

        return $this->response->setJSON($valid);
    }

}

