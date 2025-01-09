function foo(array $arr) {
  $result = [];
  foreach ($arr as $key => $value) {
    if ($value !== 'bar') {
      $result[$key] = $value;
    }
  }
  return $result;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [foo] => foo [baz] => baz )

//This solution creates a new array to hold the elements that are not to be removed, avoiding the issues caused by modifying the array during iteration.
