<?php
namespace App\Controllers;

use App\Models\ProductManageModel;

class ProductEnquiryController extends BaseController{

    public $productModel;
    public $emailService;

    function __construct(){
        $this->productModel = new ProductManageModel();
        $this->emailService = \Config\Services::email();
    }

    public function save()
    {
        $valid = ['status' => 400, 'messages' => []];
        if(!$this->request->isAJAX()){
            $valid['msg'] = 'Invalid request';
            return $this->response->setJSON($valid);
        }

        // validate
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ];
        $messages = [
            'name' => 'Name is required',
            'email' => 'Email is required',
            'phone' => 'Phone is required',
            'message' => 'Message is required',
        ];
        if(!$this->validate($rules, $messages)){
            $valid['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($valid);
        }
        
        $data = [
            'product_id' => $this->request->getPost('productId'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message'),
        ];
        $product = $this->productModel->where('id', $this->request->getPost('productId'))->first();
        if(empty($product)){
            return $this->response->setJSON([
                'status' => 400,
                'msg' => 'Product not found'
            ]);
        }
        
        $mailTo = "onlinelevora@gmail.com";

        $this->emailService->setTo($mailTo);
        $this->emailService->setSubject('Product Enquiry');
        $this->emailService->setMessage(view('frontend/email/product_enquiry', compact('product', 'data')));  
        $this->emailService->send();

        return $this->response->setJSON([
            'status' => 200,
            'msg' => 'Enquiry sent successfully'
        ]);


    }
}
