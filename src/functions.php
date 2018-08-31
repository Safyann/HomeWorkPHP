<?php
// Задача 1
function task1($fileName)
{
    $file = file_get_contents($fileName);
    $xml = new SimpleXMLElement($file);

    $PurchaseOrderNumber = $xml->attributes()->PurchaseOrderNumber->__toString();
    $OrderDate = $xml->attributes()->OrderDate->__toString();
    $DeliveryNotes = $xml->DeliveryNotes->__toString();

    echo '<h2>Purchase Order Number: '.$PurchaseOrderNumber.'</h2>';
    echo '<h3>Order Date: '.$OrderDate.'</h3>';
    echo '<table border="1">
    <tr>
        <th>Type</th>
        <th>Name</th>
        <th>Street</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Country</th>
    </tr>';
    foreach ($xml->Address as $address) {
        $array = (array)$address;
        echo '<tr>
            <td>' . $array['@attributes']['Type'] . '</td>
            <td>' . $array['Name'] . '</td>
            <td>' . $array['Street'] . '</td>
            <td>' . $array['City'] . '</td>
            <td>' . $array['State'] . '</td>
            <td>' . $array['Zip'] . '</td>
            <td>' . $array['Country'] . '</td>
        </tr>';
    }
    echo '</table>';
    echo '<h4>Delivery Notes: '.$DeliveryNotes.'</h4>';
    echo '<table border="1"> 
        <th>PartNumber</th>
        <th>ProductName</th> 
        <th>Quantity</th>
        <th>USPrice</th>
        <th>ShipDate</th>
        <th>Comment</th>
      </tr>';
    foreach ($xml->Items->Item as $item) {
        $array1 = (array)$item;
        echo '<tr>
        <td>' . $array1['@attributes']['PartNumber'] . '</td>
        <td>' . $array1['ProductName'] . '</td>
        <td>' . $array1['Quantity'] . '</td> 
        <td>' . $array1['USPrice'] . '</td> 
        <td>' . $array1['ShipDate'] . '</td>
         <td>' . $array1['Comment'] . '</td>  
      </tr>';
    }
    echo '</table>';
}

// Задача 2
function task2($fileName1, $fileName2)
{
//#1
    $car = [
        'marka' => 'bmv',
        'year' => 2017,
        'features' => [
            'power' => 455,
            'model' => 'X6',
            'door' => 5]
    ];
    $json = json_encode($car);

    file_put_contents($fileName1, $json);

    echo "Преобразованный в JSON файл: $fileName1".'<br>';
//#2
    $file1 = file_get_contents($fileName1);
    $array = json_decode($file1, true);
    if (rand(0, 1) == 1) {
        $array['marka'] = 'tayota';
        $array['year'] = 2015;
    }
    $json = json_encode($array);
    file_put_contents($fileName2, $json);
    echo "Второй файл записан в: $fileName2".'<br>';
    echo "Данные файла $fileName2:" . $json . '<br>';
//#3
    $diff = array_diff($car, $array);
    if (!empty($diff)) {
        print_r($diff);
    } else {
        echo 'Разница между массивами отсутсвует!';
    }
}

// задача 3
function task3($fileName, $count)
{
    for ($i = 1; $i <= $count; $i++) {
        $array [$i] = rand(1, 100);
    }

    $fp = fopen($fileName, 'w');
    foreach ($array as $value) {
        fputcsv($fp, [$value]);
    }
    fclose($fp);

    if ($fp = fopen($fileName, "r")) {
        $sum = 0;
        $i = 0;
        echo 'Считанные с файла значения:';
        while ($data = fgetcsv($fp, 100)) {
            echo $data[$i] . ' ';
            if ($data[$i] % 2 == 0) {
                $sum += $data[$i];
            }
        }
        echo '<br>';
        echo 'Сумма четных чисел равна: ' . $sum;
        fclose($fp);
    }
}

// задача 4
function task4()
{
    $url = 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';
    $file = file_get_contents($url);
    $decode = json_decode($file, true);
    $pageId = $decode['query']['pages']['15580374']['pageid'];
    $pageTitle = $decode['query']['pages']['15580374']['title'];
    echo 'Title: ' . $pageTitle.'<br>';
    echo 'page_id: ' . $pageId;
}
