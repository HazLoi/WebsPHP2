<?php
class gioHang
{

    public function addProducts($id, $quantity, $mausac, $size)
    {

        $product = new cua_hang();
        $result = $product->getProductId($id);
        $anhsp = $result['anhsp'];
        $tensp = $result['tensp'];
        $giasp = $result['dongia'];

        if ($result['giamgia'] > 0) {
            $giasp = $result['giamgia'];
        }

        $total = $giasp * $quantity;
        $kiemtra = 0;

        if (isset($_SESSION['cartProduct']) && count(['cartProduct']) > 0) {
            foreach ($_SESSION['cartProduct'] as $key => $item) {
                if ($id == $item['id'] && $mausac == $item['mausac'] && $size == $item['size']) {
                    $kiemtra = 1;
                    $_SESSION['cartProduct'][$key]['quantity'] += $quantity;
                    $_SESSION['cartProduct'][$key]['total'] = $_SESSION['cartProduct'][$key]['giasp'] * $_SESSION['cartProduct'][$key]['quantity'];
                }
            }
        }


        if ($kiemtra == 0) {
            $item = array(
                'id' => $id,
                'anhsp' => $anhsp,
                'tensp' => $tensp,
                'giasp' => $giasp,
                'total' => $total,
                'quantity' => $quantity,
                'mausac' => $mausac,
                'size' => $size,

            );
            $_SESSION['cartProduct'][] = $item;
        }
    }

    public function totalPrice()
    {
        $totalPrice = 0;
        if (isset($_SESSION['cartProduct'])) {
            foreach ($_SESSION['cartProduct'] as $item) {
                $totalPrice += $item['total'];
            }
        }
        return $totalPrice;
    }

    public function editProduct($quantityEdit, $vitri)
    {
        if ($quantityEdit <= 0) {
            $this->deleteProduct($vitri);
        } else {
            $_SESSION['cartProduct'][$vitri]['quantity'] = $quantityEdit;
            $newTotal = $_SESSION['cartProduct'][$vitri]['quantity'] * $_SESSION['cartProduct'][$vitri]['giasp'];
            $_SESSION['cartProduct'][$vitri]['total'] = $newTotal;
        }
    }

    public function deleteProduct($index)
    {
        array_splice($_SESSION['cartProduct'], $index, 1);
    }

    public function deleteAllCartProduct()
    {
        array_splice($_SESSION['cartProduct'], 0, count($_SESSION['cartProduct']));
    }
}
