<?php   

namespace application\controllers;

use application\core\Controller;
use application\models\ProductModel;
use application\models\OrderModel;
use application\lib\Responser;

class OrderController extends Controller {

    public function indexAction() {
        /** @var OrderModel $order_model */
        $order_model = $this->loadModel("order");
        $order = $order_model->getOrder($this->user);

        /** @var ProductModel $product_model */
        $product_model = $this->loadModel("product");
        $order = $product_model->getProductsByListId($order);

        $this->initCategories();
        $this->view->assignByRef("order", $order);
        $this->view->render("Корзина");
    }

    public function addAction() {
        global $response_errors;
        if (!isset($_GET) && empty($_GET['product_id'])) Responser::ajaxErrorResponse($response_errors['product_id_empty']);
        $product_id = $_GET['product_id'];

        /** @var ProductModel $product_model */
        $product_model = $this->loadModel("product");
        $product = $product_model->getProductById($product_id);

        if (!$product) Responser::ajaxErrorResponse($response_errors['product_not_found']);

        /** @var OrderModel $order_model */
        $order_model = $this->loadModel("order");
        $order_model->addProduct($this->user, $product);

        Responser::ajaxSuccessResponse();
    }

    public function removeAction()
    {
        global $response_errors;
        if (!isset($_GET) && empty($_GET['product_key'])) Responser::ajaxErrorResponse($response_errors['product_key_empty']);
        $product_key = $_GET['product_key'];
        
        /** @var OrderModel $order_model */
        $order_model = $this->loadModel("order");
        $order_model->removeProduct($this->user, $product_key);
    
        Responser::ajaxSuccessResponse();
    }

}