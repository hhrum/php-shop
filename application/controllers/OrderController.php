<?php   

namespace application\controllers;

use application\core\Controller;
use application\models\UserModel;
use application\models\ProductModel;
use application\lib\Responser;

class OrderController extends Controller {

    public function addAction() {
        global $response_errors;
        if (!isset($_GET) && empty($_GET['product_id'])) Responser::ajaxErrorResponse($response_errors['product_id_empty']);
        $product_id = $_GET['product_id'];

        /** @var UserModel $user_model */
        $user_model = $this->loadModel("user");
        $user = $user_model->checkAuth();

        /** @var ProductModel $product_model */
        $product_model = $this->loadModel("product");
        $product = $product_model->getProductById($product_id);

        if (!$product) Responser::ajaxErrorResponse($response_errors['product_not_found']);

        if ($user) {

        } else {
            $_SESSION['order'][] = $product_id;
        }

        Responser::ajaxSuccessResponse();
    }

}