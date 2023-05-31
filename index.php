<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <?php
class MedianAndLargest {
    private $arr;

    public function __construct($arr) {
        $this->arr = $arr;
    }

    public function bubbleSort() {
        $n = count($this->arr);
        
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($this->arr[$j] > $this->arr[$j + 1]) {
                    $temp = $this->arr[$j];
                    $this->arr[$j] = $this->arr[$j + 1];
                    $this->arr[$j + 1] = $temp;
                }
            }
        }
    }

    public function getMedian() {
        $n = count($this->arr);
        $mid = intval($n / 2);

        if ($n % 2 == 0) {
            return ($this->arr[$mid - 1] + $this->arr[$mid]) / 2;
        } else {
            return $this->arr[$mid];
        }
    }

    public function getLargestValue() {
        $n = count($this->arr);
        return $this->arr[$n - 1];
    }
}

// Example usage
$values = [5, 2, 8, 1, 9, 3];
$obj = new MedianAndLargest($values);
$obj->bubbleSort();
$median = $obj->getMedian();
$largestValue = $obj->getLargestValue();


echo 
'<div class="container">
    <table class="table table-striped mt-5">
        <thead class="table-warning">
            <tr>
                <th class="text-center" colspan="2">Median & Largest Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Sorted array:</th>

                    <td>' . implode(", ", $values) . '</td>
                </tr>
                <tr>
                    <th>Median:</th>
                    <td>' . $median . '</td>
                </tr>
                <tr>
                    <th>Largest value:</th>
                    <td>' . $largestValue . '</td>
                </tr>
            </tbody>
    </table>
</div>';
