<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function add()
    {
        return view('addproduct');
    }

    public function save()
    {
        $model = new ProductModel();
        $data = [
            'productid' => $this->request->getPost("productid"),
            'product_name' => $this->request->getPost("productname")
        ];
        $model->save($data);
        return redirect()->to("/product");
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to("/product");
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['products'] = $model->find($id);
        return view("editproduct",$data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $data = [
            'product_name' => $this->request->getPost("productname"),
        ];
        $model->update($id,$data);
        return redirect()->to("/product");
    }
}