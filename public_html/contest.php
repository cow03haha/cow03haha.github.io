<?php
$order_total = array();
$order_total['1221000'] = 100;  
// 1221000 是訂單編號, 100 是訂單金額，以下以此類推;
$order_total['1221001'] = 200;  
$order_total['1221002'] = 300; 
$order_total['1221003'] = 200;
$order_total['1221004'] = 250;
$order_total['1221005'] = 150;
$order_total['1221006'] = 300;
$order_total['1221007'] = 250;
$order_total['1221008'] = 330;

$order_receive = array();
$order_receive['1221000'] = 100; 
// 1221000 是訂單編號, 100 是黑貓貨到付款代收金額;
$order_receive['1221001'] = 0;
$order_receive['1221002'] = 300;
$order_receive['1221003'] = 200;
$order_receive['1221004'] = 250;
$order_receive['1221005'] = 150;
$order_receive['1221006'] = 300;
$order_receive['1221008'] = 0;
$order_receive['1130199'] = 200;

foreach ($order_receive as $key => $value)
{
    if (substr($key, 0, 2) != '12')
    {
        unset($order_receive[$key]);
    }
}
print_r($order_receive);

$order_not_exist = array();  
// 這個陣列我們預計拿來裝黑貓收款列表中不存在的訂單編號
$order_zero = array();       
// 這個陣列我預計拿來裝黑貓代收款，對方不取貨不付款的單號
foreach($order_total as $order_id => $order_total) { // *
  if(isset($order_receive[$order_id])){
      // 如果這一筆訂單在黑貓的代收貨款列表中存在
      if($order_receive[$order_id] == $order_total){ 
          // $order_receive[$order_id] 可從這個陣列取出代收款金額
          // 如果這張單有收到貨款，就是對帳成功，兩邊都有相同的金額我們不需紀錄
      }else{
          // 沒收到貨款但是存在編號的訂單
          $order_zero[] = $order_id; // 把沒收錢的單號塞到陣列裡記著
      }
  }else{
      // 如果這一筆訂單不存在
      $order_not_exist[] = $order_id; // 把消失的單號塞到這個陣列裡記著
  }
  // 到這裏會跳到上面星號 * 取下一筆訂單在拿出 order_id 與 order_total 來比對
}
// 跑完這個迴圈我們把結果印出來
echo "沒收到貨款的訂單\n";
print_r($order_zero);
echo "黑貓列表中不存在的訂單\n";
print_r($order_not_exist);
?>

